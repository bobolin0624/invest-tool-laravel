<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('gen_random_uuid()'));
            $table->uuid('user_id');
            $table->string('type');   // ETF | FUND（加 CHECK）
            $table->string('name');   // 投資名稱或代碼
            $table->decimal('purchase_cost', 18, 2);
            $table->date('purchase_date');
            $table->decimal('shares', 24, 8);
            $table->decimal('current_value', 18, 2)->nullable(); // 手動輸入，可空
            $table->timestampsTz();

            // FK + Cascade
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // 索引
            $table->index(['user_id']);
            $table->index(['user_id', 'type', 'name']);
            // （可選）同一 user 不重複名稱
            $table->unique(['user_id', 'name']);
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('investments');
        Schema::enableForeignKeyConstraints();
    }
};
