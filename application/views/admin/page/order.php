<section>
	<h2>Order Pages</h2>
	<p class="alert alert-info">Drag to order pages and click 'Save'</p>
	<div id="orderResult"></div>
	<input type="button" id="save" value="Save" class="btn btn-primary" />
</section>


<script>
$(function(){
	$.post('<?php echo site_url('admin/page/order_ajax') ?>', {}, function(data){
		   $('#orderResult').html(data);
	});

	// when save button is clicked
	$('#save').click(function(){
		// Get the result from the sortable list, use toArray call back to retrive them
		oSortable = $('.sortable').nestedSortable('toArray');

		  // Giving user an indication of update and 
		  $('#orderResult').slideUp(function(){
				// Ajax post
				$.post('<?php echo site_url('admin/page/order_ajax') ?>', { sortable: oSortable }, function(data){
					$('#orderResult').html(data);
					 $('#orderResult').slideDown();					
				});	
		  });
					   
	});
});
</script>