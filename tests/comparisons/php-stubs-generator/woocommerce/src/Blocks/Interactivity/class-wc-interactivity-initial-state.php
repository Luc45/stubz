<?php

/**
 * Manages the initial state of the Interactivity API store in the server and
 * its serialization so it can be restored in the browser upon hydration.
 *
 * It's a private class, exposed by other functions, like `wc_initial_state`.
 *
 * @access private
 */
class WC_Interactivity_Initial_State
{
    /**
     * Get state from a given namespace.
     *
     * @param string $namespace Namespace.
     *
     * @return array The requested state.
     */
    public static function get_state($namespace)
    {
    }
    /**
     * Merge data into the state with the given namespace.
     *
     * @param string $namespace Namespace.
     * @param array  $data      State to merge.
     *
     * @return void
     */
    public static function merge_state($namespace, $data)
    {
    }
    /**
     * Reset the initial state.
     */
    public static function reset()
    {
    }
    /**
     * Render the initial state.
     */
    public static function render()
    {
    }
}
