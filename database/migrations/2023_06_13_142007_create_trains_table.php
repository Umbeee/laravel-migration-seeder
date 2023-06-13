<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string( 'azienda')->nullable();
            $table->string('stazione_di_partenza')->nullable();
            $table->string('stazione_di_arrivo')->nullable();
            $table->Datetime('orario_di_partenza')->nullable();
            $table->Datetime('orario_di_arrivo')->nullable();
            $table->string('codice_treno')->nullable();
            $table->tinyInteger('carrozze')->nullable();
            $table->boolean('on_time')->default(true);
            $table->boolean('cancellato')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
