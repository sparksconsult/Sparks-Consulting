<?php
ESSBOptionsStructureHelper::menu_item('display', 'optin', __('Easy Optin (Subscribe Forms)', 'essb'), ' ti-email', 'activate_first', 'optin-1');
ESSBOptionsStructureHelper::submenu_item('display', 'optin-1', __('Connectors', 'essb'));
ESSBOptionsStructureHelper::submenu_item('display', 'optin-2', __('Customize Design #1', 'essb'));
ESSBOptionsStructureHelper::submenu_item('display', 'optin-3', __('Customize Design #2', 'essb'));
ESSBOptionsStructureHelper::submenu_item('display', 'optin-4', __('Customize Design #3', 'essb'));
ESSBOptionsStructureHelper::submenu_item('display', 'optin-5', __('Customize Design #4', 'essb'));
ESSBOptionsStructureHelper::submenu_item('display', 'optin-6', __('Customize Design #5', 'essb'));
ESSBOptionsStructureHelper::submenu_item('display', 'optin-7', __('Customize Design #6', 'essb'));
ESSBOptionsStructureHelper::submenu_item('display', 'optin-8', __('Customize Design #7', 'essb'));


ESSBOptionsStructureHelper::menu_item('display', 'native', __('Like, Follow & Subscribe', 'essb'), ' ti-thumb-up', 'activate_first', 'native-1');
ESSBOptionsStructureHelper::submenu_item('display', 'native-1', __('Social Networks', 'essb'));
ESSBOptionsStructureHelper::submenu_item('display', 'native-2', __('Skinned buttons', 'essb'));
ESSBOptionsStructureHelper::submenu_item('display', 'native-3', __('Social Privacy', 'essb'));


ESSBOptionsStructureHelper::menu_item('display', 'follow', __('Social Followers Counter', 'essb'), ' ti-heart', 'activate_first', 'follow-1');
ESSBOptionsStructureHelper::submenu_item('display', 'follow-1', __('Settings', 'essb'));
ESSBOptionsStructureHelper::submenu_item('display', 'follow-2', __('Social Networks', 'essb'));
ESSBOptionsStructureHelper::submenu_item('display', 'follow-3', __('Followers Sidebar', 'essb'));

ESSBOptionsStructureHelper::menu_item('display', 'profiles', __('Social Profiles', 'essb'), ' ti-user', 'activate_first', 'profiles-1');
ESSBOptionsStructureHelper::submenu_item('display', 'profiles-1', __('Settings', 'essb'));
ESSBOptionsStructureHelper::submenu_item('display', 'profiles-2', __('Social Networks', 'essb'));

// Easy Optin
$optin_connectors = array("mailchimp" => "MailChimp", 
		"getresponse" => "GetResponse", 
		"mymail" => "MyMail", 
		"mailpoet" => "MailPoet",
		"mailerlite" => "MailerLite", 
		"activecampaign" => "ActiveCampaign",
		"campaignmonitor" => "CampaignMonitor");

if (has_filter('essb_external_subscribe_connectors')) {
	$optin_connectors = apply_filters('essb_external_subscribe_connectors', $optin_connectors);
}

ESSBOptionsStructureHelper::field_select('display', 'optin-1', 'subscribe_connector', __('Choose your service', 'essb'), __('Select service that you wish to integrate with Easy Optin forms. Please note that for correct work you need to fill all required authorizations details for it below', 'essb'), $optin_connectors);
ESSBOptionsStructureHelper::field_switch('display', 'optin-1', 'subscribe_widget', __('Activate subscribe widget & shortcode', 'essb'), __('Activation of this option will allow you to use subscribe widget and shortcode anywhere on your site not connected with subscribe button inside share buttons', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));

ESSBOptionsStructureHelper::panel_start('display', 'optin-1', __('MailChimp', 'essb'), __('Configure mailing list service access details', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle"));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-1', 'subscribe_mc_api', __('Mailchimp API key', 'essb'), __('<a href="http://kb.mailchimp.com/accounts/management/about-api-keys#Finding-or-generating-your-API-key" target="_blank">Find your API key</a>', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-1', 'subscribe_mc_list', __('Mailchimp List ID', 'essb'), __('<a href="http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id" target="_blank">Find your List ID</a>', 'essb'));
ESSBOptionsStructureHelper::field_section_start_full_panels('display', 'optin-1');
ESSBOptionsStructureHelper::field_switch_panel('display', 'optin-1', 'subscribe_mc_welcome', __('Send welcome message:', 'essb'), __('Allow Mailchimp send welcome mssage upon subscribe.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_switch_panel('display', 'optin-1', 'subscribe_mc_double', __('Use double opt in:', 'essb'), __('The MailChimp double opt-in process is a two-step process, where a subscriber fills out your signup form and receives an email with a link to confirm their subscription. MailChimp also includes some additional thank you and confirmation pages you can customize with your brand and messaging.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_switch_panel('display', 'optin-1', 'subscribe_mc_namefield', __('Display name field:', 'essb'), __('Activate this option to allow customers enter their name.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_section_end_full_panels('display', 'optin-1');
ESSBOptionsStructureHelper::panel_end('display', 'optin-1');

ESSBOptionsStructureHelper::panel_start('display', 'optin-1', __('GetResponse', 'essb'), __('Configure mailing list service access details', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle"));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-1', 'subscribe_gr_api', __('GetReponse API key', 'essb'), __('<a href="http://support.getresponse.com/faq/where-i-find-api-key" target="_blank">Find your API key</a>', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-1', 'subscribe_gr_list', __('GetReponse Campaign Name', 'essb'), __('<a href="http://support.getresponse.com/faq/can-i-change-the-name-of-a-campaign" target="_blank">Find your campaign name</a>', 'essb'));
ESSBOptionsStructureHelper::panel_end('display', 'optin-1');

ESSBOptionsStructureHelper::panel_start('display', 'optin-1', __('MailerLite', 'essb'), __('Configure mailing list service access details', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle"));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-1', 'subscribe_ml_api', __('MailerLite API key', 'essb'), __('Entery your MailerLite API key. To get your key visit this page <a href="https://app.mailerlite.com/subscribe/api" target="_blank">https://app.mailerlite.com/subscribe/api</a> and look under API key.', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-1', 'subscribe_ml_list', __('MailerLite List ID (Group ID)', 'essb'), __('Enter your list id (aka Group ID). To find your group id visit again the page for API key generation and you will see all list you have with their ids.', 'essb'));
ESSBOptionsStructureHelper::panel_end('display', 'optin-1');

ESSBOptionsStructureHelper::panel_start('display', 'optin-1', __('ActiveCampaign', 'essb'), __('Configure mailing list service access details', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle"));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-1', 'subscribe_ac_api_url', __('ActiveCampaign API URL', 'essb'), __('Enter your ActiveCampaign API URL. To get API URL please go to your ActiveCampaign Account >> My Settings >> Developer.', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-1', 'subscribe_ac_api', __('ActiveCampaign API Key', 'essb'), __('Enter your ActiveCampaign API Key. To get API Key please go to your ActiveCampaign Account >> My Settings >> Developer.', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-1', 'subscribe_ac_list', __('ActiveCapaign List ID', 'essb'), __('Entery your ActiveCampaign List ID. To get your list ID visit lists pages and copy ID that you see in browser when you open list ?listid=<yourid>.', 'essb'));
ESSBOptionsStructureHelper::panel_end('display', 'optin-1');

ESSBOptionsStructureHelper::panel_start('display', 'optin-1', __('CampaignMonitor', 'essb'), __('Configure mailing list service access details', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle"));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-1', 'subscribe_cm_api', __('CampaignMonitor API Key', 'essb'), __('Enter your Campaign Monitor API Key. You can get your API Key from the Account Settings page when logged into your Campaign Monitor account.', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-1', 'subscribe_cm_list', __('CampaignMonitor List ID', 'essb'), __('Enter your List ID. You can get List ID from the list editor page when logged into your Campaign Monitor account.', 'essb'));
ESSBOptionsStructureHelper::panel_end('display', 'optin-1');


ESSBOptionsStructureHelper::panel_start('display', 'optin-1', __('MyMail', 'essb'), __('Configure mailing list service access details', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle"));
$listOfOptions = array();
if (function_exists('mymail')) {
	$lists = mymail('lists')->get();
	foreach ($lists as $list) {
		if (function_exists('mymail')) $id = $list->ID;
		else $id = $list->term_id;

		$listOfOptions[$id] = $list->name;
	}
}
ESSBOptionsStructureHelper::field_select('display', 'optin-1', 'subscribe_mm_list', __('MyMail List', 'essb'), __('Select your list. Please ensure that MyMail plugin is installed.', 'essb'), $listOfOptions);
ESSBOptionsStructureHelper::panel_end('display', 'optin-1');

ESSBOptionsStructureHelper::panel_start('display', 'optin-1', __('MailPoet', 'essb'), __('Configure mailing list service access details', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle"));
$listOfOptions = array();
if (class_exists('WYSIJA')) {
	$model_list = WYSIJA::get('list', 'model');
	$mailpoet_lists = $model_list->get(array('name', 'list_id'), array('is_enabled'=>1));
	if (sizeof($mailpoet_lists) > 0) {
		foreach ($mailpoet_lists as $list) {
			$listOfOptions[$list['list_id']] = $list['name'];
		}
	}
}
ESSBOptionsStructureHelper::field_select('display', 'optin-1', 'subscribe_mp_list', __('MailPoet List', 'essb'), __('Select your list. Please ensure that MailPoet plugin is installed.', 'essb'), $listOfOptions);
ESSBOptionsStructureHelper::panel_end('display', 'optin-1');

ESSBOptionsStructureHelper::field_heading('display', 'optin-2', 'heading5', __('Customize Design #1', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-2', 'subscribe_mc_namefield', __('Display name field:', 'essb'), __('Activate this option to allow customers enter their name.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-2', 'subscribe_mc_title', __('Title', 'essb'), __('Customize default title: Join our list', 'essb'));
ESSBOptionsStructureHelper::field_editor('display', 'optin-2', 'subscribe_mc_text', __('Text', 'essb'), __('Customize default text: Subscribe to our mailing list and get interesting stuff and updates to your email inbox.', 'essb'), 'htmlmixed');
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-2', 'subscribe_mc_name', __('Name placeholder text', 'essb'), __('Customize default name placeholder text: Enter your name here', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-2', 'subscribe_mc_email', __('Email placeholder text', 'essb'), __('Customize default email placeholder text: Enter your email here', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-2', 'subscribe_mc_button', __('Subscribe button text', 'essb'), __('Customize default button text: Sign Up Now', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-2', 'subscribe_mc_footer', __('Footer text', 'essb'), __('Customize default footer text: We respect your privacy and take protecting it seriously', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-2', 'subscribe_mc_success', __('Success messsage', 'essb'), __('Customize Success Message: Thank you for subscribing.', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-2', 'subscribe_mc_error', __('Error message', 'essb'), __('Customize Error Message: Something went wrong.', 'essb'));

ESSBOptionsStructureHelper::field_heading('display', 'optin-2', 'heading4', __('Style Customization', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-2', 'activate_mailchimp_customizer', __('Activate color customizer', 'essb'), __('Color customizations will not be included unless you activate this option.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-2', 'customizer_subscribe_bgcolor1', __('Background color', 'essb'), __('Replace form background color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-2', 'customizer_subscribe_textcolor1', __('Text color', 'essb'), __('Replace form text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-2', 'customizer_subscribe_hovercolor1', __('Accent color', 'essb'), __('Replace form accent color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-2', 'customizer_subscribe_hovertextcolor1', __('Accent text color', 'essb'), __('Replace form accent text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-2', 'customizer_subscribe_emailcolor1', __('Email field background color', 'essb'), __('Replace email field background color', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-2', 'customizer_subscribe_noborder1', __('Remove top border of form', 'essb'), __('Activate this option if you wish to remove the tiny top border from the top of form.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));


ESSBOptionsStructureHelper::field_heading('display', 'optin-3', 'heading5', __('Customize Design #2', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-3', 'subscribe_mc_namefield2', __('Display name field:', 'essb'), __('Activate this option to allow customers enter their name.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-3', 'subscribe_mc_title2', __('Title', 'essb'), __('Customize default title: Join our list', 'essb'));
ESSBOptionsStructureHelper::field_editor('display', 'optin-3', 'subscribe_mc_text2', __('Text', 'essb'), __('Customize default text: Subscribe to our mailing list and get interesting stuff and updates to your email inbox.', 'essb'), 'htmlmixed');
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-3', 'subscribe_mc_name2', __('Name placeholder text', 'essb'), __('Customize default name placeholder text: Enter your name here', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-3', 'subscribe_mc_email2', __('Email placeholder text', 'essb'), __('Customize default email placeholder text: Enter your email here', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-3', 'subscribe_mc_button2', __('Subscribe button text', 'essb'), __('Customize default button text: Sign Up Now', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-3', 'subscribe_mc_footer2', __('Footer text', 'essb'), __('Customize default footer text: We respect your privacy and take protecting it seriously', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-3', 'subscribe_mc_success2', __('Success messsage', 'essb'), __('Customize Success Message: Thank you for subscribing.', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-3', 'subscribe_mc_error2', __('Error message', 'essb'), __('Customize Error Message: Something went wrong.', 'essb'));

ESSBOptionsStructureHelper::field_heading('display', 'optin-3', 'heading4', __('Style Customization', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-3', 'activate_mailchimp_customizer2', __('Activate color customizer', 'essb'), __('Color customizations will not be included unless you activate this option.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-3', 'customizer_subscribe_bgcolor2', __('Background color', 'essb'), __('Replace form background color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-3', 'customizer_subscribe_textcolor2', __('Text color', 'essb'), __('Replace form text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-3', 'customizer_subscribe_hovercolor2', __('Accent color', 'essb'), __('Replace form accent color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-3', 'customizer_subscribe_hovertextcolor2', __('Accent text color', 'essb'), __('Replace form accent text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-3', 'customizer_subscribe_emailcolor2', __('Email field background color', 'essb'), __('Replace email field background color', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-3', 'customizer_subscribe_noborder2', __('Remove border of form', 'essb'), __('Activate this option if you wish to remove the tiny border from the form.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));

ESSBOptionsStructureHelper::field_heading('display', 'optin-4', 'heading5', __('Customize Design #3', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-4', 'subscribe_mc_namefield3', __('Display name field:', 'essb'), __('Activate this option to allow customers enter their name.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_file('display', 'optin-4', 'subscribe_mc_image3', __('Choose image', 'essb'), __('Image parameter is optional but if you choose such it will appear in the top part of form on the left or right side of content.', 'essb'));
$optin_connectors = array("left" => __("Left side", "essb"), "right" => __("Right side", "essb"));
ESSBOptionsStructureHelper::field_select('display', 'optin-4', 'subscribe_mc_imagealign3', __('Image will appear on:', 'essb'), __('Choose where image will appear according to your top content', 'essb'), $optin_connectors);
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-4', 'subscribe_mc_title3', __('Title', 'essb'), __('Customize default title: Join our list', 'essb'));
ESSBOptionsStructureHelper::field_editor('display', 'optin-4', 'subscribe_mc_text3', __('Text', 'essb'), __('Customize default text: Subscribe to our mailing list and get interesting stuff and updates to your email inbox.', 'essb'), 'htmlmixed');
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-4', 'subscribe_mc_name3', __('Name placeholder text', 'essb'), __('Customize default name placeholder text: Enter your name here', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-4', 'subscribe_mc_email3', __('Email placeholder text', 'essb'), __('Customize default email placeholder text: Enter your email here', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-4', 'subscribe_mc_button3', __('Subscribe button text', 'essb'), __('Customize default button text: Sign Up Now', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-4', 'subscribe_mc_footer3', __('Footer text', 'essb'), __('Customize default footer text: We respect your privacy and take protecting it seriously', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-4', 'subscribe_mc_success3', __('Success messsage', 'essb'), __('Customize Success Message: Thank you for subscribing.', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-4', 'subscribe_mc_error3', __('Error message', 'essb'), __('Customize Error Message: Something went wrong.', 'essb'));

ESSBOptionsStructureHelper::field_heading('display', 'optin-4', 'heading4', __('Style Customization', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-4', 'activate_mailchimp_customizer3', __('Activate color customizer', 'essb'), __('Color customizations will not be included unless you activate this option.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-4', 'customizer_subscribe_bgcolor3', __('Background color top area', 'essb'), __('Replace form background color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-4', 'customizer_subscribe_textcolor3', __('Text color top area', 'essb'), __('Replace form text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-4', 'customizer_subscribe_bgcolor3_bottom', __('Background color bottom area', 'essb'), __('Replace form background color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-4', 'customizer_subscribe_textcolor3_bottom', __('Text color bottom area', 'essb'), __('Replace form text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-4', 'customizer_subscribe_hovercolor3', __('Accent color', 'essb'), __('Replace form accent color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-4', 'customizer_subscribe_hovertextcolor3', __('Accent text color', 'essb'), __('Replace form accent text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-4', 'customizer_subscribe_emailcolor3', __('Email field background color', 'essb'), __('Replace email field background color', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-4', 'customizer_subscribe_noborder3', __('Remove border of form', 'essb'), __('Activate this option if you wish to remove the tiny border from the form.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));

ESSBOptionsStructureHelper::field_heading('display', 'optin-5', 'heading5', __('Customize Design #4', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-5', 'subscribe_mc_namefield4', __('Display name field:', 'essb'), __('Activate this option to allow customers enter their name.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_file('display', 'optin-5', 'subscribe_mc_image4', __('Choose image', 'essb'), __('Image parameter is optional but if you choose such it will appear in the top part of form on the left or right side of content.', 'essb'));
$optin_connectors = array("left" => __("Left side", "essb"), "right" => __("Right side", "essb"));
ESSBOptionsStructureHelper::field_select('display', 'optin-5', 'subscribe_mc_imagealign4', __('Image will appear on:', 'essb'), __('Choose where image will appear according to your top content', 'essb'), $optin_connectors);
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-5', 'subscribe_mc_title4', __('Title', 'essb'), __('Customize default title: Join our list', 'essb'));
ESSBOptionsStructureHelper::field_editor('display', 'optin-5', 'subscribe_mc_text4', __('Text', 'essb'), __('Customize default text: Subscribe to our mailing list and get interesting stuff and updates to your email inbox.', 'essb'), 'htmlmixed');
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-5', 'subscribe_mc_name4', __('Name placeholder text', 'essb'), __('Customize default name placeholder text: Enter your name here', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-5', 'subscribe_mc_email4', __('Email placeholder text', 'essb'), __('Customize default email placeholder text: Enter your email here', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-5', 'subscribe_mc_button4', __('Subscribe button text', 'essb'), __('Customize default button text: Sign Up Now', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-5', 'subscribe_mc_footer4', __('Footer text', 'essb'), __('Customize default footer text: We respect your privacy and take protecting it seriously', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-5', 'subscribe_mc_success4', __('Success messsage', 'essb'), __('Customize Success Message: Thank you for subscribing.', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-5', 'subscribe_mc_error4', __('Error message', 'essb'), __('Customize Error Message: Something went wrong.', 'essb'));

ESSBOptionsStructureHelper::field_heading('display', 'optin-5', 'heading4', __('Style Customization', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-5', 'activate_mailchimp_customizer4', __('Activate color customizer', 'essb'), __('Color customizations will not be included unless you activate this option.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-5', 'customizer_subscribe_bgcolor4', __('Background color of content area', 'essb'), __('Replace form background color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-5', 'customizer_subscribe_textcolor4', __('Text color of content area', 'essb'), __('Replace form text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-5', 'customizer_subscribe_bgcolor4_bottom', __('Background color subscribe area', 'essb'), __('Replace form background color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-5', 'customizer_subscribe_textcolor4_bottom', __('Text color subscribe area', 'essb'), __('Replace form text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-5', 'customizer_subscribe_hovercolor4', __('Accent color', 'essb'), __('Replace form accent color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-5', 'customizer_subscribe_hovertextcolor4', __('Accent text color', 'essb'), __('Replace form accent text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-5', 'customizer_subscribe_emailcolor4', __('Email field background color', 'essb'), __('Replace email field background color', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-5', 'customizer_subscribe_noborder4', __('Remove border of form', 'essb'), __('Activate this option if you wish to remove the tiny border from the form.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));

ESSBOptionsStructureHelper::field_heading('display', 'optin-6', 'heading5', __('Customize Design #5', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-6', 'subscribe_mc_namefield5', __('Display name field:', 'essb'), __('Activate this option to allow customers enter their name.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-6', 'subscribe_mc_title5', __('Title', 'essb'), __('Customize default title: Join our list', 'essb'));
ESSBOptionsStructureHelper::field_editor('display', 'optin-6', 'subscribe_mc_text5', __('Text', 'essb'), __('Customize default text: Subscribe to our mailing list and get interesting stuff and updates to your email inbox.', 'essb'), 'htmlmixed');
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-6', 'subscribe_mc_name5', __('Name placeholder text', 'essb'), __('Customize default name placeholder text: Enter your name here', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-6', 'subscribe_mc_email5', __('Email placeholder text', 'essb'), __('Customize default email placeholder text: Enter your email here', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-6', 'subscribe_mc_button5', __('Subscribe button text', 'essb'), __('Customize default button text: Sign Up Now', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-6', 'subscribe_mc_footer5', __('Footer text', 'essb'), __('Customize default footer text: We respect your privacy and take protecting it seriously', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-6', 'subscribe_mc_success5', __('Success messsage', 'essb'), __('Customize Success Message: Thank you for subscribing.', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-6', 'subscribe_mc_error5', __('Error message', 'essb'), __('Customize Error Message: Something went wrong.', 'essb'));

ESSBOptionsStructureHelper::field_heading('display', 'optin-6', 'heading4', __('Style Customization', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-6', 'activate_mailchimp_customizer5', __('Activate color customizer', 'essb'), __('Color customizations will not be included unless you activate this option.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-6', 'customizer_subscribe_bgcolor5', __('Background color of content area', 'essb'), __('Replace form background color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-6', 'customizer_subscribe_textcolor5', __('Text color of content area', 'essb'), __('Replace form text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-6', 'customizer_subscribe_bgcolor5_bottom', __('Background color subscribe area', 'essb'), __('Replace form background color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-6', 'customizer_subscribe_textcolor5_bottom', __('Text color subscribe area', 'essb'), __('Replace form text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-6', 'customizer_subscribe_hovercolor5', __('Accent color', 'essb'), __('Replace form accent color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-6', 'customizer_subscribe_hovertextcolor5', __('Accent text color', 'essb'), __('Replace form accent text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-6', 'customizer_subscribe_emailcolor5', __('Email field background color', 'essb'), __('Replace email field background color', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-6', 'customizer_subscribe_noborder5', __('Remove border of form', 'essb'), __('Activate this option if you wish to remove the tiny border from the form.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));


ESSBOptionsStructureHelper::field_heading('display', 'optin-7', 'heading5', __('Customize Design #6', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-7', 'subscribe_mc_namefield6', __('Display name field:', 'essb'), __('Activate this option to allow customers enter their name.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_file('display', 'optin-7', 'subscribe_mc_image6', __('Choose image', 'essb'), __('Image parameter is optional but if you choose such it will appear in the top part of form on the left or right side of content.', 'essb'));
$optin_connectors = array("left" => __("Left side", "essb"), "right" => __("Right side", "essb"));
ESSBOptionsStructureHelper::field_select('display', 'optin-7', 'subscribe_mc_imagealign6', __('Image will appear on:', 'essb'), __('Choose where image will appear according to your top content', 'essb'), $optin_connectors);
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-7', 'subscribe_mc_title6', __('Title', 'essb'), __('Customize default title: Join our list', 'essb'));
ESSBOptionsStructureHelper::field_editor('display', 'optin-7', 'subscribe_mc_text6', __('Text', 'essb'), __('Customize default text: Subscribe to our mailing list and get interesting stuff and updates to your email inbox.', 'essb'), 'htmlmixed');
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-7', 'subscribe_mc_name6', __('Name placeholder text', 'essb'), __('Customize default name placeholder text: Enter your name here', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-7', 'subscribe_mc_email6', __('Email placeholder text', 'essb'), __('Customize default email placeholder text: Enter your email here', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-7', 'subscribe_mc_button6', __('Subscribe button text', 'essb'), __('Customize default button text: Sign Up Now', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-7', 'subscribe_mc_footer6', __('Footer text', 'essb'), __('Customize default footer text: We respect your privacy and take protecting it seriously', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-7', 'subscribe_mc_success6', __('Success messsage', 'essb'), __('Customize Success Message: Thank you for subscribing.', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-7', 'subscribe_mc_error6', __('Error message', 'essb'), __('Customize Error Message: Something went wrong.', 'essb'));

ESSBOptionsStructureHelper::field_heading('display', 'optin-7', 'heading4', __('Style Customization', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-7', 'activate_mailchimp_customizer6', __('Activate color customizer', 'essb'), __('Color customizations will not be included unless you activate this option.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-7', 'customizer_subscribe_bgcolor6', __('Background color of content area', 'essb'), __('Replace form background color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-7', 'customizer_subscribe_textcolor6', __('Text color of content area', 'essb'), __('Replace form text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-7', 'customizer_subscribe_bgcolor6_bottom', __('Background color subscribe area', 'essb'), __('Replace form background color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-7', 'customizer_subscribe_textcolor6_bottom', __('Text color subscribe area', 'essb'), __('Replace form text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-7', 'customizer_subscribe_hovercolor6', __('Accent color', 'essb'), __('Replace form accent color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-7', 'customizer_subscribe_hovertextcolor6', __('Accent text color', 'essb'), __('Replace form accent text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-7', 'customizer_subscribe_emailcolor6', __('Email field background color', 'essb'), __('Replace email field background color', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-7', 'customizer_subscribe_noborder6', __('Remove border of form', 'essb'), __('Activate this option if you wish to remove the tiny border from the form.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));

ESSBOptionsStructureHelper::field_heading('display', 'optin-8', 'heading5', __('Customize Design #7', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-8', 'subscribe_mc_namefield7', __('Display name field:', 'essb'), __('Activate this option to allow customers enter their name.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_file('display', 'optin-8', 'subscribe_mc_image7', __('Choose image', 'essb'), __('Image parameter is optional but if you choose such it will appear in the top part of form on the left or right side of content.', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-8', 'subscribe_mc_title7', __('Title', 'essb'), __('Customize default title: Join our list', 'essb'));
ESSBOptionsStructureHelper::field_editor('display', 'optin-8', 'subscribe_mc_text7', __('Text', 'essb'), __('Customize default text: Subscribe to our mailing list and get interesting stuff and updates to your email inbox.', 'essb'), 'htmlmixed');
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-8', 'subscribe_mc_name7', __('Name placeholder text', 'essb'), __('Customize default name placeholder text: Enter your name here', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-8', 'subscribe_mc_email7', __('Email placeholder text', 'essb'), __('Customize default email placeholder text: Enter your email here', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-8', 'subscribe_mc_button7', __('Subscribe button text', 'essb'), __('Customize default button text: Sign Up Now', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-8', 'subscribe_mc_footer7', __('Footer text', 'essb'), __('Customize default footer text: We respect your privacy and take protecting it seriously', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-8', 'subscribe_mc_success7', __('Success messsage', 'essb'), __('Customize Success Message: Thank you for subscribing.', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'optin-8', 'subscribe_mc_error7', __('Error message', 'essb'), __('Customize Error Message: Something went wrong.', 'essb'));

ESSBOptionsStructureHelper::field_heading('display', 'optin-8', 'heading4', __('Style Customization', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-8', 'activate_mailchimp_customizer7', __('Activate color customizer', 'essb'), __('Color customizations will not be included unless you activate this option.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-8', 'customizer_subscribe_bgcolor7', __('Background color of content area', 'essb'), __('Replace form background color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-8', 'customizer_subscribe_textcolor7', __('Text color of content area', 'essb'), __('Replace form text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-8', 'customizer_subscribe_bgcolor7_bottom', __('Background color subscribe area', 'essb'), __('Replace form background color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-8', 'customizer_subscribe_textcolor7_bottom', __('Text color subscribe area', 'essb'), __('Replace form text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-8', 'customizer_subscribe_hovercolor7', __('Accent color', 'essb'), __('Replace form accent color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-8', 'customizer_subscribe_hovertextcolor7', __('Accent text color', 'essb'), __('Replace form accent text color', 'essb'));
ESSBOptionsStructureHelper::field_color('display', 'optin-8', 'customizer_subscribe_emailcolor7', __('Email field background color', 'essb'), __('Replace email field background color', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'optin-8', 'customizer_subscribe_noborder7', __('Remove border of form', 'essb'), __('Activate this option if you wish to remove the tiny border from the form.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));


// native buttons
ESSBOptionsStructureHelper::panel_start('display', 'native-1', __('Activate usage of native like, follow and subscribe buttons', 'essb'), __('Native social buttons are great way to encourage more like, shares and follows as they are easy recognizable by users. Usage of them may affect site loading speed because they add additional calls and code to page load once they are initialized. Use them with caution.', 'essb'), 'fa21 fa fa-cogs', array("mode" => "switch", 'switch_id' => 'native_active', 'switch_on' => __('Yes', 'essb'), 'switch_off' => __('No', 'essb')));
ESSBOptionsStructureHelper::field_section_start_full_panels('display', 'native-1');
ESSBOptionsStructureHelper::field_switch_panel('display', 'native-1', 'otherbuttons_sameline', __('Display on same line', 'essb'), __('Activate this option to display native buttons on same line with the share buttons.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_switch_panel('display', 'native-1', 'allow_native_mobile', __('Allow display of native buttons on mobile devices', 'essb'), __('The native buttons are set off by default on mobile devices because they may affect speed of mobile site version. If you wish to use them on mobile devices set this option to <b>Yes</b>.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_switch_panel('display', 'native-1', 'allnative_counters', __('Activate native buttons counter', 'essb'), __('Activate this option to display counters for native buttons.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_section_end_full_panels('display', 'native-1');
ESSBOptionsStructureHelper::field_simplesort('display', 'native-1', 'native_order', __('Drag and Drop change position of display', 'essb'), __('Change order of native button display', 'essb'), essb_default_native_buttons());

ESSBOptionsStructureHelper::panel_start('display', 'native-1', __('Facebook button', 'essb'), __('Include Facebook native button in your site', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle", "state" => "closed"));
ESSBOptionsStructureHelper::field_section_start_full_panels('display', 'native-1', __('Facebook button', 'essb'), __('Include native Facebook button', 'essb'));
ESSBOptionsStructureHelper::field_switch_panel('display', 'native-1', 'facebook_like_button', __('Include Facebook Like/Follow Button', 'essb'), __('', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_switch_panel('display', 'native-1', 'facebook_like_button_share', __('Include also Facebook Share Button', 'essb'), __('Since latest Facebook API changes like button makes only Like action. If you wish to allow users share we can recommend to activate this option too.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_switch_panel('display', 'native-1', 'facebook_like_button_api', __('My site already uses Facebook Api', 'essb'), __('', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_switch_panel('display', 'native-1', 'facebook_like_button_api_async', __('Load Facebook API asynchronous', 'essb'), __('', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_textbox_panel('display', 'native-1', 'facebook_like_button_width', __('Set custom width of Facebook like button to fix problem with not rendering correct. Value must be number without px in it.', 'essb'), __('', 'essb'));
ESSBOptionsStructureHelper::field_textbox_panel('display', 'native-1', 'facebook_like_button_height', __('Set custom height of Facebook like button to fix problem with not rendering correct. Value must be number without px in it.', 'essb'), __('', 'essb'));
ESSBOptionsStructureHelper::field_textbox_panel('display', 'native-1', 'facebook_like_button_margin_top', __('Set custom margin-top (to move up use negative value) of Facebook like button to fix problem with not rendering correct. Value must be number without px in it.', 'essb'), __('', 'essb'));
ESSBOptionsStructureHelper::field_textbox_panel('display', 'native-1', 'facebook_like_button_lang', __('Custom language code for you native Facebook button', 'essb'), __('If you wish to change your native Facebook button language code from English you need to enter here your own code like es_ES. Full list of code can be found here: <a href="https://www.facebook.com/translations/FacebookLocales.xml" target="_blank">https://www.facebook.com/translations/FacebookLocales.xml</a>', 'essb'));
ESSBOptionsStructureHelper::field_section_end_full_panels('display', 'native-1');
$listOfOptions = array ("like" => "Like page", "follow" => "Profile follow" );

ESSBOptionsStructureHelper::field_select('display', 'native-1', 'facebook_like_type', __('Button type', 'essb'), __('Choose button type you wish to use.', 'essb'), $listOfOptions);
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'native-1', 'facebook_follow_profile', __('Facebook Follow Profile Page URL', 'essb'), __('', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'native-1', 'custom_url_like_address', __('Custom Facebook like button address', 'essb'), __('Provide custom address in case you wish likes to be added to that page - example fan page. Otherwise likes will be counted to page where button is displayed.', 'essb'));
ESSBOptionsStructureHelper::panel_end('display', 'native-1');

ESSBOptionsStructureHelper::panel_start('display', 'native-1', __('Google button', 'essb'), __('Include Google native button in your site', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle", "state" => "closed"));
ESSBOptionsStructureHelper::field_switch('display', 'native-1', 'googleplus', __('Include Google +1/Follow Button', 'essb'), __('', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
$listOfOptions = array ("plus" => "+1 to page", "follow" => "Profile follow" );
ESSBOptionsStructureHelper::field_select('display', 'native-1', 'google_like_type', __('Button type', 'essb'), __('Choose button type you wish to use.', 'essb'), $listOfOptions);
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'native-1', 'google_follow_profile', __('Google+ Follow Profile Page URL', 'essb'), __('', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'native-1', 'custom_url_plusone_address', __('Custom Google +1 button address', 'essb'), __('Provide custom address in case you wish +1 to be added to that page - example profile page. Otherwise +1s will be counted to page where button is displayed.', 'essb'));
ESSBOptionsStructureHelper::panel_end('display', 'native-1');

ESSBOptionsStructureHelper::panel_start('display', 'native-1', __('Twitter button', 'essb'), __('Include Twitter native button in your site', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle", "state" => "closed"));
ESSBOptionsStructureHelper::field_switch('display', 'native-1', 'twitterfollow', __('Twitter Tweet/Follow Button', 'essb'), __('', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
$listOfOptions = array ("follow" => "Follow user", "tweet" => "Tweet" );
ESSBOptionsStructureHelper::field_select('display', 'native-1', 'twitter_tweet', __('Button type', 'essb'), __('Choose button type you wish to use.', 'essb'), $listOfOptions);
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'native-1', 'twitterfollowuser', __('Twitter Follow User', 'essb'), __('', 'essb'));
ESSBOptionsStructureHelper::panel_end('display', 'native-1');

ESSBOptionsStructureHelper::panel_start('display', 'native-1', __('YouTube button', 'essb'), __('Include YouTube native button in your site', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle", "state" => "closed"));
ESSBOptionsStructureHelper::field_switch('display', 'native-1', 'youtubesub', __('YouTube channel subscribe button', 'essb'), __('', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'native-1', 'youtubechannel', __('Channel ID', 'essb'), __('', 'essb'));
ESSBOptionsStructureHelper::panel_end('display', 'native-1');

ESSBOptionsStructureHelper::panel_start('display', 'native-1', __('Pinterest button', 'essb'), __('Include Pinterest native button in your site', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle", "state" => "closed"));
ESSBOptionsStructureHelper::field_switch('display', 'native-1', 'pinterestfollow', __('Include Pinterest Pin/Follow Button', 'essb'), __('', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
$listOfOptions = array ("follow" => "Profile follow", "pin" => "Pin button" );
ESSBOptionsStructureHelper::field_select('display', 'native-1', 'pinterest_native_type', __('Button type', 'essb'), __('Choose button type you wish to use.', 'essb'), $listOfOptions);
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'native-1', 'pinterestfollow_disp', __('Text on button when follow type is selected', 'essb'), __('', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'native-1', 'pinterestfollow_url', __('Profile url when follow type is selected', 'essb'), __('Provide your Pinterest URL as it is seen at the browser, for example https://www.pinterest.com/appscreo.', 'essb'));
ESSBOptionsStructureHelper::panel_end('display', 'native-1');

ESSBOptionsStructureHelper::panel_start('display', 'native-1', __('LinkedIn button', 'essb'), __('Include LinkedIn native button in your site', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle", "state" => "closed"));
ESSBOptionsStructureHelper::field_switch('display', 'native-1', 'linkedin_follow', __('Include LinkedIn button', 'essb'), __('', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'native-1', 'linkedin_follow_id', __('Company ID', 'essb'), __('', 'essb'));
ESSBOptionsStructureHelper::panel_end('display', 'native-1');

ESSBOptionsStructureHelper::panel_start('display', 'native-1', __('ManagedWP button', 'essb'), __('Include ManagedWP native button in your site', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle", "state" => "closed"));
ESSBOptionsStructureHelper::field_switch('display', 'native-1', 'managedwp_button', __('Include ManagedWP.org Upvote Button', 'essb'), __('', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::panel_end('display', 'native-1');

ESSBOptionsStructureHelper::panel_start('display', 'native-1', __('VKontankte (vk.com) button', 'essb'), __('Include VKontankte (vk.com) native button in your site', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle", "state" => "closed"));
ESSBOptionsStructureHelper::field_switch('display', 'native-1', 'vklike', __('Include VK.com Like Button', 'essb'), __('', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_textbox_stretched('display', 'native-1', 'vklikeappid', __('VKontakte (vk.com) Application ID', 'essb'), __('If you don\'t have application id for your site you need to generate one on VKontakte (vk.com) Dev Site. To do this visit this page http://vk.com/dev.php?method=Like and follow instructions on page', 'essb'));
ESSBOptionsStructureHelper::panel_end('display', 'native-1');

ESSBOptionsStructureHelper::panel_end('display', 'native-1');

ESSBOptionsStructureHelper::panel_start('display', 'native-2', __('Activate usage of skinned native buttons', 'essb'), __('This option will hide
		native buttons inside nice flat style boxes and show them on
		hover.', 'essb'), 'fa21 fa fa-cogs', array("mode" => "switch", 'switch_id' => 'skin_native', 'switch_on' => __('Yes', 'essb'), 'switch_off' => __('No', 'essb')));

$skin_list = array ("flat" => "Flat", "metro" => "Metro" );
ESSBOptionsStructureHelper::field_select('display', 'native-2', 'skin_native_skin', __('Native buttons skin', 'essb'), __('Choose skin for native buttons. It will be applied only when option above is activated.', 'essb'), $skin_list);

foreach (essb_default_native_buttons() as $network) {
	ESSBOptionsStructureHelper::panel_start('display', 'native-2', ESSBOptionsStructureHelper::capitalize($network), __('Skinned settings for that social network', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle", "state" => "closed"));
	
	ESSBOptionsStructureHelper::field_color('display', 'native-2', 'skinned_'.$network.'_color', __('Skinned button color replace', 'essb'), __('', 'essb'));
	ESSBOptionsStructureHelper::field_color('display', 'native-2', 'skinned_'.$network.'_hovercolor', __('Skinned button hover color replace', 'essb'), __('', 'essb'));
	ESSBOptionsStructureHelper::field_color('display', 'native-2', 'skinned_'.$network.'_textcolor', __('Skinned button text color replace', 'essb'), __('', 'essb'));
	ESSBOptionsStructureHelper::field_textbox_stretched('display', 'native-2', 'skinned_'.$network.'_text', __('Skinned button text replace', 'essb'), '');
	ESSBOptionsStructureHelper::field_textbox('display', 'native-2', 'skinned_'.$network.'_width', __('Skinned button width replace', 'essb'), '', '', 'input60', 'fa-arrows-h', 'right');
	ESSBOptionsStructureHelper::panel_end('display', 'native-2');
	
}
ESSBOptionsStructureHelper::panel_end('display', 'native-2');

ESSBOptionsStructureHelper::panel_start('display', 'native-3', __('Activate social privacy native buttons', 'essb'), __('When used in social privacy mode native buttons will not load until user click and request their activation. Usage in this mode is great way to avoid delay of load when you use natives and also this is the only way to use them in countries where native buttons should be used in two-click mode', 'essb'), 'fa21 fa fa-cogs', array("mode" => "switch", 'switch_id' => 'native_privacy_active', 'switch_on' => __('Yes', 'essb'), 'switch_off' => __('No', 'essb')));
foreach (essb_default_native_buttons() as $network) {
	ESSBOptionsStructureHelper::panel_start('display', 'native-3', ESSBOptionsStructureHelper::capitalize($network), __('Privacy settings for that social network', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle", "state" => "closed"));
	ESSBOptionsStructureHelper::field_textbox_stretched('display', 'native-3', 'skinned_'.$network.'_privacy_text', __('Privacy button text replace', 'essb'), '');
	ESSBOptionsStructureHelper::field_textbox('display', 'native-3', 'skinned_'.$network.'_privacy_width', __('Privacy button width replace', 'essb'), '', '', 'input60', 'fa-arrows-h', 'right');
	ESSBOptionsStructureHelper::panel_end('display', 'native-3');
}
ESSBOptionsStructureHelper::panel_end('display', 'native-3');


// Followers Counter
ESSBOptionsStructureHelper::panel_start('display', 'follow-1', __('Activate Social Followers Counter', 'essb'), __('Activate this option to use followers counter widget and shortcodes', 'essb'), 'fa21 fa fa-cogs', array("mode" => "switch", 'switch_id' => 'fanscounter_active', 'switch_on' => __('Yes', 'essb'), 'switch_off' => __('No', 'essb')));
ESSBOptionsStructureHelper::field_select('display', 'follow-1', 'essb3fans_update', __('Update period', 'essb'), __('Choose the time when counters will be updated. Default is 1 day if nothing is selected.', 'essb'), ESSBSocialFollowersCounterHelper::available_cache_periods());
ESSBOptionsStructureHelper::field_select('display', 'follow-1', 'essb3fans_format', __('Number format', 'essb'), __('Choose default number format', 'essb'), ESSBSocialFollowersCounterHelper::available_number_formats());
ESSBOptionsStructureHelper::field_switch('display', 'follow-1', 'essb3fans_uservalues', __('Allow user values', 'essb'), __('Activate this option to allow enter of user values for each social network. In this case when automatic value is less than user value the user value will be used', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'follow-1', 'fanscounter_clear_on_save', __('Clear stored values on settings update', 'essb'), __('Mark yes to tell plugin clear previous updated values that are stored into database. You need this option if current stored value in database is greater than your current value of followers and you wish to make it update.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));

ESSBOptionsStructureHelper::field_heading('display', 'follow-1', 'heading5', __('Social Networks', 'essb'));
ESSBOptionsStructureHelper::field_checkbox_list_sortable('display', 'follow-1', 'essb3fans_networks', __('Social Networks', 'essb'), __('Order and activate networks you wish to use in widget and shortcodes'), ESSBSocialFollowersCounterHelper::available_social_networks(false));
//essb3fans_

ESSBOptionsStructureHelper::panel_end('display', 'follow-1');

ESSBOptionsStructureHelper::field_heading('display', 'follow-2', 'heading1', __('Social Profile Details', 'essb'));
essb3_draw_fanscounter_settings('display', 'follow-2');

ESSBOptionsStructureHelper::panel_start('display', 'follow-3', __('Display social followers as sidebar', 'essb'), __('Activate this option to get followers counter appear as sidebar attached to left or right side of screen. This is a great way to encorage users visit your social profiles (profile buttons on steroids).', 'essb'), 'fa21 fa fa-cogs', array("mode" => "switch", 'switch_id' => 'fanscounter_sidebar', 'switch_on' => __('Yes', 'essb'), 'switch_off' => __('No', 'essb')));
$defaults = ESSBSocialFollowersCounterHelper::default_instance_settings();
$followers_default_options = ESSBSocialFollowersCounterHelper::default_options_structure(true, $defaults);
ESSBOptionsStructureHelper::field_select('display', 'follow-3', 'essb3fans_sidebar_template', __('Template', 'essb'), __('Choose template that you will use on followers sidebar', 'essb'), $followers_default_options['template']['values']);
ESSBOptionsStructureHelper::field_select('display', 'follow-3', 'essb3fans_sidebar_animation', __('Apply animation', 'essb'), __('Animation is a great way to grab visitors attention', 'essb'), $followers_default_options['animation']['values']);
ESSBOptionsStructureHelper::field_switch('display', 'follow-3', 'essb3fans_sidebar_nospace', __('Without space between buttons', 'essb'), __('Activate this option to connect follower buttons and remove tiny space between them.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_select('display', 'follow-3', 'essb3fans_sidebar_orientation', __('Choose button layout style', 'essb'), __('Buttons can be horizontal or vertical. Choose the style that fits best into selected networks and site', 'essb'), array("h" => __("Horizontal", "essb"), "v" => __("Vertical", "essb")));
ESSBOptionsStructureHelper::field_select('display', 'follow-3', 'essb3fans_sidebar_position', __('Choose position on screen', 'essb'), __('Choose position where you wish to appear sidebar display', 'essb'), array("left" => __("Left", "essb"), "right" => __("Right", "essb")));
ESSBOptionsStructureHelper::field_textbox('display', 'follow-3', 'essb3fans_sidebar_width', __('Customize width of button', 'essb'), __('We choose default optimal width that fits in almost all sites. In some cases based on text you may need to shrink or extend button. Use this field to enter custom width (example: 100)', 'essb'), '', 'input60', 'fa-arrows-h', 'right');
ESSBOptionsStructureHelper::panel_end('display', 'follow-3');


// Profiles
//ESSBOptionsStructureHelper::field_heading('display', 'profiles-1', 'heading5', __('Social Profile Settings', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'profiles-1', 'profiles_widget', __('Activate social profiles widget and shortcode', 'essb'), __('Activate this option to install and use social profiles widget.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));

ESSBOptionsStructureHelper::panel_start('display', 'profiles-1', __('Automatically generate and assing social profiles as sidebar', 'essb'), __('Activate this option to automatically generate sidebar with your social profile links', 'essb'), 'fa21 fa fa-cogs', array("mode" => "switch", 'switch_id' => 'profiles_display', 'switch_on' => __('Yes', 'essb'), 'switch_off' => __('No', 'essb')));
$listOfOptions = array("left" => __("Left", "essb"), "right" => __("Right", "essb"), "topleft" => __("Top left", "essb"), "topright" => __("Top right", "essb"), "bottomleft" => __("Bottom left", "essb"), "bottomright" => __("Bottom right", "essb"));
ESSBOptionsStructureHelper::field_select('display', 'profiles-1', 'profiles_display_position', __('Position of social profiles', 'essb'), __('Choose your social profiles position', 'essb'), $listOfOptions);
ESSBOptionsStructureHelper::field_switch('display', 'profiles-1', 'profiles_mobile_deactivate', __('Deactivate social profiles on mobile', 'essb'), __('Activate this option to turn off display on mobile devices.', 'essb'), 'recommended', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_switch('display', 'profiles-1', 'profiles_nospace', __('Remove spacing between buttons', 'essb'), __('Activate this option to remove default space between share buttons.', 'essb'), '', __('Yes', 'essb'), __('No', 'essb'));
ESSBOptionsStructureHelper::field_select('display', 'profiles-1', 'profiles_template', __('Choose template that you will use for sidebar', 'essb'), __('Template assigned here will be used for sidebar and also for default template for widget and shortcodes if you use such. Each widget or shortcode includes options to personalize it.', 'essb'), ESSBSocialProfilesHelper::available_templates());
ESSBOptionsStructureHelper::field_select('display', 'profiles-1', 'profiles_animation', __('Choose animation that you will use for sidebar', 'essb'), __('Animation assigned here will be used for sidebar and also for default template for widget and shortcodes if you use such. Each widget or shortcode includes options to personalize it.', 'essb'), ESSBSocialProfilesHelper::available_animations());
ESSBOptionsStructureHelper::panel_end('display', 'profiles-1');


ESSBOptionsStructureHelper::field_heading('display', 'profiles-1', 'heading5', __('Change the order of social profiles', 'essb'));
ESSBOptionsStructureHelper::title('display', 'profiles-1', __('Customize order of social profile networks', 'essb'), '', 'inner-row');
ESSBOptionsStructureHelper::field_checkbox_list_sortable('display', 'profiles-1', 'profile_networks', __('Social Networks', 'essb'), __('Order and activate networks you wish to use in widget and shortcodes'), ESSBSocialProfilesHelper::available_social_networks());

essb_prepare_social_profiles_fields('display', 'profiles-2');


function essb3_draw_fanscounter_settings($tab_id, $menu_id) {
	$setting_fields = ESSBSocialFollowersCounterHelper::options_structure();
	$network_list = ESSBSocialFollowersCounterHelper::available_social_networks();

	$networks_same_authentication = array();

	// @since 3.2.2 Integration with Social Followers Counter Extended
	if (defined('ESSB3_SFCE_OPTIONS_NAME')) {
		$fanscounter_extended_options = get_option(ESSB3_SFCE_OPTIONS_NAME);
		$extended_list = array();
		foreach ($network_list as $network => $title) {
			$is_active_extended = ESSBOptionValuesHelper::options_bool_value($fanscounter_extended_options, 'activate_'.$network);
			$use_same_api = ESSBOptionValuesHelper::options_bool_value($fanscounter_extended_options, 'same_access_'.$network);
			$count_extended = ESSBOptionValuesHelper::options_value($fanscounter_extended_options, 'profile_count_'.$network);
			$count_extended = intval($count_extended);

			$extended_list[$network] = $title;

			if ($is_active_extended) {
				if ($use_same_api) {
					$networks_same_authentication[$network] = "yes";
				}

				for ($i=1;$i<=$count_extended;$i++) {
					$extended_list[$network."_".$i] = $title." Additional Profile ".$i;
				}
			}
		}
		$network_list = array();
		foreach ($extended_list as $network => $title) {
			$network_list[$network] = $title;
		}

		//asort($network_list);
	}

	foreach ($network_list as $network => $title) {
		ESSBOptionsStructureHelper::panel_start($tab_id, $menu_id, $title, __('Configure social network details', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle", "state" => "closed"));
		
		$default_options_key = $network;
		$is_extended_key = false;

		if (strpos($default_options_key, '_') !== false && $default_options_key != 'wp_posts' && $default_options_key != 'wp_comments' && $default_options_key != 'wp_users') {
			$key_array = explode('_', $default_options_key);
			$default_options_key = $key_array[0];
			$is_extended_key = true;
		}

		$single_network_options = isset($setting_fields[$default_options_key]) ? $setting_fields[$default_options_key] : array();

		foreach ($single_network_options as $field => $options) {
			$field_id = "essb3fans_".$network."_".$field;

			$field_type = isset($options['type']) ? $options['type'] : 'textbox';
			$field_text = isset($options['text']) ? $options['text'] : '';
			$field_description = isset($options['description']) ? $options['description'] : '';
			$field_values = isset($options['values']) ? $options['values'] : array();

			$is_authfield = isset($options['authfield']) ? $options['authfield'] : false;

			if ($is_extended_key && $is_authfield) {
				if (isset($networks_same_authentication[$default_options_key])) {
					continue;
				}
			}

			if ($field_type == "textbox") {
				ESSBOptionsStructureHelper::field_textbox_stretched($tab_id, $menu_id, $field_id, $field_text, $field_description);
			}
			if ($field_type == "select") {
				ESSBOptionsStructureHelper::field_select($tab_id, $menu_id, $field_id, $field_text, $field_description, $field_values);
			}
		}
		
		ESSBOptionsStructureHelper::panel_end($tab_id, $menu_id);
	}
}

function essb_prepare_social_profiles_fields($tab_id, $menu_id) {

	foreach (essb_available_social_profiles() as $key => $text) {
		ESSBOptionsStructureHelper::panel_start($tab_id, $menu_id, $text, __('Configure social network details', 'essb'), 'fa21 fa fa-cogs', array("mode" => "toggle", "state" => "closed"));
		
		ESSBOptionsStructureHelper::field_textbox_stretched($tab_id, $menu_id, 'profile_'.$key, __('Full address to profile', 'essb'), __('Enter address to your profile in social network', 'essb'));
		ESSBOptionsStructureHelper::field_textbox_stretched($tab_id, $menu_id, 'profile_text_'.$key, __('Display text with icon', 'essb'), __('Enter custom text that will be displayed with link to your social profile. Example: Follow us on '.$text, 'essb'));
		ESSBOptionsStructureHelper::panel_end($tab_id, $menu_id);
	}
}

