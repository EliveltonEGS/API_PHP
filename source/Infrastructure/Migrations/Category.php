<?php

declare(strict_types=1);

namespace Source\Infrastructure\Migrations;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;

class Category
{
    public function up(): void
    {
        if(!Capsule::schema()->hasTable('categories')) {
            Capsule::schema()->create('categories', function(Blueprint $table) {
                $table->increments('id');
                $table->string('description');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Capsule::schema()->dropIfExists('categories');
    }
}