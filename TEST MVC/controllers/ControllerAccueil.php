<?php
class ControllerAccueil
{
    private $_searchcompanyManager;
    private $_view;

    public function __construct($url)
    {
        if(isset($url) && count((is_countable($url)?$url:[])) > 1)
            throw new Exception('Page introuvable');
        else 
            $this->companies();
    }

    private function companies()
    {
        $this->_searchcompanyManager = new SearchcompanyManager;
        $companies = $this->_searchcompanyManager->getCompanies();

        require_once('views/viewSearchcompany.php');
    }
}
?>