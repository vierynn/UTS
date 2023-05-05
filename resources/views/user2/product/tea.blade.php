<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biscoffee | Tea</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
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

        <div class="btn-group btn-group-toggle pb-2">
            <a class="btn btn-outline-light" href="/user2">
                <input type="radio" name="options" id="option1" checked> Profile
            </a>
            <a class="btn btn-outline-light" href="/user2/transaction">
                <input type="radio" name="options" id="option2"> Transaction
            </a>
        </div>
    </nav>

    <!-- NAVBAR COFFEE -->
    <div class="d-flex justify-content-between p-3">
        <a class="btn btn-outline-dark" href="/user2/product/signature">
            Signature
        </a>
        <a class="btn btn-outline-dark" href="/user2/product/basic">
            Basic
        </a>
        <a class="btn btn-outline-dark" href="/user2/product/cream">
            Cream
        </a>
        <a class="btn btn-dark" href="/user2/product/tea">
            Tea
        </a>
    </div>
    
    <hr class="hr mt-0" />

    <!-- PRODUCTS -->
    <div class="row mt-4 mb-6 d-flex justify-content-between px-5">
        @foreach ($products as $pro)
            @if ($pro->category == 'Tea')
            <div class="col-sm-6 p-2" style="width: 10rem;">
                <div class="card mx-auto align-items-center mb-2" style="width: 10rem;">
                    <img src="{{ asset('products/' . $pro->id . '.png') }}" class="card-img" style="width: 155px" alt="...">
                    <div class="card-body p-2 d-flex flex-column align-items-center">
                        <p class="card-title my-1">{{ $pro['name'] }}</p>
                        <p class="card-subtitle my-1">Rp. {{ $pro['price'] }}</p>
                        <button type="button" class="btn btn-dark btn-sm my-1 stretched-link" data-id="{{ $pro->id }}" 
                        data-toggle="modal" data-target="#myModal-{{ $pro->id }}">+ Add</button>
                    </div>
                </div>
            </div>
            @endif

            <!-- MODAL POPUP -->
            <div class="modal fade" id="myModal-{{ $pro->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered p-4" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><b>Purchase Confirmation</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form name="add-form2" id="add-form2" action="{{url('store-form2')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <b>Product: {{ $pro['name'] }} </b><br>
                            <b>Price: Rp. {{ $pro['price'] }}</b><br>
                            <input type="hidden" id="user_id" name="user_id" value="2">
                            <input type="hidden" id="product_id" name="product_id" value="{{ $pro['id'] }}">
                            <input type="hidden" id="date" name="date" value="{{ date('Y-m-d', time()) }}">
                            Are you sure you want to buy this product? <br>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            <input type="submit" role="button" class="btn btn-dark" value="Buy">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        @endforeach
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