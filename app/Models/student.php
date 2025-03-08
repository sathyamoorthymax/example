<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable=['stu_fname','stu_lname','stu_dob','stu_sec',
    'stu_address','stu_district','stu_state','stu_pincode','stu_country',
    'stu_email','stu_number','stu_password',
'stu_cpassword','stu_reg_number','stu_gender','stu_blood_group','stu_reg_number','stu_standard'];
}
