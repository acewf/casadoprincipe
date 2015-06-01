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
    public function generatePath($compare,$file)
    {
    	$addressObj = new PathCheck();
    	$addressObj->value = $compare;
    	$addressObj->file = $file;
    	array_push($this->myPaths, $addressObj);
    }
    public function getPhpToUrl()
    {
        $basefolder = '';
    	$this->myPaths = array(); 	
    	$this->generatePath($basefolder.'','home-ui');
    	$this->generatePath($basefolder.'home/','home-ui');
        $this->generatePath($basefolder.'casa-do-principe/','casa-do-principe-ui');
        $this->generatePath($basefolder.'facilities-services/','facilities-services-ui');
        $this->generatePath($basefolder.'history/','history-ui');
    	$this->generatePath($basefolder.'index.php','home-ui');
    	$this->generatePath($basefolder.'suites-rooms/','quarto-ui');
    	$this->generatePath($basefolder.'suites-rooms/royal/','quarto-detail-ui');
    	$this->generatePath($basefolder.'suites/premium/','quarto-detail-ui');
    	$localPath = $_SERVER['REQUEST_URI'];
        $path = substr($localPath, 1, strlen($localPath)-1);   
        $pathWithbar = $path."/";
        for ($i=0; $i <count($this->myPaths) ; $i++) {	
        	$item = $this->myPaths[$i];
        	if(($path===$item->value) || ($pathWithbar===$item->value)){
        		$path = $item->file;        		
        		return $path;
        	} else if (strlen ($path)==0) {
                $path = 'home-ui';
                return $path;
            }
        }
        $path = '404';
        return $path;
    }
}
?>