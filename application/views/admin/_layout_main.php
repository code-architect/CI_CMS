<?php $this->load->view('admin/components/page_head'); ?>
<body>
  
    <!-- Menu Start -->
    <div class="navbar navbar-static-top navbar-inverse">
        <div class="navbar-inner">
        <a class="brand" href="<?php echo site_url('admin/dashboard'); ?>"><?php echo $meta_title; ?></a>
        
            <ul class="nav">
                <li <?php if($this->uri->segment(2) == 'dashboard') {echo 'class="active"'; } ?>><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
                <li <?php if($this->uri->segment(2) == 'page' && $this->uri->segment(3) == 'order') {echo ''; } elseif($this->uri->segment(2) == 'page') { echo 'class="active"'; } ?>><?php echo anchor('admin/page', 'Pages'); ?></li>
                <li <?php if($this->uri->segment(3) == 'order') {echo 'class="active"'; } ?>><?php echo anchor('admin/page/order', 'Order Pages'); ?></li>
                <li <?php if($this->uri->segment(2) == 'article') {echo 'class="active"'; } ?>><?php echo anchor('admin/article', 'News Articles'); ?></li>                
                <li <?php if($this->uri->segment(2) == 'user') {echo 'class="active"'; } ?>><?php echo anchor('admin/user', 'Users'); ?></li>                
                
            </ul>
        </div>
    </div>
    <!-- Menu Ends -->    
    
    <div class="container">
        <div class="row">
            <!-- Main column -->
            <div class="span9">
                <?php $this->load->view($subview); ?>
            </div>
            <!-- Sidebar -->
            <div class="span3">
                <section>
                    <?php echo mailto('xyz@abc.com', '<i class="icon-user"></i> xyz@abc.com'); ?><br>
                    <?php echo anchor('admin/user/logout', '<i class="icon-off"></i>logout'); ?>
                </section>
            </div>
         </div>   
    </div>
                         
                       
   
<?php $this->load->view('admin/components/page_footer'); ?>
