@extends('webpage.layouts.app')

@section('content')
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <!-- Make the image editable by adding an input type file -->
                            <input type="file" id="image1" accept="image/*">
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="{{ asset('webpage/img/about-1.jpg') }}" alt="">
                            <input type="file" id="image3" accept="image/*">
                            <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="{{ asset('webpage/img/about-3.jpg') }}" alt="">
                        </div>
                        <div class="col-6">
                            <input type="file" id="image4" accept="image/*">
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="{{ asset('webpage/img/about-4.jpg') }}" alt="">
                            <input type="file" id="image2" accept="image/*">
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="{{ asset('webpage/img/about-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">About Us</p>
                        <!-- Make title editable -->
                        <!-- <h1 class="display-6" id="title" contenteditable="true">The success history of TEA House in 25 years</h1> -->
                        <h1 class="display-6" id="title" {{ auth()->check() && auth()->user()->role === 'admin' ? 'contenteditable=true' : '' }}>The success history of TEA House in 25 years</h1>
                    </div>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-4">
                            <!-- Make image editable -->
                            <input type="file" id="image5" accept="image/*">
                            <img class="img-fluid bg-white w-100" src="{{ asset('webpage/img/about-5.jpg') }}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <!-- Make content editable -->
                            <h5 contenteditable="true" id="content1">Our tea is one of the most popular drinks in the world</h5>
                            <p class="mb-0" contenteditable="true" id="content1Text">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</p>
                        </div>
                    </div>
                    <div class="border-top mb-4"></div>
                    <div class="row g-3">
                        <div class="col-sm-8">
                            <!-- Make content editable -->
                            <h5 contenteditable="true" id="content2">Daily use of a cup of tea is good for your health</h5>
                            <p class="mb-0" contenteditable="true" id="content2Text">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit</p>
                        </div>
                        <div class="col-sm-4">
                            <!-- Make image editable -->
                            <input type="file" id="image6" accept="image/*">
                            <img class="img-fluid bg-white w-100" src="{{ asset('webpage/img/about-6.jpg') }}" alt="">
                        </div>
                    </div>
                    <!-- Button to trigger saving -->
                    <button class="btn btn-primary mt-3" onclick="saveContent()">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- JavaScript to handle saving changes -->
    <script>
        function saveContent() {
            // Fetch content from editable areas
            var title = document.getElementById('title').innerText;
            var content1 = document.getElementById('content1').innerText;
            var content1Text = document.getElementById('content1Text').innerText;
            var content2 = document.getElementById('content2').innerText;
            var content2Text = document.getElementById('content2Text').innerText;

            // Fetch image files
            var image1 = document.getElementById('image1').files[0];
            var image2 = document.getElementById('image2').files[0];
            var image3 = document.getElementById('image3').files[0];
            var image4 = document.getElementById('image4').files[0];
            var image5 = document.getElementById('image5').files[0];
            var image6 = document.getElementById('image6').files[0];

            // Prepare form data for file uploads
            var formData = new FormData();
            formData.append('title', title);
            formData.append('content1', content1);
            formData.append('content1Text', content1Text);
            formData.append('content2', content2);
            formData.append('content2Text', content2Text);
            formData.append('image1', image1);
            formData.append('image2', image2);
            formData.append('image3', image3);
            formData.append('image4', image4);
            formData.append('image5', image5);
            formData.append('image6', image6);
            formData.append('_token', '{{ csrf_token() }}');

            // Send content and images to the server using AJAX
            $.ajax({
                method: 'POST',
                url: '{{ route("saveAboutContent") }}',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle success response
                    alert('Content saved successfully!');
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(error);
                    alert('Failed to save content!');
                }
            });
        }
    </script>
@endsection
