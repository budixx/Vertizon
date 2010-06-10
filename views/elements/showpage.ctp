					<!--SHOW PAGE-->
					<div class="ft-left" style="margin-top: 12px;">
						<?php echo $this->Html->image('showpage.gif',array('class' => 'ft-left mr-right2'))?>
						<?php echo $paginator->link($this->Html->image('20.jpg'), array('limit' => 20),array('escape' => false,'class' => 'ft-left mr-right2')); ?>
						<?php echo $paginator->link($this->Html->image('50.jpg'), array('limit' => 50),array('escape' => false,'class' => 'ft-left mr-right2')); ?>
						<?php echo $paginator->link($this->Html->image('100.jpg'), array('limit' => 100),array('escape' => false,'class' => 'ft-left mr-right2')); ?>
					</div>