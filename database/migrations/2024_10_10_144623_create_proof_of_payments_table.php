<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProofOfPaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('proof_of_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // The user who uploaded the proof
            $table->string('file'); // The file path (image or PDF)
            $table->decimal('amount', 15, 2); // Amount of payment
            $table->date('date'); // Date of the transaction
            $table->string('coin'); // The cryptocurrency coin (e.g., BTC, ETH)
            $table->string('address'); // Wallet address
            $table->timestamps();
            
            // Foreign key constraint (assuming a 'users' table exists)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('proof_of_payments');
    }
}

