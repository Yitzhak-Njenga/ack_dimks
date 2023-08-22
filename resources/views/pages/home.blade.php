@extends('layout.main')
@section('content')
<!-- Main News Slider Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7 px-0">
            <div class="owl-carousel main-carousel position-relative">
                <div class="position-relative overflow-hidden" style="height: 500px;">
                    <img class="img-fluid h-100" src="./img/bishiop_vist_statehouse.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                               href="">Read more</a>
                            <a class="text-white" href="">June 29, 2023</a>
                        </div>
                        <a class="h4 text-white" href="">The Sixth Mt. Kenya South Rt. Rev'd Canon Charles Muturi,
                            the Prelate (Chaplain) of St. John Ambulance in Kenya was a Chief Guest during the
                            Priory's 93rd Annual Inspection Parade at State House Nairobi..</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 500px;">
                    <img class="img-fluid h-100" src="./img/needychristiansjpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                               href="">Read more</a>
                            <a class="text-white" href="">June 19, 2023</a>
                        </div>
                        <a class="h4 text-white" href="">Needy Christians of ACK Emmanuel Kikuyu were delighted when
                            The Sixth Mt. Kenya South Rt. Rev'd Canon Charles Muturi visited their homes during the
                            pacesetting Bishop Mashinani/Bishop Kwa Ground Initiative</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 500px;">
                    <img class="img-fluid h-100" src="./img/kama.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                               href="">Read more</a>
                            <a class="text-white" href="">Jun 17, 2023/a>
                        </div>
                        <a class="h4 text-white" href="">700 NEW KAMA MEMBERS ENROLLED IN EPIC CEREMONY
                            More than 3,000 people congregated at ACK St. Peter’s Uthiru to mark this year's KAMA
                            Enrolment.</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 px-0">
            <div class="row mx-0">
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="./img/needy.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                   href="">Read more</a>
                                <a class="text-white" href=""><small>Jun 15, 2023</small></a>
                            </div>
                            <a class="h6 m-0 text-white " href="">13 needy families experienced the love of Christ
                                when The Sixth Mt. Kenya South, Rt. Rev'd Canon Charles Muturi visited their
                                homes...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="./img/youth.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                   href="">Read more</a>
                                <a class="text-white" href=""><small>Jun 05, 2023</small></a>
                            </div>
                            <a class="h6 m-0 text-white " href="">Hundreds of youth drawn from various reaches of
                                the Diocese gathered at ACK St. Luke's King'eero for their third Annual Thanksgiving
                                Service....</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100"
                             src="./img/mtaani_kiambu.jpg">
                             style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                   href="">Read more</a>
                                <a class="text-white" href=""><small>Jun 05, 2023</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Residents of
                                Kiambu Town today flocked day three of Bishop Mtaani in their thousands....</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="./img/hike.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                   href="">Read more</a>
                                <a class="text-white" href=""><small>May 21, 2023</small></a>
                            </div>
                            <a class="h6 m-0 text-white" href="">The Diocesan Grand Cathedral took a step closer to
                                actualization after a team of mountaineers scaled Mt. Kilimambogo within the Ol
                                Donyo Sabuk National Park in Machakos County...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main News Slider End -->


{{--<!-- Breaking News Start -->--}}
{{--<div class="container-fluid bg-dark py-3 mb-3">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center bg-dark">--}}
{{--            <div class="col-12">--}}
{{--                <div class="d-flex justify-content-between">--}}
{{--                    <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">--}}
{{--                        Breaking News</div>--}}
{{--                    <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"--}}
{{--                         style="width: calc(100% - 170px); padding-right: 90px;">--}}
{{--                        <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold"--}}
{{--                                                      href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt,--}}
{{--                                sed faucibus nisl sodales</a></div>--}}
{{--                        <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold"--}}
{{--                                                      href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt,--}}
{{--                                sed faucibus nisl sodales</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Breaking News End -->


<!-- Featured News Slider Start -->
{{--<div class="container-fluid pt-5 mb-3">--}}
{{--    <div class="container">--}}
{{--        <div class="section-title">--}}
{{--            <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>--}}
{{--        </div>--}}
{{--        <div class="owl-carousel news-carousel carousel-item-4 position-relative">--}}
{{--            <div class="position-relative overflow-hidden" style="height: 300px;">--}}
{{--                <img class="img-fluid h-100" src="./img/ukisto.jpg" style="object-fit: cover;">--}}
{{--                <div class="overlay">--}}
{{--                    <div class="mb-2">--}}
{{--                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Read--}}
{{--                            more</a>--}}
{{--                        <a class="text-white" href=""><small>May 15 01, 2023</small></a>--}}
{{--                    </div>--}}
{{--                    <a class="h6 m-0 text-white" href="">Ukiristo na Ufanisi sacco...</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="position-relative overflow-hidden" style="height: 300px;">--}}
{{--                <img class="img-fluid h-100"--}}
{{--                     src="https://scontent.fnbo9-1.fna.fbcdn.net/v/t39.30808-6/345297904_745424897066255_6050787998870884362_n.jpg?stp=dst-jpg_s600x600&_nc_cat=105&ccb=1-7&_nc_sid=5cd70e&_nc_eui2=AeFbexFu7yXVv6OCCYCBibXSRcpxP7JHSG1FynE_skdIbSZFwv0lDTZ5fU_1TQkvrXBMRqeQWzQ6qPC0WqyaE9p5&_nc_ohc=LFDPqxYx3HoAX9nKK8E&_nc_pt=5&_nc_zt=23&_nc_ht=scontent.fnbo9-1.fna&oh=00_AfDHeoznuu6tcMmf38C4vUPnvvbjnIijbbcgR5U-LpWcSg&oe=64A48F81"--}}
{{--                     style="object-fit: cover;">--}}
{{--                <div class="overlay">--}}
{{--                    <div class="mb-2">--}}
{{--                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Read--}}
{{--                            more</a>--}}
{{--                        <a class="text-white" href=""><small>May 07, 2023</small></a>--}}
{{--                    </div>--}}
{{--                    <a class="h6 m-0 text-white" href="">H.E. Pst. Dorcas Rigathi Graces 22nd Mother's Mercy Home--}}
{{--                        anniversary in Kianjogu...</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="position-relative overflow-hidden" style="height: 300px;">--}}
{{--                <img class="img-fluid h-100"--}}
{{--                     src="https://scontent.fnbo9-1.fna.fbcdn.net/v/t39.30808-6/344908409_178043871470721_3065194787792512639_n.jpg?stp=dst-jpg_s600x600&_nc_cat=107&ccb=1-7&_nc_sid=5cd70e&_nc_eui2=AeFnCA2Kb78WMa6OCCPDbTcjzemVuLX8_abN6ZW4tfz9piyfJyT-krWR6Dx_G5e07j0Nkek9wqKLJ5YCNLp1oxLf&_nc_ohc=-fJNh00bC0EAX94s5tR&_nc_pt=5&_nc_zt=23&_nc_ht=scontent.fnbo9-1.fna&oh=00_AfBtCcyjvudei2_HQP0de_EvvtvA0Kz1YgpzAQlgJtrikg&oe=64A3DEBC"--}}
{{--                     style="object-fit: cover;">--}}
{{--                <div class="overlay">--}}
{{--                    <div class="mb-2">--}}
{{--                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Read--}}
{{--                            more</a>--}}
{{--                        <a class="text-white" href=""><small>May 04, 2023</small></a>--}}
{{--                    </div>--}}
{{--                    <a class="h6 m-0 text-white" href="">Bishop Muturi, Bishop Asilutwa, and Bishop Onyango took--}}
{{--                        some time off their Peacemaking expedition in West Pokot to visit Kapenguria Museum...</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="position-relative overflow-hidden" style="height: 300px;">--}}
{{--                <img class="img-fluid h-100"--}}
{{--                     src="https://scontent.fnbo9-1.fna.fbcdn.net/v/t39.30808-6/345146420_624350092589858_7512535430874776816_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5cd70e&_nc_eui2=AeEWtJhsrkWCyEUVbAFY2cqrol2R92m3zgiiXZH3abfOCDvIif9bGgJWbriGSRETGAVYxZaEBvg0SzhTjOku1c7z&_nc_ohc=S59588U0JPYAX-nT-LA&_nc_pt=5&_nc_zt=23&_nc_ht=scontent.fnbo9-1.fna&oh=00_AfDXHn9dY39XhH5nlju5mbMG7aJIv5hyZgPk79nblklVwg&oe=64A5538F"--}}
{{--                     style="object-fit: cover;">--}}
{{--                <div class="overlay">--}}
{{--                    <div class="mb-2">--}}
{{--                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"--}}
{{--                           href="">Read</a>--}}
{{--                        <a class="text-white" href=""><small>May 04, 2023</small></a>--}}
{{--                    </div>--}}
{{--                    <a class="h6 m-0 text-white" href="">After 8 hours of nonstop negotiations, the emissaries from--}}
{{--                        the Province succeeded in resolving the conflict that has rocked the Diocese of--}}
{{--                        Kapenguria...</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Featured News Slider End -->

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


<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Events</h4>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
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
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                    </div>
                    <div class="bg-white text-center border border-top-0 p-3">
{{--                        <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>--}}
                        <p>No Advertisement at the moment</p>
                    </div>
                </div>
                <!-- Ads End -->

                <!-- Popular News Start -->
                <div class="mb-12">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Tai World Ministry</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >
{{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
                            <iframe class="img-fluid"
                                    src="https://www.youtube.com/embed/Kz-ljcNHq9A">
                            </iframe>

                        </div>
                        <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >
                            {{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
                            <iframe class="img-fluid"
                                    src="https://www.youtube.com/embed/jXSMcza09Fk">
                            </iframe>

                        </div>
                        <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >
                            {{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
                            <iframe class="img-fluid"
                                    src="https://www.youtube.com/embed/Dk3jS8gPc2c">
                            </iframe>

                        </div>
                        <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >
                            {{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
                            <iframe class="img-fluid"
                                    src="https://www.youtube.com/embed/JS4lMTb7a5E">
                            </iframe>

                        </div>
                        <div class="d-flex align-items-center bg-white mb-3" style=" padding: 5px" >
                            {{--                            <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">--}}
                            <iframe class="img-fluid"
                                    src="https://www.youtube.com/embed/JiAYTB7areM">
                            </iframe>

                        </div>
                    </div>
                </div>
                <!-- Popular News End -->

                <!-- Newsletter Start -->

                <!-- Newsletter End -->

                <!-- Tags Start -->
            <div class="mb-3">
                <div class="section-title mb-6">
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
                </div>
            </div>
                <!-- Tags End -->
            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->
@endsection


