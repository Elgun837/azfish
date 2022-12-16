<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Models\Modules\Partners;

class PartnersController extends ApiController
{
    public function index()
    {
        $partners = Partners::all();

        if(!$partners) {
            return $this->errorResponse(trans('default.no_items'), 200);
        }

        return $this->successResponse($partners, 200);
    }
}
