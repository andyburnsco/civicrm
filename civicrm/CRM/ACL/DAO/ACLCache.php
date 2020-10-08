<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/ACL/ACLCache.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:cbf36d56ce734a5f7ceeb2071b68ebf8)
 */

/**
 * Database access object for the ACLCache entity.
 */
class CRM_ACL_DAO_ACLCache extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.6';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_acl_cache';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Unique table ID
   *
   * @var int
   */
  public $id;

  /**
   * Foreign Key to Contact
   *
   * @var int
   */
  public $contact_id;

  /**
   * Foreign Key to ACL
   *
   * @var int
   */
  public $acl_id;

  /**
   * When was this cache entry last modified
   *
   * @var timestamp
   */
  public $modified_date;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_acl_cache';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   */
  public static function getEntityTitle() {
    return ts('ACLCaches');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'acl_id', 'civicrm_acl', 'id');
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
          'title' => ts('Cache ID'),
          'description' => ts('Unique table ID'),
          'required' => TRUE,
          'where' => 'civicrm_acl_cache.id',
          'table_name' => 'civicrm_acl_cache',
          'entity' => 'ACLCache',
          'bao' => 'CRM_ACL_DAO_ACLCache',
          'localizable' => 0,
          'add' => '1.6',
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Cache Contact'),
          'description' => ts('Foreign Key to Contact'),
          'where' => 'civicrm_acl_cache.contact_id',
          'table_name' => 'civicrm_acl_cache',
          'entity' => 'ACLCache',
          'bao' => 'CRM_ACL_DAO_ACLCache',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'html' => [
            'type' => 'EntityRef',
          ],
          'add' => '1.6',
        ],
        'acl_id' => [
          'name' => 'acl_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Cache ACL'),
          'description' => ts('Foreign Key to ACL'),
          'required' => TRUE,
          'where' => 'civicrm_acl_cache.acl_id',
          'table_name' => 'civicrm_acl_cache',
          'entity' => 'ACLCache',
          'bao' => 'CRM_ACL_DAO_ACLCache',
          'localizable' => 0,
          'FKClassName' => 'CRM_ACL_DAO_ACL',
          'pseudoconstant' => [
            'table' => 'civicrm_acl',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
          'add' => '1.6',
        ],
        'modified_date' => [
          'name' => 'modified_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Cache Modified Date'),
          'description' => ts('When was this cache entry last modified'),
          'required' => FALSE,
          'where' => 'civicrm_acl_cache.modified_date',
          'table_name' => 'civicrm_acl_cache',
          'entity' => 'ACLCache',
          'bao' => 'CRM_ACL_DAO_ACLCache',
          'localizable' => 0,
          'add' => '1.6',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'acl_cache', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'acl_cache', $prefix, []);
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
      'index_acl_id' => [
        'name' => 'index_acl_id',
        'field' => [
          0 => 'acl_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_acl_cache::0::acl_id',
      ],
      'index_modified_date' => [
        'name' => 'index_modified_date',
        'field' => [
          0 => 'modified_date',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_acl_cache::0::modified_date',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
