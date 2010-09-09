<div class="wallpapers view">
<h2><?php  __('Wallpaper');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wallpaper['Wallpaper']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wallpaper['Wallpaper']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('File'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wallpaper['Wallpaper']['file']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dirname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wallpaper['Wallpaper']['dirname']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Basename'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wallpaper['Wallpaper']['basename']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Checksum'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wallpaper['Wallpaper']['checksum']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wallpaper['Wallpaper']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wallpaper['Wallpaper']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wallpaper', true), array('action' => 'edit', $wallpaper['Wallpaper']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Wallpaper', true), array('action' => 'delete', $wallpaper['Wallpaper']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wallpaper['Wallpaper']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wallpapers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wallpaper', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sizes', true), array('controller' => 'sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size', true), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Sizes');?></h3>
	<?php if (!empty($wallpaper['Size'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($wallpaper['Size'] as $size):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $size['id'];?></td>
			<td><?php echo $size['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'sizes', 'action' => 'view', $size['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'sizes', 'action' => 'edit', $size['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'sizes', 'action' => 'delete', $size['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $size['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Size', true), array('controller' => 'sizes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
