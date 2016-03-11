<?php //dpm($fields); 
$rawTitle = str_replace(' ','-',$fields['title']->raw); 
?> 
<div class="audienceBox"> 
    <div class="title-bg" data-id="<?php print $rawTitle; ?>"><?php print $fields['title']->content; ?></div>
    <?php print $fields['field_audience_image']->content; ?>
</div>

<div class="audienceInfoBox hiddenContainer" id="<?php print $rawTitle; ?>">
    <div class="iconContainer">
        <?php print $fields['field_icon_image']->content; ?>
	<?php if($fields['field_icon_image_caption']) print $fields['field_icon_image_caption']->content; ?>  
    </div>
    <div class="audienceInfoContent">
 	<?php print $fields['field_headline']->content; ?>
	<?php if ($fields['body']) print $fields['body']->content; ?>
    </div>
</div>


