<?php declare(strict_types=1);

abstract class AbstractGoods
{
    protected float $boxPrice;

    public function setBoxPrice(float $boxPrice)
    {
        $this->boxPrice = $boxPrice;
    }

    public function getBoxPrice() : float
    {
        return $this->boxPrice;
    }

    protected int $boxAmount;

    public function setBoxAmount(int $boxAmount)
    {
        $this->boxAmount = $boxAmount;
    }

    public function getBoxAmount() : int
    {
        return $this->boxAmount;
    }

    abstract function salesIncome (float $boxBoxPrice, int $boxAmount) : float;
}
