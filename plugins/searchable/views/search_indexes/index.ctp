<?php echo $this->element('small_banner')?>
	<div id="content">
		<div class="content-inside">
			<!--LEFT SIDE-->
			<?php echo $this->element('left_side');?>
						
			<!--RIGHT SIDE-->
			<div class="inside-right">
				<p class="breadcrumb">Home &nbsp;/&nbsp; <abbr>Search</abbr></p>
				<div class="dashline mr-top"></div>
				<h5 class="mr-top">Search Result</h5>
				<?php if (!empty($results)): ?>
				  <ul class="listed2">
				    <?php foreach ($results as $result) : ?>
				    <li>
				      <div><?php echo $html->link ($result['SearchIndex']['name'], json_decode($result['SearchIndex']['url'], true)); ?><br>
				      <?php if (!empty($result['SearchIndex']['summary'])): ?>
				        <p><?php echo $result['SearchIndex']['summary']; ?></p>
				      <?php else : ?>
				        <?php echo $searchable->snippets($result['SearchIndex']['data']); ?>
				      <?php endif; ?>
				      </div>
				    </li>
				    <?php endforeach; ?>
				  </ul>
				  <?php
				  $params = array_intersect_key($this->params, array_flip(array('type', 'term')));
				  $params = array_map('urlencode', $params);
				  $params = array_map('urlencode', $params);
				  $paginator->options(array('url' => $params));
				  ?>
				  <div class="paging">
				    <?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
				   | 	<?php echo $paginator->numbers();?>
				    <?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
				  </div>
				<?php else: ?>
				  <p>Sorry, your search did not return any matches.</p>
				<?php endif; ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>