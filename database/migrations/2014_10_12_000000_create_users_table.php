<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 100);
            $table->string('username', 50)->index()->nullable();
            $table->string('email', 50)->unique()->nullable();
            $table->string('password')->nullable();
            $table->boolean('change_password')->default(false);
            $table->string('remember_token')->nullable();
            $table->string('bps_id', 9)->unique()->nullable();
            $table->string('employee_id', 19)->unique()->nullable();
            $table->string('telegram_id', 50)->unique->nullable();
            $table->string('photo')->nullable();
            $table->enum('type', ['Perorangan', 'Ruangan']);
            $table->timestamps();
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
        Schema::dropIfExists('users');
    }
}
