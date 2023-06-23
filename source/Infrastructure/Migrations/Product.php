<?php

namespace Source\Infrastructure\Migrations;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;

class Product
{
    public function up(): void
    {
        if(!Capsule::schema()->hasTable('products')) {
            Capsule::schema()->create('products', function(Blueprint $table) {
                $table->id();
                $table->integer('category_id')->unsigned();
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
                $table->string('description');
                $table->integer('amount')->default(0);
                $table->decimal('price');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Capsule::schema()->dropIfExists('products');
    }
}
