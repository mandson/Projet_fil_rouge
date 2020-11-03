<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNcomptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {    Schema::disableForeignKeyConstraints();

        Schema::create('ncomptes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            // $table->string('filiere');
            $table->string('matricule');
            $table->string('email')->unique();
            $table->string('anniversaire');
            $table->integer('status');

            $table->unsignedBigInteger('id_fil');
            $table->foreign('id_fil')
                ->references('id')
                ->on('filieres')
                ->onDelete('restrict')
                ->onUpdate('restrict');
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
        Schema::dropIfExists('ncomptes');
    }
}
