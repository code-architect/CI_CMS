<section>
	<h2>Pages</h2>
	<?php echo anchor('admin/page/edit', '<i class="icon-plus"></i>Add a page'); ?>
	<table class="table table-striped">
		<thead>
		<tr>
			<td>Title</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
		</thead>
		<tody>		
		  <?php if(count($pages)): foreach($pages as $page): ?>	
		      <tr>
		      	<td><?php echo anchor('admin/page/edit/'.$page->id, $page->title); ?></td>
		      	<td><?php echo btn_edit('admin/page/edit/'.$page->id); ?></td>
		      	<td><?php echo btn_delete('admin/page/delete/'.$page->id); ?></td>		      	
		      </tr>
		      <?php endforeach; ?>
		  <?php else: ?>
		      <tr>
		      	<td colspan="3">We could not find anyt pages.</td>
		      </tr>    
		  <?php endif; ?>
		</tody>
	</table>
</section>
