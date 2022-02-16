<?php
require_once __DIR__ . '/../traits/FidelityUser.php';
class Product
{
    use FidelityUser;
    protected $name;
    protected $model;
    protected $price;


    public function __construct($name, $model, $price)
    {
        $this->name = $name;
        $this->model = $model;
        $this->price = $price;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    /**
     * Get the value of model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice($premium, $discount)
    {
        if ($premium) {
            $this->price = $this->price * ((100 - $discount) / 100);
        }
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
