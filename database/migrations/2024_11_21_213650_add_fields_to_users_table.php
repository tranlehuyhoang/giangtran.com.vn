<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('ip_address')->nullable();
            $table->string('other_contact_info')->nullable();
            $table->string('device')->nullable();
            $table->decimal('total_consumption', 10, 2)->nullable();
            $table->decimal('total_deposit', 10, 2)->nullable();
            $table->boolean('two_factor_auth_status')->default(false);
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('ip_address');
            $table->dropColumn('other_contact_info');
            $table->dropColumn('device');
            $table->dropColumn('total_consumption');
            $table->dropColumn('total_deposit');
            $table->dropColumn('two_factor_auth_status');
        });
    }
}