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
<?php $i = 0;
      $len = count($rows); 
?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
  <?php if ($i != $len -1): ?>
  <hr class="hrcenter">
  <?php endif; ?>
  <?php $i++; ?>
<?php endforeach; ?>
