<div id="content">
		<div class="content-inside">
			<div class="banner">
				<p>
					<?php
					$large = $phpthumb->generate(
						array(
							'save_path' => WWW_ROOT . '/img/thumbs',
							'display_path' => '/img/thumbs',
							'error_image_path' => '/img/noimg.jpg', 
							'src' => $banners[0]['Banner']['file'],
							// From here on out, you can pass any standard phpThumb parameters
							'w' => 980,
							'h' => 310,
							'q' => 100,
							'zc' => 1
						)
					);
					?>
					<?php echo $this->Html->image($large['src'],array('id' => 'largeImg','alt' => 'Large image'))?>
				</p>
				<div class="thumbs">
				<?php 
					$i = 0;
					foreach($banners as $banner):
				?>
					<?php
						$banner = $phpthumb->generate(
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
					<?php if($i++ == 0):?>
						<?php echo $this->Html->link('<p class="active"></p>',$banner['src'],array('escape' => false));?>
					<?php else:?>
						<?php echo $this->Html->link('<p></p>',$banner['src'],array('escape' => false));?>
					<?php endif;?>
				<?php endforeach;?>
				</div>
			</div>
			
			<div class="featuredBox">
				<img class="scrollArrow prev" src="images/arrow-left.jpg" alt="">
				<div class="featuredContent">
				<div class="featuredDisplayDiv">
					<ul>
					
							<!--===========Start============-->
								<li> 
								<div class="summaryBlock">
									<a href="#">
										<span class="featuredImage">  
											<h5>ALUMINIUM CHASSIS</h5>
											Produce competitive 
											<br>and good quality 
											<br>products	
											<img border="0" src="assets/1.gif" alt="" class="one-one" >
										</span>
									</a>
								</div>
								</li>         
							<!--===========End============-->
							
							<!--===========Start============-->
								<li> 
								<div class="summaryBlock">
									<a href="#">
										<span class="featuredImage">  
											<h5>CASE</h5>
											Produce competitive 
											<br>and good quality 
											<br>products	
											<img border="0" src="assets/2.gif" alt="" class="one-one" >
										</span>
									</a>
								</div>
								</li>         
							<!--===========End============-->
							
							<!--===========Start============-->
								<li> 
								<div class="summaryBlock">
									<a href="#">
										<span class="featuredImage">  
											<h5>CASE FANS</h5>
											Produce competitive 
											<br>and good quality 
											<br>products	
											<img border="0" src="assets/3.gif" alt="" class="one-one" >
										</span>
									</a>
								</div>
								</li>         
							<!--===========End============-->
							
							<!--===========Start============-->
								<li> 
								<div class="summaryBlock">
									<a href="#">
										<span class="featuredImage">  
											<h5>HEADSINK</h5>
											Produce competitive 
											<br>and good quality 
											<br>products	
											<img border="0" src="assets/4.gif" alt="" class="one-one" >
										</span>
									</a>
								</div>
								</li>         
							<!--===========End============-->
							
							<!--===========Start============-->
								<li> 
								<div class="summaryBlock">
									<a href="#">
										<span class="featuredImage">  
											<h5>ACCESSORIES</h5>
											Produce competitive 
											<br>and good quality 
											<br>products	
											<img border="0" src="assets/5.gif" alt="" class="one-one" >
										</span>
									</a>
								</div>
								</li>         
							<!--===========End============-->
							
							<!--===========Start============-->
								<li> 
								<div class="summaryBlock">
									<a href="#">
										<span class="featuredImage">  
											<h5>ALUMINIUM CHASSIS</h5>
											Produce competitive 
											<br>and good quality 
											<br>products	
											<img border="0" src="assets/1.gif" alt="" class="one-one" >
										</span>
									</a>
								</div>
								</li>         
							<!--===========End============-->
					</ul>
				</div>
				</div>
				<img class="scrollArrow next" src="images/arrow-right.jpg" alt="">
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
					<div class="latest-news">
						<h4><a href="#">Classic Series - A23 already in stock !</a></h4>
						<h6>20 March 2010</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec felis sapien, laoreet faucibus erat. Nunc luctus velit fermentum augue feugiat consequat. Nulla libero ante, pellentesque eget euismod vel <a href="#" class="blue">[...]</a></p>
					</div>
					<div class="latest-news">
						<h4><a href="#">Classic Series - A23 already in stock !</a></h4>
						<h6>20 March 2010</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec felis sapien, laoreet faucibus erat. Nunc luctus velit fermentum augue feugiat consequat. Nulla libero ante, pellentesque eget euismod vel <a href="#" class="blue">[...]</a></p>
					</div>
					<a href="about/" class="more">See More</a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>