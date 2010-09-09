<div class="sizes view">
<h2><?php  __('Size');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $size['Size']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $size['Size']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Size', true), array('action' => 'edit', $size['Size']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Size', true), array('action' => 'delete', $size['Size']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $size['Size']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sizes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wallpapers', true), array('controller' => 'wallpapers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wallpaper', true), array('controller' => 'wallpapers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Wallpapers');?></h3>
	<?php if (!empty($size['Wallpaper'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('File'); ?></th>
		<th><?php __('Dirname'); ?></th>
		<th><?php __('Basename'); ?></th>
		<th><?php __('Checksum'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($size['Wallpaper'] as $wallpaper):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $wallpaper['id'];?></td>
			<td><?php echo $wallpaper['name'];?></td>
			<td><?php echo $wallpaper['file'];?></td>
			<td><?php echo $wallpaper['dirname'];?></td>
			<td><?php echo $wallpaper['basename'];?></td>
			<td><?php echo $wallpaper['checksum'];?></td>
			<td><?php echo $wallpaper['created'];?></td>
			<td><?php echo $wallpaper['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'wallpapers', 'action' => 'view', $wallpaper['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'wallpapers', 'action' => 'edit', $wallpaper['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'wallpapers', 'action' => 'delete', $wallpaper['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wallpaper['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Wallpaper', true), array('controller' => 'wallpapers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
