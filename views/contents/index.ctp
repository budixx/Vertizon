	<?php echo $this->element('small_banner')?>
	<div id="content">
		<div class="content-inside">
			<?php echo $this->element('left_side');?>
			
			<!--RIGHT SIDE-->
			<div class="inside-right">
				<p class="breadcrumb">Home &nbsp;/&nbsp; Information &nbsp;/&nbsp; <abbr><?php echo $contents[0]['Type']['name']?></abbr></p>
				<div class="dashline mr-top"></div>
				<?php foreach($contents as $content):?>
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
						<?php echo !empty($content['Content']['image']) ? $this->Html->image($content['Content']['image'],array('class' => 'ft-left mr-right')) : ''?>
						<p>
							<?php echo $this->Text->truncate($content['Content']['content'],'400',array('exact' => false))?>
						</p>
						<br>
						<?php echo $this->Html->link('See More',array('action' => 'view',$content['Content']['id']),array('class' => 'more'))?>
						<div class="clear"></div>
					</div>
				</div>
				<?php endforeach;?>
				
				<!--PAGING-->
				  <?php echo $this->element('pagination');?>
			</div>
			<div class="clear"></div>
		</div>
	</div>