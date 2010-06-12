<div class="photos view">
<h2><?php  __('Photo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $photo['Photo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($photo['Product']['name'], array('controller' => 'products', 'action' => 'view', $photo['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('File'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $photo['Photo']['file']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Photo', true), array('action' => 'edit', $photo['Photo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Photo', true), array('action' => 'delete', $photo['Photo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $photo['Photo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
