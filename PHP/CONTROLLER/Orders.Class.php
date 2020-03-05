<?php
class Orders
{
/*******************************Attributs*******************************/
private $_idOrder;
private $_amountOrder;
private $_dateOrder;

/******************************Accesseurs*******************************/
public function getIdOrder()
{
 return $this->_idOrder;
}
public function setIdOrder($_idOrder)
{
 return $this->_idOrder = $_idOrder;
}
public function getAmountOrder()
{
 return $this->_amountOrder;
}
public function setAmountOrder($_amountOrder)
{
 return $this->_amountOrder = $_amountOrder;
}
public function getDateOrder()
{
 return $this->_dateOrder;
}
public function setDateOrder($_dateOrder)
{
 return $this->_dateOrder = $_dateOrder;
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
 return $this->getIdOrder . $this->getAmountOrder . $this->getDateOrder ;
}

}