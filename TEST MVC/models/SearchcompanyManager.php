<?php
class SearchcompanyManager extends model
{
    public function getCompanies()
    {
        return $this->getAll('Entreprise','Searchcompany');
    }
}
?>