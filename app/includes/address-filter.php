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
        $this->generatePath($basefolder.'','home-ui','',null);
        $this->generatePath($basefolder.'home/','home-ui','',null);
        $this->generatePath($basefolder.'casa-do-principe/','casa-do-principe-ui','',null);
        $this->generatePath($basefolder.'facilities-services/','facilities-services-ui','',null);
        $this->generatePath($basefolder.'history/','history-ui','',null);
        $this->generatePath($basefolder.'index.php','home-ui','',null);
        // ------------ Suite Rooms ------------- //
        $this->generatePath($basefolder.'suites-rooms/','quarto-ui','','sub-menu-rooms');
        $this->generatePath($basefolder.'suites-rooms/imperial','quarto-ui-info','rooms/imperial/','sub-menu-imperial-suite');
        $this->generatePath($basefolder.'suites-rooms/royal','quarto-ui-info','rooms/royal/','sub-menu-royal');
        $this->generatePath($basefolder.'suites-rooms/premium','quarto-ui-info','rooms/premium/','sub-menu-premium');
        $this->generatePath($basefolder.'suites-rooms/historic','quarto-ui-info','rooms/historic/','sub-menu-historic');
        // ------------ Imperial ------------- //
        $this->generatePath($basefolder.'suites-rooms/imperial/queen','quarto-detail-ui','rooms/imperial/','sub-menu-imperial-suite-childs');
        // ------------ Royal ------------- //
        $this->generatePath($basefolder.'suites-rooms/royal/queen','quarto-detail-ui-queen','rooms/royal/','sub-menu-royal-childs');
        $this->generatePath($basefolder.'suites-rooms/royal/palace','quarto-detail-ui-palace','rooms/royal/','sub-menu-royal-childs');
        // ------------ Premium ------------- //
        $this->generatePath($basefolder.'suites-rooms/premium/arts','quarto-detail-ui-arts','rooms/premium/','sub-menu-premium-childs');
        $this->generatePath($basefolder.'suites-rooms/premium/lisbon','quarto-detail-ui-lisbon','rooms/premium/','sub-menu-premium-childs');
        // ------------ Historic  ------------- //
        $this->generatePath($basefolder.'suites-rooms/historic/queen','quarto-detail-ui','rooms/historic/','sub-menu-historic-childs');
        $this->generatePath($basefolder.'suites-rooms/historic/king','quarto-detail-ui','rooms/historic/','sub-menu-historic-childs');
        $this->generatePath($basefolder.'suites-rooms/historic/sintra','quarto-detail-ui','rooms/historic/','sub-menu-historic-childs');
        $this->generatePath($basefolder.'suites-rooms/historic/voyages','quarto-detail-ui','rooms/historic/','sub-menu-historic-childs');
        // ------------  ------------- //
    }
    public function generatePath($compare,$file,$localPath,$levelMenu)
    {
    	$addressObj = new PathCheck();
    	$addressObj->value = $compare;
    	$addressObj->file = $file;
        $addressObj->level = $levelMenu;
        $addressObj->localPath = $localPath;
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
                return $obj;
        	} else if (strlen ($path)===0) {
                $path = 'home-ui';                
                $obj->path = $path;
                $obj->level = $item->level;
                return $obj;
            }
        }
        $path = '404';
        $obj->path = $path;
        $obj->level = $level;
        return $obj;
    }
}
?>