	<ul id="pagination-clean">
		<?php
			echo $this->Paginator->prev('Previous', array_merge(array('tag' => 'li','class' => 'previous-off')),null,array());
			echo $this->Paginator->numbers(array('tag' => 'li','separator' => false));
	 		echo $this->Paginator->next('Next',  array_merge(array('tag' => 'li','class' => 'next-off')), null, array());
		?>
	</ul>