<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student=new Student();
        $student->stu_fname=$request->get('stu_fname');
        $student->stu_lname=$request->get('stu_lname');
        $student->stu_dob=$request->get('stu_dob');
        $student->stu_sec=$request->get('stu_sec');
        $student->stu_hobbies= json_encode($request->get('stu_hobbies'));
        $student->stu_address=$request->get('stu_address');
        $student->stu_district=$request->get('stu_district');
        $student->stu_state=$request->get('stu_state');
        $student->stu_pincode=$request->get('stu_pincode');
        $student->stu_country=$request->get('stu_country');
        $student->stu_email=$request->get('stu_email');
        $student->stu_number=$request->get('stu_number');
        $student->stu_password=$request->get('stu_password');
        $student->stu_cpassword=$request->get('stu_cpassword');
        $student->stu_standard=$request->get('stu_standard');
        $student->stu_reg_number=$request->get('stu_reg_number');
        $student->stu_blood_group=$request->get('stu_blood_group');
        $student->stu_gender=$request->get('stu_gender');
        // dd($student);
        $student->save();
        return view('success');



    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
        $student=student::all();
        // dd($student);
        return view('viewStudent',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        return view('editstudent');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student=student::find($id);
        $student->delete();
        return redirect()->back();
    }
}
