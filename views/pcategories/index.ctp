	<?php echo $this->element('small_banner');?>
	<div id="content">
		<div class="content-inside">
			<?php echo $this->element('left_side')?>
			
			<!--RIGHT SIDE-->
			<div class="inside-right">
				<p class="breadcrumb">Categories</p>
				<div class="dashline mr-top"></div>
				
				<?php foreach($pcategories as $pcategory):?>
				<div class="category-interm">
					<div class="interm-title">
						<h3><?php echo $pcategory['Pcategory']['name']?></h3>
					</div>
					<div class="interm-body">
						<?php
								$thumbnail = $phpthumb->generate(
								array(
									'save_path' => WWW_ROOT . '/img/thumbs',
									'display_path' => '/img/thumbs',
									'error_image_path' => '/img/noimg.jpg', 
									'src' => $pcategory['Pcategory']['file'],
									// From here on out, you can pass any standard phpThumb parameters
									'w' => 198,
									'h' => 198,
									'q' => 100,
									'zc' => 1
									)
								);
								?>
						<?php echo $this->Html->link($this->Html->image($thumbnail['src'],array('alt' => 'product')),array('controller' => 'pbrands','action' => 'index',$pcategory['Pcategory']['slug']),array('escape' => false))?>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<div class="clear"></div>
		</div>
	</div>