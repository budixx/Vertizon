	<?php echo $this->element('small_banner');?>
	<div id="content">
		<div class="content-inside">
			<?php echo $this->element('left_side_product')?>
			
			<!--RIGHT SIDE-->
			<div class="inside-right">
				<p class="breadcrumb">Home &nbsp;/&nbsp; <abbr>Products</abbr></p>
				<div class="dashline mr-top"></div>
				
				<?php foreach($pcategories as $pcategory):?>
				<div class="category-interm">
					<div class="interm-title">
						<h3><?php echo $pcategory['Pcategory']['name']?></h3>
					</div>
					<div class="interm-body">
						<?php echo $this->Html->link($this->Html->image($pcategory['Pcategory']['file'],array('alt' => 'product')),array('controller' => 'pbrands','action' => 'index',$pcategory['Pcategory']['id']),array('escape' => false))?>
					</div>
				</div>
				<?php endforeach;?>
			</div>
			<div class="clear"></div>
		</div>
	</div>