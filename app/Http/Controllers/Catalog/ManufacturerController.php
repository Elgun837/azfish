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
        $data = Manufacturer::all();

        if(!$data->count())
            return $this->errorResponse(trans('default.no_items'), 200);
        
        return $this->successResponse($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('status', 'ACTIVE')->whereTranslation('manufacturer_id', $id);

        if(!$products)
            return $this->errorResponse(trans('default.no_items'), 200);

        return $this->successResponse($products, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
