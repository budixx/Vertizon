		<div id="navigasi">
			<!--
			<ul>
				<li><?php echo $this->Html->link('Dashboard',array('controller' => 'dashboards','action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Products',array('controller' => 'products','action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Banners',array('controller' => 'banners','action' => 'index')); ?></li>
				
			</ul>
			-->
			<ul id="nav" class="dropdown dropdown-horizontal">
				<li><?php echo $this->Html->link('Dashboard',array('controller' => 'dashboards','action' => 'index')); ?></li>
				<li><a href="./" class="dir">Solutions</a>
					<ul>
						<li><a href="./">Broadcast and media</a></li>
						<li><a href="./">Education</a></li>
						<li><a href="./">Financial services</a></li>
						<li><a href="./">Government</a></li>
						<li><a href="./">Life sciences</a></li>
						<li><a href="./">Manufacturing</a></li>
					</ul>
				</li>
				<li><?php echo $this->Html->link('Products',array('controller' => 'products','action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Banners',array('controller' => 'banners','action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Photos',array('controller' => 'photos','action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Contents',array('controller' => 'newsletters','action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Newsletters',array('controller' => 'newsletters','action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Menuses',array('controller' => 'menuses','action' => 'index')); ?></li>
				<li><?php echo $this->Html->link('Front Featured',array('controller' => 'featureds','action' => 'index')); ?></li>
			</ul>
		</div>