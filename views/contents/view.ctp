	<?php echo $this->element('small_banner')?>
	<div id="content">
		<div class="content-inside">
			<?php echo $this->element('left_side');?>
			
			<!--RIGHT SIDE-->
			<div class="inside-right">
				<p class="breadcrumb">Home &nbsp;/&nbsp; Information &nbsp;/&nbsp; <abbr><?php echo $content['Type']['name']?></abbr></p>
				<div class="dashline mr-top"></div>
				<div class="mr-top2">
					<div class="bg-news-title">
						<p class="date">
							<?php echo $this->Time->nice($content['Content']['created'])?>
						</p>
						<p class="titlenew">
							<?php echo $content['Content']['title']?>
						</p>
					</div>
					<div class="mr-top">
						<?php echo $this->Html->image($content['Content']['image'],array('class' => 'ft-left mr-right'))?>
						<p>
							<?php echo $content['Content']['content']?>
						</p>
						<br>
						<?php echo $this->Html->link('See More',array('action' => 'view',$content['Content']['id']),array('class' => 'more'))?>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>