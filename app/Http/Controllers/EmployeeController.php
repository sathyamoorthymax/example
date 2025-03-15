<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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
        $employee=new Employee();
        $employee->emp_fname=$request->get('emp_fname');
        $employee->emp_lname=$request->get('emp_lname');
        $employee->emp_id=$request->get('emp_id');
        $employee->emp_dob=$request->get('emp_dob');
        $employee->emp_email=$request->get('emp_email');
        $employee->emp_number=$request->get('emp_number');
        $employee->emp_address=$request->get('emp_address');
        $employee->emp_district=$request->get('emp_district');
        $employee->emp_state=$request->get('emp_state');
        $employee->emp_pincode=$request->get('emp_pincode');
        $employee->emp_country=$request->get('emp_country');
        $employee->emp_age=$request->get('emp_age');
        $employee->emp_gender=$request->get('emp_gender');
        $employee->emp_branch=$request->get('emp_branch');
        $employee->emp_date_of_join=$request->get('emp_date_of_join');
        $employee->emp_work_floor=$request->get('emp_work_floor');
        $employee->emp_method_of_joining=$request->get('emp_method_of_joining');
        $employee->emp_experience= json_encode($request->get('emp_experience'));
        $employee->emp_monthly_salary=$request->get('emp_monthly_salary');
        $employee->emp_tax=$request->get('emp_tax');
        $employee->emp_ctc=$request->get('emp_ctc');
        $employee->emp_pf=$request->get('emp_pf');


        // dd($employee);
        $employee->save();
        return view('success');


    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        $employee=employee::all();
        // dd($employee);
        return view('viewEmployee',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
         //dd($employee);
        return view('editemployee', compact('employee'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // Fetch the employye by ID
        $employee = Employee::findOrFail($id);

        //here we are getting the form data for update
        $employee->emp_fname=$request->get('emp_fname');
        $employee->emp_lname=$request->get('emp_lname');
        $employee->emp_id=$request->get('emp_id');
        $employee->emp_dob=$request->get('emp_dob');
        $employee->emp_email=$request->get('emp_email');
        $employee->emp_number=$request->get('emp_number');
        $employee->emp_address=$request->get('emp_address');
        $employee->emp_district=$request->get('emp_district');
        $employee->emp_state=$request->get('emp_state');
        $employee->emp_pincode=$request->get('emp_pincode');
        $employee->emp_country=$request->get('emp_country');
        $employee->emp_age=$request->get('emp_age');
        $employee->emp_gender=$request->get('emp_gender');
        $employee->emp_branch=$request->get('emp_branch');
        $employee->emp_date_of_join=$request->get('emp_date_of_join');
        $employee->emp_work_floor=$request->get('emp_work_floor');
        $employee->emp_method_of_joining=$request->get('emp_method_of_joining');
        $employee->emp_experience= json_encode($request->get('emp_experience'));
        $employee->emp_monthly_salary=$request->get('emp_monthly_salary');
        $employee->emp_tax=$request->get('emp_tax');
        $employee->emp_ctc=$request->get('emp_ctc');
        $employee->emp_pf=$request->get('emp_pf');

        // dd($employee);

        //update function to update the object
        $employee->update();

        //return to view employee table after successfull update
        return redirect()->route('view-employee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee=employee::find($id);
        $employee->delete();
        return redirect()->back();
    }
}
