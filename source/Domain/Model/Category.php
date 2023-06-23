<?php

namespace Source\Domain\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['description'];

    public function products()
    {
        return $this->hasOne(Product::class);
    }
}