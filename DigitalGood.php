<?php declare(strict_types=1);

class DigitalGood extends UniqueGood
{
    public function salesIncome () : float
    {
        return (parent::salesIncome(parent::getBoxPrice(), parent::getBoxAmount())) / 2;
    }
}
