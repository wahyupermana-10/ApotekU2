<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->string('genericname');
            $table->string('form');
            $table->string('restrictionformula')->nullable();
            $table->double('price',12,2);
            $table->text('description')->nullable();
            $table->boolean('faskes1')->default(0);
            $table->boolean('faskes2')->default(0);
            $table->boolean('faskes3')->default(0);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('obats');
    }
}
