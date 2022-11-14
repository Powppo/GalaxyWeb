@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Galaxy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

     <!-- Favicon -->
     <link href="{{asset('Template/img/favicon.ico')}}" rel="icon">

     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
 
     <!-- Flaticon Font -->
     <link href="{{asset('Template/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">
 
     <!-- Customized Bootstrap Stylesheet -->
     <link href="{{asset('Template/css/style.min.css')}}" rel="stylesheet">

<body class="bg-white">

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 300px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Exchange Points</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Exchange Points</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12 pb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="container-fluid page-header mb-5">
                                    </div>
                                    <div class="d-flex flex-column text-center mb-5 ">
                                        <h4 class="text-primary font-weight-bold">Exchange your Points</h4>
                                        <h4 class="display-4 font-weight-bold">Select an Item to Exchange !</h4>
                                    </div>
                                        <div class="d-flex flex-column text-center mb-5">
                                            <div class="text-center mb-5">
                                                <div class="d-inline-flex">
                                                    <p class="text-primary font-weight-bold"><a class="text-black" href="">Gym Supplement</a></p>
                                                    <p class="m-0 text-black px-2">/</p>
                                                    <p class="m-0 text-black">100 pts</p>
                                                </div>
                                            </div>
                                            <div class="text-center mb-5">
                                                <div class="d-inline-flex">
                                                    <p class="text-primary font-weight-bold"><a class="text-black" href="">Membership</a></p>
                                                    <p class="m-0 text-black px-2">/</p>
                                                    <p class="m-0 text-black">1500 pts</p>
                                                </div>
                                            </div>
                                            <div class="text-center mb-5">
                                                <div class="d-inline-flex">
                                                    <p class="text-primary font-weight-bold"><a class="text-black" href="">Dumbell</a></p>
                                                    <p class="m-0 text-black px-2">/</p>
                                                    <p class="m-0 text-black">20 pts</p>
                                                </div>
                                            </div>
                                    <div class="card-body">
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
@endsection
</html>