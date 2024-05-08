@extends('frontend.layouts.app')
@section('content')



<div class="container">
@include('frontend/layouts/_message')
    <div class="row align-items-center">
        <div class="col-sm-6">
        <h1>List Image</h1>
        </div>
        <div class="col-sm-6" style="text-align: right;">
        <a href="{{ url('frontend/homepage/add') }}" class="btn btn-primary">Add New Image</a>
        <a href="{{ url('frontend/homepage/home') }}" class="btn btn-primary">Home Page</a>
        </div>
    </div>
</div>
<div class="container">
    <table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Extension</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach($getRecord as $value)
        <tr>
            <th>{{ $value->id }}</th>
            <td>{{ $value->image_name }}</td>
            <td>{{ $value->image_extension }}</td>
            <td><img src="{{ asset('upload/images/'.$value->image_name) }}" style="width: 100px; height: 60px; object-fit: cover;"></td>
            <td><a href="{{ url('frontend/homepage/edit/'.$value->id) }}" class="btn btn-info btn-sm">Edit</a></td>
            <td><a onclick="return confirm('Are you sure want to delete this items?');" href="{{ url('frontend/homepage/delete/'.$value->id) }}" class="btn btn-danger btn-sm">Delete</a></td> 
        </tr>
    @endforeach
    </tbody>
    </table>
</div>



@endsection