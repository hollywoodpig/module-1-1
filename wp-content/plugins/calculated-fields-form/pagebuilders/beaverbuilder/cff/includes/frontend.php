<?php
$form = $settings->form_id;
if(!empty($form))
{
	$output = '[CP_CALCULATED_FIELDS id="'.$form.'"';

	$class_name = $settings->class_name;
	if(!empty($class_name)) $output .= ' class="'.esc_attr($class_name).'"';

	$attributes = $settings->attributes;
	if(!empty($attributes)) $output .= ' '.$attributes;

	$output .= ']';
	echo $output;
}