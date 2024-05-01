<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Hier definieren wir unsere Daten, die wir aus der Datenbank beziehen und dynamisch in unseren Seiten verwenden wollen
     */
    public function up(): void
    {
        Schema::create('mitarbeiter', function (Blueprint $table) {
            $table->id();
            $table->string("vorname");
            $table->string("nachname");
            $table->string("email");
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitarbeiter');
    }
};
