<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function oriental_preprocess_page(&$variables) {
	/*** Add JS to site ***/
	drupal_add_js(drupal_get_path('theme','oriental').'/js/audience_menu.js');

	/*** Enable to use cutom page templates ***/
	if (isset($variables['node']->type)) {
    		// If the content type's machine name is "my_machine_name" the file
    		// name will be "page--my-machine-name.tpl.php".
    		$variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
  	}


	$variables['VAR_NAME'] = '';
  	// Get the object and do some other checks based on what you need.
  	if (($node = menu_get_object()) && $node->type == 'lp2') {
    		// Generate a render array for the node.
    		$view = node_view($node);
    		// "Create" a new variable for the page.tpl.php.
    		// This will expose $VAR_NAME in the page template.
    		// You will most likely have to clear your cache.
		var_dump($view['field_lp2_link_1']);
    		$variables['field_lp2_header_image'] = drupal_render($view['field_lp2_header_image']);
		//$variables['field_lp2_link_1'] = drupal_render($view['field_lp2_link_1']);
		$variables['field_lp2_link_1'] = drupal_render($node->field_lp2_link_1['und']['0']['url']);
                $variables['field_lp2_link_1_text'] = drupal_render($view['field_lp2_link_1_text']);
  	}
}

