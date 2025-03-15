<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=['emp_fname','emp_lname','emp_id','emp_dob','emp_email','emp_number',
    'emp_address','emp_district','emp_state','emp_pincode','emp_country',
    'emp_age','emp_gender','emp_branch','emp_date_of_join','emp_work_floor','emp_method_of_joining',
'emp_experience','emp_monthly_salary','emp_tax','emp_ctc','emp_pf',];
}
