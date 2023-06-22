<?php

namespace Source\Domain\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Capsule\Manager as Capsule;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['description'];
}