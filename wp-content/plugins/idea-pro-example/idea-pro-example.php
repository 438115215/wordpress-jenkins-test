<?php
/**
*Plugin Name: Idea Pro Example Plugin
*Description: This is just an example plugin
**/

	//回调函数
	function ideapro_example_function()
	{
		$content = "This is a very basic plugin.";

		$content .= "<div>This is a div</div>";
		$content .= "<p>This is a block of paragraph text.</p>";

		return $content;
	}

	//增加一个shortcode
	add_shortcode('example','ideapro_example_function');



	//回调函数
	function ideapro_admin_menu_option()
	{
		//在admin页面增加一个菜单
		add_menu_page('Header & Footer Scripts','Site Scripts','manage_options','ideapro-admin-menu','ideapro_scripts_page','',200);
	}
	// 添加钩子，admin_menu后台菜单
	add_action('admin_menu','ideapro_admin_menu_option');

	function ideapro_scripts_page()
	{

		if(array_key_exists('submit_scripts_update',$_POST))
		{
			update_option('ideapro_header_scripts',$_POST['header_scripts']);
			update_option('ideapro_footer_scripts',$_POST['footer_script']);

			?>
			<div id="setting-error-settings-updated" class="updated_settings_error notice is-dismissible"><strong>Settings have been saved.</strong></div>
			<?php

		}

		$header_scripts = get_option('ideapro_header_scripts','none');
		$footer_scripts = get_option('ideapro_footer_scripts','none');


		?>
		 <!-- wrap在插件页面 -->
		<div class="wrap">
			<h2>Update Scripts</h2>
			<form method="post" action="">
			<label for="header_scripts">Header Scripts</label>
			<textarea name="header_scripts" class="large-text"><?php print $header_scripts; ?></textarea>
			<label for="footer_scripts">Footer Scripts</label>
			<textarea name="footer_script" class="large-text"><?php print $footer_scripts; ?></textarea>
			<input type="submit" name="submit_scripts_update" class="button button-primary" value="UPDATE SCRIPTS">
			</form>
		</div>	
		<?php
	}


	function ideapro_display_header_scripts()
	{
		$header_scripts = get_option('ideapro_header_scripts','none');

		print $header_scripts;
	}
	add_action('wp_head','ideapro_display_header_scripts');

	function ideapro_display_footer_scripts()
	{
		$footer_scripts = get_option('ideapro_footer_scripts','none');
		print $footer_scripts;
	}
	add_action('wp_footer','ideapro_display_footer_scripts');

	/* Part 3 of the plugin tutorial */

	function ideapro_form()
	{
		/* content variable */
		$content = '';

		$content .= '<form method="post" action="https://www.ideapro.com/example/thank-you/">';

			$content .= '<input type="text" name="full_name" placeholder="Your Full Name" />';
			$content .= '<br />';

			$content .= '<input type="text" name="email_address" placeholder="Email Address" />';
			$content .= '<br />';

			$content .= '<input type="text" name="phone_number" placeholder="Phone Number" />';
			$content .= '<br />';

			$content .= '<textarea name="comments" placeholder="Give us your comments"></textarea>';
			$content .= '<br />';

			$content .= '<input type="submit" name="ideapro_submit_form" value="SUBMIT YOUR INFORMATION" />';

		$content .= '</form>';

		return $content;
	}
	add_shortcode('ideapro_contact_form','ideapro_form');


	function set_html_content_type()
	{
		return 'text/html';

	}



	function ideapro_form_capture()
	{
		global $post,$wpdb;

		if(array_key_exists('ideapro_submit_form',$_POST))
		{
			$to = "support@ideapro.com";
			$subject = "Idea Pro Example Site Form Submission";
			$body = '';

			$body .= 'Name: '.$_POST['full_name'].' <br /> ';
			$body .= 'Email: '.$_POST['email_address'].' <br /> ';
			$body .= 'Phone: '.$_POST['phone_number']. ' <br /> ';
			$body .= 'Comments: '.$_POST['comments'].' <br /> ';


			add_filter('wp_mail_content_type','set_html_content_type');
			
			wp_mail($to,$subject,$body);

			remove_filter('wp_mail_content_type','set_html_content_type');

			/* Insert the information into a comment */

			/*$time = current_time('mysql');

			$data = array(
			    'comment_post_ID' => $post->ID,
			    'comment_content' => $body,
			    'comment_author_IP' => $_SERVER['REMOTE_ADDR'],
			    'comment_date' => $time,
			    'comment_approved' => 1,
			);

			wp_insert_comment($data);*/

			/* add the submission to the database using the table we created */ 
			$insertData = $wpdb->get_results(" INSERT INTO ".$wpdb->prefix."form_submissions (data) VALUES ('".$body."') ");



		}

	}
	add_action('wp_head','ideapro_form_capture');





?>