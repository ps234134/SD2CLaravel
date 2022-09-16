<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mentor 3</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/Favicon.png')}}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   <!-- Vendor CSS Files -->
   <link rel="stylesheet" href="{{ asset('assets/css/functions.css')}}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
   <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>

        <!-- Nav mentor -->
        <nav class="navbar navbar-expand-lg" data-aos="zoom-in" data-aos-delay="100">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                            @foreach ($nav as $navs)
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{$navs}}">{{$navs}} </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </nav>
        <!-- Hero -->
        <div id="hero" class="hero d-flex flex-column justify-content-center">
            <div class="container" data-aos="zoom-in" data-aos-delay="100">
                <div class="row hero-main">
                    <div class="col d-flex  align-items-center justify-content-center">
                        <h1 style="letter-spacing: 3px; font-weight: 400;">Hello, my name is Tutai Tran <br><br>welcome to: <span class="typed" data-typed-items="MENTOR 3"></span></h1>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <img src="assets/img/avatar.png" alt="hero">
                    </div>
                </div>
                <div class="row">
                    <div class="hero-socials col">
                        <ul>
                            <li><a href="https://www.instagram.com/tutsi.tr/?hl=nl">INSTAGRAM</a></li>
                            <li><a href="https://twitter.com/Tutsi1021">TWITTER</a></li>
                            <li><a href="https://www.linkedin.com/in/tutai-tran-204a67221/">LINKEDIN</a></li>
                        </ul>
                    </div>
                    <div class="hero-copy col">
                        <p>&#169 2022</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero -->

     <!-- parallax Menu -->
     <div id="parallax" class="parallax d-flex justify-content-center align-items-center">
        <div class="main"></div>
        <div class="cube-wrap">
            <div class="cube">
                    <div class="side top d-flex justify-content-center align-items-center"> <li><a href="#contact" class="nav-link scrollto"><span>CONTACT</span></a></li></div>
                    <div class="side bottom  d-flex justify-content-center align-items-center"> <li><a href="#opdr3" class="nav-link scrollto"><span>Opdracht3</span></a></li></div>
                    <div class="side front  d-flex justify-content-center align-items-center"><li><a href="#opdr2" class="nav-link scrollto"><span>Opdracht2</span></a></li></div>
                    <div class="side back  d-flex justify-content-center align-items-center"> <li><a href="#experience" class="nav-link scrollto"><span>EXPERIENCE</span></a></li></div>
                    <div class="side left  d-flex justify-content-center align-items-center"><li><a href="#hero" class="nav-link scrollto active"><span>HOME</span></a></li></div>
                    <div class="side right  d-flex justify-content-center align-items-center"> <li><a href="#portfolio" class="nav-link scrollto"><span>PORTFOLIO</span></a></li></div>
            </div>
        </div>
    </div>
    
   
    

    


    
        <div id="opdr2">
            <div class="container reveal">
                <div class="about-main">
                    <div class="row about-row d-flex">
                        <h3>Opdracht 2</h3>
                    </div>
                    <div class="row about-row d-flex">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque nulla ab odio optio sapiente, excepturi veniam perferendis sed distinctio voluptatum voluptates suscipit commodi officiis magnam tenetur. Vero dolore quam ducimus.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="opdr3">
            <div class="container reveal">
                <div class="about-main">
                    <div class="row about-row d-flex">
                        <h3>Opdracht 3</h3>
                    </div>
                    <div class="row about-row d-flex">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam earum sed, rem maxime placeat sapiente deserunt nemo, natus possimus rerum vero cupiditate temporibus voluptas? Eius cupiditate est sed blanditiis quos.</p>
                    </div>
                </div>
            </div>
        </div>

       
        
        <footer>
            <div class="row row-main">
                <div class="col col1">
                    <img src="assets/img/apple-touch-icon.png" alt="Tdesign">
                    <h3>Tutai Tran</h3>
                </div> 
                <div class="col col2">
                    <h4 class="underline"><a href = "https://www.instagram.com/tutsi.tr/?hl=nl">INSTAGRAM</a></h4>
                    <h4 class="underline"><a href = "https://twitter.com/Tutsi1021">TWITTER</a></h4>
                    <h4 class="underline"><a href = "https://www.linkedin.com/in/tutai-tran-204a67221/">LINKEDIN</a></h4>
                </div>
                <div class="col col3">
                    <h6>Designed by <strong><span>Tdesign</span></strong> </h6>
                    <h6>Copyright <strong><span>Tdesign</span></strong>. All Rights Reserved</h6>
                </div>
            </div>
        </footer>

    <!-- Back to top -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <!-- Cursor -->
    <div class='cursor' id="cursor"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/typed.js/typed.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>