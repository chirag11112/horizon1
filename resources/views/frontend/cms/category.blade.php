@extends('frontend.layouts.app')

@section('title', 'About')

@section('content')
<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url({{asset('frontend/images/big_image_1.jpg')}});">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">
            <div class="mb-5 element-animate">
              <h1>Main Categories</h1>
            </div>            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="slider-wrap site-section">
      <div class="container">
        <div class="row">
          @if(!empty($product_category) && count($product_category) > 0)
        @foreach($product_category as $category)
          <div class="col-md-4 element-animate ">
          @if(!empty($category->image) && file_exists(public_path('uploads/category/'.$category->image)))
            <a href="{{route('frontend.sub_category',$category->id)}}" class="img-bg" style="background-image: url('{{asset('uploads/category/'.$category->image)}}')">
            @else
            <a href="{{route('frontend.sub_category',$category->id)}}" class="img-bg" style="background-image: url('{{asset('frontend/images/img_1.jpg')}}')">
            @endif
              <div class="text">
                <!-- <span class="icon ion-ios-location"></span> -->
                <h2>{{ucfirst($category->name)}}</h2>
                <p>View Sub Category</p>
              </div>
            </a>
          </div>
        @endforeach
      @endif
        </div>
        {{$product_category->links()}}

        <!-- <div class="row element-animate pt-5">
          <div class="col-6 text-left mb-3"><a href="#" class="btn btn-primary">Prev</a></div>
          <div class="col-6 text-right"><a href="#" class="btn btn-primary">Next</a></div>
        </div> -->
      </div>
    </section>
    <!-- END section -->
@endsection