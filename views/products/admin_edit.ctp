 <div id="tabs" class="form">
			<ul>
				<li><a href="#tabs-1">Product</a></li>
				<li><a href="#tabs-2">Photo</a></li>
			</ul>
			<div id="tabs-1">
				<?php echo $this->Form->create('Product',array('type' => 'file'));?>
					<fieldset>
				 		<legend><?php printf(__('Admin Edit %s', true), __('Product', true)); ?></legend>
					<?php
						echo $this->Form->input('id');
						echo $this->Form->input('ptype_id',array('label' => 'Type'));
						echo $this->Form->input('name');
						echo $this->Form->input('desc',array('class' => 'ckeditor'));
						echo $this->Form->input('featured');
					?>
					</fieldset>
				<?php echo $this->Form->end(__('Submit', true));?>
			</div>
			
			<!-- Photo Area -->
			<div id="tabs-2">
				<div id="gallery">
					<?php 
						foreach($this->data['Photo'] as $photo):
					?>
					<?php 
							$thumbnail = $phpthumb->generate(
								array(
									'save_path' => WWW_ROOT . '/img/thumbs',
									'display_path' => '/img/thumbs',
									'error_image_path' => '/img/error.jpg',
									'src' => $photo['file'],
									// From here on out, you can pass any standard phpThumb parameters
									'w' => 155, 
									'h' => 225,
									'q' => 100,
									'zc' => 1
								)
							);
					?>
					<div class="product-photo" id="photo">
						<?php echo $this->Html->link($this->Html->image($thumbnail['src']),$this->Media->urls($photo['file']),array('class' => 'pict','rel' => 'group','escape' => false));?>
						<center>
							<?php echo $this->Ajax->link('Delete',array('action' => 'deletephoto',$photo['id']),array('update' => 'gallery'),'Are you sure want to delete this photo ?')?>
						</center>
					</div>
					<?php 
						endforeach;
					?>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
				<div id="ajax-loader">
					<center>
						<?php echo $this->Html->image('ajax-loader.gif')?>
					</center>
				</div>
				<div>
				<?php
					//use the response returned by your controller/action.
					$options = array(
					    'data' => array(
					        'id' => $this->Form->value('Product.id')
					        ),
						'files' => 'image',
					    'busy' => '#ajax-loader',
	    				'update' => array(
	        				'reply' => true,
	   		 				'id' => '#gallery',
	   		 			)
	   		 		);
			   		echo $this->Ajaxupload->upload('upload_button', array('controller' => 'products', 'action' => 'photo'),$options);
					echo $this->Form->create('Product');
					echo $this->Form->submit('Upload',array('id'=>'upload_button'));
					echo $this->Form->end();
				?>
				</div>
			</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Product.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Product.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Products', true)), array('action' => 'index'));?></li>
	</ul>
</div>