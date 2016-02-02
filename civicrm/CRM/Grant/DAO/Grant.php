<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2015                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 *
 * Generated from xml/schema/CRM/Grant/Grant.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Grant_DAO_Grant extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_grant';
  /**
   * static instance to hold the field values
   *
   * @var array
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Unique Grant id
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Contact ID of contact record given grant belongs to.
   *
   * @var int unsigned
   */
  public $contact_id;
  /**
   * Date on which grant application was received by donor.
   *
   * @var date
   */
  public $application_received_date;
  /**
   * Date on which grant decision was made.
   *
   * @var date
   */
  public $decision_date;
  /**
   * Date on which grant money transfer was made.
   *
   * @var date
   */
  public $money_transfer_date;
  /**
   * Date on which grant report is due.
   *
   * @var date
   */
  public $grant_due_date;
  /**
   * Yes/No field stating whether grant report was received by donor.
   *
   * @var boolean
   */
  public $grant_report_received;
  /**
   * Type of grant. Implicit FK to civicrm_option_value in grant_type option_group.
   *
   * @var int unsigned
   */
  public $grant_type_id;
  /**
   * Requested grant amount, in default currency.
   *
   * @var float
   */
  public $amount_total;
  /**
   * Requested grant amount, in original currency (optional).
   *
   * @var float
   */
  public $amount_requested;
  /**
   * Granted amount, in default currency.
   *
   * @var float
   */
  public $amount_granted;
  /**
   * 3 character string, value from config setting or input via user.
   *
   * @var string
   */
  public $currency;
  /**
   * Grant rationale.
   *
   * @var text
   */
  public $rationale;
  /**
   * Id of Grant status.
   *
   * @var int unsigned
   */
  public $status_id;
  /**
   * FK to Financial Type.
   *
   * @var int unsigned
   */
  public $financial_type_id;
  /**
   * class constructor
   *
   * @return civicrm_grant
   */
  function __construct()
  {
    $this->__table = 'civicrm_grant';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'contact_id', 'civicrm_contact', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'financial_type_id', 'civicrm_financial_type', 'id');
    }
    return self::$_links;
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'grant_id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Grant ID') ,
          'description' => 'Unique Grant id',
          'required' => true,
          'import' => true,
          'where' => 'civicrm_grant.id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
        ) ,
        'grant_contact_id' => array(
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID') ,
          'description' => 'Contact ID of contact record given grant belongs to.',
          'required' => true,
          'export' => true,
          'where' => 'civicrm_grant.contact_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'html' => array(
            'type' => 'EntityRef',
          ) ,
        ) ,
        'application_received_date' => array(
          'name' => 'application_received_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Application received date') ,
          'description' => 'Date on which grant application was received by donor.',
          'export' => true,
          'where' => 'civicrm_grant.application_received_date',
          'headerPattern' => '',
          'dataPattern' => '',
        ) ,
        'decision_date' => array(
          'name' => 'decision_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Decision date') ,
          'description' => 'Date on which grant decision was made.',
          'import' => true,
          'where' => 'civicrm_grant.decision_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'grant_money_transfer_date' => array(
          'name' => 'money_transfer_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Grant Money transfer date') ,
          'description' => 'Date on which grant money transfer was made.',
          'import' => true,
          'where' => 'civicrm_grant.money_transfer_date',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'grant_due_date' => array(
          'name' => 'grant_due_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Grant Due Date') ,
          'description' => 'Date on which grant report is due.',
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'grant_report_received' => array(
          'name' => 'grant_report_received',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Grant report received') ,
          'description' => 'Yes/No field stating whether grant report was received by donor.',
          'import' => true,
          'where' => 'civicrm_grant.grant_report_received',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'html' => array(
            'type' => 'CheckBox',
          ) ,
        ) ,
        'grant_type_id' => array(
          'name' => 'grant_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Grant Type') ,
          'description' => 'Type of grant. Implicit FK to civicrm_option_value in grant_type option_group.',
          'required' => true,
          'export' => true,
          'where' => 'civicrm_grant.grant_type_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'grant_type',
            'optionEditPath' => 'civicrm/admin/options/grant_type',
          )
        ) ,
        'amount_total' => array(
          'name' => 'amount_total',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Total Amount') ,
          'description' => 'Requested grant amount, in default currency.',
          'required' => true,
          'precision' => array(
            20,
            2
          ) ,
          'import' => true,
          'where' => 'civicrm_grant.amount_total',
          'headerPattern' => '',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => true,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'amount_requested' => array(
          'name' => 'amount_requested',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Amount Requested') ,
          'description' => 'Requested grant amount, in original currency (optional).',
          'precision' => array(
            20,
            2
          ) ,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'amount_granted' => array(
          'name' => 'amount_granted',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Amount granted') ,
          'description' => 'Granted amount, in default currency.',
          'precision' => array(
            20,
            2
          ) ,
          'import' => true,
          'where' => 'civicrm_grant.amount_granted',
          'headerPattern' => '',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => true,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'currency' => array(
          'name' => 'currency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Grant Currency') ,
          'description' => '3 character string, value from config setting or input via user.',
          'required' => true,
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'table' => 'civicrm_currency',
            'keyColumn' => 'name',
            'labelColumn' => 'full_name',
            'nameColumn' => 'numeric_code',
          )
        ) ,
        'rationale' => array(
          'name' => 'rationale',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Grant Rationale') ,
          'description' => 'Grant rationale.',
          'rows' => 4,
          'cols' => 60,
          'import' => true,
          'where' => 'civicrm_grant.rationale',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => true,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'grant_status_id' => array(
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Grant Status') ,
          'description' => 'Id of Grant status.',
          'required' => true,
          'import' => true,
          'where' => 'civicrm_grant.status_id',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => false,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'grant_status',
            'optionEditPath' => 'civicrm/admin/options/grant_status',
          )
        ) ,
        'financial_type_id' => array(
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Type') ,
          'description' => 'FK to Financial Type.',
          'default' => 'NULL',
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'pseudoconstant' => array(
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          )
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'grant_id',
        'contact_id' => 'grant_contact_id',
        'application_received_date' => 'application_received_date',
        'decision_date' => 'decision_date',
        'money_transfer_date' => 'grant_money_transfer_date',
        'grant_due_date' => 'grant_due_date',
        'grant_report_received' => 'grant_report_received',
        'grant_type_id' => 'grant_type_id',
        'amount_total' => 'amount_total',
        'amount_requested' => 'amount_requested',
        'amount_granted' => 'amount_granted',
        'currency' => 'currency',
        'rationale' => 'rationale',
        'status_id' => 'grant_status_id',
        'financial_type_id' => 'financial_type_id',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName()
  {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['grant'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['grant'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
