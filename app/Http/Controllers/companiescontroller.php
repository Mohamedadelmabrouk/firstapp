<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\controllers\controller;
use App\companies;

class companiescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //create variable contain all data in companies table
      $allcompanies=companies::paginate(10);
      //pass the variable that contain all of the data to view (index.blade)
      return view('pages.companies.index')->withcompanies($allcompanies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request,array(
            'name'=>'required',
            'email'=>'E-Mail',
        ));
        print_r($request->input());
        //data stored 
        $companies= new companies ;
        $companies->name=$request->name;
        $companies->email=$request->email;
        $companies->logo=$request->logo;
        $companies->website=$request->website;
        $companies->save();

        return redirect()->route('companies.show',$companies->id);
      
         }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companies= companies::find($id);
    return view('pages.companies.show')->with('companies',$companies);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the company id with its data and save it in a variable
        $companies= companies::find($id);
        
        //return the view
        return view('pages.companies.edit')->with('companies',$companies);
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
        //validate the data 
        $this->validate($request,array(
            'name'=>'required',
            'email'=>'required',
        ));
        //store data
        $companies= companies::find($id);
        $companies->name=$request->input('name');
        $companies->email=$request->input('email');
        $companies->logo=$request->input('logo');
        $companies->website=$request->input('website');
        $companies->save();

        //redirect to show
        return redirect()->route('companies.show',$companies->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companies=companies::find($id);
        $companies->delete();
        return redirect()->route('companies.index');
        
    }
}
