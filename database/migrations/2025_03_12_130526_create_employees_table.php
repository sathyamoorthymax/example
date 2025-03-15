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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('emp_fname');
            $table->string('emp_lname');
            $table->string('emp_id');
            $table->string('emp_dob');
            $table->string('emp_email');
            $table->string('emp_number');
            $table->string('emp_address');
            $table->string('emp_district');
            $table->string('emp_pincode');
            $table->string('emp_state');
            $table->string('emp_country');
            $table->string('emp_age');
            $table->string('emp_gender');
            $table->string('emp_branch');
            $table->string('emp_date_of_join');
            $table->string('emp_work_floor');
            $table->string('emp_method_of_joining');
            $table->string('emp_experience');
            $table->string('emp_monthly_salary');
            $table->string('emp_tax');
            $table->string('emp_ctc');
            $table->string('emp_pf');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
