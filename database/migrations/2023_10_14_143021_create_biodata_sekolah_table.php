<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('biodata_sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->integer('npsn')->nullable()->unsigned();
            $table->string('akreditasi', 100)->nullable();
            $table->string('jenjang', 100)->nullable();
            $table->string('status', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->integer('kode_pos')->unsigned()->nullable();
            $table->string('kelurahan', 100)->nullable();
            $table->string('kecamatan', 100)->nullable();
            $table->string('kota', 100)->nullable();
            $table->string('provinsi', 100)->nullable();
            $table->string('negara', 100)->nullable();    
            $table->bigInteger('no_tlpn')->nullable();
            $table->bigInteger('no_fax')->nullable();
            $table->string('email', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata_sekolah');
    }
};
