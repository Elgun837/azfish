<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopularCategory extends Model
{
    use HasFactory;

    protected $table = 'popular_category';


    public function save(array $option = [])
    {
        $request = \Request::all();

        $this->categories = json_encode($request['categories'] ?? null);

        parent::save();
    }
}
