<div class="ptypes index">
	<h2><?php __('Ptypes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('pbrand_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ptypes as $ptype):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ptype['Ptype']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ptype['Pbrand']['name'], array('controller' => 'pbrands', 'action' => 'view', $ptype['Pbrand']['id'])); ?>
		</td>
		<td><?php echo $ptype['Ptype']['name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $ptype['Ptype']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ptype['Ptype']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ptype['Ptype']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ptype['Ptype']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ptype', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pbrands', true)), array('controller' => 'pbrands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Pbrand', true)), array('controller' => 'pbrands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Products', true)), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Product', true)), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>