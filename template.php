<?php
// Get page query string
$page = $_GET['page'];
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Swindon Car &amp; Van - Style Guide</title>
    <meta name="description" content="Swindon Car &amp; Van">
    <meta name="author" content="Matt Bailey">
    <meta name="Copyright" content="Copyright Swindon Car and Van">
    <!-- Viewport tag for non-repsonsive sites - fixes rendering bug on iOS devices -->
    <meta name="viewport" content="width=1024">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- The css files are compiled using LESS: http://lesscss.org/ -->
    <!-- NOTE - do not edit the css files directly! -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
    <!--[if lt IE 7]>
    <div class="chromeframe alert alert-error">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.
    </div>
    <![endif]-->

    <!-- Load header and page content based on $page query string -->
    <?php include "includes/header-" . "$page" . ".php"; ?>
    <?php include "includes/page-" . "$page" . ".php"; ?>

    <?php include 'includes/footer.php'; ?>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins-min.js"></script>
    <script src="js/main-min.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>
