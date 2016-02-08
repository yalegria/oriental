<?php dpm($fields); ?>

<div class="areaBox">
    <?php print $fields['field_areaoffocus_image']->content; ?>
    <div class="areaInfoBox">
        <?php print $fields['title']->content; ?>
        <?php print $fields['field_areaoffocus_subtext']->content; ?>
        <!-- div class="title-bg"></div -->
	<div class="learnMore"><?php print $fields['view_node']->content; ?></div>
    </div>
</div>



