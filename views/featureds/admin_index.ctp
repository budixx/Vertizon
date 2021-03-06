<div class="featureds index">
	<h2><?php __('Featureds');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('file');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($featureds as $featured):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $featured['Featured']['id']; ?>&nbsp;</td>
		<td><?php echo $featured['Featured']['title']; ?>&nbsp;</td>
		<td><?php echo $featured['Featured']['content']; ?>&nbsp;</td>
		<td><?php echo $featured['Featured']['file']; ?>&nbsp;</td>
		<td><?php echo $featured['Featured']['created']; ?>&nbsp;</td>
		<td><?php echo $featured['Featured']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $featured['Featured']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $featured['Featured']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $featured['Featured']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $featured['Featured']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Featured', true), array('action' => 'add')); ?></li>
	</ul>
</div>