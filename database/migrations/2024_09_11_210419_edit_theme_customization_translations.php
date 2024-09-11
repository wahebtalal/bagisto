<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('theme_customization_translations', function (Blueprint $table) {
            $table->json('options')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('theme_customization_translations', function (Blueprint $table) {
            $table->json('options')->nullable(false)->change();
            //
        });
    }
};
