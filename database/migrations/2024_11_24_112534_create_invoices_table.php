<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id(); // ID tự động tăng
            $table->string('invoice_code')->unique(); // Mã số hóa đơn
            $table->string('invoice_type'); // Loại hóa đơn
            $table->string('service'); // Dịch vụ
            $table->timestamp('invoice_date'); // Thời gian lập hóa đơn
            $table->decimal('amount', 15, 2); // Số tiền
            $table->datetime('payment_due_date'); // Hạn thanh toán
            $table->timestamps(); // Các trường created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
