<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" />
    <link href="https://cdn.rawgit.com/dimsemenov/Magnific-Popup/master/dist/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="/frontend/assets/css/style.css" rel="stylesheet" />
    <link href="/frontend/assets/css/new.css" rel="stylesheet" />
    <title>American Bulldogs</title>
    <style>
        /* .align-items-end {
            align-items: center !important;
        }
        .insta-img:hover {
            transform: scale(1.05);
            }

        .insta-img {
            width: 100%;
            transform: scale(1.0);
            transition: 0.3s ease-in-out;
        }
        .insta-inner img:hover {
            transform: scale(1.05);
        }

        .insta-inner img {
            width: 95%;
            transition: 0.3s ease-in-out;
            transform: scale(1.0);
        } */
        .contact-text-small {
            font-size: 26px;
            font-weight: 800;
            color: var(--red);
        }
        .align-items-end {
            align-items: flex-start !important;
        }
        .contact-div ul li {
            display: inline-block;
            margin-bottom: 22px;
            font-size: 20px;
            padding-right: 20px;
        }
        .contact-div ul {
            padding: 0px;
            padding-right: 50px;
        }
        .contact-div ul li a {
            color: #ed2226;
        }
        .contact-div ul.solicalization li {
            background-color: #ed2226;
            color: #ffffff;
            width: 40px !important;
            height: 40px !important;
            line-height: 40px;
            /* padding: 9px 13px; */
            border-radius: 33px;
            }
        .contact-div ul.solicalization li a {
        
            color: #ffffff;
            padding: 0px 11px;
        }
        .bone-btn {
            text-align: center !important;
            margin: 30px 0;
        }
        .plan-2 .col-md-4 a {
            position: relative;
        }
        .plan-2 .col-md-4 .overlayy {
            display: flex;
            position: absolute;
            top: -124px;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.5) !important;
            width: 100%;
            height: 270px;
            transition: .5s ease;
            opacity: 0 !important;
            color: white;
            font-size: 20px;
            padding: 20px;
            text-align: center;
            border-radius: 30px;
            align-items: center;
            justify-content: center;
        }

        .plan-2 .col-md-4:hover .overlayy {
        opacity: 1 !important;
        }
    </style>
</head>

<body>
    <header>
        <div class="bar-secoder">
            <ul class="detail-listing">
                <li>
                    <div class="social">
                        <a href="https://www.facebook.com/VillaFourniersAmericanBulldogs"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </li>
                <li>
                    <div class="social">
                        <a href="https://www.instagram.com/bulldogstronger/"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </li>
                <li>
                    <div class="social">
                        <a href="https://youtu.be/gKBi83UUZig?si=L65XlRZ2NTBL93uY"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <nav class="navbar navbar-light navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="/uploads/{{$setting->logo_1}}" alt="logo" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end bg-secondary secondary-1" id="navbarOffcanvas" tabindex="-1"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <a class="navbar-brand" href="/"><img src="/frontend/assets/images/logo.png" alt="logo"
                                class="logo"></a>
                        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/get_a_puppy">Get a puppy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/available_pups">Available Pups</a>
                            </li>
							
                            <li class="nav-item">
                                <a class="nav-link" href="/planned_breeding">Planned Breedings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/bulldog_stronger">Bulldog Stronger</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact_us">Contact Us</a>
                            </li>
                            <li class="nav-link db">
                                <div class="bone-btn1">
                                    <a class="bone" href="/visitors_login">
                                        <span>Login</span>
                                    </a>
                                    <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                                        xmlns="http://www.w3.org/2000/svg" version="1.1">
                                        <defs>
                                            <filter id="goo">
                                                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                                <feColorMatrix in="blur" mode="matrix"
                                                    values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                                                    result="goo" />
                                                <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <img src="/frontend/assets/images/side-rings.png" class="rings-img" />
    <!-- <img src="/frontend/assets/images/banner-cover.jpg" class="popup-img-1" /> -->
    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 px-4">
                    <img src="/uploads/{{$setting->logo_2}}" alt="footer-logo" class="footer-logo mb-4" />
                    <!-- <div class="social-icons">
                        <a href="https://www.facebook.com/VillaFourniersAmericanBulldogs"><i
                                class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/bulldogstronger/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://youtu.be/gKBi83UUZig?si=L65XlRZ2NTBL93uY"><i
                                class="fa-brands fa-youtube"></i></a>
                    </div> -->
                </div>
                <div class="col-sm-2">
                    <h4 class="detail">Quick Links</h4>
                    <ul class="detail-list">
                        <a href="/">
                            <li>Home</li>
                        </a>
                        <a href="/about">
                            <li>About Us</li>
                        </a>
                        <a href="https://youtu.be/gKBi83UUZig?si=L65XlRZ2NTBL93uY">
                            <li>Living With American Bulldogs</li>
                        </a>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h4 class="detail1">Services</h4>
                    <ul class="detail-list">
                        <a href="/available_pups">
                            <li>Available Pups</li>
                        </a>
                        <a href="/bulldog_stronger">
                            <li>Bulldog Stronger</li>
                        </a>
                        <a href="/planned_breeding">
                            <li>Planned Breedings</li>
                        </a>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h4 class="detail2">Social Links</h4>
                    <ul class="detail-list">
                        <li>
                            <div class="social">
                                <i class="fa-brands fa-facebook-f"></i>
                                <a href="https://www.facebook.com/VillaFourniersAmericanBulldogs">www.facebook.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="social">
                                <i class="fa-brands fa-instagram"></i>
                                <a href="https://www.instagram.com/bulldogstronger/">www.instagram.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="social">
                                <i class="fa-brands fa-youtube"></i>
                                <a href="https://youtu.be/gKBi83UUZig?si=L65XlRZ2NTBL93uY">www.youtube.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4 class="detail1">Contact Us</h4>
                    <ul class="detail-list">
                        <li>
                            <div class="social">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:{{$setting->phone}}">{{$setting->phone}}</a>
                            </div>
                        </li>
                        <li>
                            <div class="social">
                                <i class="fa-regular fa-envelope"></i>
                                <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                            </div>
                        </li>
                        <!-- <li>
                            <div class="social">
                                <i class="fa-solid fa-location-dot"></i>
                                <a href="#">806 Tuna streetssouthfield,MI 48075.</a>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <p class="copyright">{{$setting->copyright}}</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.rawgit.com/dimsemenov/Magnific-Popup/master/dist/jquery.magnific-popup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="/frontend/assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <script>
        $('#slickly').slick({
		rows: 2,
		dots: false,
		arrows: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1
});

    </script>
</body>

</html>