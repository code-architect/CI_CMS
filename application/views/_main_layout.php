<?php $this->load->view('components/page_head'); ?>

<body>
   
<div class="container">
<section>
	<h1><?php echo config_item('site_name'); ?></h1>
</section>

<!-- Navigation Starts -->

<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
		  <ul class="nav">
		  	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Link One <b class="caret"></b></a>
		  	   <ul class="dropdown-menu">
		  	       <li><a href="#">Link One</a></li>
		  	       <li><a href="#">Link One</a></li>
		  	   </ul>
		  	</li>
		  	<li><a href="#">Link One</a></li>
		  	<li><a href="#">Link One</a></li>
		  </ul>
		</div>
	</div>
</div>
</div>
<!-- Navigation Ends -->

<div class="container">
	<div class="row">
	    <!-- Main Content -->
		<div class="span9">
		  <h2>Main Content</h2>
		</div>
		
		<!-- Sidebar -->
		<div class="span3">
		  <h2>Recent News</h2>
		</div>
	</div>
</div>
<?php $this->load->view('components/page_footer'); ?>