<?php
class Articles
{
/*******************************Attributs*******************************/
private $_idArticle;
private $_nameArticle;
private $_descriptionArticle;
private $_priceArticle;
private $_amountAvailabeArticle;
private $_photoArticle;

/******************************Accesseurs*******************************/
public function getIdArticle()
{
 return $this->_idArticle;
}
public function setIdArticle($_idArticle)
{
 return $this->_idArticle = $_idArticle;
}
public function getNameArticle()
{
 return $this->_nameArticle;
}
public function setNameArticle($_nameArticle)
{
 return $this->_nameArticle = $_nameArticle;
}
public function getDescriptionArticle()
{
 return $this->_descriptionArticle;
}
public function setDescriptionArticle($_descriptionArticle)
{
 return $this->_descriptionArticle = $_descriptionArticle;
}
public function getPriceArticle()
{
 return $this->_priceArticle;
}
public function setPriceArticle($_priceArticle)
{
 return $this->_priceArticle = $_priceArticle;
}
public function getAmountAvailabeArticle()
{
 return $this->_amountAvailabeArticle;
}
public function setAmountAvailabeArticle($_amountAvailabeArticle)
{
 return $this->_amountAvailabeArticle = $_amountAvailabeArticle;
}
public function getPhotoArticle()
{
 return $this->_photoArticle;
}
public function setPhotoArticle($_photoArticle)
{
 return $this->_photoArticle = $_photoArticle;
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
 return $this->getIdArticle . $this->getNameArticle . $this->getDescriptionArticle . $this->getPriceArticle . $this->getAmountAvailabeArticle . $this->getPhotoArticle ;
}

}