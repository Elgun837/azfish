<?php

namespace App\Http\ApiControllers;

use Illuminate\Http\Request;
use App\Models\Catalog\Product;

class SearchController extends ApiController
{
    public function index(Request $request)
    {
        $_search = $request->input('search');
        
        return $this->successReponse($this->GetSearchResults($_search, false), 200);
    }

    public function autocomplete($name) : string
    {
        return response()->json($this->GetSearchResults($name));        
    }

    private function GetSearchResults($search, $ajax = true) : array
    {
        if(!$ajax) {
            $results = Product::where('name', 'like', "%{$search}%")->paginate(12);
        } else {
            $results = Product::where('name', 'like', "%{$search}%")->get();
        }        

        if(count($results)) {
            $results = $results->translate(app()->getLocale(), 200);
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
