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
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Upload</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="/home">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Upload</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-primary font-weight-bold">Get your Point</h4>
            <h4 class="display-4 font-weight-bold">Upload your Link Here !</h4>
        </div>
        
        
        <div class="row">
            <div class="col-md-12 pb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form method="POST" action="{{ route('storeUpload') }}">
                        @csrf
                        <div class="control-group">
                            <h6>Select Video Category</h6>
                            <select style="border-radius: 7px" name="code" id="code" class="form-select">
                                <option>Dumbell</option>
                                <option>Barbell</option>
                                <option>Squat</option>
                                <option>Yoga</option>
                                <option>Skipping</option>
                                <option>Treadmill</option>
                                <option>Bench Press</option>
                                <option>Leg Press</option>
                                <option>Ab Roller</option>
                                <option>Static Bike</option>
                                <option>Lat Pulldown Machine</option>
                            </select>
                            <p class="help-block text-danger"></p>
                        </div>
                        </div>
                        <div class="control-group">
                            <h6>Video URL</h6>
                            <input  style="border-radius: 7px" name ="link" type="url" class="form-control" id="link" placeholder="Video URL" required="required" data-validation-required-message="Please enter your Video URL" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <!--
                        <div class="control-group">
                            <h6>Thumbnail</h6>
                            <input style="border-radius: 7px" name ="file" type="file" class="form-control" id="thumbnail" placeholder="thumbnail" required="required" data-validation-required-message="Please Select your Thumbanail" />
                            <p class="help-block text-danger"></p>
                        </div>
                        -->
                        <div>
                            <button style="border-radius: 7px" class="btn btn-outline-primary" type="submit" id="sendMessageButton">Upload</button>
                            <h2></h2>
                        </div>
                    </form>
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