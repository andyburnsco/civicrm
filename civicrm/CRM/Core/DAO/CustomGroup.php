<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2016                                |
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
 * @copyright CiviCRM LLC (c) 2004-2016
 *
 * Generated from xml/schema/CRM/Core/CustomGroup.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Core_DAO_CustomGroup extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_custom_group';
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
   * Unique Custom Group ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Variable name/programmatic handle for this group.
   *
   * @var string
   */
  public $name;
  /**
   * Friendly Name.
   *
   * @var string
   */
  public $title;
  /**
   * Type of object this group extends (can add other options later e.g. contact_address, etc.).
   *
   * @var string
   */
  public $extends;
  /**
   * FK to civicrm_option_value.id (for option group custom_data_type.)
   *
   * @var int unsigned
   */
  public $extends_entity_column_id;
  /**
   * linking custom group for dynamic object
   *
   * @var string
   */
  public $extends_entity_column_value;
  /**
   * Visual relationship between this form and its parent.
   *
   * @var string
   */
  public $style;
  /**
   * Will this group be in collapsed or expanded mode on initial display ?
   *
   * @var int unsigned
   */
  public $collapse_display;
  /**
   * Description and/or help text to display before fields in form.
   *
   * @var text
   */
  public $help_pre;
  /**
   * Description and/or help text to display after fields in form.
   *
   * @var text
   */
  public $help_post;
  /**
   * Controls display order when multiple extended property groups are setup for the same class.
   *
   * @var int
   */
  public $weight;
  /**
   * Is this property active?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Name of the table that holds the values for this group.
   *
   * @var string
   */
  public $table_name;
  /**
   * Does this group hold multiple values?
   *
   * @var boolean
   */
  public $is_multiple;
  /**
   * minimum number of multiple records (typically 0?)
   *
   * @var int unsigned
   */
  public $min_multiple;
  /**
   * maximum number of multiple records, if 0 - no max
   *
   * @var int unsigned
   */
  public $max_multiple;
  /**
   * Will this group be in collapsed or expanded mode on advanced search display ?
   *
   * @var int unsigned
   */
  public $collapse_adv_display;
  /**
   * FK to civicrm_contact, who created this custom group
   *
   * @var int unsigned
   */
  public $created_id;
  /**
   * Date and time this custom group was created.
   *
   * @var datetime
   */
  public $created_date;
  /**
   * Is this a reserved Custom Group?
   *
   * @var boolean
   */
  public $is_reserved;
  /**
   * class constructor
   *
   * @return civicrm_custom_group
   */
  function __construct()
  {
    $this->__table = 'civicrm_custom_group';
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
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'created_id', 'civicrm_contact', 'id');
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
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Custom Group ID') ,
          'description' => 'Unique Custom Group ID',
          'required' => true,
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Custom Group Name') ,
          'description' => 'Variable name/programmatic handle for this group.',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Custom Group Title') ,
          'description' => 'Friendly Name.',
          'required' => true,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'extends' => array(
          'name' => 'extends',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Custom Group Extends') ,
          'description' => 'Type of object this group extends (can add other options later e.g. contact_address, etc.).',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'default' => 'Contact',
        ) ,
        'extends_entity_column_id' => array(
          'name' => 'extends_entity_column_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Custom Group Subtype List') ,
          'description' => 'FK to civicrm_option_value.id (for option group custom_data_type.)',
          'default' => 'NULL',
        ) ,
        'extends_entity_column_value' => array(
          'name' => 'extends_entity_column_value',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Custom Group Subtype') ,
          'description' => 'linking custom group for dynamic object',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'style' => array(
          'name' => 'style',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Custom Group Style') ,
          'description' => 'Visual relationship between this form and its parent.',
          'maxlength' => 15,
          'size' => CRM_Utils_Type::TWELVE,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'callback' => 'CRM_Core_SelectValues::customGroupStyle',
          )
        ) ,
        'collapse_display' => array(
          'name' => 'collapse_display',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Collapse Custom Group?') ,
          'description' => 'Will this group be in collapsed or expanded mode on initial display ?',
        ) ,
        'help_pre' => array(
          'name' => 'help_pre',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Custom Group Pre Text') ,
          'description' => 'Description and/or help text to display before fields in form.',
          'rows' => 4,
          'cols' => 80,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'help_post' => array(
          'name' => 'help_post',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Custom Group Post Text') ,
          'description' => 'Description and/or help text to display after fields in form.',
          'rows' => 4,
          'cols' => 80,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'weight' => array(
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order') ,
          'description' => 'Controls display order when multiple extended property groups are setup for the same class.',
          'required' => true,
          'default' => '1',
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Custom Group Is Active?') ,
          'description' => 'Is this property active?',
        ) ,
        'table_name' => array(
          'name' => 'table_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Table Name') ,
          'description' => 'Name of the table that holds the values for this group.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'is_multiple' => array(
          'name' => 'is_multiple',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Supports Multiple Records') ,
          'description' => 'Does this group hold multiple values?',
        ) ,
        'min_multiple' => array(
          'name' => 'min_multiple',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Minimum Multiple Records') ,
          'description' => 'minimum number of multiple records (typically 0?)',
        ) ,
        'max_multiple' => array(
          'name' => 'max_multiple',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Maximum Multiple Records') ,
          'description' => 'maximum number of multiple records, if 0 - no max',
        ) ,
        'collapse_adv_display' => array(
          'name' => 'collapse_adv_display',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Collapse Group Display') ,
          'description' => 'Will this group be in collapsed or expanded mode on advanced search display ?',
        ) ,
        'created_id' => array(
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Custom Group Created By') ,
          'description' => 'FK to civicrm_contact, who created this custom group',
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Custom Group Created Date') ,
          'description' => 'Date and time this custom group was created.',
        ) ,
        'is_reserved' => array(
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Reserved Group?') ,
          'description' => 'Is this a reserved Custom Group?',
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
        'id' => 'id',
        'name' => 'name',
        'title' => 'title',
        'extends' => 'extends',
        'extends_entity_column_id' => 'extends_entity_column_id',
        'extends_entity_column_value' => 'extends_entity_column_value',
        'style' => 'style',
        'collapse_display' => 'collapse_display',
        'help_pre' => 'help_pre',
        'help_post' => 'help_post',
        'weight' => 'weight',
        'is_active' => 'is_active',
        'table_name' => 'table_name',
        'is_multiple' => 'is_multiple',
        'min_multiple' => 'min_multiple',
        'max_multiple' => 'max_multiple',
        'collapse_adv_display' => 'collapse_adv_display',
        'created_id' => 'created_id',
        'created_date' => 'created_date',
        'is_reserved' => 'is_reserved',
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
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
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
            self::$_import['custom_group'] = & $fields[$name];
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
            self::$_export['custom_group'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
