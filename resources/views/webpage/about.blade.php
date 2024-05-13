@extends('webpage.layouts.app')

@section('content')
    <!-- About Start -->
    @foreach ($content as $key=>$ct)
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <!-- Make the image editable by adding an input type file -->
                            @if (auth()->check() && auth()->user()->name === 'admin')
                            <input type="file" id="image1" accept="image/*">
                            @endif
                            <img class="img-fluid bg-white w-100 mb-3 wow fadeIn" data-wow-delay="0.1s" src="{{ asset('storage/images/abouts/' .$ct->image1) }}" alt="">
                            @if (auth()->check() && auth()->user()->name === 'admin')
                            <input type="file" id="image3" accept="image/*">
                            @endif
                            <img class="img-fluid bg-white w-50 wow fadeIn" data-wow-delay="0.2s" src="{{ asset('storage/images/abouts/' .$ct->image2) }}" alt="">
                        </div>
                        <div class="col-6">
                            @if (auth()->check() && auth()->user()->name === 'admin')
                            <input type="file" id="image4" accept="image/*">
                            @endif
                            <img class="img-fluid bg-white w-50 mb-3 wow fadeIn" data-wow-delay="0.3s" src="{{ asset('storage/images/abouts/' .$ct->image3) }}" alt="">
                            @if (auth()->check() && auth()->user()->name === 'admin')
                            <input type="file" id="image2" accept="image/*">
                            @endif
                            <img class="img-fluid bg-white w-100 wow fadeIn" data-wow-delay="0.4s" src="{{ asset('storage/images/abouts/' .$ct->image4) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <!-- <p class="fs-5 fw-medium fst-italic text-primary">About Us</p> -->
                        <!-- get title from controller database  -->
                        <p id="" class="fs-5 fw-medium fst-italic text-primary">{{ $ct->title }}</p>
                        <!-- Make title editable -->
                        <!-- <h1 class="display-6" id="title" contenteditable="true">{{ $ct->title }}</h1> -->
                        <h1 class="display-6" id="sub-title" {{ auth()->check() && auth()->user()->name === 'admin' ? 'contenteditable=true' : '' }}>The History of Vanilla Papua Indonesia</h1>
                    </div>
                    <div class="row g-3 mb-4">
                        <!-- Make content editable -->
                        <!-- <h5 id="content1" {{ auth()->check() && auth()->user()->name ===  'admin' ? 'contenteditable=true' : ''}}>{{ $ct->content1 }}</h5> -->
                        <!-- <p class="mb-0" id="content1Text" {{ auth()->check() && auth()->user()->name ===  'admin' ? 'contenteditable=true' : ''}}>{{ $ct->content1_text }}</p> -->


                        <h5 id="content1">WHY US?</h5>
                        <p class="mb-0" id="content1Text" style="text-align:justify">
                            We are exporters of the best quality vanilla originating from Gunung Bintang from Papua Indonesia which we manage in Jayapura, Indonesia.
                            The vanilla that we export comes from Gunung Bintang, Papua, which borders Papua New Guinea. The minimum air temperature is ± 19.20C and the maximum temperature is 31.90C. Air humidity is quite high, mainly due to the wind that blows from the mountains. The altitude of the Bintang Mountains Regency is part of the humid tropical zone. Generally the climate tends to be hot, wet (humid) with rainfall that varies from place to place. Rainfall is generally between 2,000 – 3,000 mm/year.
                            We are very concerned about the quality of the vanilla that we produce starting from the nursery, fertilizing, planting, management to the harvesting process. To produce export quality Grade A Super Vanilla, we harvest every 9 months from pollination. The 6th year harvest is the peak harvest in vanilla cultivation and after the 6th year harvest, the productivity of vanilla plants continues to decline until the tenth year. Therefore, in the sixth year, the vanilla plant must be dismantled and replanted in order to produce Grade A Super Vanilla quality which can be exported.
                        </p>
                        <h5 id="content1">Key Future</h5>
                        <p class="mb-0" id="content1Text" style="text-align:justify">
                            Integrity</br>
                            Integrity For us, integrity is the quality of having a strong ethical principle, which followed at all times. Honesty and trust are at the core of integrity.

                            </br></br>Commitment</br>
                            Commitment is our firm promise or decision to do our business, where we will continue to help improve the welfare of farmers.

                            </br></br>Quality</br>
                            In our mutual thoughts, quality is not just about offering a product or service that exceeds the standard, but it’s also about the reputation.

                            </br></br>Innovation</br>
                            Innovation means the creation, development and implementation of new products, processes or services with the aim of increasing efficiency.


                            </br></br>Company Terms</br>
                            We can provide document and sample into English Document.We use INCOTERMS 2020 Rules for Shipment Terms,also for payment Terms, we only use T/T with down payment accoarding to agreement.
                        </p>
                    </div>

                    <!-- Button to trigger saving -->
                    @if (auth()->check() && auth()->user()->name === 'admin')
                    <button class="btn btn-primary mt-3" onclick="saveContent()">Save Changes</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
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

            // console.log('-==============');
            // console.log(formData);

            // Send content and images to the server using AJAX
            $.ajax({
                method: 'POST',
                url: '{{ route("saveAboutContent") }}',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle success response
                    // alert('Content saved successfully!');
                    // alert with auto reload
                    alert('Content saved successfully!');
                    location.reload();
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(error);
                    // alert('Failed to save content!');
                    alert(error);
                }
            });
        }
    </script>
@endsection
