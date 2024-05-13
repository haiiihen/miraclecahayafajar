@extends('webpage.layouts.app')

@section('content')
<!-- product Start -->
<div class="container-xxl py-5">
        <div class="container">
        @foreach ($products as $product)
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('storage/images/products/' .$product->image) }}" alt="">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">Featured Acticle</p>
                        <h1 class="display-6">{{ $product->content_product }}</h1>
                    </div>
                    <div style="text-align:justify;">
                    <!-- get data from database and fotmat html  -->
                    {!! $product->content_product_text !!}
                    <!-- <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- product End -->
@endsection
