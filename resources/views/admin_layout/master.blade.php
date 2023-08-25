<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>admin</title>
    <link rel="stylesheet" href="css/admin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/style.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
@yield('content')

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
            <a href="events">
                <i class='bx bx-home-smile' ></i>
                <span class="links_name">Events</span>
            </a>
            <span class="tooltip">Events</span>
        </li>

        <li class="profile">
            <div class="profile-details">

                <div class="name_job">
                    <div class="name">User</div>
                    <div class="job">Log out</div>
                </div>
            </div>
            <i class='bx bx-log-out' id="log_out" ></i>
        </li>
    </ul>
</div>

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
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>
</html>
