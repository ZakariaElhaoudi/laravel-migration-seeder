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
        Schema::create('train_routes', function (Blueprint $table) {
            $table->id();

            $table->string('azienda');
            $table->string('stazione di partenza');
            $table->string('stazione di arrivo');
            $table->time('orario di partenza');
            $table->time('orario di arrivo');
            $table->string('codice treno');
            $table->integer('numero carrozze');
            $table->boolean('in orario')->default(true);
            $table->boolean('cancellato')->default(true);
            

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
        Schema::dropIfExists('train_routes');
    }
};
