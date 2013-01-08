<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


add_action( 'admin_menu', 'ntg_add_style_settings_box', 20 );



function ntg_add_style_settings_box() { 
    global $_genesis_admin_settings;
    
    add_meta_box('genesis-theme-settings-style-select', __('Style Select', 'gsselect'), 'ntg_theme_settings_style_box', $_genesis_admin_settings->pagehook, 'main', 'default');
}

function ntg_theme_settings_style_box() {
    
    // set the default selection (if empty)
    $style = genesis_get_option('style_selection') ? genesis_get_option('style_selection') : 'style.css';
?>

    <p><label><?php _e('Style Sheet', 'gsselect'); ?>: 
        <select name="<?php echo GENESIS_SETTINGS_FIELD; ?>[style_selection]">
            <?php
            foreach ( glob(CHILD_DIR . "/*.css") as $file ) {
            $file = str_replace( CHILD_DIR . '/', '', $file );
            
            if( ! genesis_style_check( $file, 'genesis' )){
            continue;
            }
            
            ?>
                
            <option style="padding-right:10px;" value="<?php echo esc_attr( $file ); ?>" <?php selected($file, $style); ?>><?php echo esc_html( $file ); ?></option>
            
            <?php } ?>
        </select>
    </label></p>
    <p><span class="description">Please select your desired <b>Style Sheet</b> from the drop down list and save your settings.</span></p>
    <p><span class="description"><b>Note:</b> Only Genesis style sheets in the Child theme directory will be included in the list.</span></p>
<?php
}


if( ! function_exists('genesis_style_check') ) {
// Checks if the style sheet is a Genesis style sheet
function genesis_style_check($fileText, $char_list) {

	$fh = fopen(CHILD_DIR . '/' . $fileText, 'r');
	$theData = fread($fh, 1000);
	fclose($fh);
	
	$search = strpos($theData, $char_list);
	if($search === false){
	        return false;
	    }
	    return true;
}
}
