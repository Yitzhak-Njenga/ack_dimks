@extends('admin_layout.master')
@section('content')
    <section class="home-section">
        <div class="text">Upload Event</div>

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

    </section>
@endsection
