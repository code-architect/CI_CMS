<!DOCTYPE html>
<html lang="en">
<head>
<title>404 Page Not Found</title>

<link href="<?php echo site_url('assets/css/styles.css'); ?>" rel="stylesheet">
<link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?php echo site_url('assets/css/error.css'); ?>" rel="stylesheet">

</head>
<body>
	
<div class="container">

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
                                    
                       <?php echo anchor(base_url(), 'Home', 'class="btn btn-default btn-lg"','<span class="glyphicon glyphicon-envelope"></span>'); ?> 
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>