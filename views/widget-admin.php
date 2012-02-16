<?php

$form = '<h3>' . __('General Settings', 'mailchimp-widget') . '</h3><p><label>' . __('Title :', 'mailchimp-widget') . '<input class="widefat" id=""' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></label></p>';

$form .= '<p><label>' . __('Select a Mailing List :', 'mailchimp-widget') . '';

$form .= '<select class="widefat" id="' . $this->get_field_id('current_mailing_list') . '" name="' . $this->get_field_name('current_mailing_list') . '">';

foreach ($this->lists['data'] as $key => $value) {
	
	$selected = (isset($current_mailing_list) && $current_mailing_list == $value['id']) ? ' selected="selected" ' : '';
	
	$form .= '<option ' . $selected . 'value="' . $value['id'] . '">' . __($value['name'], 'mailchimp-widget') . '</option>';
	
}

$form .= '</select></label></p><p><strong>N.B.</strong> ' . __('This is the list your users will be signing up for in your sidebar.', 'mailchimp-widget') . '</p>';

$form .= '<p><label>' . __('Sign Up Button Text :', 'mailchimp-widget') . '<input class="widefat" id="' . $this->get_field_id('signup_text') .'" name="' . $this->get_field_name('signup_text') . '" value="' . $signup_text . '" /></label></p>';

$form .= '<h3>' . __('Personal Information', 'mailchimp-widget') . '</h3><p>' . __("These fields won't (and shouldn't) be required. Should the widget form collect users' first and last names?", 'mailchimp-widget') . '</p><p><input type="checkbox" class="checkbox" id="' . $this->get_field_id('collect_first') . '" name="' . $this->get_field_name('collect_first') . '" ' . checked($collect_first, true, false) . ' /> <label for="' . $this->get_field_id('collect_first') . '" >' . __('Collect first name.', 'mailchimp-widget') . '</label><br /><input type="checkbox" class="checkbox" id="' . $this->get_field_id('collect_last') . '" name="' . $this->get_field_name('collect_last') . '" ' . checked($collect_last, true, false) . ' /> <label>' . __('Collect last name.', 'mailchimp-widget') . '</label></p>';

$form .= '<h3>' . __('Notifications', 'mailchimp-widget') . '</h3><p>' . __('Use these fields to customize what your visitors see after they submit the form', 'mailchimp-widget') . '</p><p><label>' . __('Success :', 'mailchimp-widget') . '<textarea class="widefat" id="' . $this->get_field_id('success_message') . '" name="' . $this->get_field_name('success_message') . '">' . $success_message . '</textarea></label></p><p><label>' . __('Failure :', 'mailchimp-widget') . '<textarea class="widefat" id="' . $this->get_field_id('failure_message') . '" name="' . $this->get_field_name('failure_message') . '">' . $failure_message . '</textarea></label></p>';

echo $form;

?>