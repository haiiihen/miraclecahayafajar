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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_product">Add More Product</button>
            <div></br></div>
            @endif
            <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
                @foreach ($products as $product)
                <div class="d-block product-item rounded">
                <!-- add button edit  -->
                @if (auth()->check() && auth()->user()->name === 'admin')
                    <!-- button edit redirect to modal  -->
                    <button id="edit_product_modal" type="button" class="btn btn-primary" data-product-id="{{ $product->id }}">
                          Edit
                    </button>
                    <!-- delete button -->
                    <button id="delete_product" type="button" class="btn btn-danger" data-product-id="{{ $product->id }}">
                        Delete
                    </button>
                    @endif
                    <a href="{{ route('product.detail', $product->id) }}" id="product">
                        <img src="{{ asset('storage/images/products/' . $product->image) }}" alt="">
                        <div class="bg-white shadow-sm text-center p-4 position-relative mt-n5 mx-4">
                            <h4 class="text-primary">{{ $product->content_product }}</h4>
                            <span class="text-body">{{ $product->content_product_text }}</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- modal up add  -->
    <div class="modal fade bd-example-modal-lg" id="modal_add_product" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                </div>
                <div class="modal-body">
                    <form id="addProductForm" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image" class="col-form-label">Image :</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="product_name" class="col-form-label">Product Name :</label>
                        <input type="text" class="form-control" id="product_name" name="product_name">
                    </div>
                    <div class="form-group">
                        <label for="product_description" class="col-form-label">Description :</label>
                        <textarea class="form-control" id="product_description" name="product_description" row="15"></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a id="save_add_button" type="submit" class="btn btn-primary">Save</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal  -->
    <!-- modal up update  -->
    <div class="modal fade bd-example-modal-lg" id="modal_edit_product" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                </div>
                <div class="modal-body">
                    <form id="updateProductForm" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="update_product_id" name="">
                    <div class="form-group">
                        <label for="update_image" class="col-form-label">Image :</label>
                        <input type="file" class="form-control" id="update_image" name="name_update_image">
                    </div>
                    <div class="form-group">
                        <label for="update_product_name" class="col-form-label">Product Name :</label>
                        <input type="text" class="form-control" id="update_product_name" name="name_update_product_name">
                    </div>
                    <div class="form-group">
                        <label for="update_product_description" class="col-form-label">Description :</label>
                        <textarea class="form-control" id="update_product_description" name="name_update_product_description" row="15"></textarea>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a id="save_update_button" type="submit" class="btn btn-primary">Save</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal  -->
    <!-- Store End -->
@endsection

@section('script')
<script>
$(document).ready(function() {
    $("#save_add_button").click(function(e) {
    e.preventDefault(); // Prevent default form submission

    const formData = new FormData($('#addProductForm')[0]); // Create FormData object from form

    $.ajax({
        url: "{{ route('product.add') }}", // Replace with your controller URL
        type: 'POST',
        data: formData,
        contentType: false, // Set content type to false for FormData
        processData: false, // Set processData to false for FormData
        success: function(response) {
        console.log(response);
        if (response.success) {
            alert("Product added successfully!");
            // Clear form or perform other actions after successful addition
            $('#addProductForm').trigger("reset"); // Reset form
            $('#modal_add_product').modal('hide'); // Hide modal
            location.reload(); // Reload page to display new product
        } else {
            alert(response.message); // Display error message from controller
        }
        },
        error: function(error) {
        console.error(error);
        alert("Error adding product!");
        }
    });
    });
});

// show modal update
$(document).on('click', '#edit_product_modal', function() {
    var product_id = $(this).data('product-id');
    $.ajax({
        url: 'products/edit/' + product_id,
        type: 'GET',
        data: {
            product_id: product_id
        },
        success: function(response) {
            console.log(response);
            // $('#update_image').attr('src', 'storage/images/products/' + response.product.image);
            $('#update_product_id').val(response.product.id);
            $('#update_product_name').val(response.product.content_product);
            $('#update_product_description').val(response.product.content_product_text);
            $('#modal_edit_product').modal('show');
        },
        error: function(error) {
            console.error(error);
            alert("Error fetching product data!");
        }
    });
});

// save update
$(document).ready(function() {
    $("#save_update_button").click(function(e) {
        var product_id = $('#update_product_id').val();
        e.preventDefault(); // Prevent default form submission
        const formData = new FormData($('#updateProductForm')[0]); // Create FormData object from form

        $.ajax({
            url: "/products/update/" + product_id,
            type: 'POST',
            data: formData,
            contentType: false, // Set content type to false for FormData
            processData: false, // Set processData to false for FormData
            success: function(response) {
            console.log(response);
            if (response.success) {
                alert("Product updated successfully!");
                // Clear form or perform other actions after successful addition
                $('#updateProductForm').trigger("reset"); // Reset form
                $('#modal_edit_product').modal('hide'); // Hide modal
                location.reload(); // Reload page to display new product
            } else {
                alert(response.message); // Display error message from controller
            }
            },
            error: function(error) {
            console.error(error);
            alert("Error updating product!");
            }
        });
    });
});

// delete product
$(document).on('click', '#delete_product', function() {
    var product_id = $(this).data('product-id');
    $.ajax({
        url: 'products/delete/' + product_id,
        type: 'GET',
        data: {
            product_id: product_id
        },
        success: function(response) {
            console.log(response);
            alert("Product deleted successfully!");
            location.reload();
        },
        error: function(error) {
            console.error(error);
            alert("Error deleting product!");
        }
    });
});

</script>
@endsection
