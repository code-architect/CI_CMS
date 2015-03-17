<?php $this->load->view('admin/components/page_head'); ?>
<body>
  
    <!-- Menu Start -->
    <div class="navbar navbar-static-top navbar-inverse">
        <div class="navbar-inner">
        <a class="brand" href="<?php echo site_url('admin/dashboard'); ?>"><?php echo $meta_title; ?></a>
            <ul class="nav">
                <li class="active"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
                <li><?php echo anchor('admin/pages', 'Pages'); ?></li>
                <li><?php echo anchor('admin/users', 'Users'); ?></li>
            </ul>
        </div>
    </div>
    <!-- Menu Ends -->    
    
    <div class="container">
        <div class="row">
            <!-- Main column -->
            <div class="span9">
                <section>
                    <h2>Page Name</h2>
                </section>
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
