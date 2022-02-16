<?php
trait FidelityUser
{
    protected $premium;
    protected $discount;



    /**
     * Get the value of premium
     */
    public function getPremium()
    {
        return $this->premium;
    }

    /**
     * Set the value of premium
     *
     * @return  self
     */
    public function setPremium($premium)
    {
        $this->premium = $premium;

        return $this;
    }

    /**
     * Get the value of discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }
}
