<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('filieres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_dep');
            $table->foreign('id_dep')
                ->references('id')
                ->on('departements')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('item_fil');
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
        Schema::dropIfExists('filieres');
    }
}
