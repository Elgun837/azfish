<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $result = Page::where('slug', $slug)->first();
        if(!$result) {
            return $this->errorResponse(trans('deafult.no_items'), 200);
        }
        $result = $result->translate(app()->getLocale(), 'en');

        return $this->successResponse($result, 200);
    }
}
