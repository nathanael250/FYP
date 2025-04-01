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
    Schema::table('Project', function (Blueprint $table) {
        $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
        $table->text('rejection_reason')->nullable();
    });
}

public function down()
{
    Schema::table('Project', function (Blueprint $table) {
        $table->dropColumn(['status', 'rejection_reason']);
    });
}

};
