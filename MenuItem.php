<?php
/**
 * Created by PhpStorm.
 * User: tarajano
 * Date: 05/04/18
 * Time: 11:38 AM
 */

class MenuItem
{
    private $itemName, $itemDescription, $itemPrice;

    /**
     * @return mixed
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * @param mixed $itemName
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;
    }

    /**
     * @return mixed
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    /**
     * @param mixed $itemDescription
     */
    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = $itemDescription;
    }

    /**
     * @return mixed
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * @param mixed $itemPrice
     */
    public function setItemPrice($itemPrice)
    {
        $this->itemPrice = $itemPrice;
    }

    public function __construct($name, $desc, $price)
    {
        $this->itemName = $name;
        $this->itemDescription = $desc;
        $this->itemPrice = $price;
    }

    public function __destruct()
    {
        $this->itemName;
        $this->itemDescription;
        $this->itemPrice;
    }

}