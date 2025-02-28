<?php

namespace Automattic\WooCommerce\Internal\Admin;

/**
 * Events Class.
 */
class Events
{
    /**
     * The single instance of the class.
     *
     * @var object
     */
    protected static $instance = null;
    /**
     * Array of note class to be added or updated.
     *
     * @var array
     */
    private static $note_classes_to_added_or_updated = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\AddFirstProduct',
  1 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\ChoosingTheme',
  2 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\CustomizeStoreWithBlocks',
  3 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\CustomizingProductCatalog',
  4 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\EditProductsOnTheMove',
  5 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\EUVATNumber',
  6 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\FirstProduct',
  7 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\LaunchChecklist',
  8 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\MagentoMigration',
  9 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\ManageOrdersOnTheGo',
  10 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\MarketingJetpack',
  11 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\MigrateFromShopify',
  12 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\MobileApp',
  13 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\NewSalesRecord',
  14 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\OnboardingPayments',
  15 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\OnlineClothingStore',
  16 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\PaymentsMoreInfoNeeded',
  17 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\PaymentsRemindMeLater',
  18 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\PerformanceOnMobile',
  19 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\PersonalizeStore',
  20 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\RealTimeOrderAlerts',
  21 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\TrackingOptIn',
  22 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\WooCommercePayments',
  23 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\WooCommerceSubscriptions',
);
    /**
     * The other note classes that are added in other places.
     *
     * @var array
     */
    private static $other_note_classes = array (
  0 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\InstallJPAndWCSPlugins',
  1 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\OrderMilestones',
  2 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\SellingOnlineCourses',
  3 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\UnsecuredReportFiles',
  4 => 'Automattic\\WooCommerce\\Internal\\Admin\\Notes\\WooSubscriptionsNotes',
);
    /**
     * Constructor
     *
     * @return void
     */
    protected function __construct()
{
}
    /**
     * Get class instance.
     *
     * @return object Instance.
     */
    final public static function instance()
{
}
    /**
     * Cron event handlers.
     */
    public function init()
{
}
    /**
     * Daily events to run.
     *
     * Note: Order_Milestones::possibly_add_note is hooked to this as well.
     */
    public function do_wc_admin_daily()
{
}
    /**
     * Get note.
     *
     * @param Note $note_from_db The note object from the database.
     */
    public function get_note_from_db($note_from_db)
{
}
    /**
     * Adds notes that should be added.
     */
    protected function possibly_add_notes()
{
}
    /**
     * Deletes notes that should be deleted.
     */
    protected function possibly_delete_notes()
{
}
    /**
     * Updates notes that should be updated.
     */
    protected function possibly_update_notes()
{
}
    /**
     * Checks if remote inbox notifications are enabled.
     *
     * @return bool Whether remote inbox notifications are enabled.
     */
    protected function is_remote_inbox_notifications_enabled()
{
}
    /**
     * Checks if merchant email notifications are enabled.
     *
     * @return bool Whether merchant email notifications are enabled.
     */
    protected function is_merchant_email_notifications_enabled()
{
}
    /**
     *   Refresh transient for the following DataSourcePollers on wc_admin_daily cron job.
     *   - PaymentGatewaySuggestionsDataSourcePoller
     *   - RemoteFreeExtensionsDataSourcePoller
     */
    protected function possibly_refresh_data_source_pollers()
{
}
}