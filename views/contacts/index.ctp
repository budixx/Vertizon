				<?php echo $this->element('small_banner')?>
	<div id="content">
		<div class="content-inside">
			<!--LEFT SIDE-->
			<?php echo $this->element('left_side');?>
			
			<!--RIGHT SIDE-->
			<div class="inside-right">
				<p class="breadcrumb">Home &nbsp;/&nbsp; <abbr>Contact Us</abbr></p>
				<div class="dashline mr-top"></div>
				<br>
				<p>If you need an estimate, have any questions, comments, suggestions or simply want to learn more about our services and write to us.
				We want to hear from you!</p>
				<br><br>
				<div class="address-left">
					<h4 class="bluenavy">Vertizon Global Technology</h4>
					<p class="mr-top">Mangga Dua Mall Lt. 4 Blok B/2<br>
					Jl. Mangga Dua Raya, Jakarta 10730<br>
					Tlp : (021) 3384 2356</p>
					<p class="mailto">
						Email : <a href="mailto:sales@vertizon-indonesia.com" class="blue">sales@vertizon-indonesia.com</a>
						<br>Website : <a href="./" class="blue">www.vertizon-indonesia.com</a>
					</p>
				</div>
				
				<div class="quick">
					<h4 class="bluenavy">Quick way to get in touch with us :</h4>
					<a href="#">
						<?php echo $this->Html->image('offline.gif',array('class' => 'mr-top ft-left','alt' => 'messenger'))?>
					</a>
					<a href="#">
						<?php echo $this->Html->image('online.gif',array('class' => 'mr-top ft-left','alt' => 'messenger'))?>
					</a>
				</div>
				
				<div class="clear"></div>
				<br><br>
				<h4 class="bluenavy">Inquiry Form</h4>
				<?php echo $this->Form->create('Contact',array('inputDefaults' => array('label' => false)))?>
				<table class="tabcon">
					<tr>
						<td width="280">Name : *<br>
							<?php echo $this->Form->input('name',array('class' => 'bg-txt-con'));?>
						</td>
					</tr>
					<tr>
						<td width="280">Email : *<br>
							<?php echo $this->Form->input('email',array('class' => 'bg-txt-con'));?>
						</td>
					</tr>
					<tr>
						<td>Messages : *<br>
							<?php echo $this->Form->input('message',array('class' => 'messbox','cols' => 20,'rows' => 100));?>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							Fields with * are required <br>
							<?php echo $this->Form->submit('submit.jpg',array('class' => 'submit2','div' => false))?>
						</td>
					</tr>
				</table>
				</form>
			</div>
			<div class="clear"></div>
		</div>
	</div>