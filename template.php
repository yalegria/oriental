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
        if (($node = menu_get_object()) && $node->type == 'lp1') {
    		// Generate a render array for the node.
    		$view = node_view($node);
    		// "Create" a new variable for the page.tpl.php.
    		// This will expose $VAR_NAME in the page template.
    		// You will most likely have to clear your cache.

    		$variables['field_lp1_header_image'] = drupal_render($view['field_lp1_header_image']);

                if (!empty($view['field_lp1_image_1'])) { $variables['field_lp1_image_1'] = drupal_render($view['field_lp1_image_1']); } 
                $variables['field_lp1_image_1_title'] = drupal_render($view['field_lp1_image_1_title']); 
                $variables['field_lp1_image_1_link'] = $view['field_lp1_image_1_link']['#items'][0]['url']; 
                $variables['field_lp1_image_1_text'] = drupal_render($view['field_lp1_image_1_text']); 

                $variables['field_lp1_image_2'] = drupal_render($view['field_lp1_image_2']); 
                $variables['field_lp1_image_2_title'] = drupal_render($view['field_lp1_image_2_title']); 
                $variables['field_lp1_image_2_link'] = $view['field_lp1_image_2_link']['#items'][0]['url']; 
                $variables['field_lp1_image_2_text'] = drupal_render($view['field_lp1_image_2_text']); 

                $variables['field_lp1_image_3'] = drupal_render($view['field_lp1_image_3']); 
                $variables['field_lp1_image_3_title'] = drupal_render($view['field_lp1_image_3_title']); 
                if (!empty($view['field_lp1_image_3_link']['#items'][0]['url'])) { $variables['field_lp1_image_3_link'] = $view['field_lp1_image_3_link']['#items'][0]['url']; }
                $variables['field_lp1_image_3_text'] = drupal_render($view['field_lp1_image_3_text']); 
              
                $variables['field_lp1_image_4'] = drupal_render($view['field_lp1_image_4']); 
                $variables['field_lp1_image_4_title'] = drupal_render($view['field_lp1_image_4_title']); 
                if (!empty($view['field_lp1_image_4_link']['#items'][0]['url'])) { $variables['field_lp1_image_4_link'] = $view['field_lp1_image_4_link']['#items'][0]['url']; }
                $variables['field_lp1_image_4_text'] = drupal_render($view['field_lp1_image_4_text']); 

  	}
  	if (($node = menu_get_object()) && $node->type == 'lp2') {
    		// Generate a render array for the node.
    		$view = node_view($node);
    		// "Create" a new variable for the page.tpl.php.
    		// This will expose $VAR_NAME in the page template.
    		// You will most likely have to clear your cache.

    		$variables['field_lp2_header_image'] = drupal_render($view['field_lp2_header_image']);

		if (!empty($view['field_lp2_link_1'])) { $variables['field_lp2_link_1'] = $view['field_lp2_link_1']['#items'][0]['url']; }
                $variables['field_lp2_link_1_text'] = drupal_render($view['field_lp2_link_1_text']);

                if (!empty($view['field_lp2_link_2'])) { $variables['field_lp2_link_2'] = $view['field_lp2_link_2']['#items'][0]['url']; }
                $variables['field_lp2_link_2_text'] = drupal_render($view['field_lp2_link_2_text']);

  	        if (!empty($view['field_lp2_link_3'])) { $variables['field_lp2_link_3'] = $view['field_lp2_link_3']['#items'][0]['url']; }
                $variables['field_lp2_link_3_text'] = drupal_render($view['field_lp2_link_3_text']);

  	        if (!empty($view['field_lp2_link_4'])) { $variables['field_lp2_link_4'] = $view['field_lp2_link_4']['#items'][0]['url']; }
                $variables['field_lp2_link_4_text'] = drupal_render($view['field_lp2_link_4_text']);
  	}
}

