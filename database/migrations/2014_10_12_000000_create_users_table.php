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
            $table->string('name')->nullable();
            $table->string('user_code');
            $table->string('email')->unique();
            $table->string('country_code')->nullable();
            $table->string('mobile')->unique();
            $table->string('clinic_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->string('user_type')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('available_online_appointment')->default(1);
            $table->boolean('is_send_email')->default(1);
            $table->string('reference_id')->nullable();
            $table->string('device_token')->nullable();
            $table->string('device_type')->nullable();
            $table->string('voip_token')->nullable();
            $table->string('otp')->nullable();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('is_otp_verified')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        $user = \App\Models\User::create([
            'name' => 'Super Admin',
            'email' => 'admin@bparo.com',
            'mobile' => '1234567890',
            'role_id' => 1,
            'user_type' => 'admin',
            'password' => bcrypt(123123),
        ]);
        $user->update(['reference_id'=>$user->id]);
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
