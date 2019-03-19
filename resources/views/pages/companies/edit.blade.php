@extends('layouts.app')
@section('content')

<div  class="container">
        {!! Form::model($companies, ['route'=>['companies.update',$companies->id],'method'=>'PUT'] ) !!}
    <div class="col-md-8">
        
            {{form::label('name','NAME:' )}}
            {{form::text('name',null,array('class'=>'form-control input-lg','required'=>'', ))}}
            {{form::label('email','EMAIL:' )}}
            {{form::text('email',null,array('class'=>'form-control input-lg','data-parsley-type'=>'email' ))}}<br>
            {{form::label('logo','LOGO:' )}}
            {{Form::file('logo',null)}};<br><br>
            {{form::label('website','WEBSITE:' )}} 
            {{form::text('website',null,array('class'=>'form-control input-lg'))}}
    </div>
            <div  class="row">
                    <div class="col-md-6">
                <br> {{form::submit('save changes',['class'=>'btn btn-success btn-md'])}}
                <a href="{{ route('companies.show', $companies->id) }}" class="btn btn-danger btn-md">cancel</a>
                    </div>
            </div>     
            
                
           
        
    
</div>
{!! form::close() !!}

@stop