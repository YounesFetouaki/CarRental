<!DOCTYPE html>
<html>

<head>
    <title>CarRental</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <base href="/public">
    <link rel="stylesheet" href="home/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="home/css/animate.css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="home/css/magnific-popup.css">
    <link rel="stylesheet" href="home/css/aos.css">
    <link rel="stylesheet" href="home/css/ionicons.min.css">
    <link rel="stylesheet" href="home/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="home/css/jquery.timepicker.css">
    <link rel="stylesheet" href="home/css/flaticon.css">
    <link rel="stylesheet" href="home/css/icomoon.css">
    <link rel="stylesheet" href="home/css/style.css">
    <style type="text/css">
        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            padding: 30px;
        }

        table,
        th,
        td {
            border: 0.1pc solid grey;
        }

        .th_deg {
            font-size: 20px;
            padding: 5px;
            background: skyblue;
        }

        .img_deg {
            height: 150px;
            width: 250px;
            padding: 5px;

        }

        .total_deg {
            font-size: 20px;
            padding: 40px;
        }
    </style>
    <style>
        body {
            padding-top: 100px;
            background-image: url('home/images/bg_2.jpg');
        }

        /* nav.navbar.fixed-top {
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            
        } */
    </style>
</head>

<body>
    @include('sweetalert::alert')
    @include('home.header')
    <div class="hero_area">
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="{{url('/')}}">CarRental</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{url('/userpage')}}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{url('/all_catagories')}}" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="{{url('/all_cars')}}" class="nav-link">Cars</a></li>
                    <li class="nav-item"><a href="{{url('/profile')}}" class="nav-link">Profile</a></li>
                    <li class="nav-item"><a href="{{url('show_cart')}}" class="nav-link">Cart</a></li>
                    <li class="nav-item"><a href="{{url('/userlogout')}}" class="btn btn-danger">Logout</a></li>
                </ul>
            </div>
        </nav> -->
        <div class="container mt-4">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h4>User Profile</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('profile') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Username</label>
                                        <div class="form-control">
                                            {{$user->username}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Email Address</label>
                                        <div class="form-control">
                                            {{$user->email}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Phone Number</label>
                                        <div class="form-control">
                                            {{$user->phone}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Name</label>
                                        <div class="form-control">
                                            {{$user->name}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <div class="form-control">
                                            {{$user->address}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <a class="badge badge-info" href="{{url('profile_edit',$user->id)}}"><i class="fa fa-edit"></i>Edit Profile</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div style="padding-top: 15px;">
                <a href="{{url('show_order')}}" class="btn btn-success">View All Orders</a>
            </div>
            <!-- footer end -->
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
    <!-- jQery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>

</html>