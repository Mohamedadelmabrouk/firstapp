@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1> hello admin wanna !! </h1>
            <div class="card">
                
            </div>
        </div>
    </div>
   
            <a href="{{route('companies.create')}}" class="btn btn-success btn-lg btn-block" style="margin-top: 20px;">create new company </a>
    
            <a href="{{route('employess.create')}}" class="btn btn-success btn-lg btn-block" style="margin-top: 20px;">create new employee </a>
            <a href="{{route('companies.index')}}" class="btn btn-info btn-lg btn-block" style="margin-top: 20px;"> show company table </a>
            <a href="{{route('employess.index')}}" class="btn btn-info btn-lg btn-block" style="margin-top: 20px;">show employees table </a>


    
    
    
    </div>
        
@endsection