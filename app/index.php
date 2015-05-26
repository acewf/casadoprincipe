<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <?php include(dirname(__FILE__).'/includes/head.php'); ?>
    </head>
    <body>
         <div class="container">
            <div id="language-options" class="overlay">
                <nav class="choose-lang">
                    <button class="close"></button>
                    <h3>Select Language</h3>
                    <ul>
                        <li><a href="">English</a></li>
                        <li><a href="">Português</a></li>
                    </ul>
                </nav>
            </div>
            <div id="menu-options" class="overlay yellow">
                <button class="close"></button>
                <nav class="choose-menu">
                    <h3>Book a Room</h3>
                    <ul>
                        <li><a href="home">Casa do príncipe </a></li>
                        <li><a href="suites">Suites and rooms</a></li>
                        <li><a href="galllery">Gallery</a></li>
                        <li><a href="location">Location</a></li>
                        <li><a href="personalize">Personalize your stay</a></li>
                        <li><a href="contacts">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <main>
                <header>
                    <div class="left-block">
                        <div class="logo">
                            <a href="home">
                                <img alt="logo site" src="images/logo-size140.png">
                            </a>
                        </div>
                    </div><div class="central-block">
                        <nav class="cd-nav-trigger">
                            <a  id="open-menu" attrib-open='0'><span></span><title>Menu</title></a>
                        </nav>
                    </div><div class="right-block">
                        <div class="options">
                            <button id="bookroom" attrib-open='0' class="booking">BOOK A ROOM</button><div id="open-lang" attrib-open='0' class="lang">English<span></span></div>
                        </div>
                    </div>
                </header>
                <?php 
                $localPath = $_SERVER['REQUEST_URI'];
                $path = substr($localPath, 1, strlen($localPath)-1);
                if ($path=='' || $path==='index.php' || $path==='home') {
                    $path = 'home-ui';
                }
                if ($path=='suites' || $path=='suites/') {
                    $path = 'quarto-ui';
                }
                ?>
                <?php include(dirname(__FILE__).'/includes/'.$path.'.php'); ?>
            </main>
            <?php include(dirname(__FILE__).'/includes/footer-ui.php'); ?>
        </div>

        

        <?php include(dirname(__FILE__).'/includes/footer.php'); ?>
    </body>
</html>
