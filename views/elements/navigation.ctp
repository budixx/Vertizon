	<div id="header">
		<div class="header-inside">
			<h6>Welcome to vertizon global technology</h6>
			<div class="search-h"><h6>Search</h6></div>
			<?php 
				echo $this->Form->create('SearchIndex', array('url' => array('plugin' => 'searchable', 'controller' => 'search_indexes', 'action' => 'index')));
			?>
				<div class="bg-search">
					<?php echo $this->Form->text('term', array('class' => 'bg-txt')); ?>
				</div>
				<?php echo $this->Form->submit('magni.gif',array('div' => false,'class' => 'magni'))?>
			</form>
		</div>
		<div id="banner">
			<?php echo $this->Html->link($this->Html->image('logo.jpg',array('alt' => 'logo')),array('controller' => 'dashboards','action' => 'index'),array('class' => 'logo','escape' => false));?>
			<div class="nav">
			<ul class="dropdown dropdown-horizontal">
				<?php foreach($menuses as $menus):?>
					<li><?php echo $this->Html->link('',!empty($menus['Menus']['link']) ? $menus['Menus']['link'] : array('controller' => 'menuses','action' => 'view',$menus['Menus']['id']),array('class' => strtolower($menus['Menus']['name'])))?>
					<?php if($menus['Menus']['name'] == 'Product'):?>
						<ul>
							<?php foreach($pcategories as $category):?>
								<li><?php echo $this->Html->link($category['Pcategory']['name'],array('controller' => 'pbrands','action' => 'index',$category['Pcategory']['slug']))?></li>	
							<?php endforeach;?>
						</ul>
					<?php else:?>
						<?php if(!empty($menus['ChildMenus'])):?>
							<ul>
								<?php foreach($menus['ChildMenus'] as $menus):?>
									<li><?php echo $this->Html->link($menus['name'],!empty($menus['link']) ? $menus['link'] : array('controller' => 'menuses','action' => 'view',$menus['id']))?></li>
								<?php endforeach;?>
							</ul>
						<?php endif;?>
					<?php endif;?>
					</li>
				<?php endforeach;?>
			</ul>
			</div>
		</div>
	</div>