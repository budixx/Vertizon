	<?php echo $this->element('small_banner')?>
	<div id="content">
		<div class="content-inside">
			<?php echo $this->element('left_side_product')?>
			
			<!--RIGHT SIDE-->
			<div class="inside-right">
				<p class="breadcrumb">Home &nbsp;/&nbsp; Products &nbsp;/&nbsp; Aluminium Chassis &nbsp;/&nbsp; <abbr>NZXT</abbr></p>
				<div class="dashline mr-top"></div>
				
				<!--sort by-->
				<div class="sortby-panel">
					<h3>Sort by</h3>
					<p>( Please select category by Name, Latest Created, Or Latest Modified )</p>
					<select class="mr-top">
						<option>Name</option>
						<option>Latest Created</option>
						<option>Latest Modified</option>
					</select>
				</div>

				<div class="mr-top">
					<?php echo $this->element('showpage')?>
					
					 <?php echo $this->element('pagination')?>
					  <div class="clear"></div>
				</div>
				<div class="dashline mr-top"></div>
				
				<!--SHOW TYPE PRODUCT-->
				<?php foreach($products as $product):?>
				<div class="type-product">
					<?php echo $this->Html->image('assets/avatar.jpg',array('alt' => 'product'))?>
					<h5>
						<?php echo $this->Html->link($product['Product']['name'],array('action' => 'view',$product['Product']['id']))?>
					</h5>
					<p><?php echo $this->Text->truncate($product['Product']['desc'],110,array('exact' => false))?></p>
				</div>
				<?php endforeach;?>

				<div class="mr-top clear">
					<?php echo $this->element('showpage')?>
					
					<!--PAGING-->
					   <?php echo $this->element('pagination')?>
					  <div class="clear"></div>
				</div>
				
			</div>
			<div class="clear"></div>
		</div>
	</div>