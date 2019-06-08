<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from xml/schema/CRM/Member/MembershipType.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:6652513077f7dc2a13004ef30408a051)
 */

/**
 * Database access object for the MembershipType entity.
 */
class CRM_Member_DAO_MembershipType extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_membership_type';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Membership Id
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Which Domain is this match entry for
   *
   * @var int unsigned
   */
  public $domain_id;

  /**
   * Name of Membership Type
   *
   * @var string
   */
  public $name;

  /**
   * Description of Membership Type
   *
   * @var string
   */
  public $description;

  /**
   * Owner organization for this membership type. FK to Contact ID
   *
   * @var int unsigned
   */
  public $member_of_contact_id;

  /**
   * If membership is paid by a contribution - what financial type should be used. FK to civicrm_financial_type.id
   *
   * @var int unsigned
   */
  public $financial_type_id;

  /**
   * Minimum fee for this membership (0 for free/complimentary memberships).
   *
   * @var float
   */
  public $minimum_fee;

  /**
   * Unit in which membership period is expressed.
   *
   * @var string
   */
  public $duration_unit;

  /**
   * Number of duration units in membership period (e.g. 1 year, 12 months).
   *
   * @var int
   */
  public $duration_interval;

  /**
   * Rolling membership period starts on signup date. Fixed membership periods start on fixed_period_start_day.
   *
   * @var string
   */
  public $period_type;

  /**
   * For fixed period memberships, month and day (mmdd) on which subscription/membership will start. Period start is back-dated unless after rollover day.
   *
   * @var int
   */
  public $fixed_period_start_day;

  /**
   * For fixed period memberships, signups after this day (mmdd) rollover to next period.
   *
   * @var int
   */
  public $fixed_period_rollover_day;

  /**
   * FK to Relationship Type ID
   *
   * @var string
   */
  public $relationship_type_id;

  /**
   * @var string
   */
  public $relationship_direction;

  /**
   * Maximum number of related memberships.
   *
   * @var int
   */
  public $max_related;

  /**
   * @var string
   */
  public $visibility;

  /**
   * @var int
   */
  public $weight;

  /**
   * Receipt Text for membership signup
   *
   * @var string
   */
  public $receipt_text_signup;

  /**
   * Receipt Text for membership renewal
   *
   * @var string
   */
  public $receipt_text_renewal;

  /**
   * 0 = No auto-renew option; 1 = Give option, but not required; 2 = Auto-renew required;
   *
   * @var boolean
   */
  public $auto_renew;

  /**
   * Is this membership_type enabled
   *
   * @var boolean
   */
  public $is_active;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_membership_type';
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'domain_id', 'civicrm_domain', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'member_of_contact_id', 'civicrm_contact', 'id');
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
          'title' => ts('Membership Type ID'),
          'description' => ts('Membership Id'),
          'required' => TRUE,
          'where' => 'civicrm_membership_type.id',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
        ],
        'domain_id' => [
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Type Domain'),
          'description' => ts('Which Domain is this match entry for'),
          'required' => TRUE,
          'where' => 'civicrm_membership_type.domain_id',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'pseudoconstant' => [
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ]
        ],
        'membership_type' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Type'),
          'description' => ts('Name of Membership Type'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'import' => TRUE,
          'where' => 'civicrm_membership_type.name',
          'export' => TRUE,
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 1,
          'html' => [
            'type' => 'Text',
            'label' => ts("Name"),
          ],
        ],
        'description' => [
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Type Description'),
          'description' => ts('Description of Membership Type'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_membership_type.description',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 1,
          'html' => [
            'type' => 'TextArea',
            'label' => ts("Description"),
          ],
        ],
        'member_of_contact_id' => [
          'name' => 'member_of_contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Type Organization'),
          'description' => ts('Owner organization for this membership type. FK to Contact ID'),
          'required' => TRUE,
          'where' => 'civicrm_membership_type.member_of_contact_id',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ],
        'financial_type_id' => [
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Financial Type'),
          'description' => ts('If membership is paid by a contribution - what financial type should be used. FK to civicrm_financial_type.id'),
          'required' => TRUE,
          'where' => 'civicrm_membership_type.financial_type_id',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'pseudoconstant' => [
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ]
        ],
        'minimum_fee' => [
          'name' => 'minimum_fee',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Membership Type Minimum Fee'),
          'description' => ts('Minimum fee for this membership (0 for free/complimentary memberships).'),
          'precision' => [
            18,
            9
          ],
          'where' => 'civicrm_membership_type.minimum_fee',
          'default' => '0',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
            'label' => ts("Minimum Fee"),
          ],
        ],
        'duration_unit' => [
          'name' => 'duration_unit',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Type Duration Unit'),
          'description' => ts('Unit in which membership period is expressed.'),
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'where' => 'civicrm_membership_type.duration_unit',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::membershipTypeUnitList',
          ]
        ],
        'duration_interval' => [
          'name' => 'duration_interval',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Membership Type Duration Interval'),
          'description' => ts('Number of duration units in membership period (e.g. 1 year, 12 months).'),
          'where' => 'civicrm_membership_type.duration_interval',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'period_type' => [
          'name' => 'period_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Type Plan'),
          'description' => ts('Rolling membership period starts on signup date. Fixed membership periods start on fixed_period_start_day.'),
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'where' => 'civicrm_membership_type.period_type',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
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
          'description' => ts('For fixed period memberships, month and day (mmdd) on which subscription/membership will start. Period start is back-dated unless after rollover day.'),
          'where' => 'civicrm_membership_type.fixed_period_start_day',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
        ],
        'fixed_period_rollover_day' => [
          'name' => 'fixed_period_rollover_day',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Fixed Period Rollover Day'),
          'description' => ts('For fixed period memberships, signups after this day (mmdd) rollover to next period.'),
          'where' => 'civicrm_membership_type.fixed_period_rollover_day',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
        ],
        'relationship_type_id' => [
          'name' => 'relationship_type_id',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Type Relationship'),
          'description' => ts('FK to Relationship Type ID'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_membership_type.relationship_type_id',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
        ],
        'relationship_direction' => [
          'name' => 'relationship_direction',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Relationship Direction'),
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_membership_type.relationship_direction',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
        ],
        'max_related' => [
          'name' => 'max_related',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Max Related Members for Type'),
          'description' => ts('Maximum number of related memberships.'),
          'where' => 'civicrm_membership_type.max_related',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
            'label' => ts("Max Related"),
          ],
        ],
        'visibility' => [
          'name' => 'visibility',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Visible'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'where' => 'civicrm_membership_type.visibility',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::memberVisibility',
          ]
        ],
        'weight' => [
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order'),
          'where' => 'civicrm_membership_type.weight',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'receipt_text_signup' => [
          'name' => 'receipt_text_signup',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Type Receipt Text'),
          'description' => ts('Receipt Text for membership signup'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_membership_type.receipt_text_signup',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
        ],
        'receipt_text_renewal' => [
          'name' => 'receipt_text_renewal',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Membership Type Renewal Text'),
          'description' => ts('Receipt Text for membership renewal'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_membership_type.receipt_text_renewal',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
        ],
        'auto_renew' => [
          'name' => 'auto_renew',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Auto Renew'),
          'description' => ts('0 = No auto-renew option; 1 = Give option, but not required; 2 = Auto-renew required;'),
          'where' => 'civicrm_membership_type.auto_renew',
          'default' => '0',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
          'html' => [
            'type' => 'Radio',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::memberAutoRenew',
          ]
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Active'),
          'description' => ts('Is this membership_type enabled'),
          'where' => 'civicrm_membership_type.is_active',
          'default' => '1',
          'table_name' => 'civicrm_membership_type',
          'entity' => 'MembershipType',
          'bao' => 'CRM_Member_BAO_MembershipType',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
            'label' => ts("Enabled?"),
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'membership_type', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'membership_type', $prefix, []);
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
      'index_relationship_type_id' => [
        'name' => 'index_relationship_type_id',
        'field' => [
          0 => 'relationship_type_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_membership_type::0::relationship_type_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
