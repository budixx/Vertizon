<div class="pcategories view">
<h2><?php  __('Pcategory');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pcategory['Pcategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pcategory['Pcategory']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Pcategory', true)), array('action' => 'edit', $pcategory['Pcategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Pcategory', true)), array('action' => 'delete', $pcategory['Pcategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pcategory['Pcategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pcategories', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Pcategory', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pbrands', true)), array('controller' => 'pbrands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Pbrand', true)), array('controller' => 'pbrands', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Pbrands', true));?></h3>
	<?php if (!empty($pcategory['Pbrand'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Pcategory Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pcategory['Pbrand'] as $pbrand):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $pbrand['id'];?></td>
			<td><?php echo $pbrand['pcategory_id'];?></td>
			<td><?php echo $pbrand['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'pbrands', 'action' => 'view', $pbrand['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'pbrands', 'action' => 'edit', $pbrand['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'pbrands', 'action' => 'delete', $pbrand['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pbrand['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Pbrand', true)), array('controller' => 'pbrands', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
