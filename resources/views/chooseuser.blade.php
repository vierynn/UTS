<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biscoffee | Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    
<div class="container bg-dark d-flex flex-column align-items-center p-6" style="height:100vh;">
    <img class="mx-auto" src="{{ asset('images/logo.png') }}" style="width: 14rem;margin-top:75%;" alt="">
    <a href="/user1" class="btn btn-light btn-block mb-2"><b>Gold Level</b></a>
    <a href="/user2" class="btn btn-light btn-block"><b>Green Level</b></a>
</div>

<!-- FOOTER -->
<footer class="footer fixed-bottom p-1" style="background-color: white;">
        <div class="content has-text-centered">
            <p style="font-size: 3vw;">
            <center>© Biscoffee Company, All Rights Reserved.</center>
            </p>
        </div>
    </footer>
</body>
</html>