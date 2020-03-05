<?php
class Baskets
{
/*******************************Attributs*******************************/
private $_idBasket;

/******************************Accesseurs*******************************/
public function getIdBasket()
{
 return $this->_idBasket;
}
public function setIdBasket($_idBasket)
{
 return $this->_idBasket = $_idBasket;
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
 return $this->getIdBasket ;
}

}