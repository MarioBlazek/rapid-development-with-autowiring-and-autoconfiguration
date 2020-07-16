<?php

namespace App\Controller;

use App\Converter\CaloriesConverterInterface;
use Netgen\Bundle\EzPlatformSiteApiBundle\Controller\Controller;
use Netgen\Bundle\EzPlatformSiteApiBundle\View\ContentView;

class FullViewController extends Controller
{
    /**
     * @var \App\Converter\CaloriesConverterInterface
     */
//    private $baseCaloriesConverter;
//
//    public function __construct(CaloriesConverterInterface $baseCaloriesConverter)
//    {
//        $this->baseCaloriesConverter = $baseCaloriesConverter;
//    }

    public function displayNgRecipe(ContentView $view)
    {
        return $view;
    }

//    public function displayNgRecipe(ContentView $view, CaloriesConverterInterface $baseCaloriesConverter)
//    {
//        return $view;
//    }
}
