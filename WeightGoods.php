<?php declare(strict_types=1);

class WeightGoods extends AbstractGoods
{
    protected float $boxWeight;
    protected float $unitPrice;

    public function setBoxWeight(float $boxWeight)
    {
        $this->boxWeight = $boxWeight;
    }

    public function getBoxWeight() : float
    {
        return $this->boxWeight;
    }

    public function setUnitPrice(float $unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    public function getUnitPrice() : float
    {
        return $this->unitPrice;
    }

    public function getBoxPrice() : float
    {
        return $this->unitPrice * $this->boxWeight;
    }

    public function salesIncome ($boxPrice, int $boxAmount) : float
        // параметр $boxPrice в данной функции - результат
        // вызова getBoxPrice() в качестве аргумента или предварительного
        // присвоения переменной, которая затем будет передана в функцию
        // в качестве аргумента, в основной программе
    {
        return $boxPrice * $boxAmount;
    }
}