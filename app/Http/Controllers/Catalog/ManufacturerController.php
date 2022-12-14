<?php

namespace App\Http\Controllers\Catalog;

use Illuminate\Http\Request;
use App\Models\Catalog\Manufacturer;
use App\Http\Controllers\ApiController;

class ManufacturerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = Manufacturer::where('status', 'ACTIVE')->get();

        if(!$data->count())
            return $this->errorResponse(trans('default.no_items'), 200);
        
        return $this->successResponse($data, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('status', 'ACTIVE')->where('manufacturer_id', $id)->get();

        if(!$products)
            return $this->errorResponse(trans('default.no_items'), 200);

        $products = $products->translate(app()->getLocale(), 200);

        return $this->successResponse($products, 200);
    }
}
