<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Warung Calas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('restoran/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('restoran/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('restoran/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('restoran/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('restoran/css/style.css')}}" rel="stylesheet">
</head>
</style>

<body>
    <div class="container-xxl bg-white p-0" style="height: 100% !important;">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" style="height: 100% !important;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-4">
                <a href="" class="navbar-brand p-0">
                    <h1 style="color: rgb(0, 102, 255) !important" class="text-primary m-0"><img src="{{asset('img/logo.png')}}" alt=""> Warung Calas</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button> --}}
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="booking.html" class="dropdown-item">Booking</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div> --}}
                        {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
                    </div>

                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5" style="height: 100% !important;">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Memang<br>Mantap</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Menyediakan berbagai macam makanan yang mampu memanjakan lidah serta perut dengan harga yang terjangkau</p>
                            <a href="{{url('warung')}}" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft" >Pesan Sekarang</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="{{asset('restoran/img/bg-resto-up.png')}}" style="height:300x" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('restoran/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('restoran/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('restoran/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('restoran/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('restoran/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('restoran/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('restoran/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('restoran/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('restoran/js/main.js')}}"></script>
</body>

</html>
