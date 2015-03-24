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
      
    
    <script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});
</script>
    
    
    
  </head>
    