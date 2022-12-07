<?php

namespace App\Http\Controllers\Catalog;

use Illuminate\Http\Request;
use App\Models\Catalog\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Mail\Request as ProductRequest;

class ProductController extends Controller
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
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $product = Product::whereTranslation('slug', $slug)->first();

        if(!$product) {
            abort(404);
        }
                
        return view('catalog/product', compact('product'));
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
