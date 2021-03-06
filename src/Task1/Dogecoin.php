<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class Dogecoin implements Currency
{
    private $name;
    private $logo;
    private $price;

    public function __construct(float $price)
    {
        $this->name = 'Dogecoin';
        $this->logo = 'https://s2.coinmarketcap.com/static/img/coins/32x32/74.png';
        $this->price = $price;
    }    

    public function getName(): string
    {
        return $this->name;
    }

    public function getDailyPrice(): float
    {
        return $this->price;
    }

    public function getLogoUrl(): string
    {
        return $this->logo;
    }
    
}

?>