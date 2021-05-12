<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electors', function (Blueprint $table) {
            $table->id();
            $table->String('nombres');
            $table->String('appaterno');
            $table->String('apmaterno');
            $table->String('dni',8);
            $table->String('sexo');
            $table->String('ubigeo',6);
            $table->date('fechanacimiento');
            $table->String('estadocivil');
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
        Schema::dropIfExists('electors');
    }
}
