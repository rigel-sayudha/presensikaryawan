<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('office_locations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('building')->nullable(false);
            $table->string('floor')->nullable(false);
            $table->decimal('latitude', 10, 7)->nullable(false);
            $table->decimal('longitude', 10, 7)->nullable(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('office_locations');
    }
}