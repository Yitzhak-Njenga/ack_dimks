@extends('admin_layout.master')
@section('content')
<section class="home-section">
    @if(Session::has('user'))

        <div class="text">News</div>

        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">

                </div>
                <div class="col">
{{--                    <form>--}}
{{--                            <label for="inputPassword2" class="visually-hidden">Password</label>--}}
{{--                            <input width="100px" type="text" class="form-control" id="inputPassword2" placeholder="">--}}
{{--                            <button type="submit" class="btn btn-primary mb-sm-0">Search</button>--}}
{{--                    </form>--}}
                </div>
                <div class="col">

                    <!-- Button trigger modal -->
                    <button class="btn btn-primary" id="myBtn">Add News</button>
                </div>
            </div>
        </div>




<div class="container">
    @foreach($new as $news)
            <hr>
            <div class="row col-lg">
                <div class="col">
                    <img class="image-trending img-fluid" width="100px" height="100px" src="NewsImages/{{$news->img_1}}">

                    </a>
                </div>
                <div class="col">
                    <h5>{{$news->title}}</h5>
                </div>
                <div class="col col-lg">
{{--                    <h6>{{$news->description}}</h6>--}}
                </div>
                <div class="col">
{{--                                        <h5>{{$news->}}</h5>--}}
                </div>
                <div class="col">
                    <a href="/delete_news/{{$news->id}}" class="btn btn-danger">Delete</a>
                </div>

            </div>
        <hr>
        </div>

    @endforeach








        <!-- The Modal -->
        <div class="container">
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content"  style="background-color: wheat;">

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
            <div>
                <form method="post" enctype="multipart/form-data" action="upload">
                    @csrf
                    <div class="form-group">

                        <label for="exampleFormControlInput1">News Title</label>
                        <input type="text" required name="title" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Images</label>
                        <input type="file" required  name="img_1"  class="form-control-file" accept="image/*" id="upload_news">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Images</label>
                        <input type="file" required name="img_2" multiple class="form-control-file" accept="image/*" id="upload_news">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Images</label>
                        <input type="file" required name="img_3"  class="form-control-file" accept="image/*" id="upload_news">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Images</label>
                        <input type="file"  required name="img_4"  class="form-control-file" accept="image/*" id="upload_news">

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Images</label>
                        <input type="file"  required name="img_5" class="form-control-file" accept="image/*" id="upload_news">

                    </div>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </form>
            </div>

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
