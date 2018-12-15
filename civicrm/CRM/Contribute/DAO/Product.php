<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2018
 *
 * Generated from xml/schema/CRM/Contribute/Product.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:a66a59f20355ce5773f427b85bd7bf0b)
 */

/**
 * Database access object for the Product entity.
 */
class CRM_Contribute_DAO_Product extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_product';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * @var int unsigned
   */
  public $id;

  /**
   * Required product/premium name
   *
   * @var string
   */
  public $name;

  /**
   * Optional description of the product/premium.
   *
   * @var text
   */
  public $description;

  /**
   * Optional product sku or code.
   *
   * @var string
   */
  public $sku;

  /**
   * Store comma-delimited list of color, size, etc. options for the product.
   *
   * @var text
   */
  public $options;

  /**
   * Full or relative URL to uploaded image - fullsize.
   *
   * @var string
   */
  public $image;

  /**
   * Full or relative URL to image thumbnail.
   *
   * @var string
   */
  public $thumbnail;

  /**
   * Sell price or market value for premiums. For tax-deductible contributions, this will be stored as non_deductible_amount in the contribution record.
   *
   * @var float
   */
  public $price;

  /**
   * 3 character string, value from config setting or input via user.
   *
   * @var string
   */
  public $currency;

  /**
   * FK to Financial Type.
   *
   * @var int unsigned
   */
  public $financial_type_id;

  /**
   * Minimum contribution required to be eligible to select this premium.
   *
   * @var float
   */
  public $min_contribution;

  /**
   * Actual cost of this product. Useful to determine net return from sale or using this as an incentive.
   *
   * @var float
   */
  public $cost;

  /**
   * Disabling premium removes it from the premiums_premium join table below.
   *
   * @var boolean
   */
  public $is_active;

  /**
   * Rolling means we set start/end based on current day, fixed means we set start/end for current year or month
   (e.g. 1 year + fixed -> we would set start/end for 1/1/06 thru 12/31/06 for any premium chosen in 2006)
   *
   * @var string
   */
  public $period_type;

  /**
   * Month and day (MMDD) that fixed period type subscription or membership starts.
   *
   * @var int
   */
  public $fixed_period_start_day;

  /**
   * @var string
   */
  public $duration_unit;

  /**
   * Number of units for total duration of subscription, service, membership (e.g. 12 Months).
   *
   * @var int
   */
  public $duration_interval;

  /**
   * Frequency unit and interval allow option to store actual delivery frequency for a subscription or service.
   *
   * @var string
   */
  public $frequency_unit;

  /**
   * Number of units for delivery frequency of subscription, service, membership (e.g. every 3 Months).
   *
   * @var int
   */
  public $frequency_interval;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_product';
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
          'title' => ts('Product ID'),
          'required' => TRUE,
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
        ],
        'product_name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Product Name'),
          'description' => ts('Required product/premium name'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'export' => TRUE,
          'where' => 'civicrm_product.name',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 1,
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Description'),
          'description' => ts('Optional description of the product/premium.'),
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 1,
        ],
        'sku' => [
          'name' => 'sku',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('SKU'),
          'description' => ts('Optional product sku or code.'),
          'maxlength' => 50,
          'size' => CRM_Utils_Type::BIG,
          'export' => TRUE,
          'where' => 'civicrm_product.sku',
          'headerPattern' => '',
          'dataPattern' => '',
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
        ],
        'options' => [
          'name' => 'options',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Options'),
          'description' => ts('Store comma-delimited list of color, size, etc. options for the product.'),
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 1,
        ],
        'image' => [
          'name' => 'image',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Image'),
          'description' => ts('Full or relative URL to uploaded image - fullsize.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
        ],
        'thumbnail' => [
          'name' => 'thumbnail',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Thumbnail'),
          'description' => ts('Full or relative URL to image thumbnail.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
        ],
        'price' => [
          'name' => 'price',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Price'),
          'description' => ts('Sell price or market value for premiums. For tax-deductible contributions, this will be stored as non_deductible_amount in the contribution record.'),
          'precision' => [
            20,
            2
          ],
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
        ],
        'currency' => [
          'name' => 'currency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Currency'),
          'description' => ts('3 character string, value from config setting or input via user.'),
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'default' => 'NULL',
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_currency',
            'keyColumn' => 'name',
            'labelColumn' => 'full_name',
            'nameColumn' => 'name',
          ]
        ],
        'financial_type_id' => [
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Type'),
          'description' => ts('FK to Financial Type.'),
          'default' => 'NULL',
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'pseudoconstant' => [
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ]
        ],
        'min_contribution' => [
          'name' => 'min_contribution',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Minimum Contribution'),
          'description' => ts('Minimum contribution required to be eligible to select this premium.'),
          'precision' => [
            20,
            2
          ],
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
        ],
        'cost' => [
          'name' => 'cost',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Cost'),
          'description' => ts('Actual cost of this product. Useful to determine net return from sale or using this as an incentive.'),
          'precision' => [
            20,
            2
          ],
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Active'),
          'description' => ts('Disabling premium removes it from the premiums_premium join table below.'),
          'required' => TRUE,
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
        ],
        'period_type' => [
          'name' => 'period_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Period Type'),
          'description' => ts('Rolling means we set start/end based on current day, fixed means we set start/end for current year or month
      (e.g. 1 year + fixed -> we would set start/end for 1/1/06 thru 12/31/06 for any premium chosen in 2006) '),
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'default' => 'rolling',
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::periodType',
          ]
        ],
        'fixed_period_start_day' => [
          'name' => 'fixed_period_start_day',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Fixed Period Start Day'),
          'description' => ts('Month and day (MMDD) that fixed period type subscription or membership starts.'),
          'default' => '0101',
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
        ],
        'duration_unit' => [
          'name' => 'duration_unit',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Duration Unit'),
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'default' => 'year',
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::getPremiumUnits',
          ]
        ],
        'duration_interval' => [
          'name' => 'duration_interval',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Duration Interval'),
          'description' => ts('Number of units for total duration of subscription, service, membership (e.g. 12 Months).'),
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
        ],
        'frequency_unit' => [
          'name' => 'frequency_unit',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Frequency Unit'),
          'description' => ts('Frequency unit and interval allow option to store actual delivery frequency for a subscription or service.'),
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'default' => 'month',
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::getPremiumUnits',
          ]
        ],
        'frequency_interval' => [
          'name' => 'frequency_interval',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Frequency Interval'),
          'description' => ts('Number of units for delivery frequency of subscription, service, membership (e.g. every 3 Months).'),
          'table_name' => 'civicrm_product',
          'entity' => 'Product',
          'bao' => 'CRM_Contribute_BAO_Product',
          'localizable' => 0,
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'product', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'product', $prefix, []);
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
