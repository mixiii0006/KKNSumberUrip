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
        Schema::create('organisasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('instansi', ['perangkat', 'pokdarwis', 'bpd', 'bumdes', 'bma'])->default('perangkat');
            $table->string('jabatan');
            $table->string('nip')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisasis');
    }
};