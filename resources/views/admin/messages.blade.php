@extends('admin_layout.master')
@section('content')
    <section class="home-section">
        @if(Session::has('user'))

            <div class="text">Messages</div>
            @foreach($message as $messages)
            <div class="container">

                    <hr>
                    <div class="row">
                        <div class="col">

                            <h6>{{$messages->name}}</h6>
                        </div>
                        <div class="col">
                            <h6>{{$messages->email}}</h6>
                        </div>
                        <div class="col">
                            <h6>{{$messages->phone}}</h6>
                        </div>
                        <div class="col">
                            <h6>{{$messages->number}}</h6>
                        </div>
                        <div class="col">
                            <h6>{{$messages->message}}</h6>

                        </div>
                        <div class="col">
                            <h6>{{$messages->created_at}}</h6>
                        </div>
                        <div class="col">
                            <a href="/delete_message/{{$messages->id}}" class="btn btn-danger">Delete</a>
                        </div>

                    </div>
                    <hr>
            </div>

            @endforeach


    @else
        <a href="/admin" class="btn-outline-danger">You are not an admin</a>
    @endif
    </section>
@endsection
