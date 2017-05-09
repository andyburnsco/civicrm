<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
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
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Mailing/Event/TrackableURLOpen.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:4deaa2fd1534e9f0493f6059eaa74a23)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Mailing_Event_DAO_TrackableURLOpen constructor.
 */
class CRM_Mailing_Event_DAO_TrackableURLOpen extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_mailing_event_trackable_url_open';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = false;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to EventQueue
   *
   * @var int unsigned
   */
  public $event_queue_id;
  /**
   * FK to TrackableURL
   *
   * @var int unsigned
   */
  public $trackable_url_id;
  /**
   * When this trackable URL open occurred.
   *
   * @var datetime
   */
  public $time_stamp;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_mailing_event_trackable_url_open';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'event_queue_id', 'civicrm_mailing_event_queue', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'trackable_url_id', 'civicrm_mailing_trackable_url', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Trackable URL Open ID') ,
          'required' => true,
          'table_name' => 'civicrm_mailing_event_trackable_url_open',
          'entity' => 'TrackableURLOpen',
          'bao' => 'CRM_Mailing_Event_BAO_TrackableURLOpen',
          'localizable' => 0,
        ) ,
        'event_queue_id' => array(
          'name' => 'event_queue_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Event Queue') ,
          'description' => 'FK to EventQueue',
          'required' => true,
          'table_name' => 'civicrm_mailing_event_trackable_url_open',
          'entity' => 'TrackableURLOpen',
          'bao' => 'CRM_Mailing_Event_BAO_TrackableURLOpen',
          'localizable' => 0,
          'FKClassName' => 'CRM_Mailing_Event_DAO_Queue',
        ) ,
        'trackable_url_id' => array(
          'name' => 'trackable_url_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Trackable Url') ,
          'description' => 'FK to TrackableURL',
          'required' => true,
          'table_name' => 'civicrm_mailing_event_trackable_url_open',
          'entity' => 'TrackableURLOpen',
          'bao' => 'CRM_Mailing_Event_BAO_TrackableURLOpen',
          'localizable' => 0,
          'FKClassName' => 'CRM_Mailing_DAO_TrackableURL',
        ) ,
        'time_stamp' => array(
          'name' => 'time_stamp',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Timestamp') ,
          'description' => 'When this trackable URL open occurred.',
          'required' => true,
          'table_name' => 'civicrm_mailing_event_trackable_url_open',
          'entity' => 'TrackableURLOpen',
          'bao' => 'CRM_Mailing_Event_BAO_TrackableURLOpen',
          'localizable' => 0,
        ) ,
      );
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
  static function &fieldKeys() {
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
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mailing_event_trackable_url_open', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mailing_event_trackable_url_open', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of indices
   */
  public static function indices($localize = TRUE) {
    $indices = array();
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }
}
