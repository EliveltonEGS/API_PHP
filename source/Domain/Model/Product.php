<?php

namespace Source\Domain\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['description', 'amount', 'price', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
