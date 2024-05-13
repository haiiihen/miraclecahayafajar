@extends('webpage.layouts.app')

@section('content')
    <!-- Articles Start -->
    <div class="container-xxl py-5">
            <!-- add button modal add  -->
            @if (auth()->check() && auth()->user()->name === 'admin')
            <div class="text-center">
                <button style="float:right" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addArtikelModal">
                    Add Article
                </button>
            </div>
            @endif
        <div class="container py-5">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Our Articles</p>
                <h1 class="display-6">Tea has a complex positive effect on the body</h1>
            </div>
            <div class="modal fade" id="addArtikelModal" tabindex="-1" aria-labelledby="addArtikelModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addArtikelModalLabel">Add Article</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- modal body is text editor form  -->
                        <!-- <div class="modal-body text-center">
                            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="article_title" class="form-label text-start">Article Title</label>
                                    <input type="text" class="form-control" id="article_title" name="article_title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="article_content" class="form-label text-start">Article Content</label>
                                    <textarea class="form-control" id="article_content" name="article_content" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label text-start">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div> -->
                         <div class="modal-body text-center">
                            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="article_title" class="form-label text-start">Article Title</label>
                                    <input type="text" class="form-control" id="article_title" name="article_title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="article_content" class="form-label text-start">Article Content</label>
                                    <!-- <textarea class="form-control" id="article_content" name="article_content" rows="3" required></textarea> -->
                                    <textarea class="ckeditor form-control"  id="article_content" name="article_content" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label text-start">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4" id="items_container">
            @foreach ($articles as $article)
            <!-- just show 3 articles -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- add button edit  -->
                    @if (auth()->check() && auth()->user()->name === 'admin')
                    <!-- button edit redirect to modal  -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Edit
                    </button>
                    <!-- delete button -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Delete
                    </button>
                    @endif
                    <div class="store-item position-relative text-center">
                        <!-- <img class="img-fluid" src="{{ asset('webpage/img/store-product-1.jpg') }}" alt=""> -->
                        <img style="height: 300px;" class="img-fluid" src="{{ asset('storage/images/articles/' .$article->image) }}" alt="">
                        <div class="p-4">
                            <!-- <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div> -->
                            <h4 class="mb-3">{{ $article->article_title }}</h4>
                            <!-- <p>{{ $article->article_content }}</p> -->
                            <p>{!! Str::limit($article->article_content, 100) !!}</p>
                            <!-- <h4 class="text-primary">$19.00</h4> -->
                        </div>
                        <div class="store-overlay">
                            <a href="{{ route('article', ['slug'=>$article->slug]) }}" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <!-- <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a> -->
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- <div class="col-md-12">
                <div class="text-center">
                    <button id="load_more_button" data-page="{{ $articles->currentPage() + 1 }}"
                        class="btn btn-primary">Load More</button>
                </div>
            </div> -->
        </div></br>
        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                <a id="load_more_button" data-page="{{ $articles->currentPage() + 1 }}" class="btn btn-primary rounded-pill py-3 px-5">View More Articles</a>
            </div>
        </div>
    </div>
    <!-- Articles End -->
@endsection

<!-- script section  -->
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        var start = 3;

        $('#load_more_button').click(function() {
            console.log('clicked');
            $.ajax({
                url: "{{ route('load.more') }}",
                method: "GET",
                data: {
                    start: start
                },
                dataType: "json",
                beforeSend: function() {
                    $('#load_more_button').html('Loading...');
                    $('#load_more_button').attr('disabled', true);
                },
                success: function(data) {

                    if (data.data.length > 0) {
                        var html = '';
                        // for (var i = 0; i < data.data.length; i++) {
                        //     html += `<div class="col-md-4 content_box">
                        //                 <div>
                        //                     <h2>` + data.data[i].title + `</h2>
                        //                     <p>` + data.data[i].description + `</p>
                        //                 </div>
                        //             </div>`;
                        // }
                        data.data.forEach(function(item) {
                            html += `<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            @if (auth()->check() && auth()->user()->name === 'admin')
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Edit
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Delete
                            </button>
                            @endif
                                <div class="store-item
                                position-relative text-center">

                                    <img style="height: 300px;" class="img-fluid" src="{{ asset('storage/images/articles/') }}/${item.image}" alt="">
                                    <div class="p-4">
                                        <h4 class="mb-3">${item.article_title}</h4>
                                        <p>${item.article_content.substring(0, 100)}</p>
                                    </div>
                                    <div class="store-overlay">
                                        <a href="{{ route('article', ['slug'=>$article->slug]) }}" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                            </div>`;
                        });

                        //console.log(html);
                        //append data  without fade in effect
                        //$('#items_container').append(html);

                        //append data with fade in effect
                        $('#items_container').append($(html).hide().fadeIn(1000));
                        $('#load_more_button').html('Load More');
                        $('#load_more_button').attr('disabled', false);
                        start = data.next;
                    } else {
                        $('#load_more_button').html('No More Data Available');
                        $('#load_more_button').attr('disabled', true);
                    }
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
