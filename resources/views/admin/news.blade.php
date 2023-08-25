@extends('admin_layout.master')
@section('content')
<section class="home-section">
    <div class="text">Upload News</div>

<div class="container">
    <form method="post" enctype="multipart/form-data" action="/upload_news">
        @csrf
        <div class="form-group">

            <label for="exampleFormControlInput1">News Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
                <label for="exampleFormControlFile1">Images</label>
                <input type="file"  name="images[]" multiple class="form-control-file" id="upload_news">

        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>
</div>

</section>
@endsection

@section('js')
<!-- upload limited number of images -->
<script>

    let inputFile = document.getElementById("upload_news");

    al
    inputFile.addEventListener("change", function (e) {
        let files = e.target.files;

        alert(files);
        // less than 4 image files
        if(files.length < 5){
            alert("You can only upload 4 files!");
            inputFile.value = null;
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'You can only upload 4 files!',
            });
            window.reload();
            return;
        }
        if (files.length > 5){
            alert("You can only upload 4 files!");
            inputFile.value = null;
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'You cannot upload more than 4 image files!',
            });
            return;
        }

    });
</script>
@endsection
