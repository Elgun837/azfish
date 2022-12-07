<?php

namespace App\Widgets;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use Arrilot\Widgets\AbstractWidget;

class ProductDimmer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return 'KRM WIDGET';
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return true;
    }
}