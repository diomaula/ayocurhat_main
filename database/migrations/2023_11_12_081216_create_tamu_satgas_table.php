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
        Schema::create('tamu_satgas', function (Blueprint $table) {
            $table->id('id_tamu');
            $table->string('nama', 100);
            $table->string('nim', 20)->unique();
            $table->string('email', 100);
            $table->string('password', 100);
            $table->string('no_telp', 20)->nullable();
            $table->text('alamat')->nullable();
            $table->string('prodi', 100)->nullable();
            $table->enum('jenis_kelamin', ['wanita', 'laki-laki'])->nullable();
            $table->binary('foto_profile')->nullable(); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamu_satgas');
    }
};
