<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonaderantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonaderants', function (Blueprint $table) {
            $table->BigIncrements('id')->index();
            $table->string('identifiant_fiscal');
            $table->string('code_dacces');
            $table->string('nom');
            $table->string('prenom');
            $table->string('tele')->nullable(); 
            $table->string('cin');
            $table->string('email'); 
            $table->boolean('fonciers')->default(false);
            $table->boolean('salariaux')->default(false);
            $table->boolean('autre_sources')->default(false);
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
        Schema::dropIfExists('nonaderants');
    }
}
