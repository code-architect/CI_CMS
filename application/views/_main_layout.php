<?php $this->load->view('components/page_head'); ?>

<body>
   
<div class="container">
<section>
	<h1><?php //echo anchor('', config_item('site_name')); ?>
	<?php echo anchor('', img(site_url('assets/img/logo.jpg'))); ?>
	</h1>
</section>

<!-- Navigation Starts -->

<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
		  <?php echo get_menu($menu); ?>
		</div>
	</div>
</div>
</div>
<!-- Navigation Ends -->

<div class="container">
	<div class="row">	
	    <?php $this->load->view('templates/' . $subview); ?>
	</div>
</div>
<?php $this->load->view('components/page_footer'); ?>