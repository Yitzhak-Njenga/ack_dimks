@extends('layout.main')
@section('content')

    <!-- Breaking News End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="container  text-center">

                        <div class="row">
                            @if($event->isNotEmpty())
                                @foreach($event as $events)
                                    <div class="col-lg-4">
                                        <div class="card" style="margin-top: 20px">
                                            <img  src="poster/{{$events->poster}}" class="img-fluid" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$events->title}}</h5>
                                                <button  class="btn btn-primary">{{$events->date}}</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h2>No Upcoming Event</h2>
                            @endif
                        </div>
                    </div>

                    <span style="margin: 5px">
{{--                    {{$News->links()}}--}}
                </span>


                    <style>
                        .w-5{
                            display: none;
                        }
                    </style>


                    <!-- Comment Form Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">
                            <form>
                                <div class="form-row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Leave a comment"
                                           class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Comment Form End -->
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


                    </div>

                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
{{--                            <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>--}}
                            No adverts at the moment
                        </div>
                    </div>
                    <!-- Ads End -->

                    <!-- Popular News Start -->
{{--                    <div class="mb-3">--}}
{{--                        <div class="section-title mb-0">--}}
{{--                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white border border-top-0 p-3">--}}
{{--                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                                <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
{{--                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                    <div class="mb-2">--}}
{{--                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>--}}
{{--                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>--}}
{{--                                    </div>--}}
{{--                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                                <img class="img-fluid" src="img/news-110x110-2.jpg" alt="">--}}
{{--                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                    <div class="mb-2">--}}
{{--                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>--}}
{{--                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>--}}
{{--                                    </div>--}}
{{--                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                                <img class="img-fluid" src="img/news-110x110-3.jpg" alt="">--}}
{{--                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                    <div class="mb-2">--}}
{{--                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>--}}
{{--                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>--}}
{{--                                    </div>--}}
{{--                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                                <img class="img-fluid" src="img/news-110x110-4.jpg" alt="">--}}
{{--                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                    <div class="mb-2">--}}
{{--                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>--}}
{{--                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>--}}
{{--                                    </div>--}}
{{--                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">--}}
{{--                                <img class="img-fluid" src="img/news-110x110-5.jpg" alt="">--}}
{{--                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">--}}
{{--                                    <div class="mb-2">--}}
{{--                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>--}}
{{--                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>--}}
{{--                                    </div>--}}
{{--                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- Popular News End -->

                    <!-- Newsletter Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
{{--                            <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>--}}
                            <div class="input-group mb-2" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                                </div>
                            </div>
                            <small>Lorem ipsum dolor sit amet elit</small>
                        </div>
                    </div>
                    <!-- Newsletter End -->

                    <!-- Tags Start -->
{{--                    <div class="mb-3">--}}
{{--                        <div class="section-title mb-0">--}}
{{--                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>--}}
{{--                        </div>--}}
{{--                        <div class="bg-white border border-top-0 p-3">--}}
{{--                            <div class="d-flex flex-wrap m-n1">--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>--}}
{{--                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->

@endsection
