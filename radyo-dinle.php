<?php
/*
Plugin Name: Radyo Dinle
Plugin URI: http://www.canliradyodinle.life/
Description: Radyo Dinle Türk Radyolarını Ekleyebilirsiniz.
Version: 1.0
Author: Radyo Dinle
Author URI: http://www.canliradyodinle.life
*/

define( 'WP_RADYOARABESKTURK_URL_PLAYER', WP_PLUGIN_URL.'/'.plugin_basename(dirname(__FILE__)) );
define( 'WP_RADYOARABESKTURK_DIR_PLAYER', WP_PLUGIN_DIR.'/'.plugin_basename(dirname(__FILE__)) );

function widget_CanliRadyoDinle_Com($args) {
extract($args);
?>
        <?php echo $before_widget; ?>

<!-- CanliRadyoDinle.Com WP Player -->
<iframe scrolling="no" src="http://www.canliradyodinle.life/wpradyo/" width="100%" height="200"></iframe>


        <?php echo $after_widget; ?>
<?php
}
register_sidebar_widget('CanliRadyoDinle.Com Player', 'widget_CanliRadyoDinle_Com');
?>