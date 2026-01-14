<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketTradesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('market_trades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subscription_id');
            $table->string('symbol');
            $table->enum('type', ['Perp', 'Cross']);
            $table->enum('tradetype', ['long', 'short']);
            
            $table->decimal('closing_pnl', 15, 2);
            $table->decimal('entry_price', 15, 5);
            $table->decimal('avg_close_price', 15, 5);
            $table->string('closed_volume');
            $table->timestamp('opened_at')->nullable(); // Allow null
        $table->timestamp('closed_at')->nullable(); // Allow null
            $table->timestamps();

            $table->foreign('subscription_id')->references('id')->on('trade_subscriptions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market_trades');
    }
}
