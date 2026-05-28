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
        Schema::create('materials', function (Blueprint $table) { //tabela 'materials'
            $table->id(); //id-> integer, unique e pk automaticamente
            $table->string("name");
            $table->string("description");
            $table->string("file_url");

            $table->unsignedBigInteger("user_id"); //duas linhas para foreign key
            $table->foreign("user_id")->references("id")->on("users");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};