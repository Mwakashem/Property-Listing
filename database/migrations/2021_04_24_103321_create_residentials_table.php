<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residentials', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('user_id');
            $table->text('description');
            $table->string('street');
            $table->string('city');
            $table->string('county');
            $table->string('status');
            $table->string('type');
            $table->string('rooms');
            $table->string('pimg');
            $table->string('price');
            $table->string('area');
            $table->string('beds');
            $table->string('baths');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residentials');
    }
}
