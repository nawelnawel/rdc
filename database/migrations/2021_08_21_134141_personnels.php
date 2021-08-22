<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personnels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->string("adresse");
            $table->string("telephone")->nullable();
            $table->string("email")->nullable();
            $table->dateTime("dateNaissance")->nullable();
            $table->string("lieuNaissance")->nullable();
            
            $table->string("pieceIdentite")->nullable();
            $table->string("numeroPieceIdentite")->nullable();
            $table->foreignId("structure_id")->constrained();
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
        Schema::table("personnels", function(Blueprint $table){
            $table->dropForeign("structure_id");
           

        });
        Schema::dropIfExists('personnels');
    }
}
