	<div id="footer">
		<div class="footer-inside">
			<div class="topf">
				<?php 
					echo $this->Html->link($this->Html->image('nzxt-logo.jpg',array('alt' => 'logo nzxt','class' => 'nzxt')),'#',array('escape' => false));
				?>
				<div class="newsletter-place"></div>
				<div class="newsletter-botton">
					<?php echo $this->Form->create('Newsletter',array('action' => 'add'))?>
						<?php echo $this->Form->text('email',array('class' => 'input-txt'))?>
						<?php echo $this->Form->submit('/img/btn-submit.gif',array('class' => 'submit'))?>
					</form>
				</div>
			</div>
			<div class="bottomf">
				<div class="logo-foot"></div>
				<div class="sitemap">
					<ul class="sitemaplist">
						<li><a href="#">Legal Notice</a></li>
						<li><a href="#" class="twitter">Follow Us On Twitter</a></li>
						<li><a href="#" class="facebook">Follow Us On Facebook</a></li>
						<li class="last"><a href="#">Contact Us</a></li>
					</ul>
				</div>
				<div class="copyright">Copyright @ 2010, All Right Reserved</div>
				<div class="address">Mangga Dua Mall Lt. 4 Blok B/2
					<br>Jl. Mangga Dua Raya, Jakarta 10730
					<br>Tlp : (021) 3384 2356
				</div>
			</div>
		</div>
	</div>