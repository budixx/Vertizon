<div class="configs view">
<h2><?php  __('Config');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $config['Config']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Config'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $config['Config']['config']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $config['Config']['value']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Config', true), array('action' => 'edit', $config['Config']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Config', true), array('action' => 'delete', $config['Config']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $config['Config']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Configs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Config', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
