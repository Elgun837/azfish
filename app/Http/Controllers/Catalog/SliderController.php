<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Catalog\Slider;

class SliderController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        
        if(!$slider->count()) {
            return $this->errorResponse(trans('default.no_items'), 200);
        }

        return $this->successResponse($slider, 200);
    }
}
