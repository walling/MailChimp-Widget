<?php

$widget = $before_widget . $before_title . $instance['title'] . $after_title;

if ($this->successful_signup) {
	
	$widget .= $this->signup_success_message;
	
} else {
	
	$collect_first = '';
	
	if ($instance['collect_first']) {
		
		$collect_first = '<label>' . __('First Name :', 'mailchimp-widget') . '<input type="text" name="' . $this->id_base . '_first_name" /></label><br />';
		
	}
	
	$collect_last = '';
	
	if ($instance['collect_last']) {
		
		$collect_last = '<label>' . __('Last Name :', 'mailchimp-widget') . '<input type="text" name="' . $this->id_base . '_last_name" /></label><br />';
		
	}

	$widget .= '<form action="' . $_SERVER['REQUEST_URI'] . '" id="' . $this->id_base . '_form-' . $this->number . '" method="post">' . $this->subscribe_errors . $collect_first . $collect_last . '<label>' . __('Email Address :', 'mailchimp-widget') . '</label><input type="hidden" name="ns_mc_number" value="' . $this->number . '" /><input type="text" name="' . $this->id_base . '_email" /><input class="button" type="submit" name="' . __($instance['signup_text'], 'mailchimp-widget') . '" value="' . __($instance['signup_text'], 'mailchimp-widget') . '" /></form><script type="text/javascript"> jQuery(\'#' . $this->id_base . '_form-' . $this->number . '\').ns_mc_widget({"url" : "' . $_SERVER['PHP_SELF'] . '", "cookie_id" : "'. $this->id_base . '-' . $this->number . '", "cookie_value" : "' . $this->hash_mailing_list_id() . '", "loader_graphic" : "' . $this->default_loader_graphic . '"}); </script>';
	
}

$widget .= $after_widget;

echo $widget;

?>