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
        Schema::create('order_repas', function (Blueprint $table) {
            $table->id();
            $table->integer('qte');
            $table->string('cmt');
            $table->foreign('repas_id');
            $table->foreign('order_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_repas');
    }
};
