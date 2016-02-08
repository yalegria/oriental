jQuery(document).ready( function() {
	var audienceInfoBox;
	jQuery('.audienceBox .title-bg').stop().hover(function () {
		audienceInfoBox = jQuery(this).data("id");
		jQuery("#" + audienceInfoBox).show();
               	//jQuery(".view-oya-audience-menu").animate({ "height": '+=' + 200 + 'px' }, "slow");
 		jQuery(this).parents(".view-oya-audience-menu").css("height",430);
		jQuery('.audienceBox .title-bg').not(this).css("background","#246773");
		var thisLink = jQuery(this).find("a");
		jQuery('.audienceBox .title-bg a').not(thisLink).css("color","#C4C2C0");
		
	}, function() {
		audienceInfoBox = jQuery(this).data("id");
                jQuery("#" + audienceInfoBox).hide();
                //jQuery(".view-oya-audience-menu").animate({ "height": '-=' + 200 + 'px' }, "slow");
 		jQuery(this).parents(".view-oya-audience-menu").css("height",274);
		jQuery('.audienceBox .title-bg').css("background","#12A6B8");
		jQuery('.audienceBox .title-bg a').css("color","#FFF");
		
	});
});


