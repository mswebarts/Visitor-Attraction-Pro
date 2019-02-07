<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<a href="<?php if( get_field( "ms_notification_link_page", $ms_notification_atts["id"] ) ) {
	            echo get_field( "ms_notification_link_page", $ms_notification_atts["id"] );
	        } 
        ?>" target="<?php 
        	if( get_field( "ms_notification_open_in_new_tab", $ms_notification_atts["id"] ) == "Yes" ) {
        		echo "_blank";
        	} else {
        		echo "_self";
        	}
    	?>" id="<?php 
        	if( get_field( "ms_notifications_custom_id", $ms_notification_atts["id"] ) ) {
        		echo get_field( "ms_notifications_custom_id", $ms_notification_atts["id"] );
        	}
    	?>" class="ms-notification ms-notification-container-one">

	<div class="ms-notification-style-one notification_box_wrap">
	    <div class="left_area">
	        <img class="ms-notification-image-modern ms-notification-image" src="<?php 
        	if( get_field( "ms_notification_upload_image", $ms_notification_atts["id"] ) ) {
        		echo get_field( "ms_notification_upload_image", $ms_notification_atts["id"] );
        	} 
    	?>">
	    </div>

	    <div class="right_area">
	        <div class="notification_title">
	            <?php
	            	if( get_field( "ms_notification_edit_title", $ms_notification_atts["id"] ) ) {
	            		echo get_field( "ms_notification_edit_title", $ms_notification_atts["id"] );
	            	} 
            	?>
	        </div>

	        <div class="notification_description">
	            <?php
	            	if( get_field( "ms_notification_edit_description", $ms_notification_atts["id"] ) ) {
	            		echo get_field( "ms_notification_edit_description", $ms_notification_atts["id"] );
	            	} 
            	?>
	        </div>
	    </div>

	    <div class="ms_close_box"></div>
	    <div class="clearfix"></div>
	</div>
</a>