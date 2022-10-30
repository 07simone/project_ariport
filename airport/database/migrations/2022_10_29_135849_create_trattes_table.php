<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrattesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trattes', function (Blueprint $table) {
            $table->id();
            $table->dateTime("orario_partenza");
            $table->dateTime("orario_arrivo");
            $table->unsignedBigInteger("Aereoporto_partenza");
            $table->unsignedBigInteger("Aereoporto_arrivo");
            $table->unsignedBigInteger("Compagnia");
            $table->timestamps();
            $table->foreign("Aereoporto_partenza")->references("id")->on("aereoportos");
            $table->foreign("Aereoporto_arrivo")->references("id")->on("aereoportos");
            $table->foreign("Compagnia")->references("id")->on("compagnias");
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trattes');
    }
}
