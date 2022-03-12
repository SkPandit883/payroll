<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debit_credits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('expenses_category_id')->constrained('expense_categories');
            $table->date('date');
            $table->string('bill_no');
            $table->string('particular');
            $table->decimal('debit')->nullable()->default(0);
            $table->decimal('credit')->nullable()->default(0);
            $table->string('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('debit_credits');
    }
};
