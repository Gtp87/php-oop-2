<?php

class Card
{
    protected $number;
    protected $name;
    protected $cvv;
    protected $expDate;

    public function __construct($name, $number, $cvv, $expDate)
    {
        $this->name = $name;
        $this->number = $number;
        $this->cvv = $cvv;
        $this->expDate = $expDate;
    }

    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
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
     * Get the value of cvv
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of expDate
     */
    public function getExpDate()
    {
        return $this->expDate;
    }

    /**
     * Set the value of expDate
     *
     * @return  self
     */
    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;

        return $this;
    }
}
