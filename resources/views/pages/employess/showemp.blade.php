@extends('layouts.app')

@section('content')

<div  class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
               
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>phone</th>
                <th>company_id</th>
            </thead>
            <tbody>
    
                <tr>
                <td>{{$employess->firstname}}</td>
                <td>{{$employess->lastname}}</td>
                <td>{{$employess->email}}</td>
                <td>{{$employess->phone}}</td>
                <td>{{$employess->company_id}}</td>
                
                <td><a href="{{ route('employess.edit', $employess->id) }}" class="btn btn-success btn-md">edit</a>
                {!! Form::open(['route'=>['employess.destroy',$employess->id],'method'=>'delete'] ) !!}  
                {!!form::submit('delete',['class'=>'btn btn-danger btn-sm']) !!}
                {!! form::close() !!}
            </td>
            </tr>
                
            </tbody>
        </table>
    </div>
</div>
@endsection








