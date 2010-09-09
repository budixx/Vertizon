<div class="wallpapers index">
	<h2><?php __('Wallpapers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
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
	foreach ($wallpapers as $wallpaper):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $wallpaper['Wallpaper']['id']; ?>&nbsp;</td>
		<td><?php echo $wallpaper['Wallpaper']['name']; ?>&nbsp;</td>
		<td><?php echo $wallpaper['Wallpaper']['file']; ?>&nbsp;</td>
		<td><?php echo $wallpaper['Wallpaper']['dirname']; ?>&nbsp;</td>
		<td><?php echo $wallpaper['Wallpaper']['basename']; ?>&nbsp;</td>
		<td><?php echo $wallpaper['Wallpaper']['checksum']; ?>&nbsp;</td>
		<td><?php echo $wallpaper['Wallpaper']['created']; ?>&nbsp;</td>
		<td><?php echo $wallpaper['Wallpaper']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $wallpaper['Wallpaper']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $wallpaper['Wallpaper']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $wallpaper['Wallpaper']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wallpaper['Wallpaper']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Wallpaper', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sizes', true), array('controller' => 'sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size', true), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
	</ul>
</div>