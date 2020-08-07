<?php
/*
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC. All rights reserved.                        |
 |                                                                    |
 | This work is published under the GNU AGPLv3 license with some      |
 | permitted exceptions and without any warranty. For full license    |
 | and copyright information, see https://civicrm.org/licensing       |
 +--------------------------------------------------------------------+
 */

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 * $Id$
 *
 */

/**
 * This class generates form components for processing a contribution.
 */
class CRM_PCP_Form_PCPAccount extends CRM_Core_Form {

  /**
   * Variable defined for Contribution Page Id.
   * @var int
   */
  public $_pageId = NULL;
  public $_id = NULL;
  public $_component = NULL;

  /**
   * Are we in single form mode or wizard mode?
   *
   * @var bool
   */
  public $_single;

  public function preProcess() {
    $session = CRM_Core_Session::singleton();
    $config = CRM_Core_Config::singleton();
    $this->_action = CRM_Utils_Request::retrieve('action', 'String', $this, FALSE);
    $this->_pageId = CRM_Utils_Request::retrieve('pageId', 'Positive', $this);
    $this->_component = CRM_Utils_Request::retrieve('component', 'String', $this);
    $this->_id = CRM_Utils_Request::retrieve('id', 'Positive', $this);

    if (!$this->_pageId && $config->userFramework == 'Joomla' && $config->userFrameworkFrontend) {
      $this->_pageId = $this->_id;
    }

    if ($this->_id) {
      $contactID = CRM_Core_DAO::getFieldValue('CRM_PCP_DAO_PCP', $this->_id, 'contact_id');
    }

    $this->_contactID = $contactID ?? CRM_Core_Session::getLoggedInContactID();
    if (!$this->_pageId) {
      if (!$this->_id) {
        $msg = ts('We can\'t load the requested web page due to an incomplete link. This can be caused by using your browser\'s Back button or by using an incomplete or invalid link.');
        CRM_Core_Error::statusBounce($msg);
      }
      else {
        $this->_pageId = CRM_Core_DAO::getFieldValue('CRM_PCP_DAO_PCP', $this->_id, 'page_id');
      }
    }

    if (!$this->_pageId) {
      CRM_Core_Error::statusBounce(ts('Could not find source page id.'));
    }

    $this->_single = $this->get('single');

    if (!$this->_single) {
      $this->_single = $session->get('singleForm');
    }

    $this->set('action', $this->_action);
    $this->set('page_id', $this->_id);
    $this->set('component_page_id', $this->_pageId);

    // we do not want to display recently viewed items, so turn off
    $this->assign('displayRecent', FALSE);

    $this->assign('pcpComponent', $this->_component);

    if ($this->_single) {
      CRM_Utils_System::setTitle(ts('Update Contact Information'));
    }
  }

  /**
   * @return array
   */
  public function setDefaultValues() {
    $this->_defaults = [];
    if ($this->_contactID) {
      foreach ($this->_fields as $name => $dontcare) {
        $fields[$name] = 1;
      }

      CRM_Core_BAO_UFGroup::setProfileDefaults($this->_contactID, $fields, $this->_defaults);
    }
    //set custom field defaults
    foreach ($this->_fields as $name => $field) {
      if ($customFieldID = CRM_Core_BAO_CustomField::getKeyID($name)) {
        if (!isset($this->_defaults[$name])) {
          CRM_Core_BAO_CustomField::setProfileDefaults($customFieldID, $name, $this->_defaults,
            NULL, CRM_Profile_Form::MODE_REGISTER
          );
        }
      }
    }
    return $this->_defaults;
  }

  /**
   * Build the form object.
   *
   * @return void
   */
  public function buildQuickForm() {
    $id = CRM_PCP_BAO_PCP::getSupporterProfileId($this->_pageId, $this->_component);
    if (CRM_PCP_BAO_PCP::checkEmailProfile($id)) {
      $this->assign('profileDisplay', TRUE);
    }
    $fields = NULL;
    if ($this->_contactID) {
      if (CRM_Core_BAO_UFGroup::filterUFGroups($id, $this->_contactID)) {
        $fields = CRM_Core_BAO_UFGroup::getFields($id, FALSE, CRM_Core_Action::ADD);
      }
      $this->addFormRule(['CRM_PCP_Form_PCPAccount', 'formRule'], $this);
    }
    else {
      CRM_Core_BAO_CMSUser::buildForm($this, $id, TRUE);

      $fields = CRM_Core_BAO_UFGroup::getFields($id, FALSE, CRM_Core_Action::ADD);
    }

    if ($fields) {
      $this->assign('fields', $fields);
      $addCaptcha = FALSE;
      foreach ($fields as $key => $field) {
        if (isset($field['data_type']) && $field['data_type'] == 'File') {
          // ignore file upload fields
          continue;
        }
        CRM_Core_BAO_UFGroup::buildProfile($this, $field, CRM_Profile_Form::MODE_CREATE);
        $this->_fields[$key] = $field;

        // CRM-11316 Is ReCAPTCHA enabled for this profile AND is this an anonymous visitor
        if ($field['add_captcha'] && !$this->_contactID) {
          $addCaptcha = TRUE;
        }
      }

      if ($addCaptcha) {
        $captcha = &CRM_Utils_ReCAPTCHA::singleton();
        $captcha->add($this);
        $this->assign('isCaptcha', TRUE);
      }
    }

    if ($this->_component == 'contribute') {
      $this->assign('campaignName', CRM_Contribute_PseudoConstant::contributionPage($this->_pageId));
    }
    elseif ($this->_component == 'event') {
      $this->assign('campaignName', CRM_Event_PseudoConstant::event($this->_pageId));
    }

    if ($this->_single) {
      $button = [
        [
          'type' => 'next',
          'name' => ts('Save'),
          'spacing' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
          'isDefault' => TRUE,
        ],
        [
          'type' => 'cancel',
          'name' => ts('Cancel'),
        ],
      ];
    }
    else {
      $button[] = [
        'type' => 'next',
        'name' => ts('Continue'),
        'spacing' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
        'isDefault' => TRUE,
      ];
    }
    $this->addFormRule(['CRM_PCP_Form_PCPAccount', 'formRule'], $this);
    $this->addButtons($button);
  }

  /**
   * Global form rule.
   *
   * @param array $fields
   *   The input form values.
   * @param array $files
   *   The uploaded files if any.
   * @param $self
   *
   *
   * @return bool|array
   *   true if no errors, else array of errors
   */
  public static function formRule($fields, $files, $self) {
    $errors = [];
    foreach ($fields as $key => $value) {
      if (strpos($key, 'email-') !== FALSE && !empty($value)) {
        $ufContactId = CRM_Core_DAO::getFieldValue('CRM_Core_DAO_UFMatch', $value, 'contact_id', 'uf_name');
        if ($ufContactId && $ufContactId != $self->_contactID) {
          $errors[$key] = ts('There is already an user associated with this email address. Please enter different email address.');
        }
      }
    }
    return empty($errors) ? TRUE : $errors;
  }

  /**
   * Process the form submission.
   *
   *
   * @return void
   */
  public function postProcess() {
    $params = $this->controller->exportValues($this->getName());

    if (!$this->_contactID && isset($params['cms_create_account'])) {
      foreach ($params as $key => $value) {
        if (substr($key, 0, 5) == 'email' && !empty($value)) {
          list($fieldName, $locTypeId) = CRM_Utils_System::explode('-', $key, 2);
          $isPrimary = 0;
          if ($locTypeId == 'Primary') {
            $locTypeDefault = CRM_Core_BAO_LocationType::getDefault();
            $locTypeId = NULL;
            if ($locTypeDefault) {
              $locTypeId = $locTypeDefault->id;
            }
            $isPrimary = 1;
          }

          $params['email'] = [];
          $params['email'][1]['email'] = $value;
          $params['email'][1]['location_type_id'] = $locTypeId;
          $params['email'][1]['is_primary'] = $isPrimary;
        }
      }
    }

    $this->_contactID = CRM_Contact_BAO_Contact::getFirstDuplicateContact($params, 'Individual', 'Unsupervised', [], FALSE);

    $contactID = CRM_Contact_BAO_Contact::createProfileContact($params, $this->_fields, $this->_contactID);
    $this->set('contactID', $contactID);

    if (!empty($params['email'])) {
      $params['email'] = $params['email'][1]['email'];
    }

    CRM_Contribute_BAO_Contribution_Utils::createCMSUser($params, $contactID, 'email');
  }

}
