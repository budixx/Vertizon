<div class="pbrands view">
<h2><?php  __('Pbrand');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pbrand['Pbrand']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pcategory'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($pbrand['Pcategory']['name'], array('controller' => 'pcategories', 'action' => 'view', $pbrand['Pcategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pbrand['Pbrand']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Pbrand', true)), array('action' => 'edit', $pbrand['Pbrand']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Pbrand', true)), array('action' => 'delete', $pbrand['Pbrand']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pbrand['Pbrand']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pbrands', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Pbrand', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pcategories', true)), array('controller' => 'pcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Pcategory', true)), array('controller' => 'pcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ptypes', true)), array('controller' => 'ptypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ptype', true)), array('controller' => 'ptypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Ptypes', true));?></h3>
	<?php if (!empty($pbrand['Ptype'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Pbrand Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pbrand['Ptype'] as $ptype):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ptype['id'];?></td>
			<td><?php echo $ptype['pbrand_id'];?></td>
			<td><?php echo $ptype['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'ptypes', 'action' => 'view', $ptype['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'ptypes', 'action' => 'edit', $ptype['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'ptypes', 'action' => 'delete', $ptype['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ptype['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ptype', true)), array('controller' => 'ptypes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
