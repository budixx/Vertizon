	<?php echo $this->element('small_banner')?>
	<div id="content">
		<div class="content-inside">
			<?php echo $this->element('left_side')?>
			
			<!--RIGHT SIDE-->
			<div class="inside-right">
				<p class="breadcrumb">
					<?php 
						$this->Html->addCrumb('Categories',array('controller' => 'pcategories','action' => 'index'));
						$this->Html->addCrumb($pcategory['Pcategory']['name'],array('controller' => 'pbrands','action' => 'index',$pcategory['Pcategory']['slug']));
						$this->Html->addCrumb($ptype['Pbrand']['name'],array('controller' => 'pbrands','action' => 'index',$pcategory['Pcategory']['slug']));
						$this->Html->addCrumb($ptype['Ptype']['name'],array('controller' => 'products','action' => 'index',$ptype['Ptype']['slug']));
						$this->Html->addCrumb($product['Product']['name']);
					?>
					<?php echo $this->Html->getCrumbs(' / ');?>
				</p>
				<div class="dashline mr-top"></div>
				
				<h2 class="mr-top"><?php echo $product['Product']['name']?></h2>
				<div class="product-item-area2">
					<div class="product-item2">
						<?php 
						$large = $phpthumb->generate(
											array(
												'save_path' => WWW_ROOT . '/img/thumbs',
												'display_path' => '/img/thumbs',
												'error_image_path' => '/img/error.jpg',
												'src' => $product['Photo'][0]['file'],
												// From here on out, you can pass any standard phpThumb parameters
												'w' => 440, 
												'h' => 415,
												'q' => 100,
												'aoe' => 1
											)
										);
						?>
						<span>
							<?php echo $this->Html->image($large['src'],array('alt' => 'Large image','id' => 'largeImg2'))?>
						</span>
					</div>
					<div class="thumbs2">
								<?php foreach($product['Photo'] as $photo):?>
								<?php 
								$big = $phpthumb->generate(
											array(
												'save_path' => WWW_ROOT . '/img/thumbs',
												'display_path' => '/img/thumbs',
												'error_image_path' => '/img/error.jpg',
												'src' => $photo['file'],
												// From here on out, you can pass any standard phpThumb parameters
												'w' => 440, 
												'h' => 415,
												'q' => 100,
												'aoe' => 1
											)
										);
										
								$thumbnail = $phpthumb->generate(
											array(
												'save_path' => WWW_ROOT . '/img/thumbs',
												'display_path' => '/img/thumbs',
												'error_image_path' => '/img/error.jpg',
												'src' => $photo['file'],
												// From here on out, you can pass any standard phpThumb parameters
												'w' => 81, 
												'h' => 81,
												'q' => 100,
												'zc' => 1
											)
										);
								
								echo $this->Html->link($this->Html->image($thumbnail['src'], array('width' => $thumbnail['w'], 'height' => $thumbnail['h'])),$big['src'],array('escape' => false));
								?>
						<?php endforeach;?>
					</div>
					<div class="clear"></div>
				</div>
				
				<?php echo $product['Product']['desc']?>
			</div>
			<div class="clear"></div>
		</div>
	</div>