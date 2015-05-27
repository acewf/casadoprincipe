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
    	$this->myPaths = array();    	
    	$this->generatePath('','home-ui');
    	$this->generatePath('home/','home-ui');
    	$this->generatePath('index.php','home-ui');
    	$this->generatePath('suites/','quarto-ui');
    	$this->generatePath('suites/details/','quarto-ui');
    	$this->generatePath('suites/details/royal/','quarto-detail-ui');
    	$this->generatePath('suites/details/premium/','quarto-detail-ui');
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