<?php echo $this->element('small_banner')?>
	<div id="content">
		<div class="content-inside">
			<!--LEFT SIDE-->
			<?php echo $this->element('left_side');?>
			
			<!--RIGHT SIDE-->
			<div class="inside-right">
				<p class="breadcrumb">Home &nbsp;/&nbsp; <abbr><?php echo $menus['Menus']['name']?></abbr></p>
				<div class="dashline mr-top"></div>
				<br>
				<?php echo $menus['Menus']['content']?>
			</div>
			<div class="clear"></div>
		</div>
	</div>