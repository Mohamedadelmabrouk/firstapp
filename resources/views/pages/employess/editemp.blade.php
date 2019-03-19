@extends('layouts.app')
@section('content')

<div  class="container">
        {!! Form::model($employess, ['route'=>['employess.update',$employess->id],'method'=>'PUT'] ) !!}
    <div class="col-md-8">
            {{form::label('firstname','firstname:' )}}
            {{form::text('firstname',null,array('class'=>'form-control','required'=>'' ))}}
            {{form::label('lastname','lastname:' )}}
            {{form::text('lastname',null,array('class'=>'form-control','required'=>'' ))}}
            {{form::label('email','EMAIL:' )}}
            {{form::text('email',null,array('class'=>'form-control','data-parsley-type'=>'email' ))}}<br>
            {{form::label('phone','phone number:' )}}
            {{form::text('phone',null,array('class'=>'form-control','required'=>'' ))}}
            <select class="form-control" name="company_id">
        @foreach ($companies as $company)
    <option value="{{$company->id}}">{{$company->name}}</option>      
        @endforeach
    </select>
           
              
          
            
    </div>
            <div  class="row">
                    <div class="col-md-6">
                  {{form::submit('save changes',['class'=>'btn btn-success btn-md'])}}
                  <a href="{{ route('employess.show', $employess->id) }}" class="btn btn-danger btn-md">cancel</a>
                
                    </div>
            </div>     
            
                
           
        
    
</div>
{!! form::close() !!}

@stop