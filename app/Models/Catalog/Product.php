<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Product extends Model
{
    use HasFactory, Translatable;


    protected $translatable = [
        'name',
        'description',
        'slug'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    /**
     * Scope a query to only include active products.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeStatus($query)
    {
        $query->where('status', 'ACTIVE');
    }
}
