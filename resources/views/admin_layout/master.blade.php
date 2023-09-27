<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>ACK DMKS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ANGLICAN CHURCH OF KENYA" name="keywords">
    <meta content="Diocese Of Mount Kenya South" name="description">
    <link rel="stylesheet" href="css/admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
@yield('content')
@if(Session::has('user'))

<div class="sidebar">
    <div class="logo-details">
        <img src="./img/logo.png" width="20px">
        <div class="logo_name">ACK DMKS</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">

        <li>
            <a href="/dashboard">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="upload_news">
                <i class='bx bx-tv' ></i>
                <span class="links_name">Upload News</span>
            </a>
            <span class="tooltip">Upload News</span>
        </li>
        <li>
            <a href="churches">
                <i class='bx bx-church' ></i>
                <span class="links_name">Churches</span>
            </a>
            <span class="tooltip">Churches</span>
        </li>
        <li>
            <a href="/bulk_sms">
                <i class='bx bx-message-dots' ></i>
                <span class="links_name">Bulk SMS</span>
            </a>
            <span class="tooltip">Bulk SMS</span>
        </li>
        <li>
            <a href="messages">
                <i class='bx bx-folder' ></i>
                <span class="links_name">Messages</span>
            </a>
            <span class="tooltip">Messages</span>
        </li>
        <li>
            <a href="/adverts">
                <i class='bx bx-briefcase' ></i>
                <span class="links_name">Messages</span>
            </a>
            <span class="tooltip">Messages</span>
        </li>
        <li>
            <a href="events">
                <i class='bx bx-home-smile' ></i>
                <span class="links_name">Events</span>
            </a>
            <span class="tooltip">Events</span>
        </li>

        <li class="profile">
            <div class="profile-details">

                <div class="name_job">
                    <div class="name"> Hi, {{Session::get('user')['name']}}</div>
                    <div class="job"><a href="/logout" >Log out<i class='bx bx-log-out' id="log_out" ></i></a></div>
                </div>
            </div>

        </li>
    </ul>
</div>
@else
    <a href="/admin" class="btn-outline-danger">You are not an admin</a>
@endif

<script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
    });

    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
        if(sidebar.classList.contains("open")){
            closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
        }else {
            closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
        }
    }

</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-66ZSLNRVMK"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-66ZSLNRVMK');
</script>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


@include('sweetalert::alert')
</body>
</html>
