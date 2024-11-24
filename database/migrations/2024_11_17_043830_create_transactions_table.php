<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('bank_brand_name', 50);
            $table->string('account_number', 20);
            $table->dateTime('transaction_date');
            $table->decimal('amount_out', 30, 2)->default(0);
            $table->decimal('amount_in', 30, 2)->default(0);
            $table->decimal('accumulated', 30, 2)->default(0);
            $table->text('transaction_content');
            $table->string('reference_number', 50);
            $table->string('code', 20)->nullable();
            $table->string('sub_account', 20)->nullable();
            $table->string('bank_account_id', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}