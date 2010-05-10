<div class="pbrands index">
	<h2><?php __('Pbrands');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('pcategory_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pbrands as $pbrand):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $pbrand['Pbrand']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pbrand['Pcategory']['name'], array('controller' => 'pcategories', 'action' => 'view', $pbrand['Pcategory']['id'])); ?>
		</td>
		<td><?php echo $pbrand['Pbrand']['name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $pbrand['Pbrand']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $pbrand['Pbrand']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $pbrand['Pbrand']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pbrand['Pbrand']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Pbrand', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pcategories', true)), array('controller' => 'pcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Pcategory', true)), array('controller' => 'pcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ptypes', true)), array('controller' => 'ptypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ptype', true)), array('controller' => 'ptypes', 'action' => 'add')); ?> </li>
	</ul>
</div>