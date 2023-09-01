@extends('admin_layout.master')
@section('content')
<section class="home-section">
    @if(Session::has('user'))

    <div class="text">Dashboard</div>



        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col">
                    <div class="card" style="border-radius: 8px">
                        <h5 class="card-header">News</h5>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"><h6>Total:{{$allnews}}</h6></p>
                            <a style="border-radius: 50px" href="/upload_news" class="btn btn-primary">Visit Page</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="border-radius: 8px">
                        <h5 class="card-header">Events</h5>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"><h6>Total:{{$allevents}}</h6></p>
                            <a style="border-radius: 50px" href="/events" class="btn btn-primary">Visit Page</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="border-radius: 8px">
                        <h5 class="card-header">Adverts</h5>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"><h6>Total:{{$allnews}}</h6></p>
                            <a style="border-radius: 50px" href="/upload_news" class="btn btn-primary">Visit Page</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="border-radius: 8px">
                        <h5 class="card-header">Messages</h5>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"><h6>Total:{{$allmessages}}</h6></p>
                            <a style="border-radius: 50px" href="/upload_news" class="btn btn-primary">Visit Page</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

</section>
@else
    <a href="/admin" class="btn-outline-danger">You are not an admin</a>
@endif


@endsection
