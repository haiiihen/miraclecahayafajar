@extends('webpage.layouts.app')

@section('content')
    <!-- Store Start -->
    <div class="container-fluid product py-5">
        <div class="container">
            <!-- Button to trigger saving -->
            @if (auth()->check() && auth()->user()->name === 'admin')
            <button class="btn btn-primary mt-3" onclick="saveContent()" style="float: right;">Save Changes</button>
            @endif
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary" {{ auth()->check() && auth()->user()->name === 'admin' ? 'contenteditable=true' : '' }}>Online Store</p>
                <h1 class="display-6" {{ auth()->check() && auth()->user()->name === 'admin' ? 'contenteditable=true' : '' }}>Want to stay healthy? Choose tea taste</h1>
            </div>
            <!-- button add  -->
            @if (auth()->check() && auth()->user()->name === 'admin')
            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add More Product
            </button> -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add More Product</button>
            <!-- modal up  -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                    </div>
                    <div class="modal-body">
                        <form id="add_product" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="image" class="col-form-label">Image :</label>
                            <input type="file" class="form-control" id="image">
                        </div>
                        <div class="form-group">
                            <label for="product_name" class="col-form-label">Product Name :</label>
                            <input type="text" class="form-control" id="product_name">
                        </div>
                        <div class="form-group">
                            <label for="product_description" class="col-form-label">Description :</label>
                            <textarea class="form-control" id="product_description" row="15"></textarea>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a id="save_add_button" type="button" class="btn btn-primary">Save</a>
                    </div>
                </div>
            </div>
            </div>
            <!-- end modal  -->
            <div></br></div>
            @endif
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                @foreach ($products as $product)
                <a href="{{ route('product.detail', $product->id) }}" id="product" class="d-block product-item rounded">
                    <!-- add button edit  -->
                    @if (auth()->check() && auth()->user()->name === 'admin')
                    <!-- button edit redirect to modal  -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Edit
                    </button>
                    <!-- delete button -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" href="{{ route('product.delete', $product->id) }}">
                        Delete
                    </button>
                    @endif
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
    <!-- Store End -->
@endsection

@section('script')
<script>
    // when button save_add_button, pass data from form id="add_product" to product.store
    $(document).on('click', '#save_add_button', function() {
        // get image file from form
        var image = $('#image').prop('files')[0];
        var product_name = $('#product_name').val();
        var product_description = $('#product_description').val();

        $.ajax({
            url: "{{route('product.store') }}",
            type: "POST",
            contentType: false,
            processData: false,
            data: {
                _token: "{{ csrf_token() }}",
                image: image,
                product_name: product_name,
                product_description: product_description,
            },
            success: function(response) {
                console.log('response');
            }
        })
    })
</script>
@endsection
