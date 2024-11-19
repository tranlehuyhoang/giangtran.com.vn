<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmmServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smm_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('smmcategory_id')->constrained('smm_categories')->onDelete('cascade'); // Đảm bảo tên bảng đúng
            $table->string('name');
            $table->decimal('price', 10, 2); // Đảm bảo giá trị hợp lý
            $table->string('code');
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('smm_services');
    }
}