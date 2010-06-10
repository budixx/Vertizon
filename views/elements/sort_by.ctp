				<!--sort by-->
				<div class="sortby-panel">
					<h3>Sort by</h3>
					<p>( Please select category by Name, Latest Created, Or Latest Modified )</p>
					<?php echo $this->Paginator->sort('name')?>
					<?php echo $this->Paginator->sort('created')?>
					<?php echo $this->Paginator->sort('modified')?>
				</div>