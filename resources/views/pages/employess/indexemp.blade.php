@extends('layouts.app')

@section('content')
<div  class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <th>#</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>phone</th>
            </thead>
            <tbody>
                @foreach ($employess as $employee)
                <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->firstname}}</td>
                <td>{{$employee->lastname}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->phone}}</td>
                <td><a href="{{ route('employess.show', $employee->id) }} " class="btn btn-info btn-sm">view</a> <a href="{{ route('employess.edit', $employee->id) }}" class="btn btn-success btn-sm">edit</a>
                    
                     
            </tr>
                @endforeach
            </tbody>
        </table>
        <div class="center">
            {!!$employess->links();!!}
        </div>
    </div>
</div>
@endsection