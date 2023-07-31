<?php

// widget dashboard suporte video
add_action('wp_dashboard_setup', 'wpmidia_custom_dashboard_widgets_video');
function wpmidia_custom_dashboard_widgets_video() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget_video', 'Vídeo tutorial Loja', 'wpmidia_custom_dashboard_help_video');
}
function wpmidia_custom_dashboard_help_video() {
	echo '<iframe width="100%" height="300" src="https://www.youtube.com/embed/amP24sy2-Yc" frameborder="0" gesture="media" allowfullscreen></iframe>';
}