@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<html>
<head>
    <title>ACK DMKS-FORM</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ANGLICAN CHURCH OF KENYA" name="keywords">
    <meta content="Diocese Of Mount Kenya South" name="description">
    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<section class="home-section">
    <div class="text">
        <h6>Kindly fill in this form</h6>
    </div>
</section>

        <div class="container">

                <form method="post" style="margin-top: 10px; border-radius: 8px" class="bg-light p-2" enctype="multipart/form-data" action="dmks/churches">
                    @csrf
                    <div class="form-group">

                        <input type="text" name="name" required class="form-control" id="exampleFormControlInput1" placeholder="Parish Name">
                    </div>
                    <div class="form-group">

                        <input type="text" name="deanery" required class="form-control" id="exampleFormControlInput1" placeholder="Deanary">
                    </div>
                    <div class="form-group">
                        <select class="btn btn-primary col-8 m-2" required  name="archdeconary">
                            <option class="bg-white" selected value="">Select Archdeconary</option>
                            <option class="bg-white" value="Kabete">Kabete</option>
                            <option class="bg-white" value="Kiarangari">Kiarangari</option>
                            <option class="bg-white" value="Cathedra">Cathedral</option>
                            <option class="bg-white" value="Kiambaa">Kiambaa</option>
                            <option class="bg-white" value="Thindigua">Thindigua</option>
                            <option class="bg-white" value="Karura">Karura</option>
                            <option class="bg-white" value="Sigona">Sigona</option>
                            <option class="bg-white" value="Uthiru">Uthiru</option>
                            <option class="bg-white" value="Ngong">Ngong</option>
                            <option class="bg-white" value="Kiserian">Kiserian</option>
                            <option class="bg-white" value="Riruta">Riruta</option>
                            <option class="bg-white" value="Kiriita">Kiriita</option>
                            <option class="bg-white" value="Riruta">Riruta</option>
                            <option class="bg-white" value="Limuru">Limuru</option>
                        </select>



                    <div class="form-group">
                        <textarea class="form-control" rows="4" cols="7" name="bio" placeholder="Church bio" required></textarea>

                    </div>
                    <div class="form-group">
                        <label>Church Photo</label>
                        <input type="file"  name="photo" accept="image/*" placeholder="Church Photo" required class="form-control-file">

                    </div>

                    <div class="form-group">
                        <input type="url"  name="location" required placeholder="Google Pin Location Link" class="form-control">

                    </div>
                    <div class="form-group">
                        <input type="url"  name="facebook" required placeholder="Facebook Link" class="form-control">

                    </div>

                    <div class="form-group">
                        <input type="url"  name="youtube" required placeholder="Youtube Link" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="url"  name="website" placeholder="Church Website Link"  class="form-control">
                    </div>

                    <br>
                    <br>
                    <div class="form-group">
                        <input type="name"  name="uploaded_by" placeholder="Uploaded By" required class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="name"  name="contact" required placeholder="Phone Number" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary col-12">Submit</button>
                    </div>
                </form>



        </div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>
</html>


