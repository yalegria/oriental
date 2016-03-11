<?php //dpm($fields); ?>
<?php /*
<div class="areaBox">
    <?php print $fields['field_areaoffocus_image']->content; ?>
    <div class="areaInfoBox">
        <?php print $fields['title']->content; ?>
        <?php print $fields['field_areaoffocus_subtext']->content; ?>
        <!-- div class="title-bg"></div -->
	<div class="learnMore"><?php print $fields['view_node']->content; ?></div>
    </div>
</div>
*/ ?>

<div class="image-btn-montainer">
    <div class="image-btn-container">
	<?php print $fields['field_areaoffocus_image']->content; ?>
    </div>
    <div class="image-btn-hover-container">
	<div class="field">							<?php /* comply w/LP1 markup */ ?>
            <div class="field-item">						<?php /* comply w/LP1 markup */ ?>
		<?php print $fields['title']->content; ?>
            </div>								<?php /* comply w/LP1 markup */ ?>
	</div>									<?php /* comply w/LP1 markup */ ?>
        <hr class="divider hidden-xs">
        <div class="img-text hidden-xs">
            <div class="field">							<?php /* comply w/LP1 markup */ ?>
		<div class="field-item">					<?php /* comply w/LP1 markup */ ?>	
       	    	    <?php print $fields['field_areaoffocus_subtext']->content; ?>
 		</div>								<?php /* comply w/LP1 markup */ ?>
	    </div>								<?php /* comply w/LP1 markup */ ?>
        </div>
        <div class="read-more hidden-xs">
	    <?php print $fields['view_node']->content; ?>
        </div>
    </div>
</div>


