<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Login Page | CodingNepal</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<nav>
    <a href="/"><img  style="width: 100px;height: 80px;" src="img/logo.png" alt="logo"></a>
</nav>
<div class="form-wrapper">
    <h2>Login</h2>
    <form action="login" method="post">
        <div class="form-control">
            @csrf
            <input type="text" name="email" required>
            <label>Email or phone number</label>
        </div>
        <div class="form-control">
            <input name="password" id="myInput" type="password" required>
            <label>Password</label>
        </div>
        <button type="submit">Sign In</button>
        <div class="form-help">
            <div class="remember-me">
                <input type="checkbox" onclick="myFunction()">
                <label for="remember-me">Show Password</label>
            </div>

        </div>
    </form>

</div>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
</html>
