<?php $this->load->view('components/page_head'); ?>
<div class="container">
<link href="<?php echo site_url('assets/css/error.css'); ?>" rel="stylesheet">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2><?php echo $heading; ?></h2>
                <div class="error-details">
                    <?php echo $message; ?>
                </div>
                <div class="error-actions">
                                    
                       <?php echo anchor('page', 'Home', 'class="btn btn-default btn-lg"','<span class="glyphicon glyphicon-envelope"></span>'); ?> 
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('components/page_footer'); ?>