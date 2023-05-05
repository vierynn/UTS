<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biscoffee | Homepage</title>
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
                <br>Mr. Vico Lomar
            </b>
            </p>
            <a class="navbar-item mr-auto">
                <?php
                echo '<a style="color: #C6A961">Gold Level</a>';
                ?>
            </a>
        </div>

        <div class="btn-group btn-group-toggle pb-2" data-toggle="buttons">
            <a class="btn btn-outline-light active" href="/user1">
                <input type="radio" name="options" id="option1" checked> Profile
            </a>
            <a class="btn btn-outline-light" href="/user1/transaction">
                <input type="radio" name="options" id="option2"> Transaction
            </a>
        </div>
    </nav>

    <!-- PROGRESS BAR -->
    <div class="container d-flex justify-content-start flex-column">
        <div class="container d-flex align-items-center mt-3 mx-0 justify-content-start p-0">
            <p class="mb-1 mr-2 align-middle" style="font-size: 5.7vw;"><b>151</b></p>
            <img src="{{ asset('images/star.png') }}" style="width: 5%; height: 5%;" alt="">
        </div>
        <p class="mb-3" style="font-size: 3.5vw;">Star Balance</p>
        <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: {{ $users[0]->star }}%;background-color: #C6A961;" 
            aria-valuenow="{{ $users[0]->star }}" aria-valuemin="0" aria-valuemax="100">
            {{ $users[0]->star }}</div>
        </div>
        <button type="button" class="btn btn-primary btn-sm btn-dark" style="width:19%;font-size: 2.9vw;">Redeem</button>
    </div>

    <!-- BANNER IMG -->
    <div class="container mt-4 mx-auto d-block" style="width: 370px">
        <img src="{{ asset('images/banner.png') }}" class="img-fluid rounded">
    </div>
   
    <!-- CARDS PROMOTION -->
    <div class="container d-flex flex-column mt-4 mb-6">
        <h6 class="mb-3"><b>Promo Information</b></h6>

        <div class="card mx-auto align-items-center mb-2" style="width: 24rem;">
            <img src="{{ asset('images/card1.png') }}" class="card-img" style="width: 120px" alt="...">
            <div class="card-body mx-auto p-3">
                <p class="card-title my-1">Buy 1 Get 1 Coffee</p>
                <p class="card-text mb-1" style="font-size: 3vw;">
                    Looking for a delicious and affordable way to start your day?
                    Look no further than our "Buy 1 Get 1" coffee promotion!
                </p>
            </div>
        </div>

        <div class="card mx-auto align-items-center mb-2" style="width: 24rem;">
            <img src="{{ asset('images/card2.png') }}" class="card-img" style="width: 120px" alt="...">
            <div class="card-body mx-auto p-3">
                <p class="card-title my-1">Tumblers Day</p>
                <p class="card-text mb-1" style="font-size: 3vw;">
                    Celebrate Tumbler Day with us and get your hands on the perfect reusable cup
                    to keep your drinks hot or cold all day long. Don't miss out on the limited time offer!
                </p>
            </div>
        </div>

        <div class="card mx-auto align-items-center mb-3" style="width: 24rem;">
            <img src="{{ asset('images/card3.png') }}" class="card-img" style="width: 120px" alt="...">
            <div class="card-body mx-auto p-3">
                <p class="card-title my-1">30% Off Tumbler Discount</p>
                <p class="card-text mb-1" style="font-size: 3vw;">
                    Thirsty for a great deal? Get 30% off on our tumblers.
                    Hurry, limited time offer only. Order now and enjoy your favorite drinks in style.
                </p>
            </div>
        </div>
    </div>

    <!-- FLOAT BUTTON -->
    <div class="fab-container">
        <a href="/user1/product">
            <button type="button" class="btn btn-lg" style="font-size: 5vw;background-color: #C6A961;">
            <span><b>Coffee</b></span>
            </button>
        </a>
    </div>
    
    <!-- FOOTER -->
    <footer class="footer fixed-bottom p-1" style="background-color: #C6A961;">
        <div class="content has-text-centered">
            <p style="font-size: 3vw;">
            <center>© Biscoffee Company, All Rights Reserved.</center>
            </p>
        </div>
    </footer>

</body>
</html>