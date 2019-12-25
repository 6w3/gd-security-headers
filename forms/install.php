<?php

if (!defined('ABSPATH')) { exit; }

$_classes = array('d4p-wrap', 'wpv-'.GDSIH_WPV, 'd4p-page-install');

?>
<div class="<?php echo join(' ', $_classes); ?>">
    <div class="d4p-header">
        <div class="d4p-plugin">
            GD Security Headers
        </div>
    </div>
    <div class="d4p-content">
        <div class="d4p-content-left">
            <div class="d4p-panel-title">
                <i aria-hidden="true" class="fa fa-magic"></i>
                <h3><?php _e("Installation", "gd-security-headers"); ?></h3>
            </div>
            <div class="d4p-panel-info">
                <?php _e("Before you continue, make sure plugin installation was successful.", "gd-security-headers"); ?>
            </div>
        </div>
        <div class="d4p-content-right">
            <div class="d4p-update-info">
                <?php

                include(GDSIH_PATH.'forms/setup/database.php');

                gdsih_settings()->set('install', false, 'info');
                gdsih_settings()->set('update', false, 'info', true);

                ?>

                <h3><?php _e("All Done", "gd-security-headers"); ?></h3>
                <?php _e("Installation completed.", "gd-security-headers"); ?>
                <br/><br/><a class="button-primary" href="<?php echo network_admin_url('admin.php?page=gd-security-headers-about'); ?>"><?php _e("Click here to continue.", "gd-security-headers"); ?></a>
            </div>
        </div>
    </div>
</div>