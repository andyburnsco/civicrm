<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from xml/schema/CRM/Contribute/Contribution.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:b4e84298d9ba23d3b2fae0768fc5cb58)
 */

/**
 * Database access object for the Contribution entity.
 */
class CRM_Contribute_DAO_Contribution extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_contribution';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Contribution ID
   *
   * @var int
   */
  public $id;

  /**
   * FK to Contact ID
   *
   * @var int
   */
  public $contact_id;

  /**
   * FK to Financial Type for (total_amount - non_deductible_amount).
   *
   * @var int
   */
  public $financial_type_id;

  /**
   * The Contribution Page which triggered this contribution
   *
   * @var int
   */
  public $contribution_page_id;

  /**
   * FK to Payment Instrument
   *
   * @var int
   */
  public $payment_instrument_id;

  /**
   * Date contribution was received - not necessarily the creation date of the record
   *
   * @var datetime
   */
  public $receive_date;

  /**
   * Portion of total amount which is NOT tax deductible. Equal to total_amount for non-deductible financial types.
   *
   * @var float
   */
  public $non_deductible_amount;

  /**
   * Total amount of this contribution. Use market value for non-monetary gifts.
   *
   * @var float
   */
  public $total_amount;

  /**
   * actual processor fee if known - may be 0.
   *
   * @var float
   */
  public $fee_amount;

  /**
   * actual funds transfer amount. total less fees. if processor does not report actual fee during transaction, this is set to total_amount.
   *
   * @var float
   */
  public $net_amount;

  /**
   * unique transaction id. may be processor id, bank id + trans id, or account number + check number... depending on payment_method
   *
   * @var string
   */
  public $trxn_id;

  /**
   * unique invoice id, system generated or passed in
   *
   * @var string
   */
  public $invoice_id;

  /**
   * Human readable invoice number
   *
   * @var string
   */
  public $invoice_number;

  /**
   * 3 character string, value from config setting or input via user.
   *
   * @var string
   */
  public $currency;

  /**
   * when was gift cancelled
   *
   * @var datetime
   */
  public $cancel_date;

  /**
   * @var text
   */
  public $cancel_reason;

  /**
   * when (if) receipt was sent. populated automatically for online donations w/ automatic receipting
   *
   * @var datetime
   */
  public $receipt_date;

  /**
   * when (if) was donor thanked
   *
   * @var datetime
   */
  public $thankyou_date;

  /**
   * Origin of this Contribution.
   *
   * @var string
   */
  public $source;

  /**
   * @var text
   */
  public $amount_level;

  /**
   * Conditional foreign key to civicrm_contribution_recur id. Each contribution made in connection with a recurring contribution carries a foreign key to the recurring contribution record. This assumes we can track these processor initiated events.
   *
   * @var int
   */
  public $contribution_recur_id;

  /**
   * @var bool
   */
  public $is_test;

  /**
   * @var bool
   */
  public $is_pay_later;

  /**
   * @var int
   */
  public $contribution_status_id;

  /**
   * Conditional foreign key to civicrm_address.id. We insert an address record for each contribution when we have associated billing name and address data.
   *
   * @var int
   */
  public $address_id;

  /**
   * @var string
   */
  public $check_number;

  /**
   * The campaign for which this contribution has been triggered.
   *
   * @var int
   */
  public $campaign_id;

  /**
   * unique credit note id, system generated or passed in
   *
   * @var string
   */
  public $creditnote_id;

  /**
   * Total tax amount of this contribution.
   *
   * @var float
   */
  public $tax_amount;

  /**
   * Stores the date when revenue should be recognized.
   *
   * @var datetime
   */
  public $revenue_recognition_date;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_contribution';
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'financial_type_id', 'civicrm_financial_type', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contribution_page_id', 'civicrm_contribution_page', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contribution_recur_id', 'civicrm_contribution_recur', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'address_id', 'civicrm_address', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'campaign_id', 'civicrm_campaign', 'id');
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
        'contribution_id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contribution ID'),
          'description' => ts('Contribution ID'),
          'required' => TRUE,
          'import' => TRUE,
          'where' => 'civicrm_contribution.id',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
        ],
        'contribution_contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID'),
          'description' => ts('FK to Contact ID'),
          'required' => TRUE,
          'import' => TRUE,
          'where' => 'civicrm_contribution.contact_id',
          'headerPattern' => '/contact(.?id)?/i',
          'dataPattern' => '/^\d+$/',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'html' => [
            'type' => 'EntityRef',
          ],
        ],
        'financial_type_id' => [
          'name' => 'financial_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Type'),
          'description' => ts('FK to Financial Type for (total_amount - non_deductible_amount).'),
          'where' => 'civicrm_contribution.financial_type_id',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_FinancialType',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_financial_type',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
        ],
        'contribution_page_id' => [
          'name' => 'contribution_page_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contribution Page ID'),
          'description' => ts('The Contribution Page which triggered this contribution'),
          'import' => TRUE,
          'where' => 'civicrm_contribution.contribution_page_id',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contribute_DAO_ContributionPage',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_contribution_page',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ],
        ],
        'payment_instrument_id' => [
          'name' => 'payment_instrument_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Payment Method ID'),
          'description' => ts('FK to Payment Instrument'),
          'where' => 'civicrm_contribution.payment_instrument_id',
          'headerPattern' => '/^payment|(p(ayment\s)?instrument)$/i',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'payment_instrument',
            'optionEditPath' => 'civicrm/admin/options/payment_instrument',
          ],
        ],
        'receive_date' => [
          'name' => 'receive_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Date Received'),
          'description' => ts('Date contribution was received - not necessarily the creation date of the record'),
          'import' => TRUE,
          'where' => 'civicrm_contribution.receive_date',
          'headerPattern' => '/receive(.?date)?/i',
          'dataPattern' => '/^\d{4}-?\d{2}-?\d{2} ?(\d{2}:?\d{2}:?(\d{2})?)?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDateTime',
          ],
        ],
        'non_deductible_amount' => [
          'name' => 'non_deductible_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Non-deductible Amount'),
          'description' => ts('Portion of total amount which is NOT tax deductible. Equal to total_amount for non-deductible financial types.'),
          'precision' => [
            20,
            2,
          ],
          'import' => TRUE,
          'where' => 'civicrm_contribution.non_deductible_amount',
          'headerPattern' => '/non?.?deduct/i',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => TRUE,
          'default' => '0',
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'total_amount' => [
          'name' => 'total_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Total Amount'),
          'description' => ts('Total amount of this contribution. Use market value for non-monetary gifts.'),
          'required' => TRUE,
          'precision' => [
            20,
            2,
          ],
          'import' => TRUE,
          'where' => 'civicrm_contribution.total_amount',
          'headerPattern' => '/^total|(.?^am(ou)?nt)/i',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'fee_amount' => [
          'name' => 'fee_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Fee Amount'),
          'description' => ts('actual processor fee if known - may be 0.'),
          'precision' => [
            20,
            2,
          ],
          'import' => TRUE,
          'where' => 'civicrm_contribution.fee_amount',
          'headerPattern' => '/fee(.?am(ou)?nt)?/i',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'net_amount' => [
          'name' => 'net_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Net Amount'),
          'description' => ts('actual funds transfer amount. total less fees. if processor does not report actual fee during transaction, this is set to total_amount.'),
          'precision' => [
            20,
            2,
          ],
          'import' => TRUE,
          'where' => 'civicrm_contribution.net_amount',
          'headerPattern' => '/net(.?am(ou)?nt)?/i',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'trxn_id' => [
          'name' => 'trxn_id',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Transaction ID'),
          'description' => ts('unique transaction id. may be processor id, bank id + trans id, or account number + check number... depending on payment_method'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => TRUE,
          'where' => 'civicrm_contribution.trxn_id',
          'headerPattern' => '/tr(ansactio|x)n(.?id)?/i',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'invoice_id' => [
          'name' => 'invoice_id',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Invoice Reference'),
          'description' => ts('unique invoice id, system generated or passed in'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => TRUE,
          'where' => 'civicrm_contribution.invoice_id',
          'headerPattern' => '/invoice(.?id)?/i',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'invoice_number' => [
          'name' => 'invoice_number',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Invoice Number'),
          'description' => ts('Human readable invoice number'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => TRUE,
          'where' => 'civicrm_contribution.invoice_number',
          'headerPattern' => '/invoice(.?number)?/i',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'currency' => [
          'name' => 'currency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Currency'),
          'description' => ts('3 character string, value from config setting or input via user.'),
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'import' => TRUE,
          'where' => 'civicrm_contribution.currency',
          'headerPattern' => '/cur(rency)?/i',
          'dataPattern' => '/^[A-Z]{3}$/i',
          'export' => TRUE,
          'default' => 'NULL',
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_currency',
            'keyColumn' => 'name',
            'labelColumn' => 'full_name',
            'nameColumn' => 'name',
            'abbrColumn' => 'symbol',
          ],
        ],
        'contribution_cancel_date' => [
          'name' => 'cancel_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Cancelled / Refunded Date'),
          'description' => ts('when was gift cancelled'),
          'import' => TRUE,
          'where' => 'civicrm_contribution.cancel_date',
          'headerPattern' => '/cancel(.?date)?/i',
          'dataPattern' => '/^\d{4}-?\d{2}-?\d{2} ?(\d{2}:?\d{2}:?(\d{2})?)?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDateTime',
          ],
        ],
        'cancel_reason' => [
          'name' => 'cancel_reason',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Cancellation / Refund Reason'),
          'import' => TRUE,
          'where' => 'civicrm_contribution.cancel_reason',
          'headerPattern' => '/(cancel.?)?reason/i',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'receipt_date' => [
          'name' => 'receipt_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Receipt Date'),
          'description' => ts('when (if) receipt was sent. populated automatically for online donations w/ automatic receipting'),
          'import' => TRUE,
          'where' => 'civicrm_contribution.receipt_date',
          'headerPattern' => '/receipt(.?date)?/i',
          'dataPattern' => '/^\d{4}-?\d{2}-?\d{2} ?(\d{2}:?\d{2}:?(\d{2})?)?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDateTime',
          ],
        ],
        'thankyou_date' => [
          'name' => 'thankyou_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Thank-you Date'),
          'description' => ts('when (if) was donor thanked'),
          'import' => TRUE,
          'where' => 'civicrm_contribution.thankyou_date',
          'headerPattern' => '/thank(s|(.?you))?(.?date)?/i',
          'dataPattern' => '/^\d{4}-?\d{2}-?\d{2} ?(\d{2}:?\d{2}:?(\d{2})?)?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDateTime',
          ],
        ],
        'contribution_source' => [
          'name' => 'source',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Contribution Source'),
          'description' => ts('Origin of this Contribution.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => TRUE,
          'where' => 'civicrm_contribution.source',
          'headerPattern' => '/source/i',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'amount_level' => [
          'name' => 'amount_level',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Amount Label'),
          'import' => TRUE,
          'where' => 'civicrm_contribution.amount_level',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'contribution_recur_id' => [
          'name' => 'contribution_recur_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Recurring Contribution ID'),
          'description' => ts('Conditional foreign key to civicrm_contribution_recur id. Each contribution made in connection with a recurring contribution carries a foreign key to the recurring contribution record. This assumes we can track these processor initiated events.'),
          'where' => 'civicrm_contribution.contribution_recur_id',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contribute_DAO_ContributionRecur',
        ],
        'is_test' => [
          'name' => 'is_test',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Test'),
          'import' => TRUE,
          'where' => 'civicrm_contribution.is_test',
          'export' => TRUE,
          'default' => '0',
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
        ],
        'is_pay_later' => [
          'name' => 'is_pay_later',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Pay Later'),
          'import' => TRUE,
          'where' => 'civicrm_contribution.is_pay_later',
          'export' => TRUE,
          'default' => '0',
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
        ],
        'contribution_status_id' => [
          'name' => 'contribution_status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contribution Status ID'),
          'import' => TRUE,
          'where' => 'civicrm_contribution.contribution_status_id',
          'headerPattern' => '/status/i',
          'export' => TRUE,
          'default' => '1',
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'contribution_status',
            'optionEditPath' => 'civicrm/admin/options/contribution_status',
          ],
        ],
        'contribution_address_id' => [
          'name' => 'address_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contribution Address'),
          'description' => ts('Conditional foreign key to civicrm_address.id. We insert an address record for each contribution when we have associated billing name and address data.'),
          'where' => 'civicrm_contribution.address_id',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Address',
        ],
        'contribution_check_number' => [
          'name' => 'check_number',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Check Number'),
          'maxlength' => 255,
          'size' => 6,
          'import' => TRUE,
          'where' => 'civicrm_contribution.check_number',
          'headerPattern' => '/check(.?number)?/i',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'contribution_campaign_id' => [
          'name' => 'campaign_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Campaign'),
          'description' => ts('The campaign for which this contribution has been triggered.'),
          'import' => TRUE,
          'where' => 'civicrm_contribution.campaign_id',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'FKClassName' => 'CRM_Campaign_DAO_Campaign',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_campaign',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ],
        ],
        'creditnote_id' => [
          'name' => 'creditnote_id',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Credit Note ID'),
          'description' => ts('unique credit note id, system generated or passed in'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'import' => TRUE,
          'where' => 'civicrm_contribution.creditnote_id',
          'headerPattern' => '/creditnote(.?id)?/i',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'tax_amount' => [
          'name' => 'tax_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Tax Amount'),
          'description' => ts('Total tax amount of this contribution.'),
          'precision' => [
            20,
            2,
          ],
          'import' => TRUE,
          'where' => 'civicrm_contribution.tax_amount',
          'headerPattern' => '/tax(.?am(ou)?nt)?/i',
          'dataPattern' => '/^\d+(\.\d{2})?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
        ],
        'revenue_recognition_date' => [
          'name' => 'revenue_recognition_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Revenue Recognition Date'),
          'description' => ts('Stores the date when revenue should be recognized.'),
          'import' => TRUE,
          'where' => 'civicrm_contribution.revenue_recognition_date',
          'headerPattern' => '/revenue(.?date)?/i',
          'dataPattern' => '/^\d{4}-?\d{2}-?\d{2} ?(\d{2}:?\d{2}:?(\d{2})?)?$/',
          'export' => TRUE,
          'table_name' => 'civicrm_contribution',
          'entity' => 'Contribution',
          'bao' => 'CRM_Contribute_BAO_Contribution',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDateTime',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'contribution', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'contribution', $prefix, []);
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
      'UI_contrib_payment_instrument_id' => [
        'name' => 'UI_contrib_payment_instrument_id',
        'field' => [
          0 => 'payment_instrument_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_contribution::0::payment_instrument_id',
      ],
      'index_total_amount_receive_date' => [
        'name' => 'index_total_amount_receive_date',
        'field' => [
          0 => 'total_amount',
          1 => 'receive_date',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_contribution::0::total_amount::receive_date',
      ],
      'index_source' => [
        'name' => 'index_source',
        'field' => [
          0 => 'source',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_contribution::0::source',
      ],
      'UI_contrib_trxn_id' => [
        'name' => 'UI_contrib_trxn_id',
        'field' => [
          0 => 'trxn_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_contribution::1::trxn_id',
      ],
      'UI_contrib_invoice_id' => [
        'name' => 'UI_contrib_invoice_id',
        'field' => [
          0 => 'invoice_id',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_contribution::1::invoice_id',
      ],
      'index_contribution_status' => [
        'name' => 'index_contribution_status',
        'field' => [
          0 => 'contribution_status_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_contribution::0::contribution_status_id',
      ],
      'received_date' => [
        'name' => 'received_date',
        'field' => [
          0 => 'receive_date',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_contribution::0::receive_date',
      ],
      'check_number' => [
        'name' => 'check_number',
        'field' => [
          0 => 'check_number',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_contribution::0::check_number',
      ],
      'index_creditnote_id' => [
        'name' => 'index_creditnote_id',
        'field' => [
          0 => 'creditnote_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_contribution::0::creditnote_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
