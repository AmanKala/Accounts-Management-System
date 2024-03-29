<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('date');
            $table->string('paid_by_to');
            $table->integer('amount');
            $table->integer('quantity');
            $table->string('unit_name');
            $table->string('type');
            $table->string('status');
            $table->string('utr');
            $table->string('invoice_number');
            $table->string('project');
            $table->string('comment');
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
        Schema::table('transactions', function (Blueprint $table) {
            Schema::drop('transactions');
        });
    }
}
