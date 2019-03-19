@extends('layouts.app')

@section('content')

<div  class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
               
                <th>name</th>
                <th>email</th>
                <th>website</th>
                <th>logo</th>
            </thead>
            <tbody>
    
                <tr>
                <td>{{$companies->name}}</td>
                <td>{{$companies->email}}</td>
                <td>{{$companies->website}}</td>
                <td>{{$companies->logo}}</td>
                
                <td><a href="{{ route('companies.edit', $companies->id) }}" class="btn btn-success btn-md">edit</a>
                {!! Form::open(['route'=>['companies.destroy',$companies->id],'method'=>'delete'] ) !!}    
                {!!form::submit('delete',['class'=>'btn btn-danger btn-sm']) !!}
                {!! form::close() !!}
            </td>
            
            
            </tr>
                
            </tbody>
        </table>
    </div>
</div>
@endsection

