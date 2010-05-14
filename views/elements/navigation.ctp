	<div id="header">
		<div class="header-inside">
			<h6>Welcome to vertizon global technology</h6>
			<div class="search-h"><h6>Search</h6></div>
			<form method="" action="">
				<div class="bg-search"><input type="text" class="bg-txt"></div>
				<input type="submit" value="" class="magni">
			</form>
		</div>
		<div id="banner">
			<?php echo $this->Html->link($this->Html->image('logo.jpg',array('alt' => 'logo')),array('controller' => 'dashboards','action' => 'index'),array('class' => 'logo','escape' => false));?>
			<div class="nav">
			<ul class="dropdown dropdown-horizontal">
				<li><a href="./" class="home"></a></li>
				<li><a href="product/" class="product"></a>
					<ul>
						<li><a href="type/">Aluminium Chasis</a></li>
						<li><a href="type/">Case Accessories</a></li>
						<li><a href="type/">Case Fan</a>
							<ul>
								<li><a href="prod-detail/">Excalibur</a></li>
								<li><a href="prod-detail/">Ragnarok</a></li>
							</ul>
						</li>
						<li><a href="type/">Classic Series</a></li> 
						<li><a href="type/">Crafted Series</a></li>
					</ul>
				</li>
				<li><a href="news" class="information"></a>
					<ul>
						<li>
							<?php echo $this->Html->link('News',array('controller' => 'contents','action' => 'index','news'));?>
						</li>
						<li>
							<?php echo $this->Html->link('Events',array('controller' => 'contents','action' => 'index','events'));?>
						</li>
						<li>
							<?php echo $this->Html->link('Reviews',array('controller' => 'contents','action' => 'index','reviews'));?>
						</li>
					</ul>
				</li>
				<li><a href="faq/" class="support"></a>
					<ul>
						<li><a href="faq/">FAQ</a></li>
						<li><a href="download/">Download</a></li>
						<li><a href="technical/">Technical Support</a></li>
						<li><a href="glossary/">Glossary</a></li>
						<li><a href="tutorial/">Tutorial</a></li>
						<li><a href="wallpaper/">Wallpaper</a></li>
					</ul>
				</li>
				<li><a href="about/" class="about"></a>
					<ul>
						<li><a href="contact/">Contact Us</a></li>
					</ul>
				</li>
				<li><a href="where/" class="where"></a></li>
			</ul>
			</div>
		</div>
	</div>