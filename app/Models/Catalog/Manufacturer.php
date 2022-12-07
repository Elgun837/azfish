<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $table = 'manufacturer';


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
