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
    public function generatePath($compare,$file,$levelMenu)
    {
    	$addressObj = new PathCheck();
    	$addressObj->value = $compare;
    	$addressObj->file = $file;
        $addressObj->level = $levelMenu;
    	array_push($this->myPaths, $addressObj);
    }
    public function getPhpToUrl($nexturl)
    {
        //preview/
        $basefolder = '';
    	$this->myPaths = array(); 	
    	$this->generatePath($basefolder.'','home-ui',null);
    	$this->generatePath($basefolder.'home/','home-ui',null);
        $this->generatePath($basefolder.'casa-do-principe/','casa-do-principe-ui',null);
        $this->generatePath($basefolder.'facilities-services/','facilities-services-ui',null);
        $this->generatePath($basefolder.'history/','history-ui',null);
    	$this->generatePath($basefolder.'index.php','home-ui',null);
    	$this->generatePath($basefolder.'suites-rooms/','quarto-ui','sub-menu-rooms');
        $this->generatePath($basefolder.'suites-rooms/imperial/','quarto-ui-info','sub-menu-imperial-suite');
        $this->generatePath($basefolder.'suites-rooms/royal/','quarto-ui-info','sub-menu-royal');
        $this->generatePath($basefolder.'suites-rooms/premium/','quarto-ui-info','sub-menu-premium');
        $this->generatePath($basefolder.'suites-rooms/historic/','quarto-ui-info','sub-menu-historic');


        // ------------  ------------- //
        $this->generatePath($basefolder.'suites-rooms/imperial/queen','quarto-detail-ui-royal','sub-menu-imperial-suite');
        // ------------  ------------- //
        $this->generatePath($basefolder.'suites-rooms/royal/queen','quarto-detail-ui-royal','sub-menu-royal');
        $this->generatePath($basefolder.'suites-rooms/royal/palace','quarto-detail-ui-royal','sub-menu-royal');
        // ------------  ------------- //
        $this->generatePath($basefolder.'suites-rooms/premium/arts','quarto-detail-ui','sub-menu-premium');
        $this->generatePath($basefolder.'suites-rooms/premium/lisbon','quarto-detail-ui','sub-menu-premium');
        // ------------  ------------- //
        $this->generatePath($basefolder.'suites-rooms/historic/queen','quarto-detail-ui','sub-menu-historic');
        $this->generatePath($basefolder.'suites-rooms/historic/king','quarto-detail-ui','sub-menu-historic');
        $this->generatePath($basefolder.'suites-rooms/historic/sintra','quarto-detail-ui','sub-menu-historic');
        $this->generatePath($basefolder.'suites-rooms/historic/voyages','quarto-detail-ui','sub-menu-historic');

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
        		$path = $item->file; 
                $level = $item->level; 
                $obj->path = $path;
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