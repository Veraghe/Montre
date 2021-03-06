<?php
class Customers
{
/*******************************Attributs*******************************/
private $_idCustomer;
private $_mail;
private $_password;
private $_nameCustomer;
private $_surnameCustomer;
private $_dobCustomer;
private $_adresseCustomer;
private $_cityCustomer;
private $_postalCodeCustomer;

/******************************Accesseurs*******************************/
public function getIdCustomer()
{
 return $this->_idCustomer;
}
public function setIdCustomer($_idCustomer)
{
 return $this->_idCustomer = $_idCustomer;
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
public function getNameCustomer()
{
 return $this->_nameCustomer;
}
public function setNameCustomer($_nameCustomer)
{
 return $this->_nameCustomer = $_nameCustomer;
}
public function getSurnameCustomer()
{
 return $this->_surnameCustomer;
}
public function setSurnameCustomer($_surnameCustomer)
{
 return $this->_surnameCustomer = $_surnameCustomer;
}
public function getDobCustomer()
{
 return $this->_dobCustomer;
}
public function setDobCustomer($_dobCustomer)
{
 return $this->_dobCustomer = $_dobCustomer;
}
public function getAdresseCustomer()
{
 return $this->_adresseCustomer;
}
public function setAdresseCustomer($_adresseCustomer)
{
 return $this->_adresseCustomer = $_adresseCustomer;
}
public function getCityCustomer()
{
 return $this->_cityCustomer;
}
public function setCityCustomer($_cityCustomer)
{
 return $this->_cityCustomer = $_cityCustomer;
}
public function getPostalCodeCustomer()
{
 return $this->_postalCodeCustomer;
}
public function setPostalCodeCustomer($_postalCodeCustomer)
{
 return $this->_postalCodeCustomer = $_postalCodeCustomer;
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
 return $this->getIdCustomer . $this->getMailCustomer . $this->getPasswordCustomer . $this->getNameCustomer . $this->getSurnameCustomer . $this->getDobCustomer . $this->getAdresseCustomer . $this->getCityCustomer . $this->getPostalCodeCustomer ;
}

}