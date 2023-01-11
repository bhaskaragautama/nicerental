<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- logo start -->
    <div class="container-fluid position-fixed z-2 not-there" id="main-logo" style="opacity: 0;">
        <div class="row justify-content-center">
            <div class="col-md-2 col-6 text-center">
                <img src="img/logo.png" class="img-fluid mt-5 mb-3"> <br>
                <a href="#about" class="text-white d-lg-none"><i class="fa-solid fa-angles-down fa-fade"></i></a>
            </div>
        </div>
    </div>
    <!-- logo end -->

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg fixed-top d-none d-lg-block" data-bs-theme="dark" id="main-navbar">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#mainCarousel">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#motorcycle">Motorcycle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li>
                </ul>
                <div class="d-flex gap-3 me-2 text-white">
                    <a href="#" class="btn btn-sm btn-light rounded-circle">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-light rounded-circle">
                        <i class="fa-brands fa-telegram"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-light rounded-circle">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- carousel start -->
    <div id="mainCarousel" class="vh-100 carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner h-100">
            <div class="carousel-item h-100 active" style="background-image: url('img/1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                <!-- <img src="img/1.jpg" class="d-block w-100"> -->
            </div>
            <div class="carousel-item h-100" style="background-image: url('img/2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                <!-- <img src="img/2.jpg" class="d-block w-100"> -->
            </div>
            <div class="carousel-item h-100" style="background-image: url('img/3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                <!-- <img src="img/3.jpg" class="d-block w-100"> -->
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel end -->

    <!-- about start -->
    <div id="about" class="mb-4"></div>
    <div id="about-content" class="content container-fluid p-5">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5">About Us</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                </p>
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- motorcycle start -->
    <div id="motorcycle" class="mb-4"></div>
    <div id="motorcycle-content" class="content container-fluid p-5 bg-primary bg-opacity-25">
        <div class="row">
            <div class="col-12">
                <h1 class="display-5">Motorcycle</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ut ipsum suscipit asperiores, inventore fuga non molestiae omnis. Minima eveniet fuga error inventore molestias consequuntur incidunt dolore corporis perferendis pariatur.
                </p>
            </div>
        </div>
    </div>
    <!-- motorcycle end -->

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="assets/fontawesome/js/all.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        if($('#main-navbar').css('display') == 'block') {
            $('body').addClass('desktop');
        } else {
            $('body').addClass('mobile');
        }
        function animateHeader() {
            if($(window).scrollTop() > 200) {
                if($('#main-logo').hasClass('there')) {
                    $('#main-logo').removeClass('there').addClass('not-there');
                    $('#main-logo').stop().animate({
                        top: '-20px',
                        opacity: '0'
                    }, 'fast');
                }
            } else {
                if($('#main-logo').hasClass('not-there')) {
                    $('#main-logo').removeClass('not-there').addClass('there');
                    $('#main-logo').stop().css('top', '20px').animate({
                        top: '0px',
                        opacity: '1'
                    }, 'fast');
                }
            }
            if($('body').hasClass('desktop')) {   
                if($(window).scrollTop() > 300) {
                    $('#main-navbar').addClass('bg-dark');
                } else {
                    $('#main-navbar').removeClass('bg-dark');
                }
            } else {
                if($(window).scrollTop() > 650) {
                    $('#main-navbar').removeClass('d-none').addClass('bg-dark');
                } else {
                    $('#main-navbar').addClass('d-none');
                }
            }
        }

        function getArea() {
            let area = [];
            area.push(['home', 0, $('#mainCarousel').innerHeight()]);
            area.push(['about', $('#about').position().top, $('#about').position().top + $('#about').outerHeight(true) + $('#about-content').innerHeight()]);
            area.push(['motorcycle', $('#motorcycle').position().top, $('#motorcycle').position().top + $('#motorcycle').outerHeight(true) + $('#motorcycle-content').innerHeight()]);
            // console.log(area);
            console.log($('#about').position().top);
        }

        $(document).ready(function () {
            // let area = getArea();
            getArea();
            $('body').fadeIn(300, function() {
                animateHeader();
            });
            $(window).scroll(function () { 
                // let mid = $(window).scrollTop() + ($(window).innerHeight() / 2);
                animateHeader();
                // for(i = 0; i < area.length; i++) {
                //     if(mid > area[i][1] && mid < area[i][2]) {
                //         console.log(area[i]);
                //     }
                // }
                // console.log(mid);
                // console.log(area);
            });
            if($('body').hasClass('mobile')) {
                $('.nav-link').click(function() {
                    $('.navbar-toggler').click();
                });
            }
        });
    </script>
</body>
</html>