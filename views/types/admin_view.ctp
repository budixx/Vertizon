<div class="types view">
<h2><?php  __('Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $type['Type']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $type['Type']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Type', true)), array('action' => 'edit', $type['Type']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Type', true)), array('action' => 'delete', $type['Type']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $type['Type']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Types', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Type', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Contents', true)), array('controller' => 'contents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Content', true)), array('controller' => 'contents', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Contents', true));?></h3>
	<?php if (!empty($type['Content'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Type Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($type['Content'] as $content):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $content['id'];?></td>
			<td><?php echo $content['type_id'];?></td>
			<td><?php echo $content['title'];?></td>
			<td><?php echo $content['content'];?></td>
			<td><?php echo $content['created'];?></td>
			<td><?php echo $content['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'contents', 'action' => 'view', $content['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'contents', 'action' => 'edit', $content['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'contents', 'action' => 'delete', $content['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $content['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Content', true)), array('controller' => 'contents', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
