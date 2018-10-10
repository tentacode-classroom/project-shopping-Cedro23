<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return array(
            // the logic of this filter is now implemented in a different class
            new TwigFilter('price', array(AppRuntime::class, 'priceFilter')),
        );
    }

    public function getFunctions()
    {
        return array(
            new TwigFunction('rng', array(AppRuntime::class, 'randomNumber')),
            new TwigFunction('eurToUsd', array(AppRuntime::class, 'EURToUSD'))
        );
    }
}