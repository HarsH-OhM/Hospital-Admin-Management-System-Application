<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            Schema::create('contact_us', function (Blueprint $table) { 
                $table->increments('id'); 
                $table->string('name'); 
                $table->string('email'); 
                $table->bigInteger('phone');
                $table->text('message'); 
                $table->timestamps(); 
                });
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_us');
    }
}
