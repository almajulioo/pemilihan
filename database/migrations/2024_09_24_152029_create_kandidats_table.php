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
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemilihan_id')->constrained('pemilihans')->onDelete('cascade');
            $table->integer('nomor_urut');
            $table->string('kabinet');
            $table->string("photo_url")->nullable();
            $table->string('name');
            $table->string('description');
            $table->string('visi');
            $table->string('misi_1');
            $table->string('misi_2');
            $table->string('misi_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandidats');
    }
};
