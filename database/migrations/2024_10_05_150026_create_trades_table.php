<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trader_id')->constrained('traders')->onDelete('cascade'); // Foreign key linking to 'traders' table
            $table->timestamps();
            $table->integer("minimum")->default(0);
            $table->integer("maximum")->default(0);
            $table->integer("average_percentage")->default(0); // Modified column name to avoid spaces
            $table->decimal('fees', 8, 2)->default(0); // Decimal for fees (8 digits, 2 decimal places)
            $table->integer('investors')->default(0);  // Integer for the number of investors
            $table->string('nickname')->nullable();    // Nullable string for nickname
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trades');
    }
}
