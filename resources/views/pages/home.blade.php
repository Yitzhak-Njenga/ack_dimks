@extends('layout.main')
@section('content')
<!-- Main News Slider Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7 px-0">
            <div class="owl-carousel main-carousel position-relative">
                @foreach($News as $news)
                <div class="position-relative overflow-hidden" style="height: 500px;">

                    <img class="img-fluid h-100" src="NewsImages/{{$news->img_1}}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
{{--                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"--}}
{{--                               href="">Read more</a>--}}
{{--                            <a class="text-white" href="">June 29, 2023</a>--}}
                        </div>
                        <a class="h4 text-white" href="/{{$news['id']}}">{{$news->title}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-5 px-0">
            <div class="row mx-0">
                @foreach($News as $news)
                <div class="col-md-6 px-0">

                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100"src="NewsImages/{{$news->img_2}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                   href="">Read more</a>
                                <a class="text-white" href=""><small>Jun 15, 2023</small></a>
                            </div>
                            <a class="h6 m-0 text-white " href="read/news/{id}">{{$news->tilte}}</a>
                        </div>
                    </div>

                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main News Slider End -->


<!-- Breaking News Start -->
<div class="container-fluid bg-dark py-3 mb-3">
    <div class="container">
        <div class="row align-items-center bg-dark">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">
                        Latest News</div>
                    <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                         style="width: calc(100% - 170px); padding-right: 90px;">
                        @foreach($News as $news)
                        <div class="text-truncate"><a class="text-white text-capitalize"
                                                      href="">{{$news->title}}</a></div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breaking News End -->




<!-- About Us -->
<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="section-title">
            <h4 class="m-0 text-uppercase font-weight-bold">About Us</h4>
        </div>

        <p class="text-dark">This Diocese was formed out of the subdivision of the Diocese of Mount Kenya in 1975, with its headquarters in Kiambu. The Rt. Rev. Obadiah Kariuki was its first Bishop. He retired in 1976 and was succeeded by the Rt. Rev. Sospeter Magua, who was consecrated on 31 October 1976. The Rt. Rev. Eshbon Ngaruiya moved with Bishop Kariuki to remain his Assistant Bishop and continued to serve in this capacity under Bishop Magua.
        </p>
        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
           href="/about">Read more</a>
    </div>
</div>
<!-- About Us -->
{{--meet bishop--}}
<div class="container bg-light">
<div class=" section row justify-content-center m-4">
    <div class="col-4">
        <img class="" src="img/The-Rt.-Rev.-Charles-M.-Muturi-web.jpg">
    </div>
    <div class="col-4">
        <button class="btn btn-primary m-5">Meet Bishop</button>
    </div>
</div>
</div>

<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Events</h4>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="/all_Events">View All</a>
                        </div>
                    </div>

                    No Events
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="position-relative mb-3">--}}
{{--                            <img class="img-fluid w-100" src="img/news-700x435-1.jpg" style="object-fit: cover;">--}}
{{--                            <div class="bg-white border border-top-0 p-4">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"--}}
{{--                                       href="">Read more...</a>--}}
{{--                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>--}}
{{--                                </div>--}}
{{--                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"--}}
{{--                                   href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                                <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna--}}
{{--                                    rebum clita rebum dolor stet amet justo</p>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25"--}}
{{--                                         alt="">--}}
{{--                                    <small>John Doe</small>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>--}}
{{--                                    <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="position-relative mb-3">--}}
{{--                            <img class="img-fluid w-100" src="img/news-700x435-2.jpg" style="object-fit: cover;">--}}
{{--                            <div class="bg-white border border-top-0 p-4">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"--}}
{{--                                       href="">Read more...</a>--}}
{{--                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>--}}
{{--                                </div>--}}
{{--                                <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"--}}
{{--                                   href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                                <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna--}}
{{--                                    rebum clita rebum dolor stet amet justo</p>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25"--}}
{{--                                         alt="">--}}
{{--                                    <small>John Doe</small>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>--}}
{{--                                    <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-12 mb-3">--}}
{{--                        <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="position-relative mb-3">--}}
{{--                            <img class="img-fluid w-100" src="img/news-700x435-3.jpg" style="object-fit: cover;">--}}
{{--                            <div class="bg-white border border-top-0 p-4">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"--}}
{{--                                       href="">Read more...</a>--}}
{{--                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>--}}
{{--                                </div>--}}
{{--                                <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold"--}}
{{--                                   href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25"--}}
{{--                                         alt="">--}}
{{--                                    <small>John Doe</small>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>--}}
{{--                                    <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="position-relative mb-3">--}}
{{--                            <img class="img-fluid w-100" src="img/news-700x435-4.jpg" style="object-fit: cover;">--}}
{{--                            <div class="bg-white border border-top-0 p-4">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"--}}
{{--                                       href="">Read more...</a>--}}
{{--                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>--}}
{{--                                </div>--}}
{{--                                <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold"--}}
{{--                                   href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25"--}}
{{--                                         alt="">--}}
{{--                                    <small>John Doe</small>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>--}}
{{--                                    <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
{{--                            <div--}}
{{--                                class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"--}}
{{--                                       href="">Read more...</a>--}}
{{--                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>--}}
{{--                                </div>--}}
{{--                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum--}}
{{--                                    dolor sit amet elit...</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                            <img class="img-fluid" src="img/news-110x110-2.jpg" alt="">--}}
{{--                            <div--}}
{{--                                class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"--}}
{{--                                       href="">Read more...</a>--}}
{{--                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>--}}
{{--                                </div>--}}
{{--                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum--}}
{{--                                    dolor sit amet elit...</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                            <img class="img-fluid" src="img/news-110x110-3.jpg" alt="">--}}
{{--                            <div--}}
{{--                                class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"--}}
{{--                                       href="">Read more...</a>--}}
{{--                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>--}}
{{--                                </div>--}}
{{--                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum--}}
{{--                                    dolor sit amet elit...</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                            <img class="img-fluid" src="img/news-110x110-4.jpg" alt="">--}}
{{--                            <div--}}
{{--                                class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"--}}
{{--                                       href="">Read more...</a>--}}
{{--                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>--}}
{{--                                </div>--}}
{{--                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum--}}
{{--                                    dolor sit amet elit...</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-12 mb-3">--}}
{{--                        <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="row news-lg mx-0 mb-3">--}}
{{--                            <div class="col-md-6 h-100 px-0">--}}
{{--                                <img class="img-fluid h-100" src="img/news-700x435-5.jpg"--}}
{{--                                     style="object-fit: cover;">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">--}}
{{--                                <div class="mt-auto p-4">--}}
{{--                                    <div class="mb-2">--}}
{{--                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"--}}
{{--                                           href="">Read more...</a>--}}
{{--                                        <a class="text-body" href=""><small>Jan 01, 2023</small></a>--}}
{{--                                    </div>--}}
{{--                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"--}}
{{--                                       href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                                    <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna--}}
{{--                                        rebum clita rebum dolor stet amet justo</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25" height="25"--}}
{{--                                             alt="">--}}
{{--                                        <small>John Doe</small>--}}
{{--                                    </div>--}}
{{--                                    <div class="d-flex align-items-center">--}}
{{--                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>--}}
{{--                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
{{--                            <div--}}
{{--                                class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"--}}
{{--                                       href="">Read more...</a>--}}
{{--                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>--}}
{{--                                </div>--}}
{{--                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum--}}
{{--                                    dolor sit amet elit...</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                            <img class="img-fluid" src="img/news-110x110-2.jpg" alt="">--}}
{{--                            <div--}}
{{--                                class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"--}}
{{--                                       href="">Read more...</a>--}}
{{--                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>--}}
{{--                                </div>--}}
{{--                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum--}}
{{--                                    dolor sit amet elit...</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                            <img class="img-fluid" src="img/news-110x110-3.jpg" alt="">--}}
{{--                            <div--}}
{{--                                class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"--}}
{{--                                       href="">Read more...</a>--}}
{{--                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>--}}
{{--                                </div>--}}
{{--                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum--}}
{{--                                    dolor sit amet elit...</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                            <img class="img-fluid" src="img/news-110x110-4.jpg" alt="">--}}
{{--                            <div--}}
{{--                                class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                <div class="mb-2">--}}
{{--                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"--}}
{{--                                       href="">Read more...</a>--}}
{{--                                    <a class="text-body" href=""><small>Jan 01, 2023</small></a>--}}
{{--                                </div>--}}
{{--                                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum--}}
{{--                                    dolor sit amet elit...</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>

            <div class="container">
                <div class="section-title">
                    <h4 class="m-0 text-uppercase font-weight-bold">THE ENLIGHTENMENT- MONTH OF OWNING THE CALL TO SHEPHERD GOD'S FLOCK</h4>
                </div>

                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/OITkhCUKfZI?autoplay=1&mute=1">
                </iframe>
            </div>

{{--            <div class="col-lg-4">--}}
{{--                <!-- Social Follow Start -->--}}
{{--                <div class="mb-3">--}}
{{--                    <div class="section-title mb-0">--}}
{{--                        <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>--}}
{{--                    </div>--}}
{{--                    <div class="bg-white border border-top-0 p-3">--}}
{{--                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3"--}}
{{--                           style="background: #39569E;">--}}
{{--                            <i class="fab fa-facebook-f text-center py-4 mr-3"--}}
{{--                               style="width: 65px; background: rgba(0, 0, 0, .2);"></i>--}}
{{--                            <span class="font-weight-medium">12,345 Fans</span>--}}
{{--                        </a>--}}
{{--                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3"--}}
{{--                           style="background: #52AAF4;">--}}
{{--                            <i class="fab fa-twitter text-center py-4 mr-3"--}}
{{--                               style="width: 65px; background: rgba(0, 0, 0, .2);"></i>--}}
{{--                            <span class="font-weight-medium">12,345 Followers</span>--}}
{{--                        </a>--}}
{{--                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3"--}}
{{--                           style="background: #0185AE;">--}}
{{--                            <i class="fab fa-linkedin-in text-center py-4 mr-3"--}}
{{--                               style="width: 65px; background: rgba(0, 0, 0, .2);"></i>--}}
{{--                            <span class="font-weight-medium">12,345 Connects</span>--}}
{{--                        </a>--}}
{{--                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3"--}}
{{--                           style="background: #C8359D;">--}}
{{--                            <i class="fab fa-instagram text-center py-4 mr-3"--}}
{{--                               style="width: 65px; background: rgba(0, 0, 0, .2);"></i>--}}
{{--                            <span class="font-weight-medium">12,345 Followers</span>--}}
{{--                        </a>--}}
{{--                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3"--}}
{{--                           style="background: #DC472E;">--}}
{{--                            <i class="fab fa-youtube text-center py-4 mr-3"--}}
{{--                               style="width: 65px; background: rgba(0, 0, 0, .2);"></i>--}}
{{--                            <span class="font-weight-medium">12,345 Subscribers</span>--}}
{{--                        </a>--}}
{{--                        <a href="" class="d-block w-100 text-white text-decoration-none"--}}
{{--                           style="background: #055570;">--}}
{{--                            <i class="fab fa-vimeo-v text-center py-4 mr-3"--}}
{{--                               style="width: 65px; background: rgba(0, 0, 0, .2);"></i>--}}
{{--                            <span class="font-weight-medium">12,345 Followers</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- Social Follow End -->

                <!-- Ads Start -->

{{--            <div class="container">--}}
{{--                <div class="row align-items-end">--}}
{{--                    <div class="col">--}}
{{--                        <div class="section-title mb-0">--}}
{{--                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>--}}
{{--                            <p>No Advertisement at the moment</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col">--}}

{{--                    </div>--}}
{{--                    <div class="col">--}}
{{--                        <div class="bg-white text-center border border-top-0 p-3">--}}

{{--                                <div class="section-title mb-0">--}}
{{--                                    <h4 class="m-0 text-uppercase font-weight-bold">Tai World Ministry</h4>--}}
{{--                                </div>--}}
{{--                                <div class="bg-white border border-top-0 p-3">--}}
{{--                                    <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >--}}
{{--                                        --}}{{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
{{--                                        <iframe class="img-fluid"--}}
{{--                                                src="https://www.youtube.com/embed/Kz-ljcNHq9A">--}}
{{--                                        </iframe>--}}

{{--                                    </div>--}}
{{--                                    <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >--}}
{{--                                        --}}{{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
{{--                                        <iframe class="img-fluid"--}}
{{--                                                src="https://www.youtube.com/embed/jXSMcza09Fk">--}}
{{--                                        </iframe>--}}

{{--                                    </div>--}}
{{--                                    <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >--}}
{{--                                        --}}{{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
{{--                                        <iframe class="img-fluid"--}}
{{--                                                src="https://www.youtube.com/embed/Dk3jS8gPc2c">--}}
{{--                                        </iframe>--}}

{{--                                    </div>--}}
{{--                                    <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >--}}
{{--                                        --}}{{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
{{--                                        <iframe class="img-fluid"--}}
{{--                                                src="https://www.youtube.com/embed/JS4lMTb7a5E">--}}
{{--                                        </iframe>--}}

{{--                                    </div>--}}
{{--                                    <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >--}}
{{--                                        --}}{{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
{{--                                        <iframe class="img-fluid"--}}
{{--                                                src="https://www.youtube.com/embed/JiAYTB7areM">--}}
{{--                                        </iframe>--}}
{{--                                        --}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- Popular News End -->--}}
{{--                            --}}{{--                        <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--                <div class="col-4">--}}
{{--                    <div class="section-title mb-0">--}}
{{--                        <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>--}}
{{--                    </div>--}}
{{--                    <div class="bg-white text-center border border-top-0 p-3">--}}
{{--                        <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>--}}
{{--                        <p>No Advertisement at the moment</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Ads End -->--}}

{{--                <!-- Popular News Start -->--}}
{{--                <div class="mb-12">--}}
{{--                    <div class="section-title mb-0">--}}
{{--                        <h4 class="m-0 text-uppercase font-weight-bold">Tai World Ministry</h4>--}}
{{--                    </div>--}}
{{--                    <div class="bg-white border border-top-0 p-3">--}}
{{--                        <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >--}}
{{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
{{--                            <iframe class="img-fluid"--}}
{{--                                    src="https://www.youtube.com/embed/Kz-ljcNHq9A">--}}
{{--                            </iframe>--}}

{{--                        </div>--}}
{{--                        <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >--}}
{{--                            --}}{{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
{{--                            <iframe class="img-fluid"--}}
{{--                                    src="https://www.youtube.com/embed/jXSMcza09Fk">--}}
{{--                            </iframe>--}}

{{--                        </div>--}}
{{--                        <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >--}}
{{--                            --}}{{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
{{--                            <iframe class="img-fluid"--}}
{{--                                    src="https://www.youtube.com/embed/Dk3jS8gPc2c">--}}
{{--                            </iframe>--}}

{{--                        </div>--}}
{{--                        <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >--}}
{{--                            --}}{{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
{{--                            <iframe class="img-fluid"--}}
{{--                                    src="https://www.youtube.com/embed/JS4lMTb7a5E">--}}
{{--                            </iframe>--}}

{{--                        </div>--}}
{{--                        <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >--}}
{{--                            --}}{{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
{{--                            <iframe class="img-fluid"--}}
{{--                                    src="https://www.youtube.com/embed/JiAYTB7areM">--}}
{{--                            </iframe>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Popular News End -->--}}

{{--            <!-- Featured News Slider Start -->--}}
{{--            <div class="container-fluid pt-5 mb-3">--}}
{{--                <div class="container">--}}
{{--                    <div class="section-title">--}}
{{--                        <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>--}}
{{--                    </div>--}}

{{--                    <div class="owl-carousel news-carousel carousel-item-4 position-relative">--}}
{{--                        @foreach($News as $news)--}}
{{--                            <div class="position-relative overflow-hidden" style="height: 300px;">--}}
{{--                                <img class="img-fluid h-100" src="NewsImages/{{$news->img_3}}" style="object-fit: cover;">--}}
{{--                                <div class="overlay">--}}
{{--                                    <div class="mb-2">--}}

{{--                                        --}}{{--                        <a class="text-white" href=""><small>May 15 01, 2023</small></a>--}}
{{--                                    </div>--}}
{{--                                    <a class="h6 m-0 text-white" href="">{{$news->title}}</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Featured News Slider End -->--}}

{{--                <!-- Newsletter Start -->--}}

{{--                <!-- Newsletter End -->--}}

{{--                <!-- Tags Start -->--}}
{{--            <div class="mb-3">--}}
{{--                <div class="section-title mb-6">--}}
{{--                    <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>--}}
{{--                </div>--}}
{{--                <div class="bg-white text-center border border-top-0 p-3">--}}
{{--                    <p>Subscribe to Our News Letter</p>--}}
{{--                    <div class="input-group mb-2" style="width: 100%;">--}}
{{--                        <input type="text" class="form-control form-control-lg" placeholder="Your Email">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--                <!-- Tags End -->--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
<!-- News With Sidebar End -->
@endsection


