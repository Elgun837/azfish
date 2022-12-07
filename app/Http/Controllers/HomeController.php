<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog\Slider;
use App\Models\Catalog\Manufacturer;


class HomeController extends Controller
{
    /**
     * Show the application home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        return view('home');
    }
}
