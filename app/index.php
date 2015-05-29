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
            $basePath = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$folder; 
            /*
            $url = $_SERVER['REQUEST_URI']; //returns the current URL
            $parts = explode('/',$url);
            $mypath = $_SERVER['SERVER_NAME'];
            for ($i = 0; $i < count($parts) - 1; $i++) {
             $mypath .= $parts[$i] . "/";
            }
            echo $mypath;
            */            
            $Adress = new AdressChecker();
        ?>
        <?php include(dirname(__FILE__).'/includes/head.php'); ?>
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
                    <h3>Book a Room</h3>
                    <ul>
                        <li><a href="<?php echo "$basePath"; ?>home">Casa do príncipe</a></li>
                        <li><a href="<?php echo "$basePath"; ?>suites">Suites and rooms</a></li>
                        <li><a href="<?php echo "$basePath"; ?>galllery">Gallery</a></li>
                        <li><a href="<?php echo "$basePath"; ?>location">Location</a></li>
                        <li><a href="<?php echo "$basePath"; ?>personalize">Personalize your stay</a></li>
                        <li><a href="<?php echo "$basePath"; ?>contacts">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class="main">
                <header>
                    <div class="left-block">
                        <div class="logo">
                            <a href="<?php echo "$basePath"; ?>home">
                                <img alt="logo site" src="<?php echo "$basePath"; ?>images/logo-size140.png">
                            </a>
                        </div>
                    </div><div class="central-block">
                        <nav class="cd-nav-trigger">
                            <a  id="open-menu" data-open="0"><span></span><div>Menu</div></a>
                        </nav>
                    </div><div class="right-block">
                        <div class="options">
                            <button id="bookroom" data-open="0" class="booking">BOOK A ROOM</button><div id="open-lang" data-open="0" class="lang">English<span></span></div>
                        </div>
                    </div>
                </header>
                <?php 
                $path = $Adress->getPhpToUrl()
                ?>
                <script type="text/javascript">
                var contentmodule = 'apphome';
                contentmodule = '<?php echo $path ?>';
                </script>
                <?php include(dirname(__FILE__).'/includes/'.$path.'.php'); ?>
            </div>
            <?php include(dirname(__FILE__).'/includes/footer-ui.php'); ?>
        </div>
        <?php include(dirname(__FILE__).'/includes/footer.php'); ?>
    </body>
</html>
