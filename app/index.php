<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php
            require_once dirname(__FILE__).'/includes/address-filter.php';
            //$folder = '/preview/';
            $folder = '/';
            if($_SERVER['SERVER_NAME']==='127.0.0.1'){
                $basePath = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$folder; 
            } else {
                $basePath = 'http://'.$_SERVER['SERVER_NAME'].$folder; 
            }
                      
            $Adress = new AdressChecker();
            $pathObj = $Adress->getPhpToUrl('');
        ?>
        <?php include(dirname(__FILE__).'/includes/head/'.$pathObj->headfile.'.php'); ?>

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css">
        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "fe80fa7d-2045-4199-ba3e-39141283a185", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
        <script src="//use.typekit.net/tma2rmc.js"></script>
        <script>try{Typekit.load();}catch(e){}</script>
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- build:js scripts/vendor/modernizr.js -->
        <script src="<?php echo "$basePath"; ?>bower_components/modernizr/modernizr.js"></script>
        <!-- endbuild -->
        <!-- build:css styles/vendor/bootstrap.css -->
        <link rel="stylesheet" href="<?php echo "$basePath"; ?>bower_components/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.standalone.css">
        <!-- endbuild -->
        <!-- build:css styles/main.css -->
        <link rel="stylesheet" href="<?php echo "$basePath"; ?>styles/main.css">
        <link rel="stylesheet" href="<?php echo "$basePath"; ?>styles/fotorama.css">
        <link rel="stylesheet" href="<?php echo "$basePath"; ?>styles/fonticon.css">
        <!-- endbuild -->
    </head>
    <body>
         <div class="container">
            <div id="language-options" class="overlay">
                <nav class="choose-lang">
                    <button class="close"></button>
                    <h3>Select Language</h3>
                    <ul>
                        <li><a href="en">English</a></li>
                        <li><a href="pt">Português</a></li>
                    </ul>
                </nav>
            </div>
            <div id="menu-options" class="overlay yellow">
                <button class="close"></button>
                <nav class="choose-menu">
                    <a href="https://www.secure-hotel-booking.com/smart/Casa-do-Principe/2E3B/en/" target="_blank">
                        <h3>Book a Room</h3>
                    </a>
                    <ul>
                        <li><a href="<?php echo "$basePath"; ?>home">Home</a></li>
                        <li><a href="<?php echo "$basePath"; ?>casa-do-principe">Casa do príncipe</a></li>
                        <li><a href="<?php echo "$basePath"; ?>suites-rooms">Suites and rooms</a></li>
                        <li><a href="<?php echo "$basePath"; ?>gallery">Gallery</a></li>
                        <li><a href="<?php echo "$basePath"; ?>location">Location</a></li>
                        <li><a href="<?php echo "$basePath"; ?>personalize-your-stay">Personalize your stay</a></li>
                        <li><a href="<?php echo "$basePath"; ?>contacts">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main">
                <header>
                    <div class="left-block">
                        <div class="logo">
                            <a href="<?php echo "$basePath"; ?>home">
                                <img alt="logo site" id="logo-big" src="<?php echo "$basePath"; ?>images/logo-size140.png">
                                <img alt="logo site" id="logo-small" src="<?php echo "$basePath"; ?>images/logo-sizesmall.png">
                            </a>
                        </div>
                    </div><div class="central-block">
                        <nav class="cd-nav-trigger">
                            <a  id="open-menu" data-open="0"><span></span><div>Menu</div></a>
                        </nav>
                    </div><div class="right-block">
                        <div class="options">
                            <a href="https://www.secure-hotel-booking.com/smart/Casa-do-Principe/2E3B/en/" target="_blank">
                            <button id="bookroom" data-open="0" class="booking">BOOK A ROOM</button></a><div id="open-lang" data-open="0" class="lang">English<span></span></div>
                        </div>
                    </div>
                </header>
                <?php 
                $pathObj = $Adress->getPhpToUrl('');
                $path = $pathObj->path;
                ?>
                <?php include(dirname(__FILE__).'/includes/submenu/sub-menu-wrapper.php'); ?>
                <script type="text/javascript">
                var contentmodule = 'apphome';
                contentmodule = '<?php echo $path ?>';
                </script>
                <?php include(dirname(__FILE__).'/includes/'.$path.'.php'); ?>
            </div><?php include(dirname(__FILE__).'/includes/footer-ui.php'); ?>
        </div>
        <?php include(dirname(__FILE__).'/includes/footer.php'); ?>
    </body>
</html>
