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
        Schema::create('nilai_peserta', function (Blueprint $table) {
            $table->id();
            $table->integer('id_peserta', false, false);
            $table->integer('nilai_x', false, false);
            $table->integer('nilai_y', false, false);
            $table->integer('nilai_z', false, false);
            $table->integer('nilai_w', false, false);
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
        Schema::dropIfExists('nilai_peserta');
    }
};
