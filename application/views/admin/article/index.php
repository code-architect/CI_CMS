<section>
	<h2>News Articles</h2>
	<?php echo anchor('admin/article/edit', '<i class="icon-plus"></i>Add an article'); ?>
	<table class="table table-striped">
		<thead>
		<tr>
			<td>Title</td>
            <td>Published Date</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
		</thead>
		<tody>		
		  <?php if(count($articles)): foreach($articles as $article): ?>	
		      <tr>
		      	<td><?php echo anchor('admin/article/edit/'.$article->id, $article->title); ?></td>
		      	<td><?php echo $article->pubdate; ?></td>
		      	<td><?php echo btn_edit('admin/article/edit/'.$article->id); ?></td>
		      	<td><?php echo btn_delete('admin/article/delete/'.$article->id); ?></td>		      	
		      </tr>
		      <?php endforeach; ?>
		  <?php else: ?>
		      <tr>
		      	<td colspan="3">We could not find anyt articles.</td>
		      </tr>    
		  <?php endif; ?>
		</tody>
	</table>
</section>
