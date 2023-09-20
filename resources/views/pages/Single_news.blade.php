@extends('layout.main')
@section('content')

    <style>
        body {
            font-family: Arial;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        img {
            vertical-align: middle;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
            position: relative;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #ffcc00;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }
    </style>
    <!-- Breaking News Start -->
<div style="" class="container-fluid mt-5 mb-3 pt-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="d-flex justify-content-between">
{{--                    <div class="section-title border-right-0 mb-0" style="width: 180px;">--}}
{{--                        <h4 class="m-0 text-uppercase font-weight-bold">Tranding</h4>--}}
{{--                    </div>--}}
{{--                    <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"--}}
{{--                         style="width: calc(100% - 180px); padding-right: 100px;">--}}
{{--                        <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>--}}
{{--                        <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breaking News End -->


<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" style="object-fit: cover;">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
{{--                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"--}}
{{--                               href="">Business</a>--}}
{{--                            <a class="text-body" href="">Jan 01, 2045</a>--}}
                        </div>
                        <div class="container m-0">
                            <div class="mySlides">
                                <div class="numbertext">1 / 5</div>
                                <img src="NewsImages/{{$News->img_1}}" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">2 / 5</div>
                                <img src="NewsImages/{{$News->img_2}}" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">3 / 5</div>
                                <img src="NewsImages/{{$News->img_3}}" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">4 / 5</div>
                                <img src="NewsImages/{{$News->img_4}}" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">5 / 5</div>
                                <img src="NewsImages/{{$News->img_4}}" style="width:100%">
                            </div>



                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>

                            <div class="caption-container">
                                <h2>{{$News->title}}</h2>
                            </div>

                            <div class="row">
                                <div class="column">
                                    <img class="demo cursor" src="NewsImages/{{$News->img_1}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="NewsImages/{{$News->img_2}}" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="NewsImages/{{$News->img_3}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="NewsImages/{{$News->img_4}}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="NewsImages/{{$News->img_5}}" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                                </div>

                            </div>
                        </div>
{{--                        <img class="img-fluid w-50 float-right mr-4 mb-2" src="NewsImages/{{$News->img_2}}">--}}

                        <h6>{{$News->description}}</h6>

                        <div class="container m-5">

                                 <a href="{{$Fb}}"><img target="_blank" class="img-fluid" src="img/icons8-facebook-48.png"></a>
                                 <a href="{{$Twitter}}"><img class="img-fluid" src="img/icons8-twitter-50.png"></a>
                                 <a href="{{$Telegram}}"><img class="img-fluid" src="img/icons8-telegram-48.png"></a>
                                 <a href="{{$Whatsapp}}"><img class="img-fluid" src="img/icons8-whatsapp-48.png"></a>

                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
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
{{--                                <div class="col-lg-4">--}}
{{--                                    <!-- Social Follow Start -->--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <div class="section-title mb-0">--}}
{{--                                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>--}}
{{--                                        </div>--}}
{{--                                        <div class="bg-white border border-top-0 p-3">--}}
{{--                                            <a href="https://web.facebook.com/ackdmks" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">--}}
{{--                                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>--}}
{{--                                                <span class="font-weight-medium">15,000 Followers</span>--}}
{{--                                            </a>--}}
{{--                                            <a href=https://twitter.com/MtkenyaSDiocese"" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">--}}
{{--                                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>--}}
{{--                                                <span class="font-weight-medium">13,345 Followers</span>--}}
{{--                                            </a>--}}
{{--                                            <a href="https://www.instagram.com/tai_world_wide_ministry/" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">--}}
{{--                                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgb(255,0,166);"></i>--}}
{{--                                                <span class="font-weight-medium">111 Followers</span>--}}
{{--                                            </a>--}}
{{--                                            <a href="https://www.youtube.com/@taiworldwideministry" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">--}}
{{--                                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(255,5,5,0.92);"></i>--}}
{{--                                                <span class="font-weight-medium">111 Followers</span>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <!-- Social Follow End -->--}}

{{--                                        <!-- Newsletter Start -->--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <div class="section-title mb-0">--}}
{{--                                                <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="bg-white text-center border border-top-0 p-3">--}}
{{--                                                <p>Subscribe to Our News Letter</p>--}}
{{--                                                <div class="input-group mb-2" style="width: 100%;">--}}
{{--                                                    <input type="text" class="form-control form-control-lg" placeholder="Your Email">--}}
{{--                                                    <div class="input-group-append">--}}
{{--                                                        <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <small></small>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!-- Newsletter End -->--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>

{{--                        <img class="img-fluid w-50 float-left mr-4 mb-2" src="NewsImages/{{$News->img_1}}">--}}

{{--                        <img class="img-fluid w-50 float-right mr-4 mb-2" src="NewsImages/{{$News->img_2}}">--}}
{{--                        <img class="img-fluid w-50 float-left mr-4 mb-2" src="NewsImages/{{$News->img_1}}">--}}

{{--                    <img class="img-fluid w-50 float-left mr-4 mb-2" src="NewsImages/{{$News->img_1}}">--}}
                </div>
                </div>
                <!-- News Detail End -->

                <!-- Comment List Start -->
                <!-- Comment List End -->

                <!-- Comment Form Start -->
{{--                <div class="mb-3">--}}
{{--                    <div class="section-title mb-0">--}}
{{--                        <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>--}}
{{--                    </div>--}}
{{--                    <div class="bg-white border border-top-0 p-4">--}}
{{--                        <form>--}}
{{--                            <div class="form-row">--}}
{{--                                <div class="col-sm-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="name">Name *</label>--}}
{{--                                        <input type="text" class="form-control" id="name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="email">Email *</label>--}}
{{--                                        <input type="email" class="form-control" id="email">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="website">Website</label>--}}
{{--                                <input type="url" class="form-control" id="website">--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="message">Message *</label>--}}
{{--                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="form-group mb-0">--}}
{{--                                <input type="submit" value="Leave a comment"--}}
{{--                                       class="btn btn-primary font-weight-semi-bold py-2 px-3">--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- Comment Form End -->
            </div>

            <div class="col-lg-4">
                <!-- Social Follow Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                            <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Fans</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                            <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                            <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Connects</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                            <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                            <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Subscribers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                            <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                    </div>
                </div>
                <!-- Social Follow End -->

                <!-- Ads Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                    </div>
                    <div class="bg-white text-center border border-top-0 p-3">
                        <p>No advert at the momment</p>
                  </div>
                </div>
                <!-- Ads End -->

                <!-- Popular News Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <img class="img-fluid" src="img/news-110x110-2.jpg" alt="">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <img class="img-fluid" src="img/news-110x110-3.jpg" alt="">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <img class="img-fluid" src="img/news-110x110-4.jpg" alt="">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                            <img class="img-fluid" src="img/news-110x110-5.jpg" alt="">
                            <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                </div>
                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Popular News End -->

                <!-- Newsletter Start -->
{{--                <div class="mb-3">--}}
{{--                    <div class="section-title mb-0">--}}
{{--                        <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>--}}
{{--                    </div>--}}
{{--                    <div class="bg-white text-center border border-top-0 p-3">--}}
{{--                        <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>--}}
{{--                        <div class="input-group mb-2" style="width: 100%;">--}}
{{--                            <input type="text" class="form-control form-control-lg" placeholder="Your Email">--}}
{{--                            <div class="input-group-append">--}}
{{--                                <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <small>Lorem ipsum dolor sit amet elit</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- Newsletter End -->

                <!-- Tags Start -->
{{--                <div class="mb-3">--}}
{{--                    <div class="section-title mb-0">--}}
{{--                        <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>--}}
{{--                    </div>--}}
{{--                    <div class="bg-white border border-top-0 p-3">--}}
{{--                        <div class="d-flex flex-wrap m-n1">--}}
{{--                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>--}}
{{--                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>--}}
{{--                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>--}}
{{--                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>--}}
{{--                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>--}}
{{--                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>--}}
{{--                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>--}}
{{--                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>--}}
{{--                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>--}}
{{--                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- Tags End -->
            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->


@endsection



