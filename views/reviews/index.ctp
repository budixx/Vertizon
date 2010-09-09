<div class="reviews index">
	<h2><?php __('Reviews');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('product_id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('desc');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('slug');?></th>
			<th><?php echo $this->Paginator->sort('file');?></th>
			<th><?php echo $this->Paginator->sort('dirname');?></th>
			<th><?php echo $this->Paginator->sort('basename');?></th>
			<th><?php echo $this->Paginator->sort('checksum');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($reviews as $review):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $review['Review']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($review['Product']['name'], array('controller' => 'products', 'action' => 'view', $review['Product']['id'])); ?>
		</td>
		<td><?php echo $review['Review']['title']; ?>&nbsp;</td>
		<td><?php echo $review['Review']['desc']; ?>&nbsp;</td>
		<td><?php echo $review['Review']['date']; ?>&nbsp;</td>
		<td><?php echo $review['Review']['slug']; ?>&nbsp;</td>
		<td><?php echo $review['Review']['file']; ?>&nbsp;</td>
		<td><?php echo $review['Review']['dirname']; ?>&nbsp;</td>
		<td><?php echo $review['Review']['basename']; ?>&nbsp;</td>
		<td><?php echo $review['Review']['checksum']; ?>&nbsp;</td>
		<td><?php echo $review['Review']['created']; ?>&nbsp;</td>
		<td><?php echo $review['Review']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $review['Review']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $review['Review']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $review['Review']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $review['Review']['id'])); ?>
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
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Review', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>