<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asets', function (Blueprint $table) {
            $table->id();
            $table->string('kode_asset');
            $table->string('nama_asset');
            $table->string('histori_satuan')->nullable();
            $table->string('kode_satuan');
            $table->boolean('jenis_asset');
            $table->integer('kategori');
            $table->boolean('keadaan_awal');
            $table->date('tanggal_terima');
            $table->string('batas_pemakaian');
            $table->integer('penyusutan_asset')->nullable();
            $table->integer('lokasi_asset');
            $table->integer('nilai_asset');
            $table->string('merk_aset');
            $table->string('koordinat_asset');
            $table->text('keterangan');
            $table->integer('total');
            $table->text('deleted_at')->nullable();
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
        Schema::dropIfExists('asets');
    }
}
