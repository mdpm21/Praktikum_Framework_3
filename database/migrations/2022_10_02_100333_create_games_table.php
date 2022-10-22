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
        Schema::create('goty', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 30);
            $table->string('tahun', 30);
            $table->string('pengembang', 30);
            $table->string('penerbit', 30);
            $table->string('platform', 30);
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
        Schema::dropIfExists('goty');
    }
};
