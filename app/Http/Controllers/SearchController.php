<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog\Product;
use Auth;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $_search = $request->input('search');
        
        return view('search', ['data' => $this->GetSearchResults($_search, false), 'search' => $_search]);
    }

    public function autocomplete($name) : string
    {
        return response()->json($this->GetSearchResults($name));        
    }

    private function GetSearchResults($search, $ajax = true) : array
    {
        if(!$ajax) {
            $results = Product::whereTranslation('name', 'like', "%{$search}%")->paginate(12);
        } else {
            $results = Product::whereTranslation('name', 'like', "%{$search}%")->get();
        }        

        if(count($results)) {
            if(!$ajax)
                return $results;
                
            foreach ($results as $key => $value) {
                $json[] = array(
                    'name' => $value->getTranslatedAttribute('name', app()->getLocale(), 'en'),
                    'href' => route('product', ['id' => $value->id])
                );
            }
        } else {
            if(!$ajax)
                return $results;

            $json[] = array(
                'name' => __('default.no_models'),
                'href' => 'javascript:void(0);'
            );
        }

        return $json;
    }
}
