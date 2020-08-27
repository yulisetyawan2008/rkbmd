<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeliharaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeliharaans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->unsignedBigInteger('kegiatan_id');
            $table->foreign('kegiatan_id')->references('id')->on('kegiatans')->onDelete('cascade');
            $table->unsignedBigInteger('output_id');
            $table->foreign('output_id')->references('id')->on('outputs')->onDelete('cascade');
            $table->unsignedBigInteger('bmd_id');
            $table->foreign('bmd_id')->references('id')->on('bmds')->onDelete('cascade');
            $table->string('sat');
            $table->string('status');
            $table->integer('baik');
            $table->integer('rr');
            $table->integer('rb');
            $table->string('nm_pemeliharaan');
            $table->string('jml_pelihara');
            $table->string('keterangan');
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
        Schema::dropIfExists('pemeliharaans');
    }
}
