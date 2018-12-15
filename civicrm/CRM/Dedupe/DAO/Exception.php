<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2018
 *
 * Generated from xml/schema/CRM/Dedupe/Exception.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:5e9f138ebec5aa2fcfd30120dffacdf5)
 */

/**
 * Database access object for the Exception entity.
 */
class CRM_Dedupe_DAO_Exception extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_dedupe_exception';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = FALSE;

  /**
   * Unique dedupe exception id
   *
   * @var int unsigned
   */
  public $id;

  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $contact_id1;

  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $contact_id2;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_dedupe_exception';
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
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id1', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id2', 'civicrm_contact', 'id');
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
          'title' => ts('Dedupe Exception ID'),
          'description' => ts('Unique dedupe exception id'),
          'required' => TRUE,
          'table_name' => 'civicrm_dedupe_exception',
          'entity' => 'Exception',
          'bao' => 'CRM_Dedupe_DAO_Exception',
          'localizable' => 0,
        ],
        'contact_id1' => [
          'name' => 'contact_id1',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('First Dupe Contact ID'),
          'description' => ts('FK to Contact ID'),
          'table_name' => 'civicrm_dedupe_exception',
          'entity' => 'Exception',
          'bao' => 'CRM_Dedupe_DAO_Exception',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ],
        'contact_id2' => [
          'name' => 'contact_id2',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Second Dupe Contact ID'),
          'description' => ts('FK to Contact ID'),
          'table_name' => 'civicrm_dedupe_exception',
          'entity' => 'Exception',
          'bao' => 'CRM_Dedupe_DAO_Exception',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
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
    return self::$_tableName;
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'dedupe_exception', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'dedupe_exception', $prefix, []);
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
    $indices = [
      'UI_contact_id1_contact_id2' => [
        'name' => 'UI_contact_id1_contact_id2',
        'field' => [
          0 => 'contact_id1',
          1 => 'contact_id2',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_dedupe_exception::1::contact_id1::contact_id2',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
