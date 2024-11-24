<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentHistoryTable extends Migration
{
    public function up()
    {
        Schema::create('payment_history', function (Blueprint $table) {
            $table->id(); // Khóa chính tự động tăng
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Thêm user_id với khóa ngoại
            $table->string('transaction_code')->unique(); // Mã giao dịch
            $table->decimal('amount', 30, 2); // Số tiền
            $table->string('status'); // Trạng thái
            $table->string('bank'); // Ngân hàng
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    public function down()
    {
        Schema::dropIfExists('payment_history');
    }
}