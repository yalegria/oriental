<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php //print $output; ?>
<?php 
	$oya_event_calendar_date = strtotime($row->field_event_calendar_date[0]['raw']['value']);
	$oya_event_month = format_date($oya_event_calendar_date, 'custom', 'M');
	$oya_event_day = format_date($oya_event_calendar_date, 'custom', 'd');
?>        
<div class="oya-event-calendar-date">        
	<span class="oya-event-month"><?php print $oya_event_month; ?></span>
	<span class="oya-event-day"><?php print $oya_event_day; ?></span>
</div>
