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
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable()->default('-');
            $table->bigInteger('nip')->nullable()->default(0);
            $table->string('jenis_kelamin', 100)->nullable()->default('-');
            $table->string('tempat_lahir', 255)->nullable()->default('-');
            $table->date('tgl_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('jabatan', 100)->nullable()->default('-');
            $table->text('img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
