<?php


namespace App\Twig;


use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TwigExtension extends AbstractExtension
{
    public function getFilters()
    {
      return [
        new TwigFilter('usPrefix',[$this,'usPrefixMethod'])
      ];
    }
    public function usPrefixMethod($str):string{
        return 'Uday Shiwakoti '.$str;
    }
}