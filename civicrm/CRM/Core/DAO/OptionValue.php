<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2018
 *
 * Generated from xml/schema/CRM/Core/OptionValue.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:c2177ac5574657232c71d57dbf7e0e55)
 */

/**
 * Database access object for the OptionValue entity.
 */
class CRM_Core_DAO_OptionValue extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_option_value';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * Option ID
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Group which this option belongs to.
   *
   * @var int unsigned
   */
  public $option_group_id;

  /**
   * Option string as displayed to users - e.g. the label in an HTML OPTION tag.
   *
   * @var string
   */
  public $label;

  /**
   * The actual value stored (as a foreign key) in the data record. Functions which need lookup option_value.title should use civicrm_option_value.option_group_id plus civicrm_option_value.value as the key.
   *
   * @var string
   */
  public $value;

  /**
   * Stores a fixed (non-translated) name for this option value. Lookup functions should use the name as the key for the option value row.
   *
   * @var string
   */
  public $name;

  /**
   * Use to sort and/or set display properties for sub-set(s) of options within an option group. EXAMPLE: Use for college_interest field, to differentiate partners from non-partners.
   *
   * @var string
   */
  public $grouping;

  /**
   * Bitwise logic can be used to create subsets of options within an option_group for different uses.
   *
   * @var int unsigned
   */
  public $filter;

  /**
   * Is this the default option for the group?
   *
   * @var boolean
   */
  public $is_default;

  /**
   * Controls display sort order.
   *
   * @var int unsigned
   */
  public $weight;

  /**
   * Optional description.
   *
   * @var text
   */
  public $description;

  /**
   * Is this row simply a display header? Expected usage is to render these as OPTGROUP tags within a SELECT field list of options?
   *
   * @var boolean
   */
  public $is_optgroup;

  /**
   * Is this a predefined system object?
   *
   * @var boolean
   */
  public $is_reserved;

  /**
   * Is this option active?
   *
   * @var boolean
   */
  public $is_active;

  /**
   * Component that this option value belongs/caters to.
   *
   * @var int unsigned
   */
  public $component_id;

  /**
   * Which Domain is this option value for
   *
   * @var int unsigned
   */
  public $domain_id;

  /**
   * @var int unsigned
   */
  public $visibility_id;

  /**
   * crm-i icon class
   *
   * @var string
   */
  public $icon;

  /**
   * Hex color value e.g. #ffffff
   *
   * @var string
   */
  public $color;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_option_value';
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'option_group_id', 'civicrm_option_group', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'component_id', 'civicrm_component', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'domain_id', 'civicrm_domain', 'id');
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
          'title' => ts('Option Value ID'),
          'description' => 'Option ID',
          'required' => TRUE,
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
        ],
        'option_group_id' => [
          'name' => 'option_group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Option Group ID'),
          'description' => 'Group which this option belongs to.',
          'required' => TRUE,
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_OptionGroup',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_option_group',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ]
        ],
        'label' => [
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Option Label'),
          'description' => 'Option string as displayed to users - e.g. the label in an HTML OPTION tag.',
          'required' => TRUE,
          'maxlength' => 512,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 1,
        ],
        'value' => [
          'name' => 'value',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Option Value'),
          'description' => 'The actual value stored (as a foreign key) in the data record. Functions which need lookup option_value.title should use civicrm_option_value.option_group_id plus civicrm_option_value.value as the key.',
          'required' => TRUE,
          'maxlength' => 512,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Option Name'),
          'description' => 'Stores a fixed (non-translated) name for this option value. Lookup functions should use the name as the key for the option value row.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => TRUE,
          'where' => 'civicrm_option_value.name',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => TRUE,
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
        ],
        'grouping' => [
          'name' => 'grouping',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Option Grouping Name'),
          'description' => 'Use to sort and/or set display properties for sub-set(s) of options within an option group. EXAMPLE: Use for college_interest field, to differentiate partners from non-partners.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
        ],
        'filter' => [
          'name' => 'filter',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Filter'),
          'description' => 'Bitwise logic can be used to create subsets of options within an option_group for different uses.',
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
        ],
        'is_default' => [
          'name' => 'is_default',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Option is Default?'),
          'description' => 'Is this the default option for the group?',
          'default' => '0',
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
        ],
        'weight' => [
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order'),
          'description' => 'Controls display sort order.',
          'required' => TRUE,
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Option Description'),
          'description' => 'Optional description.',
          'rows' => 8,
          'cols' => 60,
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 1,
          'html' => [
            'type' => 'TextArea',
          ],
        ],
        'is_optgroup' => [
          'name' => 'is_optgroup',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Option is Header?'),
          'description' => 'Is this row simply a display header? Expected usage is to render these as OPTGROUP tags within a SELECT field list of options?',
          'default' => '0',
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
        ],
        'is_reserved' => [
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Option Is Reserved?'),
          'description' => 'Is this a predefined system object?',
          'default' => '0',
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Option Is Active'),
          'description' => 'Is this option active?',
          'default' => '1',
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
        ],
        'component_id' => [
          'name' => 'component_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Option Component'),
          'description' => 'Component that this option value belongs/caters to.',
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Component',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_component',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ]
        ],
        'domain_id' => [
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Option Domain'),
          'description' => 'Which Domain is this option value for',
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => [
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ]
        ],
        'visibility_id' => [
          'name' => 'visibility_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Option Visibility'),
          'default' => 'NULL',
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
          'pseudoconstant' => [
            'optionGroupName' => 'visibility',
            'optionEditPath' => 'civicrm/admin/options/visibility',
          ]
        ],
        'icon' => [
          'name' => 'icon',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Icon'),
          'description' => 'crm-i icon class',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'default' => 'NULL',
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
          'localizable' => 0,
        ],
        'color' => [
          'name' => 'color',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Color'),
          'description' => 'Hex color value e.g. #ffffff',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'default' => 'NULL',
          'table_name' => 'civicrm_option_value',
          'entity' => 'OptionValue',
          'bao' => 'CRM_Core_BAO_OptionValue',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'option_value', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'option_value', $prefix, []);
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
      'index_option_group_id_value' => [
        'name' => 'index_option_group_id_value',
        'field' => [
          0 => 'value(128)',
          1 => 'option_group_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_option_value::0::value(128)::option_group_id',
      ],
      'index_option_group_id_name' => [
        'name' => 'index_option_group_id_name',
        'field' => [
          0 => 'name(128)',
          1 => 'option_group_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_option_value::0::name(128)::option_group_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
