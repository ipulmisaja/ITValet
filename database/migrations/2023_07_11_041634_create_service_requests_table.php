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
        Schema::create('service_requests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('user_id');
            $table->enum('request_type', ['troubleshoot', 'maintenance'])->nullable();
            $table->string('service_type_id')->nullable();
            $table->string('summary');
            $table->text('description');
            $table->string('attachment')->nullable();
            $table->enum('status', ['menunggu', 'dijawab', 'ditutup', 'ditunda', 'spam']);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('completed_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_requests');
    }
};
