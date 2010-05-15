			<!--   <ul id="pagination-clean">
				  <?php echo $this->Paginator->prev('Previous', array_merge(array('tag' => 'li','class' => 'previous-off')),null,array());?>
					<li class="previous-off">&laquo; Previous</li>
					  <li class="active">1</li>
					  <li><a href="?page=2">2</a></li>
					  <li><a href="?page=3">3</a></li>
					  <li><a href="?page=4">4</a></li>
					  <li><a href="?page=5">5</a></li>
					  <li><a href="?page=6">6</a></li>
					  <li><a href="?page=7">7</a></li>
					  <li class="next"><a href="?page=8">Next &raquo;</a></li>
	</ul>-->
	 <ul id="pagination-clean">
  <?php
 echo $this->Paginator->prev('Previous', array_merge(array('tag' => 'li','class' => 'previous-off')),null,array());
echo $this->Paginator->numbers(array('tag' => 'li','separator' => false));
 echo $this->Paginator->next('Next',  array_merge(array('tag' => 'li','class' => 'next-off')), null, array());
  ?>
</ul>