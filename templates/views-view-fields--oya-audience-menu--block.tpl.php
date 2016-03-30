<?php //dpm($fields); 
$rawTitle = str_replace(' ','-',$fields['title']->raw); 
?> 
<div class="audienceBox"> 
    <div class="title-bg" data-id="<?php print $rawTitle; ?>"><?php print $fields['title']->content; ?></div>
    <?php print $fields['field_audience_image']->content; ?>
</div>

<div class="audienceInfoBox hiddenContainer row no-gutter" id="<?php print $rawTitle; ?>">
    <div class="iconContainer hidden-sm col-md-3">
        <?php print $fields['field_icon_image']->content; ?>
	<?php if($fields['field_icon_image_caption']) print $fields['field_icon_image_caption']->content; ?>  
    </div>
    <div class="audienceInfoContent col-sm-12 col-md-9">
	<?php /*
 	<?php print $fields['field_headline']->content; ?>
	<?php if ($fields['body']) print $fields['body']->content; ?>
        */ ?>
        <?php print $fields['field_audience_body_flyout']->content; ?>
    </div>
</div>


