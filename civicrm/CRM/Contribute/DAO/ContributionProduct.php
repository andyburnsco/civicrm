<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from xml/schema/CRM/Contribute/ContributionProduct.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:ecc5bc5ad7a739764dbf41e27897d03b)
 */

/**
 * Database access object for the ContributionProduct entity.
 */
class CRM_Contribute_DAO_ContributionProduct extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_contribution_product';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * @var int
   */
  public $id;

  /**
   * @var int
   */
  public $product_id;

  /**
   * @var int
   */
  public $contribution_id;

  /**
   * Option value selected if applicable - e.g. color, size etc.
   *
   * @var string
   */
  public $product_option;

  /**
   * @var int
   */
  public $quantity;

  /**
   * Optional. Can be used to record the date this product was fulfilled or shipped.
   *
   * @var date
   */
  public $fulfilled_date;

  /**
   * Actual start date for a time-delimited premium (subscription, service or membership)
   *
   * @var date
   */
  public $start_date;

  /**
   * Actual end date for a time-delimited premium (subscription, service or membership)
   *
   * @var date
   */
  public $end_date;

  /**
   * @var text
   */
  public $comment;

  /**
   * FK to Financial Type(for membership price sets only).
   *
   * @var int
   */
  public $financial_type_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_contribution_product';
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contribution_id', 'civicrm_contribution', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'financial_type_id', 'civicrm_financial_type', 'id');
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
          'title' => ts('Contribution Product ID'),
          'required' => TRUE,
          'where' => 'civicrm_contribution_product.id',
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
          'localizable' => 0,
        ],
        'product_id' => [
          'name' => 'product_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Product ID'),
          'required' => TRUE,
          'where' => 'civicrm_contribution_product.product_id',
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
          'localizable' => 0,
        ],
        'contribution_id' => [
          'name' => 'contribution_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contribution ID'),
          'required' => TRUE,
          'where' => 'civicrm_contribution_product.contribution_id',
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contribute_DAO_Contribution',
        ],
        'product_option' => [
          'name' => 'product_option',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Product Option'),
          'description' => ts('Option value selected if applicable - e.g. color, size etc.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_contribution_product.product_option',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
          'localizable' => 0,
        ],
        'quantity' => [
          'name' => 'quantity',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Quantity'),
          'where' => 'civicrm_contribution_product.quantity',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
          'localizable' => 0,
        ],
        'fulfilled_date' => [
          'name' => 'fulfilled_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Fulfilled Date'),
          'description' => ts('Optional. Can be used to record the date this product was fulfilled or shipped.'),
          'where' => 'civicrm_contribution_product.fulfilled_date',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDate',
          ],
        ],
        'contribution_start_date' => [
          'name' => 'start_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('Start date for premium'),
          'description' => ts('Actual start date for a time-delimited premium (subscription, service or membership)'),
          'where' => 'civicrm_contribution_product.start_date',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
          'localizable' => 0,
        ],
        'contribution_end_date' => [
          'name' => 'end_date',
          'type' => CRM_Utils_Type::T_DATE,
          'title' => ts('End date for premium'),
          'description' => ts('Actual end date for a time-delimited premium (subscription, service or membership)'),
          'where' => 'civicrm_contribution_product.end_date',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
          'localizable' => 0,
        ],
        'comment' => [
          'name' => 'comment',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Premium comment'),
          'where' => 'civicrm_contribution_product.comment',
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
          'localizable' => 0,
        ],
        'financial_type_id' => [
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Type'),
          'description' => ts('FK to Financial Type(for membership price sets only).'),
          'where' => 'civicrm_contribution_product.financial_type_id',
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution_product',
          'entity' => 'ContributionProduct',
          'bao' => 'CRM_Contribute_DAO_ContributionProduct',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'pseudoconstant' => [
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'contribution_product', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'contribution_product', $prefix, []);
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
