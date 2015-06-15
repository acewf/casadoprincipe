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
        $this->generatePath($basefolder.'','home-ui','en/',null,'head-index');
        $this->generatePath($basefolder.'en/','home-ui','en/',null,'head-index');
        $this->generatePath($basefolder.'en/home','home-ui','en/',null,'head-index');
        $this->generatePath($basefolder.'en/casa-do-principe','casa-do-principe-ui','en/',null,'head-casa-do-principe');
        $this->generatePath($basefolder.'en/facilities-services','facilities-services-ui','en/',null,'head-facilities-services');
        $this->generatePath($basefolder.'en/history','history-ui','en/',null,'head-history');
        $this->generatePath($basefolder.'index.php','home-ui','en/',null,'head-index');
        $this->generatePath($basefolder.'en/gallery','gallery-ui','',null,'head-gallery');
        $this->generatePath($basefolder.'en/location','location-ui','en/',null,'head-location');
        $this->generatePath($basefolder.'en/personalize-your-stay','personalize-ui','en/',null,'head-personalize');
        $this->generatePath($basefolder.'en/contacts','contact-ui','en/',null,'head-contact');
        // ------------ Suite Rooms ------------- //
        $this->generatePath($basefolder.'en/suites-rooms/','quarto-ui','en/','sub-menu-rooms','head-suits-rooms');
        $this->generatePath($basefolder.'en/suites-rooms/imperial','quarto-ui-info','en/rooms/imperial/','sub-menu-imperial-suite','head-suits-rooms-imperial');
        $this->generatePath($basefolder.'en/suites-rooms/royal','quarto-ui-info','en/rooms/royal/','sub-menu-royal','head-suits-rooms-imperial');
        $this->generatePath($basefolder.'en/suites-rooms/premium','quarto-ui-info','en/rooms/premium/','sub-menu-premium','head-suits-rooms-imperial');
        $this->generatePath($basefolder.'en/suites-rooms/historic','quarto-ui-info','en/rooms/historic/','sub-menu-historic','head-suits-rooms-imperial');
        // ------------ Imperial ------------- //
        $this->generatePath($basefolder.'en/suites-rooms/imperial/king','quarto-detail-ui','en/rooms/imperial/','sub-menu-imperial-suite-childs','head-suits-rooms-king');
        // ------------ Royal ------------- //
        $this->generatePath($basefolder.'en/suites-rooms/royal/queen','quarto-detail-ui-queen','en/rooms/royal/','sub-menu-royal-childs','head-suits-rooms-queen');
        $this->generatePath($basefolder.'en/suites-rooms/royal/palace','quarto-detail-ui-palace','en/rooms/royal/','sub-menu-royal-childs','head-suits-rooms-palace');
        // ------------ Premium ------------- //
        $this->generatePath($basefolder.'en/suites-rooms/premium/arts','quarto-detail-ui-arts','en/rooms/premium/','sub-menu-premium-childs','head-suits-rooms-arts');
        $this->generatePath($basefolder.'en/suites-rooms/premium/lisbon','quarto-detail-ui-lisbon','en/rooms/premium/','sub-menu-premium-childs','head-suits-rooms-lisbon');
        // ------------ Historic  ------------- //
        $this->generatePath($basefolder.'en/suites-rooms/historic/queen','quarto-detail-ui-queen','en/rooms/historic/','sub-menu-historic-childs','head-suits-rooms-historic-queen');
        $this->generatePath($basefolder.'en/suites-rooms/historic/king','quarto-detail-ui-king','en/rooms/historic/','sub-menu-historic-childs','head-suits-rooms-king');
        $this->generatePath($basefolder.'en/suites-rooms/historic/sintra','quarto-detail-ui-sintra','en/rooms/historic/','sub-menu-historic-childs','head-suits-rooms-sintra');
        $this->generatePath($basefolder.'en/suites-rooms/historic/voyages','quarto-detail-ui-voyages','en/rooms/historic/','sub-menu-historic-childs','head-suits-rooms-voyages');
        // ------------  ------------- //


        // ------------ PT ------------- //
        $this->generatePath($basefolder.'pt/','home-ui','pt/',null,'head-index');
        $this->generatePath($basefolder.'pt/home','home-ui','pt/',null,'head-index');
        $this->generatePath($basefolder.'pt/casa-do-principe','casa-do-principe-ui','pt/',null,'head-casa-do-principe');
        $this->generatePath($basefolder.'pt/facilities-services','facilities-services-ui','pt/',null,'head-facilities-services');
        $this->generatePath($basefolder.'pt/history','history-ui','pt/',null,'head-history');
        $this->generatePath($basefolder.'index.php','home-ui','pt/',null,'head-index');
        $this->generatePath($basefolder.'pt/gallery','gallery-ui','',null,'head-gallery');
        $this->generatePath($basefolder.'pt/location','location-ui','pt/',null,'head-location');
        $this->generatePath($basefolder.'pt/personalize-your-stay','personalize-ui','pt/',null,'head-personalize');
        $this->generatePath($basefolder.'pt/contacts','contact-ui','pt/',null,'head-contact');
        // ------------ Suite Rooms ------------- //
        $this->generatePath($basefolder.'pt/suites-rooms/','quarto-ui','pt/','sub-menu-rooms','head-suits-rooms');
        $this->generatePath($basefolder.'pt/suites-rooms/imperial','quarto-ui-info','pt/rooms/imperial/','sub-menu-imperial-suite','head-suits-rooms-imperial');
        $this->generatePath($basefolder.'pt/suites-rooms/royal','quarto-ui-info','pt/rooms/royal/','sub-menu-royal','head-suits-rooms-imperial');
        $this->generatePath($basefolder.'pt/suites-rooms/premium','quarto-ui-info','pt/rooms/premium/','sub-menu-premium','head-suits-rooms-imperial');
        $this->generatePath($basefolder.'pt/suites-rooms/historic','quarto-ui-info','pt/rooms/historic/','sub-menu-historic','head-suits-rooms-imperial');
        // ------------ Imperial ------------- //
        $this->generatePath($basefolder.'pt/suites-rooms/imperial/king','quarto-detail-ui','pt/rooms/imperial/','sub-menu-imperial-suite-childs','head-suits-rooms-king');
        // ------------ Royal ------------- //
        $this->generatePath($basefolder.'pt/suites-rooms/royal/queen','quarto-detail-ui-queen','pt/rooms/royal/','sub-menu-royal-childs','head-suits-rooms-queen');
        $this->generatePath($basefolder.'pt/suites-rooms/royal/palace','quarto-detail-ui-palace','pt/rooms/royal/','sub-menu-royal-childs','head-suits-rooms-palace');
        // ------------ Premium ------------- //
        $this->generatePath($basefolder.'pt/suites-rooms/premium/arts','quarto-detail-ui-arts','pt/rooms/premium/','sub-menu-premium-childs','head-suits-rooms-arts');
        $this->generatePath($basefolder.'pt/suites-rooms/premium/lisbon','quarto-detail-ui-lisbon','pt/rooms/premium/','sub-menu-premium-childs','head-suits-rooms-lisbon');
        // ------------ Historic  ------------- //
        $this->generatePath($basefolder.'pt/suites-rooms/historic/queen','quarto-detail-ui-queen','pt/rooms/historic/','sub-menu-historic-childs','head-suits-rooms-historic-queen');
        $this->generatePath($basefolder.'pt/suites-rooms/historic/king','quarto-detail-ui-king','pt/rooms/historic/','sub-menu-historic-childs','head-suits-rooms-king');
        $this->generatePath($basefolder.'pt/suites-rooms/historic/sintra','quarto-detail-ui-sintra','pt/rooms/historic/','sub-menu-historic-childs','head-suits-rooms-sintra');
        $this->generatePath($basefolder.'pt/suites-rooms/historic/voyages','quarto-detail-ui-voyages','pt/rooms/historic/','sub-menu-historic-childs','head-suits-rooms-voyages');
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
                $path = 'en/home-ui';                
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