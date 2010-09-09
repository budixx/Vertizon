		<div id="navigasi">
			<ul id="nav" class="dropdown dropdown-horizontal">
				<li><?php echo $this->Html->link('Dashboard',array('controller' => 'dashboards','action' => 'index')); ?></li>
				<li><a href="#" class="dir">Products</a>
					<ul>
						<li><?php echo $this->Html->link('Categories',array('controller' => 'pcategories','action' => 'index'))?></li>
						<li><?php echo $this->Html->link('Brands',array('controller' => 'pbrands','action' => 'index'))?></li>
						<li><?php echo $this->Html->link('Types',array('controller' => 'ptypes','action' => 'index'))?></li>
						<li><?php echo $this->Html->link('Products',array('controller' => 'products','action' => 'index'))?></li>
						<li><?php echo $this->Html->link('Photos',array('controller' => 'photos','action' => 'index')); ?></li>
					</ul>
				</li>
				<li><a href="#" class="dir">Contents</a>
					<ul>
						<li><?php echo $this->Html->link('Banners',array('controller' => 'banners','action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Newsletters',array('controller' => 'newsletters','action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Menu',array('controller' => 'menuses','action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Front Featured',array('controller' => 'featureds','action' => 'index')); ?></li>
					</ul>
				</li>
				<li><a href="#" class="dir">Information</a>
					<ul>
						<li><?php echo $this->Html->link('Contents',array('controller' => 'contents','action' => 'index')); ?></li>
						<li><?php echo $this->Html->link('Reviews',array('controller' => 'reviews','action' => 'index')); ?></li>
					</ul>
				</li>
				<li><?php echo $this->Html->link('Contacts',array('controller' => 'contacts','action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Users',array('controller' => 'users','action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Logout',array('controller' => 'users','action' => 'logout')); ?></li>
			</ul>
		</div>