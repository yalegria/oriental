jQuery(document).ready( function() {
	/* Areas of Focus Functionality */
	jQuery('body.front #see-more-aof').click(function () {
		jQuery('.row-items:nth-child(2)').slideDown("slow",function() {
			jQuery('#see-more-aof').attr("href","/content/areas-focus");
			jQuery('#see-more-aof .see-more-text').html("See All");

		});
	});


        /* Audience Menu Functionality */
	var audienceInfoBox;
	jQuery('body.front .audienceBox .title-bg').stop().hover(function () {
		audienceInfoBox = jQuery(this).data("id");

		jQuery("#" + audienceInfoBox).show();
                jQuery("#" + audienceInfoBox).mouseover(function() {
			jQuery("#" + audienceInfoBox).css("display","block");
		});
                jQuery("#" + audienceInfoBox).mouseout(function() {
			jQuery("#" + audienceInfoBox).css("display","none");
		});



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


