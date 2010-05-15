<div class="menuses view">
<h2><?php  __('Menu');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $menus['Menus']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parent Menus'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($menus['ParentMenus']['name'], array('controller' => 'menuses', 'action' => 'view', $menus['ParentMenus']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $menus['Menus']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $menus['Menus']['content']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Menu', true)), array('action' => 'edit', $menus['Menus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Menu', true)), array('action' => 'delete', $menus['Menus']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $menus['Menus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Menuses', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Menu', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Menuses', true)), array('controller' => 'menuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Parent Menus', true)), array('controller' => 'menuses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Menuses', true));?></h3>
	<?php if (!empty($menus['ChildMenus'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Parent Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Content'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($menus['ChildMenus'] as $childMenus):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $childMenus['id'];?></td>
			<td><?php echo $childMenus['parent_id'];?></td>
			<td><?php echo $childMenus['name'];?></td>
			<td><?php echo $childMenus['content'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'menuses', 'action' => 'view', $childMenus['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'menuses', 'action' => 'edit', $childMenus['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'menuses', 'action' => 'delete', $childMenus['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $childMenus['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Child Menus', true)), array('controller' => 'menuses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
