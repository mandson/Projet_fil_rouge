<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmes', function (Blueprint $table) {
            $table->id();
            $table->string('heur_dM');
            $table->string('heur_fM');
            $table->string('heur_dS');
            $table->string('heur_fS');
            $table->string('dat_deb');
            $table->string('dat_fin');
            $table->string('pdf');
            $table->text('detail');




    /*****************@FTK Clee etrangere de la table lieu  *************/
                $table->unsignedBigInteger('id_lieu');
                $table->foreign('id_lieu')
                    ->references('id')
                    ->on('lieus')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

                    $table->unsignedBigInteger('id_fil');
                    $table->foreign('id_fil')
                        ->references('id')
                        ->on('filieres')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
                    /******@FTK Clee etrangere de la table lieu  */
                    $table->unsignedBigInteger('id_cat');
                    $table->foreign('id_cat')
                        ->references('id')
                        ->on('categorie_progs')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');

                         /******@FTK Clee etrangere de la table proffesseurs  */
                        $table->unsignedBigInteger('id_prof');
                        $table->foreign('id_prof')
                            ->references('id')
                            ->on('proffesseurs')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');

                            $table->unsignedBigInteger('id_niv');
                            $table->foreign('id_niv')
                                ->references('id')
                                ->on('niveaux')
                                ->onDelete('cascade')
                                ->onUpdate('cascade');

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
        Schema::dropIfExists('programmes');
    }
}
