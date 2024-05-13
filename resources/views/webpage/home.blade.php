@extends('webpage.layouts.app')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5" style="padding-bottom:0rem !important; margin-bottom:0rem !important">
        @foreach ($homes as $carousel)
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <img class="w-100" src="{{ asset('webpage/img/carousel-1.jpg') }}" alt="Image"> -->
                    <img class="w-100" src="{{ asset('storage/images/carousels/' . $carousel->carousel_image_1) }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <!-- <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-dark">TEA House</strong></p> -->
                                    <p class="fs-4 text-white animated zoomIn">{{ $carousel->subtitle_carousel_1 }}</p>
                                    <!-- <h1 class="display-1 text-dark mb-4 animated zoomIn">Organic & Quality Tea Production</h1> -->
                                    <h1 class="display-1 text-dark mb-4 animated zoomIn">{{ $carousel->title_carousel_1 }}</h1>
                                    <!-- Create two buttons with space between them -->
                                    <div class="d-flex justify-content-center">
                                        <a href="https://wa.me/628989893394?text=Hi Admin Vanilla Papua Indonesia, my name is $name and $message." class="btn btn-light rounded-pill py-3 px-5 animated zoomIn mr-2">Shop Now</a>
                                        <div style="width: 20px;"></div>
                                        <a href="{{ route('products') }}" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn ml-2">Explore More</a>
                                    </div>
                                    <!-- End of buttons -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Carousel End -->

    <!-- Benefits Section Start -->
    <!-- <div class="container-fluid product py-5 my-5"> -->
        <div class="container-fluid" style="background-color:#F3F7ED;">
        <!-- <div class="container py-5"> -->
            <div class="container-fluid featurs py-5">
                </br></br>
                <div class="container" style="padding-bottom:2rem;">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <div style="background-color: #aecb87 !important;" class="featurs-item text-center rounded bg-light p-4">
                                <div style="background-color: #ffe091 !important;" class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                    <!-- <i class="fas fa-car-side fa-3x text-white"></i> -->
                                    <!-- icon tanaman  -->
                                    <i class="fas fa-seedling fa-3x text-white"></i>
                                </div>
                                <div class="featurs-content text-center">
                                    <h5>Pure and Organic</h5>
                                    <p class="mb-0">Pure and Organic</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div style="background-color: #aecb87 !important;" class="featurs-item text-center rounded bg-light p-4">
                                <div style="background-color: #ffe091 !important;" class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                    <!-- <i class="fas fa-user-shield fa-3x text-white"></i> -->
                                    <i class="fas fa-gift fa-3x text-white"></i>
                                </div>
                                <div class="featurs-content text-center">
                                    <h5>Free Sample</h5>
                                    <p class="mb-0">Free Sample</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div style="background-color: #aecb87 !important;" class="featurs-item text-center rounded bg-light p-4">
                                <div style="background-color: #ffe091 !important;" class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                    <!-- <i class="fas fa-exchange-alt fa-3x text-white"></i> -->
                                    <i class="fas fa-user-shield fa-3x text-white"></i>
                                </div>
                                <div class="featurs-content text-center">
                                    <h5>Security Payment</h5>
                                    <p class="mb-0">100% security payment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div style="background-color: #aecb87 !important;" class="featurs-item text-center rounded bg-light p-4">
                                <div style="background-color: #ffe091 !important;" class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                    <i class="fa fa-phone-alt fa-3x text-white"></i>
                                </div>
                                <div class="featurs-content text-center">
                                    <h5>24/7 Support</h5>
                                    <p class="mb-0">Support every time fast</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </br></br>
        </div>
    </div>
    <!-- Benefits Section End -->


    <!-- About Start -->
    <div class="container-fluid product my-5">
        <div class="container">
            @foreach($abouts as $about)
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="{{ asset('storage/images/abouts/' .$about->image1) }}" alt="">
                            <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="{{ asset('storage/images/abouts/' .$about->image3) }}" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="{{ asset('storage/images/abouts/' .$about->image4) }}" alt="">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="{{ asset('storage/images/abouts/' .$about->image2) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <!-- <p class="fs-5 fw-medium fst-italic text-primary">About Us</p> -->
                        <p class="fs-5 fw-medium fst-italic text-primary">{{ $about->title }}</p>
                        <h1 class="display-6">The History of Vanilla Papua Indonesia</h1>
                        <!-- <h1 class="display-6">{{ $about->subtitle }}</h1> -->
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="{{ asset('storage/images/abouts/' .$about->image5) }}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h5>WHY US?</h5>
                            <!-- <h5>{{ $about->content1 }}</h5> -->
                            <p class="mb-0" style="text-align: justify;">The vanilla that we export comes from Gunung Bintang, Papua, which borders Papua New Guinea. The minimum air temperature is ± 19.20C and the maximum temperature is 31.90C. </p>
                            <!-- <p class="mb-0">{{ $about->content1_text }}</p> -->
                        </div>
                    </div>
                    <div class="border-top mb-4"></div>
                    <div class="row g-3">
                        <div class="col-sm-8">
                            <h5>Quality of Vanilla Papua Indonesia</h5>
                            <!-- <h5>{{ $about->content2 }}</h5> -->
                            <p class="mb-0" style="text-align: justify;">Air humidity is quite high, mainly due to the wind that blows from the mountains. The altitude of the Bintang Mountains Regency is part of the humid tropical zone.</p>
                            <!-- <p class="mb-0">{{ $about->content2_text }}</p> -->
                        </div>
                        <div class="col-sm-4">
                            <img class="img-fluid bg-white w-100" src="{{ asset('storage/images/abouts/' .$about->image6) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- About End -->

    <!-- Products Start -->
    <div class="container">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p>
                <h1 class="display-6">The Kind and Benefits of Vanilla</h1>
            </div>
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
            @foreach ($products as $product)
            <a href="{{ route('product.detail', $product->id) }}" id="product" class="d-block product-item rounded">
                <img src="{{ asset('storage/images/products/' . $product->image) }}" alt="">
                <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                <h4 class="text-primary">{{ $product->content_product }}</h4>
                <span class="text-body">{{ $product->content_product_text }}</span>
                </div>
            </a>
            @endforeach
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Selected Article Start -->
    <!-- <div class="container-xxl py-5" style="">
        <div class="container">
            <div class="row g-5">
                @foreach ($selected_articles as $selected_article)
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('storage/images/articles/' .$selected_article->image) }}" alt="">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">Featured Article</p>
                        <h1 class="display-6">{{ $selected_article->article_title }}</h1>
                    </div>
                    <p class="mb-4">{!! Str::limit($selected_article->article_content, 200) !!}</p>
                    <a href="{{ route('article', ['slug' => 'testing-slugg-akak']) }}" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                </div>
                @endforeach
            </div>
        </div>
    </div> -->
    <!-- Selected Article End -->


    <!-- Video Start -->
    <div class="container-fluid video my-5">
        @foreach ($homes as $home)
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="py-5">
                        <h1 class="display-6 mb-4">How Does It Work?</span> <span class="text-white"></span></h1>
                        <h5 class="fw-normal lh-base fst-italic text-white mb-5">Vanilla contains chemicals that are high in flavor and fragrance, but it is not known how it works for medicinal uses.</h5>
                        <div class="row g-4 mb-5">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Intestinal Gas </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Spices & additives</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Unique accessories</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Wrinkled Skin</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Medicine</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square bg-white text-primary rounded-circle me-3">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <span class="text-dark">Other Condition</span>
                                </div>
                            </div>
                        </div>
                        <!-- <a class="btn btn-light rounded-pill py-3 px-5" href="">Explore More</a> -->
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- Video End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/gBDXdVMzteg?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;"></iframe>
                         <!-- <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" -->
                            <!-- allow="autoplay"></iframe> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Article Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Our Articles</p>
                <h1 class="display-6">Read Our Articles About Vanilla</h1>
            </div>
            <div class="row g-4">
                @foreach ($articles as $article)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="{{ asset('storage/images/articles/' .$article->image) }}" alt="">
                        <div class="p-4">
                            <h4 class="mb-3">{{ $article->article_title }}</h4>
                            <p>{!! Str::limit($article->article_content, 100) !!}</p>
                        </div>
                        <div class="store-overlay">
                            <a href="{{ route('article', ['slug'=>$article->slug]) }}" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <!-- <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                <a href="{{ route('articles') }}" id="load_more_button" data-page="" class="btn btn-primary rounded-pill py-3 px-5">View More Articles</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-fluid testimonial py-5 my-5"> -->
    <div class="container-fluid" style="margin-top:0rem !important; padding-top:0rem !important">
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-white">Testimonial</p>
                <h1 class="display-6">What our clients say about our Vanilla</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">"Papua vanilla is one of the best vanilla I have ever tasted. The scent is so complex and rich, with tone of chocolate, cinnamon, and dried fruit. It's great, too, with a perfect balance between sweet and bitter. I have used it in a variety of dishes, from cake and ice cream to sauce and soup, and it always produces a wonderful flavor. I highly recommend Papua vanilla to any chef who looks for a high-quality vanilla with a unique and special taste."</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="{{ asset('webpage/img/testimonial-1.jpg') }}" alt="">
                        <div class="text-start ms-3">
                            <h5>Rachel</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">"Papua vanilla has been the staple in my bakery since I first tried it several years ago. My customers love it, and I often take credit for my aroma and taste of bread and cake. Papua vanilla gives a rich and special flavor that cannot be found in plain vanilla. I am also happy to know that Papua vanilla is planted continually and ethically, which is important to me and my customers."</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="{{ asset('webpage/img/testimonial-2.jpg') }}" alt="">
                        <div class="text-start ms-3">
                            <h5>Rogert</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4 p-lg-5">
                    <p class="mb-4">"I have been using Papua vanilla in my ice cream for several months now, and it makes a big difference. My ice cream is now more flavorful and delicious, and my customers love it. Papua vanilla gives a pure, natural flavor of vanilla that cannot be found with a plain vanilla extract. I am also happy to know that Papua vanilla is planted in west Papua, which is a beautiful part of the world that I would like to support."</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="img-fluid flex-shrink-0" src="{{ asset('webpage/img/testimonial-3.jpg') }}" alt="">
                        <div class="text-start ms-3">
                            <h5>Acela</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-xxl contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Contact Us</p>
                <h1 class="display-6">Contact us right now</h1>
            </div>
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-8">
                    <p class="text-center mb-5">If you have any questions or need assistance, feel free to contact us. We will respond immediatly</p>
                    <div class="row g-5">
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-envelope fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">info@example.com</p>
                            <p class="mb-0">support@example.com</p>
                        </div>
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-phone fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">+6282229920299</p>
                            <!-- <p class="mb-0">+012 345 67890</p> -->
                        </div>
                        <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                            <div class="btn-square mx-auto mb-3">
                                <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                            </div>
                            <p class="mb-2">City Central Jakarta</p>
                            <p class="mb-0">Jakarta, Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Start -->
@endsection

@section('script')
<script>
</script>
@endsection
