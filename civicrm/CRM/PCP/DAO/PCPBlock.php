<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/PCP/PCPBlock.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:e04c6965f513c4c17e99d2c21e504971)
 */

/**
 * Database access object for the PCPBlock entity.
 */
class CRM_PCP_DAO_PCPBlock extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_pcp_block';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * PCP block Id
   *
   * @var int
   */
  public $id;

  /**
   * @var string
   */
  public $entity_table;

  /**
   * FK to civicrm_contribution_page.id OR civicrm_event.id
   *
   * @var int
   */
  public $entity_id;

  /**
   * The type of entity that this pcp targets
   *
   * @var string
   */
  public $target_entity_type;

  /**
   * The entity that this pcp targets
   *
   * @var int
   */
  public $target_entity_id;

  /**
   * FK to civicrm_uf_group.id. Does Personal Campaign Page require manual activation by administrator? (is inactive by default after setup)?
   *
   * @var int
   */
  public $supporter_profile_id;

  /**
   * FK to civicrm_option_group with name = PCP owner notifications
   *
   * @var int
   */
  public $owner_notify_id;

  /**
   * Does Personal Campaign Page require manual activation by administrator? (is inactive by default after setup)?
   *
   * @var bool
   */
  public $is_approval_needed;

  /**
   * Does Personal Campaign Page allow using tell a friend?
   *
   * @var bool
   */
  public $is_tellfriend_enabled;

  /**
   * Maximum recipient fields allowed in tell a friend
   *
   * @var int
   */
  public $tellfriend_limit;

  /**
   * Link text for PCP.
   *
   * @var string
   */
  public $link_text;

  /**
   * Is Personal Campaign Page Block enabled/active?
   *
   * @var bool
   */
  public $is_active;

  /**
   * If set, notification is automatically emailed to this email-address on create/update Personal Campaign Page
   *
   * @var string
   */
  public $notify_email;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_pcp_block';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'supporter_profile_id', 'civicrm_uf_group', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Dynamic(self::getTableName(), 'entity_id', NULL, 'id', 'entity_table');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Dynamic(self::getTableName(), 'target_entity_id', NULL, 'id', 'target_entity_type');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('PCP Block ID'),
          'description' => ts('PCP block Id'),
          'required' => TRUE,
          'where' => 'civicrm_pcp_block.id',
          'table_name' => 'civicrm_pcp_block',
          'entity' => 'PCPBlock',
          'bao' => 'CRM_PCP_BAO_PCPBlock',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Table'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_pcp_block.entity_table',
          'table_name' => 'civicrm_pcp_block',
          'entity' => 'PCPBlock',
          'bao' => 'CRM_PCP_BAO_PCPBlock',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity'),
          'description' => ts('FK to civicrm_contribution_page.id OR civicrm_event.id'),
          'required' => TRUE,
          'where' => 'civicrm_pcp_block.entity_id',
          'table_name' => 'civicrm_pcp_block',
          'entity' => 'PCPBlock',
          'bao' => 'CRM_PCP_BAO_PCPBlock',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'target_entity_type' => [
          'name' => 'target_entity_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Target Entity'),
          'description' => ts('The type of entity that this pcp targets'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_pcp_block.target_entity_type',
          'default' => 'contribute',
          'table_name' => 'civicrm_pcp_block',
          'entity' => 'PCPBlock',
          'bao' => 'CRM_PCP_BAO_PCPBlock',
          'localizable' => 0,
          'add' => '4.1',
        ],
        'target_entity_id' => [
          'name' => 'target_entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Target Entity ID'),
          'description' => ts('The entity that this pcp targets'),
          'required' => TRUE,
          'where' => 'civicrm_pcp_block.target_entity_id',
          'table_name' => 'civicrm_pcp_block',
          'entity' => 'PCPBlock',
          'bao' => 'CRM_PCP_BAO_PCPBlock',
          'localizable' => 0,
          'add' => '4.1',
        ],
        'supporter_profile_id' => [
          'name' => 'supporter_profile_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Supporter Profile'),
          'description' => ts('FK to civicrm_uf_group.id. Does Personal Campaign Page require manual activation by administrator? (is inactive by default after setup)?'),
          'where' => 'civicrm_pcp_block.supporter_profile_id',
          'default' => 'NULL',
          'table_name' => 'civicrm_pcp_block',
          'entity' => 'PCPBlock',
          'bao' => 'CRM_PCP_BAO_PCPBlock',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_UFGroup',
          'add' => '2.2',
        ],
        'owner_notify_id' => [
          'name' => 'owner_notify_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Owner Notification'),
          'description' => ts('FK to civicrm_option_group with name = PCP owner notifications'),
          'where' => 'civicrm_pcp_block.owner_notify_id',
          'default' => '0',
          'table_name' => 'civicrm_pcp_block',
          'entity' => 'PCPBlock',
          'bao' => 'CRM_PCP_BAO_PCPBlock',
          'localizable' => 0,
          'html' => [
            'type' => 'Radio',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'pcp_owner_notify',
            'optionEditPath' => 'civicrm/admin/options/pcp_owner_notify',
          ],
          'add' => '4.6',
        ],
        'is_approval_needed' => [
          'name' => 'is_approval_needed',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Approval Required?'),
          'description' => ts('Does Personal Campaign Page require manual activation by administrator? (is inactive by default after setup)?'),
          'where' => 'civicrm_pcp_block.is_approval_needed',
          'default' => 'NULL',
          'table_name' => 'civicrm_pcp_block',
          'entity' => 'PCPBlock',
          'bao' => 'CRM_PCP_BAO_PCPBlock',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'is_tellfriend_enabled' => [
          'name' => 'is_tellfriend_enabled',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Tell a Friend Enabled?'),
          'description' => ts('Does Personal Campaign Page allow using tell a friend?'),
          'where' => 'civicrm_pcp_block.is_tellfriend_enabled',
          'default' => 'NULL',
          'table_name' => 'civicrm_pcp_block',
          'entity' => 'PCPBlock',
          'bao' => 'CRM_PCP_BAO_PCPBlock',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'tellfriend_limit' => [
          'name' => 'tellfriend_limit',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Tell A Friend Limit'),
          'description' => ts('Maximum recipient fields allowed in tell a friend'),
          'where' => 'civicrm_pcp_block.tellfriend_limit',
          'default' => 'NULL',
          'table_name' => 'civicrm_pcp_block',
          'entity' => 'PCPBlock',
          'bao' => 'CRM_PCP_BAO_PCPBlock',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'link_text' => [
          'name' => 'link_text',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Link Text'),
          'description' => ts('Link text for PCP.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_pcp_block.link_text',
          'default' => 'NULL',
          'table_name' => 'civicrm_pcp_block',
          'entity' => 'PCPBlock',
          'bao' => 'CRM_PCP_BAO_PCPBlock',
          'localizable' => 1,
          'add' => '2.2',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Enabled?'),
          'description' => ts('Is Personal Campaign Page Block enabled/active?'),
          'where' => 'civicrm_pcp_block.is_active',
          'default' => '1',
          'table_name' => 'civicrm_pcp_block',
          'entity' => 'PCPBlock',
          'bao' => 'CRM_PCP_BAO_PCPBlock',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'notify_email' => [
          'name' => 'notify_email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Notification Email'),
          'description' => ts('If set, notification is automatically emailed to this email-address on create/update Personal Campaign Page'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_pcp_block.notify_email',
          'default' => 'NULL',
          'table_name' => 'civicrm_pcp_block',
          'entity' => 'PCPBlock',
          'bao' => 'CRM_PCP_BAO_PCPBlock',
          'localizable' => 0,
          'add' => '2.2',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'pcp_block', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'pcp_block', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
