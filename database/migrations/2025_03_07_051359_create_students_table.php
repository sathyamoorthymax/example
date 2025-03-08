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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('stu_fname');
            $table->string('stu_lname');
            $table->string('stu_dob');
            $table->string('stu_sec');
            $table->string('stu_address');
            $table->string('stu_district');
            $table->string('stu_pincode');
            $table->string('stu_state');
            $table->string('stu_country');
            $table->string('stu_email');
            $table->string('stu_number');
            $table->string('stu_password');
            $table->string('stu_cpassword');
            $table->string('stu_gender');
            $table->string('stu_standard');
            $table->string('stu_blood_group');
            $table->string('stu_hobbies');
            $table->string('stu_reg_number');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
