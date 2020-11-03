<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodeFilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    Schema::disableForeignKeyConstraints();
        Schema::create('code_fils', function (Blueprint $table) {
            $table->id();
                /******@FTK Clee etrangere de la table  filiere */

                $table->unsignedBigInteger('id_fil');
                $table->foreign('id_fil')
                    ->references('id')
                    ->on('filieres')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');


            $table->string('code_item');
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
        Schema::dropIfExists('code_fils');
    }
}
