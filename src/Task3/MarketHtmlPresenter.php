<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $present = '<table>';

        foreach ($market->getCurrencies() as $currency)
            {
                $logo = '<img src="'.$currency->getLogoUrl().'">';
                $present.= '<tr>
                                <td>'.$logo.'</td>
                                <td>'.$currency->getName().': '.$currency->getDailyPrice().'</td>
                            </tr>';    
            }

        $present.='</table>';

        return $present;
    }
}