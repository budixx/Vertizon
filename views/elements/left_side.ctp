<!--LEFT SIDE-->
			<div class="inside-left">
				<h2>Quick Links</h2>
				<div class="accordion2">
					<?php foreach ($left_categories as $category):?>
						<h3><?php echo $this->Html->link($category['Pcategory']['name'],array('controller' => 'pcategories','action' => 'index',$category['Pcategory']['id']))?></h3>
						<ul class="sub">
						<?php if($category['Pcategory']['id'] == empty($left_category) ? null : $left_category):?>
							<?php foreach($category['Pbrand'] as $brand):?>
								<li>
									<?php echo $this->Html->link($brand['name'],array('controller' => 'pbrands','action' => 'index',$brand['id']))?>
								</li>
							<?php endforeach;?>
						<?php endif;?>
						</ul>
					<?php endforeach;?>
				</div>
				<div class="border-horizontal"></div>
				
				<!--Product-->
				<h2>Featured Products</h2>
				<div class="grider">
					<?php foreach($left_featureds as $featured):?>
					<?php 
						$icon = $phpthumb->generate(
											array(
												'save_path' => WWW_ROOT . '/img/thumbs',
												'display_path' => '/img/thumbs',
												'error_image_path' => '/img/error.jpg',
												'src' => $featured['Product']['file'],
												// From here on out, you can pass any standard phpThumb parameters
												'q' => 100,
												'f' => 'png'
											)
										);
						?>
					<div class="grid">
						<div class="grid-icon">
							<?php echo $this->Html->link($this->Html->image($icon['src'],array('alt' => 'icon','style' => 'margin-top:8px')),array('controller' => 'products','action' => 'view',$featured['Product']['id']),array('escape' => false))?>
						</div>
						<div class="grid-content">
							<?php echo $this->Html->link($featured['Product']['name'],array('controller' => 'products','action' => 'view',$featured['Product']['id']),array('class' => 'blue block mr-top'))?>
							<p class="mr-top"><?php echo $this->Html->link('See the complete description.',array('controller' => 'products','action' => 'view',$featured['Product']['id'])) ?></p>
						</div>
						<div class="clear"></div>
					</div>
					<?php endforeach;?>
				</div>
				<div class="border-horizontal"></div>
				
				<!--Download Catalog-->
				<h2>Download Catalog</h2>
				<?php echo $this->Html->image('/img/ic-catalog.jpg',array('alt' => 'catalog','class' => 'ft-left'))?>
				<p style="padding: 10px 0 0 110px;">Download the latest issue of our products. We always give the best we could.</p>
				<a href="#" style="margin: 0 0 0 5px;">
					<?php echo $this->Html->image('/img/download.jpg',array('alt' => 'download'))?>
				</a>
				<div class="clear"></div>
				
			</div>