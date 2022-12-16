<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Modules\PopularCategory;
use App\Models\Catalog\Category;

class PopularCategoryController extends ApiController
{
    public function index()
    {
        $popular_category_info = PopularCategory::orderBy('id')->first();
        $data = [];

        if(!$popular_category_info) {
            return $this->errorResponse(trans('default.no_items'), 200);
        }

        $categories = json_decode( $popular_category_info['categories'], true );

        foreach ($categories as $key => $value) {
            $cat = Category::where('id', $value)->where('status', 'ACTIVE')->first();
            
            $data[] = [
                'id' => $cat['id'],
                'name' => $cat->getTranslatedAttribute('name', app()->getLocale(), 'en'),
                'image' => $cat['image'],
                'slug' => $cat->getTranslatedAttribute('slug', app()->getLocale(), 'en')
            ];
        }

        return $this->successResponse($data, 200);
    }
}
