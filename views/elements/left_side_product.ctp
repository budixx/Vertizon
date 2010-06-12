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
					<div class="grid">
						<div class="grid-icon"><a href="#"><img src="images/keyboard.png" alt="icon" style="margin-top: 8px;"></a></div>
						<div class="grid-content">
							<a href="#" class="blue block mr-top">Keyboard</a>
							<p class="mr-top">See our complete give package Personal Computer.</p>
						</div>
						<div class="clear"></div>
					</div>
					<div class="grid">
						<div class="grid-icon"><a href="#"><img src="images/Mouse.png" alt="icon" style="margin-left: 20px;"></a></div>
						<div class="grid-content">
							<a href="#" class="blue block mr-top">Mouse</a>
							<p class="mr-top">See our complete give package Personal Computer.</p>
						</div>
						<div class="clear"></div>
					</div>
					<div class="grid">
						<div class="grid-icon"><a href="#"><img src="images/Chipset.png" alt="icon"></a></div>
						<div class="grid-content">
							<a href="#" class="blue block mr-top">Chipset</a>
							<p class="mr-top">See our complete give package Personal Computer.</p>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="border-horizontal"></div>
				
				<!--Download Catalog-->
				<h2>Download Catalog</h2>
				<img src="images/ic-catalog.jpg" alt="catalog" class="ft-left">
				<p style="padding: 10px 0 0 110px;">Download the latest issue of our products. We always give the best we could.</p>
				<a href="#" style="margin: 0 0 0 5px;"><img src="images/download.jpg" alt="download"></a>
				<div class="clear"></div>
				
			</div>