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
        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('customer_id')
                    ->constrained('customers')
                    ->cascadeOnDelete();
            $table->enum('status', ['pending', 'processing', 'completed', 'declined'])
                    ->default('pending');
            $table->decimal('total_price', places: 2);
            $table->longText('notes');
            $table->decimal('shipping_price', places:2);
            $table->softDeletes();
            $table->string('number')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('customer_id');
            $table->dropColumn('status');
            $table->dropColumn('total_price');
            $table->dropColumn('notes');
            $table->dropColumn('shipping_price');
            $table->dropSoftDeletes();
            $table->dropColumn('number');
        });
    }
};
