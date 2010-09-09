	<?php echo $this->element('small_banner')?>
	<div id="content">
		<div class="content-inside">
			<?php echo $this->element('left_side');?>
			
			<!--RIGHT SIDE-->
			<div class="inside-right">
				<p class="breadcrumb">
					<?php 
						$this->Html->addCrumb('Information','#');
						$this->Html->addCrumb('Reviews',array('action' => 'index'));
						$this->Html->addCrumb($review['Review']['title']);
					?>
					<?php echo $this->Html->getCrumbs(' / ');?>	
				</p>
				<div class="dashline mr-top"></div>
				<div class="mr-top2">
					<div class="bg-news-title">
						<p class="date">
							<?php echo $this->Time->nice($review['Review']['date'])?>
						</p>
						<p class="titlenew">
							<?php echo $review['Review']['title']?>
						</p>
					</div>
					<div class="mr-top">
						<?php
							$image = $phpthumb->generate(
								array(
									'save_path' => WWW_ROOT . '/img/thumbs',
									'display_path' => '/img/thumbs',
									'error_image_path' => '/img/noimg.jpg', 
									'src' => $review['Review']['file'],
									// From here on out, you can pass any standard phpThumb parameters
									'w' => 200,
									'h' => 150,
									'q' => 100,
									'zc' => 1
								)
							);
						?>
						<?php echo !empty($review['Review']['file']) ? $this->Html->image($image['src'],array('class' => 'ft-left mr-right')) : ''?>
						<p>
							<?php echo $review['Review']['desc'];?>
						</p>
						<br>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>