<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{
    public function addCurrency(Currency $currency): void
    {
        $this->currencies[] = $currency;
    }

    public function maxPrice(): float
    {
        $max = 0;
        foreach ($this->currencies as $currency)
            {
                $max = max($max,$currency->getDailyPrice());
            }
        return $max;
    }

    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}
