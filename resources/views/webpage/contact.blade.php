@extends('webpage.layouts.app')

@section('content')
    <!-- Contact Start -->
    <div class="container-xxl contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Contact Us</p>
                <h1 class="display-6">If You Have Any Question, Please Contact Us</h1>
            </div>
            <div class="row g-5 mb-5">
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
                    <!-- <p class="mb-0">+6282229920299</p> -->
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">Street Petojo Enclek 6 kelurahan Petojo kecamatan Gambir, City Central Jakarta</p>
                    <p class="mb-0">Jakarta, Indonesia</p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4">Need some help?</h3>
                    <p class="mb-4">If you have any questions or need assistance, feel free to contact us</p>
                    <form action="{{ route('contact.sendMessage') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="Your Email">
                                    <label for="">Your WhatsApp Number</label>
                                </div>
                            </div>
                            <!-- <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div> -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 120px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button id="send_message" class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <iframe class="w-100 rounded"
                        src="https://www.google.com/maps/embed/v1/place?q=https://www.google.com/maps/place/Kost+Graha+Petojo+I/@-6.172162,106.8160051,15z/data=!4m6!3m5!1s0x2e69f786e9633c47:0xea7da4fbe4533793!8m2!3d-6.172162!4d106.8160051!16s%2Fg%2F11fq_7gjsp?entry=ttu&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                        frameborder="0" style="height: 100%; min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

@section('script')
<script>
// after click button id="send_message" post data from form to route('contact.sendMessage')
// $('#send_message').click(function(e) {
//     e.preventDefault();
//     var name = $('#name').val();
//     var whatsapp = $('#whatsapp').val();
//     var message = $('#message').val();
//     $.ajax({
//         url: "{{ route('contact.sendMessage') }}",
//         type: "POST",
//         data: {
//             name: name,
//             whatsapp: whatsapp,
//             message: message,
//             _token: "{{ csrf_token() }}"
//         },
//         success: function(response) {
//             if (response.status == 'success') {
//                 alert(response.message);
//                 $('#name').val('');
//                 $('#whatsapp').val('');
//                 $('#message').val('');
//             } else {
//                 alert(response.message);
//             }
//         }

//     });
// });
</script>
@endsection
