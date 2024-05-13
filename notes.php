home->slug
<div class="store-overlay">
    <a href="{{ route('article', ['slug'=>$article->slug]) }}" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
    <!-- <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a> -->
</div>


home article
<!-- Article Start -->
<div class="container-xxl py-5" style="margin-bottom:0rem !important; padding-bottom:0rem !important">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Our Articles</p>
                <h1 class="display-6">Read Our Articles About Vanilla</h1>
            </div>
            <div class="row g-4" id="items_container">
            @foreach ($articles as $article)
            <!-- just show 3 articles -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="store-item position-relative text-center">
                    <!-- <img class="img-fluid" src="{{ asset('webpage/img/store-product-1.jpg') }}" alt=""> -->
                    <img class="img-fluid" src="{{ asset('storage/images/articles/' .$article->image) }}" alt="">
                    <div class="p-4">
                        <!-- <div class="text-center mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div> -->
                        <h4 class="mb-3">{{ $article->article_title }}</h4>
                        <p>{!! Str::limit($article->article_content, 100) !!}</p>
                        <!-- <h4 class="text-primary">$19.00</h4> -->
                    </div>
                        <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                </div>
            </div>
            @endforeach
        </div></br>
        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
            <a href="{{ route('articles') }}" id="load_more_button" data-page="" class="btn btn-primary rounded-pill py-3 px-5">View More Articles</a>
        </div>
        </div>
    </div>
    <!-- Article End -->
