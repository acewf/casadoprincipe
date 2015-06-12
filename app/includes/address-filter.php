<?php 


class PathCheck
{
    public $value;
    public $file;
}

class AdressChecker
{
    private $localPath;
    public $myPaths;
    public function initPaths(){
        $basefolder = '';
        $this->myPaths = array();   
        $this->generatePath($basefolder.'','home-ui','',null,'head-index');
        $this->generatePath($basefolder.'en','home-ui','',null,'head-index');
        $this->generatePath($basefolder.'en/home','home-ui','',null,'head-index');
        $this->generatePath($basefolder.'en/casa-do-principe','casa-do-principe-ui','en/',null,'head-casa-do-principe');
        $this->generatePath($basefolder.'en/facilities-services','facilities-services-ui','en/',null,'head-casa-do-principe');
        $this->generatePath($basefolder.'en/history','history-ui','en/',null,'head-casa-do-principe');
        $this->generatePath($basefolder.'index.php','home-ui','',null,'head-index');
        $this->generatePath($basefolder.'en/gallery','gallery-ui','',null,'head-gallery');
        $this->generatePath($basefolder.'en/location','location-ui','',null,'head-location');
        $this->generatePath($basefolder.'en/personalize-your-stay','personalize-ui','',null,'head-personalize');
        $this->generatePath($basefolder.'en/contacts','contact-ui','',null,'head-contact');
        // ------------ Suite Rooms ------------- //
        $this->generatePath($basefolder.'en/suites-rooms/','quarto-ui','','sub-menu-rooms','head-index');
        $this->generatePath($basefolder.'en/suites-rooms/imperial','quarto-ui-info','en/rooms/imperial/','sub-menu-imperial-suite','head-index');
        $this->generatePath($basefolder.'en/suites-rooms/royal','quarto-ui-info','en/rooms/royal/','sub-menu-royal','head-index');
        $this->generatePath($basefolder.'en/suites-rooms/premium','quarto-ui-info','en/rooms/premium/','sub-menu-premium','head-index');
        $this->generatePath($basefolder.'en/suites-rooms/historic','quarto-ui-info','en/rooms/historic/','sub-menu-historic','head-index');
        // ------------ Imperial ------------- //
        $this->generatePath($basefolder.'en/suites-rooms/imperial/queen','quarto-detail-ui','en/rooms/imperial/','sub-menu-imperial-suite-childs','head-index');
        // ------------ Royal ------------- //
        $this->generatePath($basefolder.'en/suites-rooms/royal/queen','quarto-detail-ui-queen','en/rooms/royal/','sub-menu-royal-childs','head-index');
        $this->generatePath($basefolder.'en/suites-rooms/royal/palace','quarto-detail-ui-palace','en/rooms/royal/','sub-menu-royal-childs','head-index');
        // ------------ Premium ------------- //
        $this->generatePath($basefolder.'en/suites-rooms/premium/arts','quarto-detail-ui-arts','en/rooms/premium/','sub-menu-premium-childs','head-index');
        $this->generatePath($basefolder.'en/suites-rooms/premium/lisbon','quarto-detail-ui-lisbon','en/rooms/premium/','sub-menu-premium-childs','head-index');
        // ------------ Historic  ------------- //
        $this->generatePath($basefolder.'en/suites-rooms/historic/queen','quarto-detail-ui-queen','en/rooms/historic/','sub-menu-historic-childs','head-index');
        $this->generatePath($basefolder.'en/suites-rooms/historic/king','quarto-detail-ui-king','en/rooms/historic/','sub-menu-historic-childs','head-index');
        $this->generatePath($basefolder.'en/suites-rooms/historic/sintra','quarto-detail-ui-sintra','en/rooms/historic/','sub-menu-historic-childs','head-index');
        $this->generatePath($basefolder.'en/suites-rooms/historic/voyages','quarto-detail-ui-voyages','en/rooms/historic/','sub-menu-historic-childs','head-index');
        // ------------  ------------- //
    }
    public function generatePath($compare,$file,$localPath,$levelMenu,$headfile)
    {
    	$addressObj = new PathCheck();
    	$addressObj->value = $compare;
    	$addressObj->file = $file;
        $addressObj->level = $levelMenu;
        $addressObj->localPath = $localPath;
        $addressObj->headfile = $headfile;
    	array_push($this->myPaths, $addressObj);
    }
    public function getPaths(){
        $this->initPaths();
        $yPaths = array();  
        for ($i=0; $i <count($this->myPaths) ; $i++) {
            $obj = new stdClass();
            $item = $this->myPaths[$i];            
            $obj->path = $item->localPath.$item->file ;
            $obj->level = $item->level;
            $obj->file = $item->file;
            $obj->headfile = $item->headfile;
            array_push($yPaths, $obj);
        }
        return $yPaths;
    }
    public function getPhpToUrl($nexturl)
    {
        $this->initPaths();
        $obj = new stdClass();
        if ($nexturl!='') {
           $path = $nexturl;
           $pathWithbar = $path."/";
        } else {
            $localPath = $_SERVER['REQUEST_URI'];
            $path = substr($localPath, 1, strlen($localPath)-1);   
            $pathWithbar = $path."/";
        }

        $level = null;
        for ($i=0; $i <count($this->myPaths) ; $i++) {	
        	$item = $this->myPaths[$i];
        	if(($path===$item->value) || ($pathWithbar===$item->value)){
        		$obj->path = $item->localPath.$item->file ;
                $obj->level = $item->level;
                $obj->headfile = $item->headfile;
                return $obj;
        	} else if (strlen ($path)===0) {
                $path = 'home-ui';                
                $obj->path = $path;
                $obj->level = $item->level;
                $obj->headfile = $item->headfile;
                return $obj;
            }
        }
        $path = '404';
        $obj->path = $path;
        $obj->level = $level;
        $obj->headfile = 'head-index';
        return $obj;
    }
}
?>