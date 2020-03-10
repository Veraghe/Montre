<?php
class Orders
{
/*******************************Attributs*******************************/
private $_idOrder;
private $_idArticle;
private $_idCustomer;

/******************************Accesseurs*******************************/
public function getIdOrder()
{
 return $this->_idOrder;
}
public function setIdOrder($_idOrder)
{
 return $this->_idOrder = $_idOrder;
}
public function getIdArticle()
{
return $this->_idArticle;
}

public function setIdArticle($_idArticle)
{
$this->_idArticle = $_idArticle;

}

public function getIdCustomer()
{
return $this->_idCustomer;
}

public function setIdCustomer($_idCustomer)
{
$this->_idCustomer = $_idCustomer;

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
 return $this->getIdOrder() . $this->getIdArticle() . $this->getIdCustomer() ;
}

}