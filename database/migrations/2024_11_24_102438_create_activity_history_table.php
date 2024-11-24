<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityHistoryTable extends Migration
{
    public function up()
    {
        Schema::create('activity_history', function (Blueprint $table) {
            $table->id(); // Tạo cột id tự động tăng
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Tạo cột user_id và khóa ngoại
            $table->text('content'); // Cột nội dung
            $table->string('ip_address'); // Cột địa chỉ IP
            $table->timestamps(); // Thêm cột created_at và updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('activity_history');
    }
}
