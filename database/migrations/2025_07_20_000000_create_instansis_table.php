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
        Schema::create('instansis', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });

        Schema::table('organisasis', function (Blueprint $table) {
            $table->unsignedBigInteger('instansi_id')->nullable()->after('nama');
            $table->foreign('instansi_id')->references('id')->on('instansis')->onDelete('set null');
            $table->dropColumn('instansi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('organisasis', function (Blueprint $table) {
            $table->dropForeign(['instansi_id']);
            $table->dropColumn('instansi_id');
            $table->enum('instansi', ['perangkat', 'pokdarwis', 'bpd', 'bumdes', 'bma'])->default('perangkat');
        });

        Schema::dropIfExists('instansis');
    }
};