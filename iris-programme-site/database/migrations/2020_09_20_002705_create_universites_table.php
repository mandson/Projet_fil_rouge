<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  Schema::disableForeignKeyConstraints();
        Schema::create('universites', function (Blueprint $table) {
            $table->id();
            $table->string('nom_uiv');
            $table->string('ville');
            $table->string('logo');
            $table->string('contact');
            $table->string('email');
            $table->text('historique');
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
        Schema::dropIfExists('universites');
    }
}
