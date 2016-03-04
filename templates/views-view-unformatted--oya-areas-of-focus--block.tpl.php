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
<?php
  $count = 1; 
  foreach ($rows as $id => $row): 
?>
<?php
    if ($count % 3 == 1): ?>
    <div class="row-items">
 <?php endif; ?>
      <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] . 'col-md-4 col-sm-4 col-xs-12' . '"';  } ?>>
      <?php print $row; ?>
      </div>
<?php if ($count % 3 == 0): ?>
     </div>
<?php endif;
   $count++;
?> 
<?php endforeach; ?>

<?php if($count % 3 != 1): ?>
</div>
<?php endif; ?>
