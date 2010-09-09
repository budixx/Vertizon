	<?php echo $this->element('small_banner')?>
	<div id="content">
		<div class="content-inside">
			<!--LEFT SIDE-->
			<?php echo $this->element('left_side');?>
			
			<!--RIGHT SIDE-->
			<div class="inside-right">
				<p class="breadcrumb">
				<?php 
					$this->Html->addCrumb('About Us',array('controller' => 'menuses','action' => 'view','about-us'));
					$this->Html->addCrumb('Contact Us');
				?>
				<?php echo $this->Html->getCrumbs(' / ');?></p>
				<div class="dashline mr-top"></div>
				<br>
				<?php echo $menu['Menus']['content']?>
				
				<div class="clear"></div>
				<br><br>
				<h4 class="bluenavy">Contact Form</h4>
				<?php echo $this->Session->flash();?>
				<?php echo $this->Form->create('Contact',array('inputDefaults' => array('label' => false)))?>
				<table class="tabcon">
					<tr>
						<td width="280">Name : *<br>
							<?php echo $this->Form->input('name',array('class' => 'bg-txt-con'));?>
						</td>
					</tr>
					<tr>
						<td width="280">Email : *<br>
							<?php echo $this->Form->input('email',array('class' => 'bg-txt-con'));?>
						</td>
					</tr>
					<tr>
						<td>Messages : *<br>
							<?php echo $this->Form->input('message',array('class' => 'messbox','cols' => 20,'rows' => 100));?>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							Fields with * are required <br>
							<?php echo $this->Form->submit('submit.jpg',array('class' => 'submit2','div' => false))?>
						</td>
					</tr>
				</table>
				</form>
			</div>
			<div class="clear"></div>
		</div>
	</div>