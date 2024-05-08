@extends('frontend.layouts.app')
@section('content')



<div class="container">
    <div class="row align-items-center">
        <div class="col-sm-6">
        <h1>Add Image</h1>
        </div>
        <div class="col-sm-6" style="text-align: right;">
        <a href="{{ url('frontend/homepage/home') }}" class="btn btn-primary">Home Page</a>
        </div>
    </div>
</div>



<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="form-group bg-light p-3" style="width: 100%!important;">
                        <label>Image<span style="color: red;">*</span></label>
                        <input type="file" name="image[]" class="form-control" style="padding: 3px;" multiple accept="image/*">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>



@endsection