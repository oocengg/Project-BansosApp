<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabansosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databansos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik')->unique();
            $table->bigInteger('no_kk');
            $table->string('nama_lengkap', 200);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin', 50);
            $table->string('alamat', 300);
            $table->integer('rt');
            $table->integer('rw');
            $table->string('kelurahan', 100);
            $table->string('kecamatan', 100);
            $table->string('kabupaten', 100);
            $table->string('provinsi', 100);
            $table->string('no_hp', 20);
            $table->string('pekerjaan', 200);
            $table->integer('penghasilan');
            $table->unsignedBigInteger('jenisbansos_id')->nullable();
            $table->foreign('jenisbansos_id')->references('id')->on('jenisbansos')->onDelete('cascade');
            $table->string('foto_ktp');
            $table->string('swafoto_ktp');
            $table->string('bukti_sktm');
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
        Schema::dropIfExists('databansos');
    }
}
