<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        $contact=new Contact();
        $contact->user_name=$request->get('user_name');
        $contact->user_email=$request->get('user_email');
        $contact->user_message=$request->get('user_message');
        // dd($contact);
        $contact->save();
        return view('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        $contact=contact::all();
        // dd($contact);
        return view('viewUser',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
