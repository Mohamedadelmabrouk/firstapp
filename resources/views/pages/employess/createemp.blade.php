@extends('layouts.app')
@section('stylesheets')
    {!! Html::style('css/parsley.css')!!}
@endsection
@section('content')
    <div class="container">
        
        {!! Form::open(array('route' => 'employess.store','data-parsley-validate'=>'')) !!}
        {{form::label('firstname','firstname:' )}}
        {{form::text('firstname','',array('class'=>'form-control','required'=>'' ))}}
        {{form::label('lastname','lastname:' )}}
        {{form::text('lastname','',array('class'=>'form-control','required'=>'' ))}}
        {{form::label('email','EMAIL:' )}}
        {{form::text('email','',array('class'=>'form-control','data-parsley-type'=>'email' ))}}<br>
        {{form::label('phone','phone number:' )}}
        {{form::text('phone','',array('class'=>'form-control','required'=>'' ))}}
        {{form::label('company_id','company:' )}}
        <select class="form-control" name="company_id">
        @foreach ($companies as $company)
    <option value="{{$company->id}}">{{$company->name}}</option>      
        @endforeach
    </select>
        {{form::submit('create employee',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top: 20px;'))}}
        {!! Form::close() !!}
    

    </div>
    @endsection
@section('scripts')
    {!! Html::script('js/parsley.min.js')!!}
@endsection