<!-- Topbar Start -->
<div class="container-fluid d-none d-lg-block">
    <div class="row align-items-center bg-dark px-lg-5">
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-sm bg-dark p-0">
                <ul class="navbar-nav ml-n2">
                    <li class="nav-item border-right border-secondary">
                        <a class="nav-link text-body small" href="#"><p id="time"></p></a>
                    </li>
                    <li class="nav-item border-right border-secondary">
                        <a class="nav-link text-body small" href="#">Advertise</a>
                    </li>
                    <li class="nav-item border-right border-secondary">
                        <a class="nav-link text-body small" href="#">Contact</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-body small" href="#">Login</a>
                    </li> -->
                </ul>
            </nav>
        </div>
        <div class="col-lg-3 text-right d-none d-md-block">
            <nav class="navbar navbar-expand-sm bg-dark p-0">
                <ul class="navbar-nav ml-auto mr-n2">
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-twitter"></small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-facebook-f"></small></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-instagram"></small></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-body" href="#"><small class="fab fa-youtube"></small></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- <div class="row align-items-center bg-white py-3 px-lg-5">
        <div class="col-lg-4">
            <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                 <h1 class="m-0 display-4 text-uppercase text-primary">ACK<span class="text-secondary font-weight-normal">DMKS</span></h1> -->
    </a>
</div>

</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid p-0">
    <nav id="navbar" class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
        <a href="/" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-4 text-uppercase text-primary">ACK<span
                    class="text-white font-weight-normal">DMKS</span></h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <a href="/"><img width="80px"  height="100px" src="./img/logo.png"></a>
            <div class="navbar-nav mr-auto py-0">
                <a href="/"><h6  class="m-1 text-white link-dark">ACK DIOCESE OF<br> MT KENYA SOUTH</h6></a>


                <a href="/" class="nav-link nav-item {{ '/' ==request()->path() ? 'active' : '' }}">Home</a>
{{--                <a href="/about" class="nav-item nav-link {{ 'about' ==request()->path()? 'active' : '' }}">About Us</a>--}}
                <!-- <a href="#" class="nav-item nav-link">Single News</a> -->
               <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="/about" class="dropdown-item  {{ 'about' ==request()->path()? 'active' : '' }}">History</a>
                        <a href="/mission" class="dropdown-item {{ 'mission' ==request()->path()? 'active' : '' }}">Mission</a>
                        <a href="/bishops" class="dropdown-item {{ 'bishops' ==request()->path()? 'active' : '' }}">Bishops</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Department</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="/kama" class="dropdown-item  {{ 'kama' ==request()->path()? 'active' : '' }}">KAMA</a>
                        <a href="/mothers_union" class="dropdown-item {{ 'mothers_union' ==request()->path()? 'active' : '' }}">Mother's Union</a>
                        <a href="/choir" class="dropdown-item {{ 'choir' ==request()->path()? 'active' : '' }}">Choir</a>
                        <a href="/children_teens_youth" class="dropdown-item {{ 'children_teens_youth' ==request()->path()? 'active' : '' }}">Children Teens & Youth</a>
                        <a href="/dac" class="dropdown-item {{ 'dac' ==request()->path()? 'active' : '' }}">Differently Abled Christians</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="/about" class="dropdown-item  {{ 'about' ==request()->path()? 'active' : '' }}">History</a>
                        <a href="/mission" class="dropdown-item {{ 'mission' ==request()->path()? 'active' : '' }}">Mission</a>
                        <a href="/bishops" class="dropdown-item {{ 'bishops' ==request()->path()? 'active' : '' }}">Bishops</a>
                    </div>
                </div>
                <a href="/all_news" class="nav-item nav-link {{ 'all_news' ==request()->path()? 'active' : '' }}">News</a>
                <a href="/support" class="nav-item nav-link {{ 'support' ==request()->path()? 'active' : '' }}"> Support</a>
                <a href="/all_Events" class="nav-item nav-link {{ 'all_Events' ==request()->path()? 'active' : '' }}"> Events</a>
                <a href="/contact" class="nav-item nav-link {{ 'contact' ==request()->path()? 'active' : '' }}">Contact Us</a>

            </div>
            <!-- <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                <input type="text" class="form-control border-0" placeholder="Keyword">
                <div class="input-group-append">
                    <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                            class="fa fa-search"></i></button>
                </div>
            </div> -->
        </div>
    </nav>
</div>


<!-- Navbar End -->

