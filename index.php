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
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- The css files are compiled using LESS: http://lesscss.org/ -->
    <!-- NOTE - do not edit the css files directly! -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="css/font-awesome-ie7.css">
    <![endif]-->
    <link rel="stylesheet" href="css/styles.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="js/vendor/selectivizr-min.js"></script>
    <![endif]-->
</head>
<body>
    <!--[if lt IE 7]>
    <div class="chromeframe alert alert-error">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.
    </div>
    <![endif]-->

    <div id="content">
        <div class="content-wrapper">
            <div class="main row">
                <article class="span12">
                    <div class="page-header">
                        <h1>Swindon Car &amp; Van <small>Templates</small></h1>
                    </div>
                    <ul>
                        <li><a href="template.php?page=arc">Home - Accident Repair Centre</a></li>
                        <li><a href="template.php?page=classic">Home - Classic Collection</a></li>
                        <li><a href="template.php?page=rental">Home - Rental</a></li>
                        <li><a href="template.php?page=sales">Home - Used Vehicle Sales</a></li>
                    </ul>
                    <ul>
                        <li><a href="template.php?page=results">Sales - Search Results</a></li>
                        <li><a href="template.php?page=details">Sales - Van Details</a></li>
                    </ul>
                    <ul>
                        <li><a href="template.php?page=standard">Standard page</a></li>
                    </ul>
                </article>
            </div>
        </div>
    </div>

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
