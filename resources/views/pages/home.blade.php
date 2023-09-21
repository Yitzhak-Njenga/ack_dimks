@extends('layout.main')
@section('content')
<!-- Main News Slider Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7 px-0">
            <div class="owl-carousel main-carousel position-relative">
                @foreach($News as $news)
                <div class="position-relative overflow-hidden" style="height: 500px;">

                    <img class="img-fluid h-100" src="NewsImages/{{$news->img_1}}" style="object-fit: cover; height:400px" >
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
                        <img class="img-fluid w-100 h-00"src="NewsImages/{{$news->img_2}}" style="object-fit: cover;">
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
<div class="container bg-light col-md-9 " >
<div class=" section row justify-content-center m-4">
    <div class="col-8">
        <img class="img-fluid m-2 section-title" width="70%"  src="img/bishop.png">
    </div>

    <div class="col-12">
        <a class="text-black-50 table-hover" href="/meet_bishop"><button class="btn btn-primary m-5"> Meet Bishop</button></a>
    </div>

</div>
</div>

<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Events</h4>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="/all_Events">View All</a>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">

                                <div class="container  text-center">

                                    <div class="row">
                                        @if($events->isNotEmpty())
                                            @foreach($events as $events)
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
                                            <h2>No Upcoming Event at the moment</h2>
                                        @endif
                                    </div>
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


                                <!-- Newsletter Start -->
                                <div class="mb-3">
                                    <div class="section-title mb-0">
                                        <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                                    </div>
                                    <div class="bg-white text-center border border-top-0 p-3">
                                        <div class="input-group mb-2" style="width: 100%;">
                                            <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                                            </div>
                                        </div>
{{--                                        <small></small>--}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="section-title col-12">
                    <h4 class="m-0 text-uppercase font-weight-bold">THE ENLIGHTENMENT- MONTH OF OWNING THE CALL TO SHEPHERD GOD'S FLOCK</h4>
                </div>

                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/OITkhCUKfZI?autoplay=1&mute=1">
                </iframe>
            </div>

            <!-- Featured News Slider Start -->
            <div class="container-fluid pt-5 mb-3">
                <div class="container">
                    <div class="section-title">
                        <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
                    </div>

                    <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                        @foreach($featured_news as $news)
                        <div class="position-relative overflow-hidden" style="height: 300px;">
                            <img class="img-fluid h-100" src="NewsImages/{{$news->img_3}}" style="object-fit: cover;">
                            <div class="overlay">

                                <a class="m-0 text-white" href="/{{$news['id']}}">{{$news->title}}<p style="font-size: 0.5px;">{{$news->title}}</p></a>
                                <div class="mb-2">
                                    <p class="text-white" href=""><small>{{$news->created_at->todatestring()}}</small></p>
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"  href="/{{$news['id']}}">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Featured News Slider End -->

        </div>
</div>
@endsection


