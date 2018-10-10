<?php
namespace App\Twig;

use Twig\Extension\RuntimeExtensionInterface;

class AppRuntime implements RuntimeExtensionInterface
{
    public function __construct()
    {
        // this simple example doesn't define any dependency, but in your own
        // extensions, you'll need to inject services using this constructor
    }

    public function priceFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);

        return $price;
    }

    public function randomNumber()
    {
        $randomNumber = mt_rand ( 0, 100 );
        return $randomNumber;
    }

    public function eurToUsd($_EURPrice)
    {
        $USDPrice = $_EURPrice * 1.15;
        return $USDPrice;
    }
}