<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employess;
use Cookie;
use Tracker;
use Session;
use App\companies;
class employesscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create variable contain all data in employess table
      $allemployess=employess::paginate(10);
      //pass the variable that contain all of the data to view (indexemp.blade)
      return view('pages.employess.indexemp')->withemployess($allemployess);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies= companies::all();
        return view('pages.employess.createemp')->withcompanies($companies);
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
            'firstname'=>'required',
            'lastname'=>'required',
        ));
       // print_r($request->input());
        //data stored 
        $employess= new employess ;
        $employess->firstname=$request->firstname;
        $employess->lastname=$request->lastname;
        $employess->email=$request->email;
        $employess->phone=$request->phone;
        $employess->company_id=$request->company_id;
        $employess->save();
         
//return to show new one
        return redirect()->route('employess.show',$employess->id);
    
        //set a flash message to success operation

        session::flash('successfully created ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employess= employess::find($id);
    return view('pages.employess.showemp')->with('employess',$employess);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies= companies::all();
        //find the employee id with his data and save it in a variable
        $employess= employess::find($id);
        //return data that we catch it and return it to the view to to editing on it 
    return view('pages.employess.editemp')->with('employess',$employess)->with('companies',$companies);
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
            'firstname'=>'required',
            'lastname'=>'required',
        ));
        //store data
        $employess= employess::find($id);
        $employess->firstname=$request->input('firstname');
        $employess->lastname=$request->input('lastname');
        $employess->email=$request->input('email');
        $employess->phone=$request->input('phone');
        $employess->company_id=$request->input('company_id');
        $employess->save();

        //redirect to show
        return redirect()->route('employess.show',$employess->id);
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //catching the data of the id to delete it 
        $employess=employess::find($id);
        $employess->delete();
        //redirect to index page
        return redirect()->route('employess.index');
    }
}
