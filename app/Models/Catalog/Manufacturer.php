<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Manufacturer extends Model
{
    use HasFactory, Translatable;

    protected $table = 'manufacturer';

    protected $translatable = [
        'description'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


    /**
     * Scope a query to only include active manufacturers.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeStatus($query)
    {
        $query->where('status', 'ACTIVE');
    }
    
}
