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
						<div id="gallery" class="content">
							<div class="slideshow-container">
								<div id="loading" class="loader"></div>
								<div id="slideshow" class="slideshow"></div>
							</div>
						</div>
					</div>
					<div id="thumbs">
						<ul class="thumbs noscript">
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
								?>
								<li>
									<?php echo $this->Html->link($this->Html->image($thumbnail['src']),$big['src'],array('escape' => false,'class' => 'thumb','name' => $photo['id']))?>
								</li>
						<?php endforeach;?>
						 </ul>
					</div>
					<div class="clear"></div>
				</div>
				
				<?php echo $product['Product']['desc']?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				// We only want these styles applied when javascript is enabled
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 15,
					preloadAhead:              10,
					enableTopPager:            false,
					enableBottomPager:         false,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          false,
					renderNavControls:         false,
					playLinkText:              'Play Slideshow',
					pauseLinkText:             'Pause Slideshow',
					prevLinkText:              '&lsaquo; Previous Photo',
					nextLinkText:              'Next Photo &rsaquo;',
					nextPageLinkText:          'Next &rsaquo;',
					prevPageLinkText:          '&lsaquo; Prev',
					enableHistory:             false,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					}
				});
			});
		</script>