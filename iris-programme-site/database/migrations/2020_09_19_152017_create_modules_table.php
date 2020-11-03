<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::disableForeignKeyConstraints();
      Schema::create('modules', function (Blueprint $table) {
            $table->id();

              /******@FTK Clee etrangere de la table  filiere */

  $table->unsignedBigInteger('id_fil');
  $table->foreign('id_fil')
      ->references('id')
      ->on('filieres')
      ->onDelete('restrict')
      ->onUpdate('restrict');

            $table->string('item_mod');
            $table->integer('coefficient');


            $table->softDeletes();
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
        Schema::dropIfExists('modules');
    }
}
