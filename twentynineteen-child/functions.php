<?php
add_action( "wp_enqueue_scripts", "enqueue_wp_child_theme" );
function enqueue_wp_child_theme() 
{
    if((esc_attr(get_option("childthemewpdotcom_setting_x")) != "Yes")) 
    {
		wp_enqueue_style("parent-css", get_template_directory_uri()."/style.css" );
    }

	wp_enqueue_style("child-css", get_stylesheet_uri());
	wp_enqueue_script("child-js", get_stylesheet_directory_uri() . "/js/script.js", array( "jquery" ), "1.0.0", true );
}
 
function childthemewpdotcom_register_settings() 
{ 
	register_setting( "childthemewpdotcom_theme_options_group", "childthemewpdotcom_setting_x", "ctwp_callback" );
}
add_action( "admin_init", "childthemewpdotcom_register_settings" );

function childthemewpdotcom_register_options_page() 
{
	add_options_page("Child Theme Settings", "My Child Theme", "manage_options", "childthemewpdotcom", "childthemewpdotcom_theme_options_page");
}
add_action("admin_menu", "childthemewpdotcom_register_options_page");

function childthemewpdotcom_theme_options_page()
{ 
?>
<div>
	<style>
		table.childthemewpdotcom {table-layout: fixed ;  width: 100%; vertical-align:top; }
		table.childthemewpdotcom td { width:50%; vertical-align:top; padding:0px 20px; }
		#childthemewpdotcom_settings { padding:0px 20px; }
	</style> 
	<div id="childthemewpdotcom_settings">
		<h1>Child Theme Options</h1>
	</div>
	<table class="childthemewpdotcom">
		<tr>
			<td>
                <form method="post" action="options.php">
                	<h2>Parent Theme Stylesheet Include or Exclude</h2>
                	<?php settings_fields( "childthemewpdotcom_theme_options_group" ); ?>
					<p><label><input size="76" type="checkbox" name="childthemewpdotcom_setting_x" id="childthemewpdotcom_setting_x"
					<?php if((esc_attr(get_option("childthemewpdotcom_setting_x")) == "Yes")) {   echo " checked='checked' ";  }  ?>
					value="Yes" > 
					TICK To DISABLE The Parent Stylesheet style.css In Your Site HTML<br><br>
                    ONLY TICK This Box If When You Inspect Your Source Code It Contains Your Parent Stylesheet style.css Two Times. Ticking This Box Will Only Include It Once.</label></p>
					<?php submit_button(); ?>
				</form>	
			</td>
		</tr>
	</table>
</div>
<?php
} 