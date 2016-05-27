<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eventos', function (Blueprint $table) {
            //
            $table->dropColumn('creado_por');
            $table->renameColumn('creado_a', 'fecha_ini');
            $table->text('asistentes')->after('ubicacion');
            $table->date('fecha_fin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eventos', function (Blueprint $table) {
            //
            $table->string('creado_por')->nullable()->after('descripcion');
            $table->renameColumn('fecha_ini', 'creado_a');
            $table->dropColumn('asistentes');
            $table->dropColumn('fecha_fin');
        });
    }
}
