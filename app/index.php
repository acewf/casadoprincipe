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
            $lang = '';
            if($_SERVER['SERVER_NAME']==='127.0.0.1'){
                $basePath = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$folder; 
            } else {
                $basePath = 'http://'.$_SERVER['SERVER_NAME'].$folder;
            }
            $findme = '/';
            $mystring = $_SERVER['REQUEST_URI'];
            $mystring = substr($mystring, 1);
            $pos = strpos($mystring, $findme);
            $lang = substr($mystring, 0,$pos+1);
            $Adress = new AdressChecker();
            $booktext = 'BOOK A ROOM';


            if ($lang!=='en' && $lang!=='en/' && $lang!=='pt' && $lang!=='pt/') {
                $lang='en/';
            } else if($lang=='en' || $lang=='en/'){
                $booktext = 'BOOK A ROOM';
            } else {
                $booktext = 'RESERVAS'; 
            }            
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
        <link rel="stylesheet" href="<?php echo "$basePath"; ?>styles/responsive.css">
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
                        <li><a href="<?php echo "$basePath"; ?>en/">English</a></li>
                        <li><a href="<?php echo "$basePath"; ?>pt/">Português</a></li>
                    </ul>
                </nav>
            </div>
            <div id="menu-options" class="overlay yellow">
                <button class="close"></button>
                <?php include(dirname(__FILE__).'/includes/'.$lang.'top-menu.php'); ?>
            </div>
            <div class="main">
                <header>
                    <div class="left-block">
                        <div class="logo">
                            <a href="<?php echo $basePath.$lang; ?>home">
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
                            <button id="bookroom" data-open="0" class="booking"><?php echo $booktext; ?></button></a><div id="open-lang" data-open="0" class="lang"><?php 
                                if($lang=='en' || $lang=='en/'){
                                    echo "English";
                                } else {
                                    echo "Português";
                                }

                            ?><span></span></div>
                        </div>
                    </div>
                </header>
                <?php 
                $pathObj = $Adress->getPhpToUrl('');
                $path = $pathObj->path;
                ?>
                <?php include(dirname(__FILE__).'/includes/'.$lang.'submenu/sub-menu-wrapper.php'); ?>
                <script type="text/javascript">
                var contentmodule = 'apphome';
                contentmodule = '<?php echo $path ?>';
                var language = '<?php echo $lang; ?>';
                </script>
                <?php include(dirname(__FILE__).'/includes/'.$path.'.php'); ?>
            </div><?php include(dirname(__FILE__).'/includes/footer-ui.php'); ?>
        </div>
        <?php include(dirname(__FILE__).'/includes/footer.php'); ?>
    </body>
</html>
