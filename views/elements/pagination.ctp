				  <ul id="pagination-clean">
					<li class="previous-off">&laquo; Previous</li>
					  <li class="active">1</li>
					  <li><a href="?page=2">2</a></li>
					  <li><a href="?page=3">3</a></li>
					  <li><a href="?page=4">4</a></li>
					  <li><a href="?page=5">5</a></li>
					  <li><a href="?page=6">6</a></li>
					  <li><a href="?page=7">7</a></li>
					  <li class="next"><a href="?page=8">Next &raquo;</a></li>
				  </ul>
				  
				  <div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>