<?php

namespace ;

/**
 * Product cat list walker class.
 */
class WC_Product_Cat_List_Walker
{
    /**
     * What the class handles.
     *
     * @var string
     */
    public $tree_type = 'product_cat';

    /**
     * DB fields to use.
     *
     * @var array
     */
    public $db_fields = array (
  'parent' => 'parent',
  'id' => 'term_id',
  'slug' => 'slug',
);

    /**
     * Starts the list before the elements are added.
     *
     * @see Walker::start_lvl()
     * @since 2.1.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth Depth of category. Used for tab indentation.
     * @param array  $args Will only append content if style argument value is 'list'.
     */
    public function start_lvl(&$output, $depth = 0, $args = array (
))
    {
        // stub
    }

    /**
     * Ends the list of after the elements are added.
     *
     * @see Walker::end_lvl()
     * @since 2.1.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth Depth of category. Used for tab indentation.
     * @param array  $args Will only append content if style argument value is 'list'.
     */
    public function end_lvl(&$output, $depth = 0, $args = array (
))
    {
        // stub
    }

    /**
     * Start the element output.
     *
     * @see Walker::start_el()
     * @since 2.1.0
     *
     * @param string  $output            Passed by reference. Used to append additional content.
     * @param object  $cat               Category.
     * @param int     $depth             Depth of category in reference to parents.
     * @param array   $args              Arguments.
     * @param integer $current_object_id Current object ID.
     */
    public function start_el(&$output, $cat, $depth = 0, $args = array (
), $current_object_id = 0)
    {
        // stub
    }

    /**
     * Ends the element output, if needed.
     *
     * @see Walker::end_el()
     * @since 2.1.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $cat    Category.
     * @param int    $depth  Depth of category. Not used.
     * @param array  $args   Only uses 'list' for whether should append to output.
     */
    public function end_el(&$output, $cat, $depth = 0, $args = array (
))
    {
        // stub
    }

    /**
     * Traverse elements to create list from elements.
     *
     * Display one element if the element doesn't have any children otherwise,
     * display the element and its children. Will only traverse up to the max.
     * depth and no ignore elements under that depth. It is possible to set the.
     * max depth to include all depths, see walk() method.
     *
     * This method shouldn't be called directly, use the walk() method instead.
     *
     * @since 2.5.0
     *
     * @param object $element           Data object.
     * @param array  $children_elements List of elements to continue traversing.
     * @param int    $max_depth         Max depth to traverse.
     * @param int    $depth             Depth of current element.
     * @param array  $args              Arguments.
     * @param string $output            Passed by reference. Used to append additional content.
     * @return null Null on failure with no changes to parameters.
     */
    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
    {
        // stub
    }

}

