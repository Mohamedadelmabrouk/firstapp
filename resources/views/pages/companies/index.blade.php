@extends('layouts.app')

@section('content')

<div  class="row">
        <div class="col-md-12">
            <table class="table">
                <thead class="black white-text">
                    <th>#</th>
                    <th>name</th>
                    <th>email</th>
                    <th>logo</th>
                    <th>website</th>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                <tr>
                    <td>{{$company->id}}</td>
                    <td>{{$company->name}}</td>
                    <td>{{$company->email}}</td>
                    <td>{{ substr($company->logo,0,10)}}{{ strlen($company->logo)>10 ? "....":""}}</td>
                    <td>{{$company->website}}</td>
                    <td><a href="{{ route('companies.show', $company->id) }} " class="btn btn-info btn-sm">view</a> <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-success btn-sm">edit</a>
                </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="center">
                    {!!$companies->links();!!}
                </div>
        </div>
    </div>
@endsection