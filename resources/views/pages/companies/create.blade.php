@extends('layouts.app')
@section('stylesheets')
    {!! Html::style('css/parsley.css')!!}
@endsection
@section('content')
    <div class="container">
        
        {!! Form::open(array('route' => 'companies.store','data-parsley-validate'=>'')) !!}
        {{form::label('name','NAME:' )}}
        {{form::text('name','',array('class'=>'form-control','required'=>'' ))}}
        {{form::label('email','EMAIL:' )}}
        {{form::text('email','',array('class'=>'form-control','data-parsley-type'=>'email' ))}}<br>
        {{form::label('logo','LOGO:' )}}
         {{Form::file('logo')}};<br>
        {{form::label('website','WEBSITE:' )}}
        <br> {{form::text('website','',array('class'=>'form-control'))}}
        {{form::submit('create company',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top: 20px;'))}}
        {!! Form::close() !!}
    <hr>

    </div>
    
    {{-- 
        just another way to apply form
        
        <form data-parsley-validate='' action="{{URL::to('companies.store')}}" method="post" class="form-control">
        <input type="text" name="name" placeholder="enter company name" >
        <input type="email" name="email" placeholder="enter company email" >
        <input type="file" name="logo" placeholder="enter company logo" >
        <input type="text" name="website" placeholder="enter company website" >
        <input type="hidden" name="_token" value="{{csrf_token()}}" >
        <button type="submit" name="submit">create company </button>

    </form>

     --}}
    
@endsection
@section('scripts')
    {!! Html::script('js/parsley.min.js')!!}
@endsection



    