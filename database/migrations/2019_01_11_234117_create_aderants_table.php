<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAderantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aderants', function (Blueprint $table) {
            $table->BigIncrements('id')->index();
            $table->string('login');
            $table->string('password');
            $table->string('nom');
            $table->string('prenom');
            $table->string('tele')->nullable(); 
            $table->string('cin');
            $table->string('email'); 
            $table->boolean('fonciers')->default(false);
            $table->boolean('salariaux')->default(false);
            $table->boolean('autre_sources')->default(false) ; 
            $table->string('path') ; 
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
        Schema::dropIfExists('aderants');
    }
}
