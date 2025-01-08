<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kycs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('phone');
            $table->date('dob');
            $table->string('password');
            $table->string('state');
            $table->string('city');
            $table->string('pin');
            $table->string('firm_name');
            $table->text('address');
            $table->string('aadhar_number')->unique();
            $table->string('pan_number')->unique();
            $table->string('aadhar_front')->unique();
            $table->string('aadhar_back')->unique();
            $table->string('pan_upload')->unique();
            $table->string('frontpic')->unique();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kycs');
    }
};
