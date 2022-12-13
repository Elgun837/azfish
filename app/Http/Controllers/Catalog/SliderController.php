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
        $sliders = Slider::all();
        $data = [];
        
        if(!$sliders->count()) {
            return $this->errorResponse(trans('default.no_items'), 200);
        }

        foreach ($sliders as $key => $value) {
            if(!empty($value['link'])){
                $data[] = [
                    'video' => $value['link']
                ];
            } else {
                $data[] = [
                    'image' => $value['image_'.app()->getLocale()]
                ];
            }
        }

        return $this->successResponse((object) $data, 200);
    }
}
