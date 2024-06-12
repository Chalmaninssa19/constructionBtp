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
        Schema::create('devis_temp', function (Blueprint $table) {
            $table->id();
            $table->string('client')->nullable();
            $table->string('ref_devis')->nullable();
            $table->string('type_maison')->nullable();
            $table->string('finition')->nullable();
            $table->decimal('taux_finition', 10, 2)->nullable();
            $table->date('date_devis')->nullable();
            $table->date('date_debut')->nullable();
            $table->string('lieu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devis_temp');
    }
};
