@extends('layout.main')
@section('content')
    <!-- Contact Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Contact Us For Any Queries</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-4 mb-3">
                        <div class="mb-4">
                            <h6 class="text-uppercase font-weight-bold">Contact Info</h6>
                            <p class="mb-4">We would love to hear from you. Get intouch</p>
							<div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Our Office</h6>
                                </div>
                                <p class="m-0">Bishop Timothy Ranji Plaza, 10th Floor, Opposite Kamindi Supermarkets</p>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-envelope-open text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Email Us</h6>
                                </div>
                                <p class="m-0">info@ackmdmks.org</p>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa fa-phone-alt text-primary mr-2"></i>
                                    <h6 class="font-weight-bold mb-0">Call Us</h6>
                                </div>
                                <p class="m-0">0724 583 596 /  0735 212 4149</p>
                            </div>
                        </div>
                        <h6 class="text-uppercase font-weight-bold mb-3">Contact Us</h6>
                        <form method="post" action="/contact">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control p-4" placeholder="Your Name" required="required"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control p-4" placeholder="Your Email" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control p-4" name="number" placeholder="Phone Number +254" required="required"/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="4" name="message" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;"
                                    type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="https://web.facebook.com/ackdmks" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">15,000 Followers</span>
                            </a>
                            <a href=https://twitter.com/MtkenyaSDiocese"" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">13,345 Followers</span>
                            </a>
                            <a href="https://www.instagram.com/tai_world_wide_ministry/" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgb(255,0,166);"></i>
                                <span class="font-weight-medium">111 Followers</span>
                            </a>
                            <a href="https://www.youtube.com/@taiworldwideministry" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(255,5,5,0.92);"></i>
                                <span class="font-weight-medium">111 Followers</span>
                            </a>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Newsletter Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <p>Subscribe to Our News Letter</p>
                            <div class="input-group mb-2" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                                </div>
                            </div>
                            <small></small>
                        </div>
                    </div>
                    <!-- Newsletter End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

@endsection
