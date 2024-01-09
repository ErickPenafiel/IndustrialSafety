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
        Schema::create('dotacion_e_p_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('nombreDotacion');            
            $table->integer('id_area')->references('id')->on('areas')->onDelete('cascade');
            $table->integer('cantidad');
            $table->string('periodoDotacion');
            $table->date('fechaDotacion');
            $table->unsignedBigInteger('id_trabajador');
            $table->foreign('id_trabajador')->references('id')->on('trabajadors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dotacion_e_p_p_s');
    }
};
