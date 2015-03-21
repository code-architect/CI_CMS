<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $meta_title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url('assets/css/admin_order.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/css/ui-lightness/jquery-ui-1.9.2.custom.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/css/datepicker.css'); ?>" rel="stylesheet">
    
    <!-- Bootstrap core JavaScript -->    
    <script src="<?php echo site_url('assets/js/jquery-1.11.2.min.js'); ?>"></script>    
    <script src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
    
    <?php if(isset($sortable) && $sortable ===  TRUE){ ?>
    <script src="<?php echo site_url('assets/js/jquery-ui-1.9.2.custom.min.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/jquery.mjs.nestedSortable.js'); ?>"></script>
    <?php } ?>
    <script src="<?php echo site_url('assets/js/tinymce/tinymce.min.js'); ?>"></script>
    <script>tinymce.init({selector:'textarea'});</script>    
    
  </head>
    