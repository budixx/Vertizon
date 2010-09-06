				<?php 
					$i = 0;
					foreach($photos as $photo):
				?>
				<?php 
						$thumbnail = $phpthumb->generate(
							array(
								'save_path' => WWW_ROOT . '/img/thumbs',
								'display_path' => '/img/thumbs',
								'error_image_path' => '/img/error.jpg',
								'src' => $photo['Photo']['file'],
								// From here on out, you can pass any standard phpThumb parameters
								'w' => 155, 
								'h' => 225,
								'q' => 100,
								'zc' => 1
							)
						);
				?>
				<div class="product-photo" id="photo">
					<?php echo $this->Html->link($this->Html->image($thumbnail['src']),$this->Media->urls($photo['Photo']['file']),array('class' => 'pict','rel' => 'group','escape' => false));?>
					<center>
							<?php echo $this->Ajax->link('Delete',array('action' => 'deletephoto',$photo['Photo']['id']),array('update' => 'gallery'),'Are you sure want to delete this photo ?')?>
					</center>
				</div>
				<?php 
					$i++;
					endforeach;
				?>
				<script>
					$(document).ready(function() {
	
						$("a.pict").fancybox({
							'transitionIn'	:	'elastic',
							'transitionOut'	:	'elastic',
							'speedIn'		:	600, 
							'speedOut'		:	200, 
							'overlayShow'	:	false
						});
					});
				</script>