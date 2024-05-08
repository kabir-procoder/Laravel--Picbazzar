@extends('frontend.layouts.app')
@section('content')



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
            <div class="col-md-12">
              @if(!empty($photo->id))
                <div class="col-md-4 col-12">
                  <img style="width: 100%; height: 230px; object-fit: cover; " src=" {{ asset('upload/images/'.$photo->image_name) }} ">
                </div>
              @endif 
            </div>
        </div>
        <div class="card-footer mt-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>



@endsection