@extends('admin_layout.master')
@section('content')
    <section class="home-section">
            @if(Session::has('user'))

                <div class="text">Events</div>

            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col">

                    </div>
                    <div class="col">

                    </div>
                    <div class="col">

                        <!-- Button trigger modal -->
                        <button class="btn btn-primary" id="myBtn">Add Event</button>
                    </div>
                </div>
            </div>

            <div class="container">
                @foreach($event as $events)
                    <hr>
                    <div class="row col-lg">
                        <div class="col">
                            <img class="image-trending img-fluid" width="100px" height="100px" src="poster/{{$events->poster}}">

                            </a>
                        </div>
                        <div class="col">
                            <h5>{{$events->title}}</h5>
                        </div>
                        <div class="col col-lg">
                                                <h6>{{$events->date}}</h6>
                        </div>
                        <div class="col">

                        </div>
                        <div class="col">
                            <a href="/delete_event/{{$events->id}}" class="btn btn-danger">Delete</a>
                        </div>

                    </div>
                    <hr>
            </div>

            @endforeach
            <!-- The Modal -->
            <div class="container">
                <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content"  style="background-color: wheat; border-radius: 8px">
                        <div class="container text-center">
                            <div class="row align-items-center">
                                <div class="col">

                                </div>
                                <div class="col">
                                    <div class="text">Upload News</div>
                                </div>
                                <div class="col">

                                    <span class="close align-content-lg-end text">&times;</span>
                                </div>
                            </div>
                        </div>
                    <div class="container">
                        <form method="post" enctype="multipart/form-data" action="/uploadEvent">
                            @csrf
                            <div class="form-group">

                                <label for="exampleFormControlInput1">Event Title</label>
                                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Date</label>
                                <input type="date" name="date" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Event Poster</label>
                                <input type="file"  name="poster" class="form-control-file">

                            </div>
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
            </div>

        @else
            <a href="/admin" class="btn-outline-danger">You are not an admin</a>
        @endif

    </section>
@endsection
