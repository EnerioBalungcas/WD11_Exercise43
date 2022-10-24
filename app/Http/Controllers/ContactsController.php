<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Add the line code below to get the Contacts Model
use App\Models\contacts;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Add this line of code below to get all the information in the Contacts . then php artisan serve to display the data
        // return Contacts::all();
        // $contacts = Contacts::all();
        //for descending order / ascending order by id or by name, etc.
        // $contacts = Contacts::orderby('id', 'desc')->get();
        //for Pagination
        $contacts = Contacts::orderby('id', 'desc')->simplePaginate(3); //Contacts is from the Model
        return view('contacts.index')->with ( 'contacts', $contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $input = $request->all();
       Contacts::create($input);
       return redirect('contacts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleContact = Contacts::find($id); //Contacts is from the Model
        return view('contacts.show')->with('contact', $singleContact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $updateContact = Contacts::find($id);
        return view('contacts.edit')->with('contact', $updateContact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateContact = Contacts::find($id);
        $input = $request->all();
        $updateContact->update($input);
        return redirect('contacts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contacts::destroy($id);
        return redirect('contacts');
    }
}
