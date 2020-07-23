<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/EntityFile.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:5b13b8bff09fbf73d26e01b25e02da6a)
 */

/**
 * Database access object for the EntityFile entity.
 */
class CRM_Core_DAO_EntityFile extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_entity_file';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * primary key
   *
   * @var int
   */
  public $id;

  /**
   * physical tablename for entity being joined to file, e.g. civicrm_contact
   *
   * @var string
   */
  public $entity_table;

  /**
   * FK to entity table specified in entity_table column.
   *
   * @var int
   */
  public $entity_id;

  /**
   * FK to civicrm_file
   *
   * @var int
   */
  public $file_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_entity_file';
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'file_id', 'civicrm_file', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Dynamic(self::getTableName(), 'entity_id', NULL, 'id', 'entity_table');
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
          'title' => ts('Entity File ID'),
          'description' => ts('primary key'),
          'required' => TRUE,
          'where' => 'civicrm_entity_file.id',
          'table_name' => 'civicrm_entity_file',
          'entity' => 'EntityFile',
          'bao' => 'CRM_Core_DAO_EntityFile',
          'localizable' => 0,
          'add' => '1.5',
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Table'),
          'description' => ts('physical tablename for entity being joined to file, e.g. civicrm_contact'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_entity_file.entity_table',
          'table_name' => 'civicrm_entity_file',
          'entity' => 'EntityFile',
          'bao' => 'CRM_Core_DAO_EntityFile',
          'localizable' => 0,
          'add' => '1.5',
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity ID'),
          'description' => ts('FK to entity table specified in entity_table column.'),
          'required' => TRUE,
          'where' => 'civicrm_entity_file.entity_id',
          'table_name' => 'civicrm_entity_file',
          'entity' => 'EntityFile',
          'bao' => 'CRM_Core_DAO_EntityFile',
          'localizable' => 0,
          'add' => '1.5',
        ],
        'file_id' => [
          'name' => 'file_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('File'),
          'description' => ts('FK to civicrm_file'),
          'required' => TRUE,
          'where' => 'civicrm_entity_file.file_id',
          'table_name' => 'civicrm_entity_file',
          'entity' => 'EntityFile',
          'bao' => 'CRM_Core_DAO_EntityFile',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_File',
          'add' => '1.5',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'entity_file', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'entity_file', $prefix, []);
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
      'index_entity' => [
        'name' => 'index_entity',
        'field' => [
          0 => 'entity_table',
          1 => 'entity_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_entity_file::0::entity_table::entity_id',
      ],
      'UI_entity_table_entity_id_file_id' => [
        'name' => 'UI_entity_table_entity_id_file_id',
        'field' => [
          0 => 'entity_table',
          1 => 'entity_id',
          2 => 'file_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_entity_file::1::entity_table::entity_id::file_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
