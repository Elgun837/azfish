<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Category extends Model
{
    use HasFactory, Translatable;

    protected $table = 'pr_categories';


    protected $translatable = [
        'name',
        'description',
        'slug'
    ];


    /**
     * Scope a query to only include active category.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeStatus($query)
    {
        $query->where('status', 'ACTIVE');
    }
}
