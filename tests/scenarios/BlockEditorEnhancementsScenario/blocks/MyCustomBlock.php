<?php
namespace BlockEditorEnhancementsScenario\blocks;

/**
 * Registers and enqueues a custom block for the Block Editor.
 */
class MyCustomBlock {
    public function init(): void {
        add_action('init', [ $this, 'registerBlockAssets' ]);
    }

    public function registerBlockAssets(): void {
        // Typically you'd use register_block_type or register your scripts
        register_block_type( __DIR__, [
            'editor_script' => 'my-custom-block-script',
        ]);
    }
}
