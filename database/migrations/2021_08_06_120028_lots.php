<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->string("num_lot");
            $table->string("num_ao");
         
            $table->string("num_ap");
            $table->string("fournisseur");
            $table->integer("qte");
            $table->double("cout");
           
            $table->foreignId("categorie_id")->constrained();
            $table->foreignId("marque_id")->constrained();
            $table->string("modele");
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lots', function (Blueprint $table) {
            $table->dropForeign("categorie_id","marque_id");
        });
        Schema::dropIfExists('lots');
    }
}
