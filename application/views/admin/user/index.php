<section>
	<h2>Users</h2>
	<?php echo anchor('admin/user/edit', '<i class="icon-plus"></i>Add a user'); ?>
	<table class="table table-striped">
		<thead>
		<tr>
			<td>Email</td>
			<td>Edit</td>
			<td>Delete</td>
		</tr>
		</thead>
		<tody>		
		  <?php if(count($users)): foreach($users as $user): ?>	
		      <tr>
		      	<td><?php echo anchor('admin/user/edit/'.$user->id, $user->email); ?></td>
		      	<td><?php echo btn_edit('admin/user/edit/'.$user->id); ?></td>
		      	<td><?php echo btn_delete('admin/user/delete/'.$user->id); ?></td>		      	
		      </tr>
		      <?php endforeach; ?>
		  <?php else: ?>
		      <tr>
		      	<td colspan="3">We could not find anyt users.</td>
		      </tr>    
		  <?php endif; ?>
		</tody>
	</table>
</section>
