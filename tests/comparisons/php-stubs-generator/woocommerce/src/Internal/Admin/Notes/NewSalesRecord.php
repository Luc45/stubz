<?php

namespace Automattic\WooCommerce\Internal\Admin\Notes;

/**
 * New_Sales_Record
 */
class NewSalesRecord
{
    /**
     * Note traits.
     */
    use \Automattic\WooCommerce\Admin\Notes\NoteTraits;

    /**
     * Name of the note for use in the database.
     */
    public const NOTE_NAME = 'wc-admin-new-sales-record';
    /**
     * Option name for the sales record date in ISO 8601 (YYYY-MM-DD) date.
     */
    public const RECORD_DATE_OPTION_KEY = 'woocommerce_sales_record_date';
    /**
     * Option name for the sales record amount.
     */
    public const RECORD_AMOUNT_OPTION_KEY = 'woocommerce_sales_record_amount';
    /**
     * Returns the total of yesterday's sales.
     *
     * @param string $date Date for sales to sum (i.e. YYYY-MM-DD).
     * @return floatval
     */
    public static function sum_sales_for_date($date)
    {
    }
    /**
     * Possibly add a sales record note.
     */
    public static function possibly_add_note()
    {
    }
    /**
     * Get the note with record data.
     *
     * @param string $record_date record date Y-m-d.
     * @param float  $record_amt record amount.
     * @param string $yesterday yesterday's date Y-m-d.
     * @param string $total total sales for yesterday.
     *
     * @return Note
     */
    public static function get_note_with_record_data($record_date, $record_amt, $yesterday, $total)
    {
    }
    /**
     * Get the note. This is used for localizing the note.
     *
     * @return Note
     */
    public static function get_note()
    {
    }
}
