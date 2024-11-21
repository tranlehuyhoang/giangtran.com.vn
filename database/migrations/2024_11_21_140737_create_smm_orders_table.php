<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmmOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('smm_orders', function (Blueprint $table) {
            $table->id(); // Khóa chính
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // ID người dùng
            $table->foreignId('smm_service_id')->constrained('smm_services')->onDelete('cascade'); // ID dịch vụ
            $table->integer('quantity'); // Số lượng
            $table->decimal('total_price', 15, 2); // Tổng tiền
            $table->string('status'); // Trạng thái
            $table->decimal('unit_price', 15, 2); // Đơn giá
            $table->dateTime('start_count'); // Thời gian bắt đầu
            $table->string('link'); // Link
            $table->integer('remains'); // Số lượng còn lại
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    public function down()
    {
        Schema::dropIfExists('smm_orders');
    }
}