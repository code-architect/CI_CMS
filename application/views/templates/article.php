<!-- Main Content -->
<div class="span9">
      
        <article>
        	<h2><?php echo e($article->title); ?></h2>
        	<p class="pubdate"><b>Published date: </b><?php echo e($article->pubdate); ?></p>
        	<?php echo $article->body; ?>
        </article>
           
</div>
		
<!-- Sidebar -->
   
    <?php
       $this->load->view('sidebar');  
    ?>   
