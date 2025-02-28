<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC Admin Note Data Store (Custom Tables)
 */
class DataStore extends \WC_Data_Store_WP implements \WC_Object_Data_Store_Interface
{
    // Extensions should define their own contexts and use them to avoid applying woocommerce_note_where_clauses when not needed.
    const WC_ADMIN_NOTE_OPER_GLOBAL = 'global';
    /**
     * Method to create a new note in the database.
     *
     * @param Note $note Admin note.
     */
    public function create(&$note)
    {
    }
    /**
     * Method to read a note.
     *
     * @param Note $note Admin note.
     * @throws \Exception Throws exception when invalid data is found.
     */
    public function read(&$note)
    {
    }
    /**
     * Updates a note in the database.
     *
     * @param Note $note Admin note.
     */
    public function update(&$note)
    {
    }
    /**
     * Deletes a note from the database.
     *
     * @param Note  $note Admin note.
     * @param array $args Array of args to pass to the delete method (not used).
     */
    public function delete(&$note, $args = array())
    {
    }
    /**
     * Return an ordered list of notes.
     *
     * @param array  $args Query arguments.
     * @param string $context Optional argument that the woocommerce_note_where_clauses filter can use to determine whether to apply extra conditions. Extensions should define their own contexts and use them to avoid adding to notes where clauses when not needed.
     * @return array An array of objects containing a note id.
     */
    public function get_notes($args = array(), $context = self::WC_ADMIN_NOTE_OPER_GLOBAL)
    {
    }
    /**
     * Return an ordered list of notes, without paging or applying the 'woocommerce_note_where_clauses' filter.
     * INTERNAL: This method is not intended to be used by external code, and may change without notice.
     *
     * @param array $args Query arguments.
     * @return array An array of database records.
     */
    public function lookup_notes($args = array())
    {
    }
    /**
     * Return a count of notes.
     *
     * @param string $type Comma separated list of note types.
     * @param string $status Comma separated list of statuses.
     * @param string $context Optional argument that the woocommerce_note_where_clauses filter can use to determine whether to apply extra conditions. Extensions should define their own contexts and use them to avoid adding to notes where clauses when not needed.
     * @return string Count of objects with given type, status and context.
     */
    public function get_notes_count($type = array(), $status = array(), $context = self::WC_ADMIN_NOTE_OPER_GLOBAL)
    {
    }
    /**
     * Return where clauses for getting notes by status and type. For use in both the count and listing queries.
     * Applies woocommerce_note_where_clauses filter.
     *
     * @uses args_to_where_clauses
     * @param array  $args Array of args to pass.
     * @param string $context Optional argument that the woocommerce_note_where_clauses filter can use to determine whether to apply extra conditions. Extensions should define their own contexts and use them to avoid adding to notes where clauses when not needed.
     * @return string Where clauses for the query.
     */
    public function get_notes_where_clauses($args = array(), $context = self::WC_ADMIN_NOTE_OPER_GLOBAL)
    {
    }
    /**
     * Return where clauses for notes queries without applying woocommerce_note_where_clauses filter.
     * INTERNAL: This method is not intended to be used by external code, and may change without notice.
     *
     * @param array $args Array of arguments for query conditionals.
     * @return string Where clauses.
     */
    protected function args_to_where_clauses($args = array())
    {
    }
    /**
     * Find all the notes with a given name.
     *
     * @param string $name Name to search for.
     * @return array An array of matching note ids.
     */
    public function get_notes_with_name($name)
    {
    }
    /**
     * Find the ids of all notes with a given type.
     *
     * @param string $note_type Type to search for.
     * @return array An array of matching note ids.
     */
    public function get_note_ids_by_type($note_type)
    {
    }
}