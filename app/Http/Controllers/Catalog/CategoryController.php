<?php

namespace App\Http\Controllers\Catalog;

use Illuminate\Http\Request;
use App\Models\Catalog\Category;
use App\Http\Controllers\ApiController;
use App\Models\Catalog\Product;

class CategoryController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('status', 'ACTIVE')->get();

        if(!$categories) {
            return $this->errorResponse(trans('default.no_items'), 200);
        }

        return $this->successResponse($categories, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('status', 'ACTIVE')->where('categories', $id);

        if(!$products)
            return $this->errorResponse(trans('default.no_items'), 200);

        $products = $products->translate(app()->getLocale(), 200);
                
        return $this->successResponse($products, 200);
    }
}
