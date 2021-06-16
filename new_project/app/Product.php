<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'price', 'category_id', 'quantity', 'status', 'image'
    ];

//protected $guarded = [];

    /**
     * @var bool
//     */
//    public $timestamps = false;
//    protected $guarded = [];

    public function scopeSuccess($query)
    {
        return $query->where('status', true)->where('price', '>=', 1500);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
