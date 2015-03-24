<!-- Main Content -->
    <div class="span9">    
        <article>
        	<h2><?php echo e($page->title); ?></h2>
        	
        	<?php echo $page->body; ?>
        </article>  
    </div>    
		
<!-- Sidebar -->
<?php $this->load->view('sidebar'); ?>   