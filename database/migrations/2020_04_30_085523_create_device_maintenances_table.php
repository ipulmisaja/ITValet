<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_maintenances', function (Blueprint $table) {
            $table->id();
            $table->uuid('device_id');
            $table->string('ticket');
            $table->enum('condition', ['rusak berat', 'rusak ringan', 'baik']);
            $table->enum('maintenance', ['belum perbaikan', 'sedang perbaikan', 'selesai perbaikan', 'batal perbaikan']);
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('maintenance_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_maintenances');
    }
}
