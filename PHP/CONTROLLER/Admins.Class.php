<?php
class Admins
{
/*******************************Attributs*******************************/
private $_idAdmin;
private $_mailAdmin;
private $_passwordAdmin;

/******************************Accesseurs*******************************/
public function getIdAdmin()
{
 return $this->_idAdmin;
}
public function setIdAdmin($_idAdmin)
{
 return $this->_idAdmin = $_idAdmin;
}
public function getMailAdmin()
{
 return $this->_mailAdmin;
}
public function setMailAdmin($_mailAdmin)
{
 return $this->_mailAdmin = $_mailAdmin;
}
public function getPasswordAdmin()
{
 return $this->_passwordAdmin;
}
public function setPasswordAdmin($_passwordAdmin)
{
 return $this->_passwordAdmin = $_passwordAdmin;
}

/*******************************Construct*******************************/
public function __construct(array $options = [])
    {
        if (!empty($options))
        {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode])))
            {
                $this->$methode($value);
            }
        }
    }

/****************************Autres méthodes****************************/
public function toString() 
{ 
 return $this->getIdAdmin . $this->getMailAdmin . $this->getPasswordAdmin ;
}

}