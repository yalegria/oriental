<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] . ' audienceContainer col-md-2 col-sm-2' . '"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
<br style="clear:both">


