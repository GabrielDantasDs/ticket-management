<?php

use App\Models\Category;
use App\Models\Situation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->date('resolve_date_deadline');
            $table->date('resolve_date')->nullable();

            $table->foreignIdFor(Category::class, 'category_id');
            $table->foreignIdFor(Situation::class, 'situation_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('tickets');
    }
};
