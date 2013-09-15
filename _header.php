<?php 
	$in_dev_mode = 1;      // for production, set $in_dev_mode to '0'
    $cssprefix = 'main';

    // Kirby Toolkit. http://toolkit.getkirby.com/
    // Commented out by default. But it's there for you if you need it:
    // require_once('assets/php/kirby.php'); 
?>

<!DOCTYPE html>
<html lang="en" ng-app="app">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Acts2fellowship</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- Using Open Sans: http://www.google.com/fonts#UsePlace:use/Collection:Open+Sans -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- jQuery and AngularJS are commented out. Uncomment if you plan on using it -->
        <!-- <script type="text/javascript" src="assets/js/jquery-2.0.3.min.js"></script> -->
        <!-- <script type="text/javascript" src="assets/js/angular.min.js"></script> -->
        
        <?php if ($in_dev_mode) { ?>
        <link rel="stylesheet/less" type="text/css" href="assets/styles/<?php echo $cssprefix; ?>.bootstrap-3.less" />

        <script type="text/javascript" src="assets/js/less-1.4.1.min.js"></script>
        
        <script type="text/javascript">
		    less.env = "development";
		    less.watch();
		</script>

        <?php } else { ?>
        <link rel="stylesheet" href="assets/styles/<?php echo $cssprefix; ?>.bootstrap.css" type="text/css" charset="utf-8">
        <?php } ?>


    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        