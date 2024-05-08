@extends('frontend.layouts.app')
@section('content')

<style>
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
hr 
{
  margin: 0 !important;
}
.image-container{
  columns:3 250px;
  gap:15px;
}
.image-container img{
  margin-bottom: 10px;
  border-radius: 5px;
  width: 100%;
}
</style>

<div class="home-content">
    <section class="content-header p-0 m-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h1>PIC-BAZZER</h1>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="{{ url('frontend/homepage/list') }}" class="btn btn-primary">Dashboard</a>
          </div>
        </div>
      </div>
      <hr>
    <hr>
<div class="container">
    <div class="image-container py-5">
        @foreach($images as $image)
            <img src="{{ asset('upload/images/'.$image->image_name) }}">
        @endforeach
    </div>
</div>
</section>

<section>
    <div class="footer-area text-center">
        <p>@copyright by Kabirprocoder</p>
    </div>
</section>
</div>



@endsection