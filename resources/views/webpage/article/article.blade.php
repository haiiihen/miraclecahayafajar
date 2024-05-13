@extends('webpage.layouts.app')

@section('content')
<!-- Article Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-12">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                    <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 1000px;">
                        <p class="fs-5 fw-medium fst-italic text-primary">Featured Acticle</p>
                        <h1 class="display-6">{{ $article->article_title }}</h1>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s" style="text-align:center">
                    <img class="img-fluid" src="{{ asset('storage/images/articles/' .$article->image) }}" alt="">
                </div>
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <div style="text-align:justify;">
                    <!-- get data from database and fotmat html  -->
                    {!! $article->article_content !!}
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->
@endsection
