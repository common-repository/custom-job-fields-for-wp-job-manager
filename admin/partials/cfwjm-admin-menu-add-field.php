<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://devcrazygit.github.io/
 * @since      1.0.0
 *
 * @package    Cfwjm
 * @subpackage Cfwjm/admin/partials
 */
?>
<div class="wrap job-manager-settings-wrap">
    <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
    <div id="col-container" class="wp-clearfix">
        <div id="col-left">
            <?php do_action('cfwjm_fields_form'); ?>
        </div>
        <div id="col-right">
            <?php do_action('cfwjm_fields_list'); ?>
        </div>
    </div>
</div>