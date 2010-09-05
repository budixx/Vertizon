	<?php echo $this->element('small_banner')?>
	<div id="content">
		<div class="content-inside">
			<!--LEFT SIDE-->
			<?php echo $this->element('left_side')?>
			<!--RIGHT SIDE-->
			<div class="inside-right">
				<p class="breadcrumb">
					<?php 
						$this->Html->addCrumb('Categories',array('controller' => 'pcategories','action' => 'index'));
						$this->Html->addCrumb($pcategory['Pcategory']['name']);
					?>
					<?php echo $this->Html->getCrumbs(' / ');?>
				</p>
				<div class="dashline mr-top"></div>
				<!--sort by-->
				<div class="sortby-panel">
					<h3>Sort by</h3>
					<p>( Please select category by Name, Latest Created, Or Latest Modified )</p>
					<select class="mr-top">
						<option>Name</option>
						<option>Latest Created</option>
						<option>Latest Modified</option>
					</select>
				</div>
				<?php foreach($pbrands as $pbrand):?>
				<?php
					$image = $phpthumb->generate(
						array(
							'save_path' => WWW_ROOT . '/img/thumbs',
							'display_path' => '/img/thumbs',
							'error_image_path' => '/img/noimg.jpg', 
							'src' => $pbrand['Pbrand']['file'],
							// From here on out, you can pass any standard phpThumb parameters
							'w' => 100,
							'h' => 100,
							'q' => 100,
							'zc' => 1
						)
					);
				?>
				<div class="brand-area">
					<div class="brand-top">
						<p class="brand-name"><?php echo $pbrand['Pbrand']['name']?></p>
					</div>
					<div class="brand-middle">
						<div class="image-brand">
							<?php echo $this->Html->image($image['src'],array('alt' => $pbrand['Pbrand']['name'],'id' => 'largeImg3'));?>
						</div>
						<div class="thumbs3">
							<?php foreach($pbrand['Ptype'] as $ptype):?>
							<div class="ft-left">
								<span>
									<?php echo $this->Html->link('<p class="active">'.$ptype['name'].'</p>',array('controller' => 'products','action' => 'index',$ptype['slug']),array('escape' => false))?>
								</span>
								<?php echo $this->Html->link('See Details',array('controller' => 'products','action' => 'index',$ptype['slug']))?>
							</div>
							<?php endforeach;?>
						</div>
						<div class="clear"></div>
					</div>
					<div class="brand-bottom"></div>
				</div>
				<?php endforeach;?>
				
			</div>
			<div class="clear"></div>
		</div>
	</div>