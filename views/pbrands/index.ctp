	<?php echo $this->element('small_banner')?>
	<div id="content">
		<div class="content-inside">
			<!--LEFT SIDE-->
			<?php echo $this->element('left_side')?>
			
			<!--RIGHT SIDE-->
			<div class="inside-right">
				<p class="breadcrumb">Home &nbsp;/&nbsp; Products &nbsp;/&nbsp;<abbr><?php echo $pcategory['Pcategory']['name']?></abbr></p>
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
				<?php foreach($pbrands as $pbrand):?>
				<div class="brand-area">
					<div class="brand-top">
						<p class="brand-name"><?php echo $pbrand['Pbrand']['name']?></p>
					</div>
					<div class="brand-middle">
						<div class="image-brand">
							<img id="largeImg3" src="assets/main1.jpg" alt="image">
						</div>
						<div class="thumbs3">
							<?php foreach($pbrand['Ptype'] as $ptype):?>
							<div class="ft-left">
								<span class="asd">
									<?php echo $this->Html->link('<p class="active">'.$ptype['name'].'</p>',$ptype['file'],array('escape' => false))?>
								</span>
								<?php echo $this->Html->link('See Details',array('controller' => 'products','action' => 'index',$ptype['id']))?>
							</div>
							<?php endforeach;?>
						</div>
						<div class="clear"></div>
					</div>
					<div class="brand-bottom"></div>
				</div>
				<?php endforeach;?>
				
			</div>
			<div class="clear"></div>
		</div>
	</div>