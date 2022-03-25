<?php
class Searchcompany
{
    private $_name;
    private $_sector;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $method ='set'.ucfirst($key);
            if(method_exists($this, $method))
                $this->$method($value);
        }
    }

    //Setters
    public function setNom($name)
    {
        if(is_string($name))
            $this->_name = $name;
    }
    public function setSecteur($sector)
    {
        if(is_string($sector))
            $this->_sector = $sector;
    }

    //Getters
    public function name()
    {
        return $this->_name;
    }
    public function secteur()
    {
        return $this->_sector;
    }
}
?>