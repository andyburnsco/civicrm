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
 * Generated from xml/schema/CRM/Cxn/Cxn.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Cxn_DAO_Cxn extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_cxn';
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
  static $_log = false;
  /**
   * Connection ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Application GUID
   *
   * @var string
   */
  public $app_guid;
  /**
   * Application Metadata (JSON)
   *
   * @var text
   */
  public $app_meta;
  /**
   * Connection GUID
   *
   * @var string
   */
  public $cxn_guid;
  /**
   * Shared secret
   *
   * @var text
   */
  public $secret;
  /**
   * Permissions approved for the service (JSON)
   *
   * @var text
   */
  public $perm;
  /**
   * Options for the service (JSON)
   *
   * @var text
   */
  public $options;
  /**
   * Is connection currently enabled?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * When was the connection was created.
   *
   * @var timestamp
   */
  public $created_date;
  /**
   * When the connection was created or modified.
   *
   * @var timestamp
   */
  public $modified_date;
  /**
   * The last time the application metadata was fetched.
   *
   * @var timestamp
   */
  public $fetched_date;
  /**
   * class constructor
   *
   * @return civicrm_cxn
   */
  function __construct()
  {
    $this->__table = 'civicrm_cxn';
    parent::__construct();
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
          'title' => ts('Connection ID') ,
          'description' => 'Connection ID',
          'required' => true,
        ) ,
        'app_guid' => array(
          'name' => 'app_guid',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Application GUID') ,
          'description' => 'Application GUID',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'app_meta' => array(
          'name' => 'app_meta',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Application Metadata (JSON)') ,
          'description' => 'Application Metadata (JSON)',
        ) ,
        'cxn_guid' => array(
          'name' => 'cxn_guid',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Connection GUID') ,
          'description' => 'Connection GUID',
          'maxlength' => 128,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'secret' => array(
          'name' => 'secret',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Secret') ,
          'description' => 'Shared secret',
        ) ,
        'perm' => array(
          'name' => 'perm',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Perm') ,
          'description' => 'Permissions approved for the service (JSON)',
        ) ,
        'options' => array(
          'name' => 'options',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Options') ,
          'description' => 'Options for the service (JSON)',
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Active') ,
          'description' => 'Is connection currently enabled?',
          'default' => '1',
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Created Date') ,
          'description' => 'When was the connection was created.',
          'required' => false,
          'default' => 'NULL',
        ) ,
        'modified_date' => array(
          'name' => 'modified_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Modified Date') ,
          'description' => 'When the connection was created or modified.',
          'required' => false,
          'default' => 'CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ) ,
        'fetched_date' => array(
          'name' => 'fetched_date',
          'type' => CRM_Utils_Type::T_TIMESTAMP,
          'title' => ts('Fetched Date') ,
          'description' => 'The last time the application metadata was fetched.',
          'required' => false,
          'default' => 'NULL',
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
        'app_guid' => 'app_guid',
        'app_meta' => 'app_meta',
        'cxn_guid' => 'cxn_guid',
        'secret' => 'secret',
        'perm' => 'perm',
        'options' => 'options',
        'is_active' => 'is_active',
        'created_date' => 'created_date',
        'modified_date' => 'modified_date',
        'fetched_date' => 'fetched_date',
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
            self::$_import['cxn'] = & $fields[$name];
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
            self::$_export['cxn'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
