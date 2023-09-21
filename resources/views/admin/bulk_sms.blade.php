@extends('admin_layout.master')
@section('content')
<section class="home-section">
    <div class="text">Bulk Sms</div>

    <?php
    Use Illuminate\Support\Facades\Session;
    ?>
    <html>
    <head>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <style>

            form{

                width: 800px;
                margin: 30px;
                background-color: #e8d2a0;
                border-radius: 30px;
                padding: 20px;
            }

            input[type=text]{
                height: 100px;
                width: 1000px;
            }
            input[type=file]{
                margin: 20px;
                padding: 20px;
            }
            button{
                margin-top: 20px;
            }
            h1{
                text-align: center;
            }

        </style>
    </head>
    <body>
    @if(Session::has('user'))
        <form class="col-10" method="post" action="bulk_sms" enctype="multipart/form-data">

            <div class="container">
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>

            <h1>Bulk Sms System</h1>
            @csrf
            <input type="file" required class="form-group" name="file">
            <div class="row">
                <textarea class="form-control m-5" rows="4" cols="7" name="message" placeholder="type your message here......" required="required"></textarea>

            </div>
            <button class="btn btn-danger col-4" type="submit">Send</button>
            @else
                <a href="/admin" class="btn-outline-danger">You are not an admin</a>
            @endif
        </form>

        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    </body>
    </html>

</section>
@endsection
