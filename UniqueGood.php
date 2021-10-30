<?php declare(strict_types=1);

class UniqueGood extends AbstractGoods
{
    public function salesIncome (float $boxPrice, int $boxAmount) : float
    {
        return $boxPrice * $boxAmount;
    }
}