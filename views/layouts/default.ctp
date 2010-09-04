<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('Vertizon Global Technology: '); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->css(array('haccordion','screen','/js/nivo/nivo-slider','/js/nivo/style-pack/custom-nivo-slider'));
	?>
</head>
<body class="<?php echo empty($body) ? '' : $body;?>">
	<?php echo $this->element('navigation'); ?> 
	<?php echo $this->Session->flash(); ?>
	<?php echo $content_for_layout; ?>
	<?php echo $this->element('footer');?>
	<?php echo $this->element('sql_dump'); ?>
	<?php 
		echo $this->Javascript->link(array('jquery','jquery_002','mainpage_foot','jquery.fancybox/jquery.fancybox-1.2.1.pack','nivo/jquery.nivo.slider.pack'));
	?>
	<!--[if IE]> 
		<?php echo $this->Javascript->link(array('DD_belated','jqueyr.dropdown'));?>
	<![endif]-->
	<script type="text/javascript">
	$(document).ready(function(){
	
		$(".thumbs a").click(function(){
		
			var largePath = $(this).attr("href");
			var largeAlt = $(this).attr("title");
			
			$("#largeImg").attr({ src: largePath, alt: largeAlt });
			
			 return false;
		});
		
	});
	
	$(document).ready(function(){
		
		$(".accordion h3").eq(0).addClass("active");
		$(".accordion p").eq(0).show();
	
		$(".accordion h3").click(function(){
			$(this).next("p").slideToggle("slow")
			.siblings(".ads:visible").slideUp("slow");
			$(this).toggleClass("active");
			$(this).siblings("h3").removeClass("active");
		});
	
	});
	
	$(document).ready(function(){
			
		$(".accordion2 h3").eq(0).addClass("active");
		$(".accordion2 ul.sub").eq(0).show();
	
		$(".accordion2 h3").click(function(){
			$(this).next("ul.sub").slideToggle("slow")
			.siblings("ul.sub:visible").slideUp("slow");
			$(this).toggleClass("active");
			$(this).siblings("h3").removeClass("active");
		});
	
	});
	
	$(document).ready(function(){
	
		$(".thumbs2 a").click(function(){
		
			var largePath = $(this).attr("href");
			var largeAlt = $(this).attr("title");
			
			$("#largeImg2").attr({ src: largePath, alt: largeAlt });
			
			 return false;
		});
		
	});
	
	$(document).ready(function(){
	
		$(".thumbs3 .asd a").click(function(){
		
			var largePath = $(this).attr("href");
			var largeAlt = $(this).attr("title");
			
			$("#largeImg3").attr({ src: largePath, alt: largeAlt });
			
			 return false;
		});
		
	});
	
	$(document).ready(function() {
		$("a.pict").fancybox();
	});

	$(window).load(function() {
		$('#slider').nivoSlider({
			effect:'random', //Specify sets like: 'fold,fade,sliceDown'
			slices:15,
			animSpeed:500,
			pauseTime:3000,
			startSlide:0, //Set starting Slide (0 index)
			directionNav:true, //Next & Prev
			directionNavHide:true, //Only show on hover
			controlNav:true, //1,2,3...
			controlNavThumbs:false, //Use thumbnails for Control Nav
	     	 controlNavThumbsFromRel:false, //Use image rel for thumbs
			controlNavThumbsSearch: '.jpg', //Replace this with...
			controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
			keyboardNav:true, //Use left & right arrows
			pauseOnHover:true, //Stop animation while hovering
			manualAdvance:false, //Force manual transitions
			captionOpacity:0.8, //Universal caption opacity
			beforeChange: function(){},
			afterChange: function(){},
			slideshowEnd: function(){} //Triggers after all slides have been shown
		})
	})	
	</script>
</body>
</html>