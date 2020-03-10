<?php
class Baskets
{
/*******************************Attributs*******************************/
private $_idBasket;
private $_idArticle;
private $_articleBasket;
private $_idCustomer;
private $_quantity;

/******************************Accesseurs*******************************/
public function getIdBasket()
{
 return $this->_idBasket;
}
public function setIdBasket($_idBasket)
{
 return $this->_idBasket = $_idBasket;
}
public function getIdArticle()
{
return $this->_idArticle;
}

public function setIdArticle($_idArticle)
{
    $this->_idArticle = $_idArticle;
    $this->setArticleBasket(ArticlesManager::findById($_idArticle));
}

public function getArticleBasket()
{
return $this->_articleBasket;
}

public function setArticleBasket($_articleBasket)
{
$this->_articleBasket = $_articleBasket;

}

public function getIdCustomer()
{
return $this->_idCustomer;
}

public function setIdCustomer($_idCustomer)
{
$this->_idCustomer = $_idCustomer;

}
public function getQuantity()
{
return $this->_quantity;
}

public function setQuantity($_quantity)
{
$this->_quantity = $_quantity;

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
 return $this->getIdBasket() . $this->getIdArticle() . $this->getIdCustomer() ;
}

}