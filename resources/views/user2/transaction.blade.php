<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biscoffee | Transaction</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark bg-dark d-flex justify-content-center p-2 sticky-top">
        <a class="navbar-brand mr-auto ml-2 my-0" href="#">
            <img src="{{ asset('images/logo.png') }}" style="width: 4rem;" alt="">
        </a>
        <div class="container d-flex align-items-center px-2">
            <p class="navbar-item my-2 text-light">
            <b>
                <?php 
                    $dat = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
                    $date=$dat->format('H');
                    if($date < 12) 
                    echo "Good morning,"; 
                    else if($date < 17) 
                    echo "Good afternoon,";
                    else if($date<20)
                    echo "Good evening,"; 
                    else 
                    echo "Good night,"; 
                ?>
                <br>Ms. Fei Fei Li
            </b>
            </p>
            <a class="navbar-item mr-auto">
                <?php
                echo '<a style="color: #006F42">Green Level</a>';
                ?>
            </a>
        </div>

        <div class="btn-group btn-group-toggle pb-2" data-toggle="buttons">
            <a class="btn btn-outline-light" href="/user2">
                <input type="radio" name="options" id="option1" checked> Profile
            </a>
            <a class="btn btn-outline-light active" href="/user2/transaction">
                <input type="radio" name="options" id="option2"> Transaction
            </a>
        </div>
    </nav>

    <h5 class="px-2 mt-4"><b>Transaction History</b></h5>
    <hr class="hr mt-0" />

    <div class="list-group mt-4 mb-6 px-3">
        @foreach ($transactions->reverse() as $tr)
            @if ($tr->user_id == 2)
            <div class="list-group-item w-100 mx-auto align-items-start mb-3">
                <p class="card-title my-1">{{ $tr['name'] }}</p>
                <p class="card-subtitle my-1">{{ $tr['date'] }}</p>
                <p class="card-body my-1 p-0">Total Price: Rp. {{ $tr['price'] }}</p>
                <p class="card-body my-1 p-0" style="color:green;">Order Completed, +2 Point!</p>
            </div>
            @endif
        @endforeach
    </div>

    <!-- FLOAT BUTTON -->
    <div class="fab-container">
        <a href="/user2/product">
            <button type="button" class="btn btn-lg" style="font-size: 5vw;background-color: #006F42;">
            <span><b>Coffee</b></span>
            </button>
        </a>
    </div>
    
    <!-- FOOTER -->
    <footer class="footer fixed-bottom p-1" style="background-color: #006F42;">
        <div class="content has-text-centered">
            <p style="font-size: 3vw;">
            <center>© Biscoffee Company, All Rights Reserved.</center>
            </p>
        </div>
    </footer>

</body>
</html>