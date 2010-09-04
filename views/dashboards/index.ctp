<div id="content">
		<div class="content-inside">
			<div class="banner" id="slider">
				<?php foreach($banners as $banner): ?>
								<?php
								$image = $phpthumb->generate(
								array(
									'save_path' => WWW_ROOT . '/img/thumbs',
									'display_path' => '/img/thumbs',
									'error_image_path' => '/img/noimg.jpg', 
									'src' => $banner['Banner']['file'],
									// From here on out, you can pass any standard phpThumb parameters
									'w' => 980,
									'h' => 310,
									'q' => 100,
									'zc' => 1
									)
								);
								?>
								<?php echo $this->Html->link($this->Html->image($image['src']),$banner['Banner']['link'],array('escape' => false,'target' => '_blank')); ?>
							<?php endforeach; ?>
			</div>
			
			<div class="featuredBox">
				<?php echo $this->Html->image('/img/arrow-left.jpg',array('class' => 'scrollArrow prev','alt' => ''))?>
				<div class="featuredContent">
				<div class="featuredDisplayDiv">
					<ul>
							<?php foreach($featureds as $featured):?>
							<?php
							$image = $phpthumb->generate(
								array(
									'save_path' => WWW_ROOT . '/img/thumbs',
									'display_path' => '/img/thumbs',
									'error_image_path' => '/img/noimg.jpg', 
									'src' => $featured['Featured']['file'],
									// From here on out, you can pass any standard phpThumb parameters
									'q' => 100,
									'f' => 'png'
								)
							);
							?>
							<!--===========Start============-->
								<li> 
								<div class="summaryBlock">
									<a href="<?php echo $featured['Featured']['link']?>">
										<span class="featuredImage">  
											<h5><?php echo $featured['Featured']['title']?></h5>
											<?php echo $featured['Featured']['content']?>
											<?php echo $this->Html->image($image['src'],array('alt' => '','class' => 'one-one'))?>	
										</span>
									</a>
								</div>
								</li>   
							<?php endforeach;?>      
							<!--===========End============-->
					</ul>
				</div>
				</div>
				<?php echo $this->Html->image('/img/arrow-right.jpg',array('class' => 'scrollArrow next','alt' => ''))?>
			</div>
			<!--// FEATURED END //-->
			<div class="home-panel">
				<div class="home-panel-left">
					<h2>Why Vertizon ?</h2>
					<ul class="why">
						<li class="first">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec felis sapien, laoreet faucibus erat.</li>
						<li class="second">Nunc luctus velit fermentum augue feugiat consequat. Nulla libero ante, pellentesque eget euismod vel.</li>
						<li class="third">ultrices nec nibh. Quisque eu posuere eros. Fusce porta, magna lobortis rutrum dictum, ante justo ornare eros.</li>
					<ul>
					<a href="about/" class="more ft-right">See More</a>
				</div>
				<div class="home-panel-right">
					<h2 style=" padding-bottom: 7px;">Latest News</h2>
					<?php foreach($news as $new):?>
					<div class="latest-news">
						<h4>
							<?php echo $this->Html->link($new['Content']['title'],array('controller' => 'contents','action' => 'view',$new['Content']['id']))?>
						</h4>
						<h6>
							<?php echo $this->Time->nice($new['Content']['created'])?>
						</h6>
						<p>
							<?php echo $this->Text->truncate($new['Content']['content'],200,array('ending' => '','exact' => false))?>
							<?php echo $this->Html->link('[...]',array('controller' => 'contents','action' => 'view',$new['Content']['id']))?>
						</p>
					</div>
					<?php endforeach;?>
					<?php echo $this->Html->link('See More',array('controller' => 'contents','action' => 'index','news'),array('class' => 'more'))?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>