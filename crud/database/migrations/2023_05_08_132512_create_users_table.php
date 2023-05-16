<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     //membuat tabel bernama "data" dengan kolom :
    public function up(): void
    {
        Schema::create('data', function (Blueprint $table) {
            $table->string('id', 16);   //sbg primary key
            $table->string('nama', 25);
            $table->string('no_hp', 13);
            $table->string('alamat', 45);
            $table->string('poli', 30);
            $table->string('pic', 100);
            $table->timestamps();           //untuk kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
