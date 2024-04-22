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
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->integer('profil_id')->nullable();
            $table->boolean('is_testing')->default(false)->nullable();
            $table->string('resto_name')->nullable();
            $table->string('tanggapan_m')->nullable();
            $table->string('tanggapan_p')->nullable();
            $table->string('tanggapan_s')->nullable();
            $table->enum('kategori_m', ['positif', 'netral', 'negatif'])->default('netral')->nullable();
            $table->enum('kategori_p', ['positif', 'netral', 'negatif'])->default('netral')->nullable();
            $table->enum('kategori_s', ['positif', 'netral', 'negatif'])->default('netral')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training');
    }
};
