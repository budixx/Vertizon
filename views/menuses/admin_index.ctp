<div class="menuses index">
	<h2><?php __('Menuses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('parent_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($menuses as $menus):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $menus['Menus']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($menus['ParentMenus']['name'], array('controller' => 'menuses', 'action' => 'view', $menus['ParentMenus']['id'])); ?>
		</td>
		<td><?php echo $menus['Menus']['name']; ?>&nbsp;</td>
		<td><?php echo $menus['Menus']['content']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $menus['Menus']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $menus['Menus']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $menus['Menus']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $menus['Menus']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Menu', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Menuses', true)), array('controller' => 'menuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Parent Menus', true)), array('controller' => 'menuses', 'action' => 'add')); ?> </li>
	</ul>
</div>