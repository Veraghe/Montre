<?php
class Admins
{
/*******************************Attributs*******************************/
private $_idAdmin;
private $_mail;
private $_password;

/******************************Accesseurs*******************************/
public function getIdAdmin()
{
 return $this->_idAdmin;
}
public function setIdAdmin($_idAdmin)
{
 return $this->_idAdmin = $_idAdmin;
}
public function getMail()
{
 return $this->_mail;
}
public function setMail($_mail)
{
 return $this->_mail = $_mail;
}
public function getPassword()
{
 return $this->_password;
}
public function setPassword($_password)
{
 return $this->_password = $_password;
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
 return $this->getIdAdmin . $this->getMail . $this->getPassword ;
}

}