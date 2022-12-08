<?php

namespace App\Http\Controllers\Catalog;

use Illuminate\Http\Request;
use App\Models\Catalog\Product;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Validator;
use App\Mail\Request as ProductRequest;

class ProductController extends ApiController
{
    /**
     * Send request from product page
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateData($request);

        $product = Product::findOrFail($request->id);

        Mail::to(setting('site.mail'))->locale(app()->getLocale())->send(new ProductRequest($product, $request));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $product = Product::where('id', $id)->get();
        
        if(!$product) {
            return $this->errorResponse(trans('default.no_items'), 200);
        }

        $product = $product->translate(app()->getLocale(), 'en');
        
        return $this->successResponse($product, 200);
    }

    /**
     * Get a validator for an incoming newsletter request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateData(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);
    }
}
