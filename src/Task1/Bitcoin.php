<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class Bitcoin implements CryptoCurrency
{
    private $name;
    private $logo;
    private $price;

    public function __construct(float $price)
    {
        $this->name = 'Bitcoin';
        $this->logo = 'https://s2.coinmarketcap.com/static/img/coins/32x32/1.png';
        $this->price = $price;
    }    

    public function getName(): string;
    {
        return this->name;
    }

    public function getDailyPrice(): float;
    {
        return this->price;
    }

    public function getLogoUrl(): string;
    {
        return this->logo;
    }
    
}

?>