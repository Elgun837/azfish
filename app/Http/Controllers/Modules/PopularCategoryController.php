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
        $categories = PopularCategory::all();
        $data = [];

        if(!$categories->count()) {
            return $this->errorResponse(trans('default.no_items'), 200);
        }

        foreach ($categories as $key => $value) {

            $cat = Category::where('id', $value->id)->where('status', 'ACTIVE')->first();

            $data[] = [
                'name' => $cat->getTranslatedAttribute('name', app()->getLocale(), 'en'),
                'image' => $value->image
            ];
        }

        return $this->successResponse($data, 200);
    }
}
