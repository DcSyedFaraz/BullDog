@extends('layouts.master')
@section('content')
<section class="main-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <h4 class="small-h4">{{$section10->value}}</h4>
                    <h2 class="small-h2">{{$section11->value}}</h2>
                    <p class="small-p">{{$section12->value}}</p>
                    <div class="btn-div">
                        <div class="bone-btn">
                            <a class="bone" href="pups-available.html">
                                <span>{{$section14->value}}</span>
                            </a>

                            <!-- Filter: https://css-tricks.com/gooey-effect/ -->
                            <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                                xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="goo">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                        <feColorMatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                        <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <!-- ////////////////////// -->
                        <div class="bone-btn mx-5">
                            <a class="bone" href="join-bulldog-stronger.html">
                                <span>{{$section15->value}}</span>
                            </a>

                            <!-- Filter: https://css-tricks.com/gooey-effect/ -->
                            <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                                xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="goo">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                        <feColorMatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                        <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="/uploads/user/profiles/{{$section13->value}}" class="main-img1">
                </div>
            </div>
        </div>
    </section>
    <img src="/frontend/assets/images/side-rings.png" class="rings1-img" />
    <section class="main-2 position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mob" data-aos="fade-right">
                    <img src="/uploads/user/profiles/{{$section20->value}}" class="main-img">
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <h4 class="small-h4">{{$section21->value}}</h4>
                    <h2 class="small-h2 mob-h2">{{$section22->value}}</h2>
                    <!-- <h3 class="small-h3">We Love American <span class="american1"> Bulldogs </span> </h3> -->
                    <p class="small-p" style="margin-top: 30px;">{{$section23->value}}</p>
                    <div class="bone-btn1">
                        <a class="bone" href="/about">
                            <span>{{$section24->value}}</span>
                        </a>

                        <!-- Filter: https://css-tricks.com/gooey-effect/ -->
                        <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                            xmlns="http://www.w3.org/2000/svg" version="1.1">
                            <defs>
                                <filter id="goo">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix"
                                        values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                    <img src="/uploads/user/profiles/{{$section25->value}}" alt="client-1" class="vote-img" />

                </div>
            </div>
        </div>
    </section>
    <section class="main-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="service-txt">OUR SERVICES</h4>
                    <h3 class="service-txt1">All About Living With <span class="american">Bulldogs</span></h3>
                </div>
                <div class="col-md-4 mt-3" data-aos="fade-right">
                    <div class="image-box">
                        <img src="/frontend/assets/images/ser-1.png" class="service-img" />
                        <div class="ser-inner-div">
                            <h3 class="serv1-text">Adding A Puppy your Family</h3>
                            <p class="serv1-p">Learn how to get American Bulldog puppy from our Voted #1 American Bulldog Breeder Program.</p>
                            <div class="bone-btn">
                                <a class="bone" href="get-a-puppy.html">
                                    <span>Learn More</span>
                                </a>

                                <!-- Filter: https://css-tricks.com/gooey-effect/ -->
                                <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1">
                                    <defs>
                                        <filter id="goo">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                            <feColorMatrix in="blur" mode="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3" data-aos="fade-left">
                    <div class="image-box">
                        <img src="/frontend/assets/images/ser-3.png" class="service-img" />
                        <div class="ser-inner-div">
                            <h3 class="serv1-text">The Latest Planned Breedings</h3>
                            <p class="serv1-p">Take a look at each Dam & Sire’s Bio pages. See pictures & videos of our planned paired breeding </p>
                            <div class="bone-btn">
                                <a class="bone" href="planned-breedings.html">
                                    <span>Learn More</span>
                                </a>

                                <!-- Filter: https://css-tricks.com/gooey-effect/ -->
                                <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1">
                                    <defs>
                                        <filter id="goo">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                            <feColorMatrix in="blur" mode="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3" data-aos="fade-up">
                    <div class="image-box">
                        <img src="/frontend/assets/images/ser-2.png" class="service-img" />
                        <div class="ser-inner-div">
                            <h3 class="serv1-text">Why Join Bulldog Stronger</h3>
                            <p class="serv1-p">Get inside discounts, additional education and approved resources by the Bulldog community. </p>
                            <div class="bone-btn">
                                <a class="bone" href="/bulldog_stronger">
                                    <span>Learn More</span>
                                </a>

                                <!-- Filter: https://css-tricks.com/gooey-effect/ -->
                                <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1">
                                    <defs>
                                        <filter id="goo">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                            <feColorMatrix in="blur" mode="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="main-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="service-txt">{{$section30->value}}</h4>
                    <h3 class="service-txt1">{{$section31->value}}</h3>
                </div>
                <div class="col-md-3 mt-5" data-aos="fade-right">
                    <div class="image-box1">
                        <a href="https://bulldogstronger.ad-wize.xyz/">
                        <img src="/uploads/user/profiles/{{$section32->value}}" class="bd-img" /></a>
                        <h3 class="serv1-text">{{$section33->value}}</h3>
                        <p class="serv2-p">{{$section34->value}}</p>
                        <!-- <div class="bone-btn">
                            <a class="bone" href="./planned-breedings.html">
                                <span>Learn More</span>
                            </a>
                            <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                                xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="goo">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                        <feColorMatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                        <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                    </filter>
                                </defs>
                            </svg>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-3 mt-5" data-aos="fade-up">
                    <div class="image-box1">
                        <a href="https://bulldogstronger.ad-wize.xyz/">
                        <img src="/uploads/user/profiles/{{$section35->value}}" class="bd-img" /></a>
                        <h3 class="serv1-text">{{$section36->value}}</h3>
                        <p class="serv2-p">{{$section37->value}}</p>
                        <!-- <div class="bone-btn">
                            <a class="bone" href="./planned-breedings.html">
                                <span>Learn More</span>
                            </a>
                            <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                                xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="goo">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                        <feColorMatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                        <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                    </filter>
                                </defs>
                            </svg>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-3 mt-5" data-aos="fade-up">
                    <div class="image-box1">
                        <a href="https://bulldogstronger.ad-wize.xyz/">
                        <img src="/uploads/user/profiles/{{$section38->value}}" class="bd-img" /></a>
                        <h3 class="serv1-text">{{$section39->value}}</h3>
                        <p class="serv2-p">{{$section310->value}}</p>
                        <!-- <div class="bone-btn">
                            <a class="bone" href="./planned-breedings.html">
                                <span>Learn More</span>
                            </a>
                            <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                                xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="goo">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                        <feColorMatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                        <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                    </filter>
                                </defs>
                            </svg>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-3 mt-5" data-aos="fade-left">
                    <div class="image-box1">
                        <a href="https://bulldogstronger.ad-wize.xyz/">
                        <img src="/uploads/user/profiles/{{$section311->value}}" class="bd-img" /></a>
                        <h3 class="serv1-text">{{$section312->value}}s</h3>
                        <p class="serv2-p">{{$section313->value}}</p>
                        <!-- <div class="bone-btn">
                            <a class="bone" href="./planned-breedings.html">
                                <span>Learn More</span>
                            </a>
                            <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                                xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="goo">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                        <feColorMatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                        <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                    </filter>
                                </defs>
                            </svg>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-div1">
            <!-- <div class="bone-btn">
                <a class="bone" href="./pups-available.html">
                    <span>Available Pups</span>
                </a>
                <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                    xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                        <filter id="goo">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                                result="goo" />
                            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                        </filter>
                    </defs>
                </svg>
            </div> -->
            <div class="bone-btn mx-5">
                <a class="bone" href="/bulldog_stronger">
                    <span>{{$section314->value}}</span>
                </a>


                <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                    xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                        <filter id="goo">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                                result="goo" />
                            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
    </section>
    <section class="main-5 mt-5" data-aos="fade-up">
        <h3 class="video-title">{{$section40->value}}</h3>
        <div class="gallery-item mt-5">
            <img src="/frontend/assets/images/video-banner.png" alt="North Cascades National Park" />
            <div class="gallery-item-caption">
                <div>
                    <img class="play-btn" src="/frontend/assets/images/play-btn.png">
                </div>
                <a class="vimeo-popup" target="_self" href="{{$section41->value}}"></a>
            </div>
        </div>
    </section>
    <section class="main-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <h2 class="bull-h2">{{$section50->value}}</h2>
                    <p class="small-p">{{$section51->value}}</p>
                    <div class="bone-btn1">
                        <a class="bone" href="/bulldog_stronger">
                            <span>Learn More</span>
                        </a>

                        <!-- Filter: https://css-tricks.com/gooey-effect/ -->
                        <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                            xmlns="http://www.w3.org/2000/svg" version="1.1">
                            <defs>
                                <filter id="goo">
                                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                    <feColorMatrix in="blur" mode="matrix"
                                        values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                </filter>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="/frontend/assets/images/Luna.png" class="main-img1">
                </div>
            </div>
        </div>
    </section>
    <section class="main-6" data-aos="fade-up">
        <div class="container">
            <h2 class="small1-h2"> <span class="american1a">A DAY IN THE LIFE... </span> OF OUR BELOVED BULLDOGS </h2>
            <div class="image-gallery">
                <div class="column">
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g1.jpg" alt="Image-1" />
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/news2.jpg" alt="Image-6" />
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g5.jpg" alt="Image-9" />
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/news15.JPG" alt="Image-12" />
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g7.jpg" alt="Image-19"/>
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g11.jpg" alt="Image-24"/>
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g13.jpg" alt="Image-25"/>
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g16.jpg" alt="Image-26"/>
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g17.jpg" alt="Image-27"/>
                    </div>
                </div>
                <div class="column">
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/news5.JPG" alt="Image-2" />
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/news6.jpg" alt="Image-4" />
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/news7.jpg" alt="Image-1" />
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/news8.jpg" alt="Image-10" />
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/news9.JPG" alt="Image-15" />
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g8.jpg" alt="Image-21"/>
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g10.jpg" alt="Image-22"/>
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g15.jpg" alt="Image-23"/>
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g18.jpg" alt="Image-28"/>
                    </div>
                </div>
                <div class="column">
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g3.jpg" alt="Image-3" />
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/news11.JPG"alt="Image-8" />
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/news12.jpg" alt="Image-11" />
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g4.jpg" alt="Image-14" />
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/news17.jpg" alt="Image-15"/>
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g6.jpg" alt="Image-16"/>
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/news17.jpg" alt="Image-17"/>
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g9.jpg" alt="Image-18"/>
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g12.jpg" alt="Image-19"/>
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g14.jpg" alt="Image-20"/>
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g19.jpg" alt="Image-29"/>
                    </div>
                    <div class="image-item">
                        <img style="width: 450px;" src="/frontend/assets/images/gellary/g20.jpg" alt="Image-30"/>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="main-7" data-aos="zoom-in">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-sm-12">
                    <h3 class="insta">OUR INSTAGRAM</h3>
                </div>
                <div class="col-sm-3">
                    <a href="https://www.instagram.com/bulldogstronger/">
                    <img src="/frontend/assets/images/insta1.png" alt="insta1" class="insta-img" />
                    </a>
                </div>
                <div class="col-sm-9">
                    <h2 class="small-h2 mb-5">Visit Bulldog <span class="american"> Stronger </span></h2>
                    <div class="insta-inner mt-5">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-3">
                                    <a href="https://www.instagram.com/reel/Cy_KFO5LSUK/">
                                        <img src="/frontend/assets/images/insta-22.png" alt="insta-2" />
                                    </a>     
                                </div>
                                <div class="col-sm-3">
                                    <a href="https://www.instagram.com/reel/CyofGDAAM6e/">
                                        <img src="/frontend/assets/images/insta-33.png" alt="insta-2" />
                                    </a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="https://www.instagram.com/p/CymE6IpAS0z/">
                                        <img src="/frontend/assets/images/insta-44.png" alt="insta-2" />
                                    </a> 
                                </div>
                                <div class="col-sm-3">
                                    <a href="https://www.instagram.com/p/CybRCt9roEJ/">
                                        <img src="/frontend/assets/images/insta-55.png" alt="insta-2" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-8" id="contact-us" data-aos="zoom-in">
        <div class="container">
            <div class="contact-div">
                <div class="row align-items-end">
                    <div class="col-sm-6">
                        <img src="/frontend/assets/images/logo.png" alt="penny-img" class="penny-img" />
                    </div>
                    <div class="col-sm-6">
                        <h3 class="contact-text">Contact Us</h3>
                        <div class="form-div">
                            <form action="/contact" method="post" > 
                                @csrf
                                <input type="text" name="name" class="contact-input" placeholder="Enter Your Full Name" required />
                                <input type="text" name="phone_number" class="contact-input" placeholder="Enter Your Phone Number"
                                    required />
                                <input type="email" name="email" class="contact-input" placeholder="Enter Your Email Address"
                                    required />
                                <textarea name="message" placeholder="Enter Your Message" rows="4" class="w-100 text-ar"></textarea>
                                <div class="bone-btn1">
                                    <input class="submit-bone"  type="submit" value="submit" />

                                    <!-- Filter: https://css-tricks.com/gooey-effect/ -->
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-9" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="small1-h2"> <span class="american-blog">BLOGS </span> </h2>
                    <p class="insta-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled</p>
                </div>
                <div class="col-sm-4">
                    <div class="image-box-v1">
                        <img src="/frontend/assets/images/blog1.png" alt="blog-1" class="blog-img" />
                        <div class="blog-inner">
                            <h5 class="time">
                                18-8-2023
                            </h5>
                            <h3 class="blog-text">Lorem Ipsum Is Simply Dummy</h3>
                            <p class="blog-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut libero
                                ut
                                diam finibus consectetur ut in quam. Sed id nibh</p>
                            <a href="#" class="blog-a">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="image-box-v1">
                        <img src="/frontend/assets/images/blog2.png" alt="blog-1" class="blog-img" />
                        <div class="blog-inner">
                            <h5 class="time">
                                18-8-2023
                            </h5>
                            <h3 class="blog-text">Lorem Ipsum Is Simply Dummy</h3>
                            <p class="blog-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut libero
                                ut
                                diam finibus consectetur ut in quam. Sed id nibh</p>
                            <a href="#" class="blog-a">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="image-box-v1">
                        <img src="/frontend/assets/images/blog3.png" alt="blog-1" class="blog-img" />
                        <div class="blog-inner">
                            <h5 class="time">
                                18-8-2023
                            </h5>
                            <h3 class="blog-text">Lorem Ipsum Is Simply Dummy</h3>
                            <p class="blog-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut libero
                                ut
                                diam finibus consectetur ut in quam. Sed id nibh</p>
                            <a href="#" class="blog-a">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <a href="#" class="blog-btn">View More</a>
                </div>
            </div>
        </div>
    </section>
    <section class="main-10" data-aos="zoom-in">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="small1-h2"> <span class="american">TESTIMONIALS </span> </h2>
                    <div class="test-div">
                        <div class="wrapper">
                            <div class="my-slider">
                                @foreach($testimonials as $row)
                                <div>
                                    <h3 class="test-name">{{$row->title}}</h3>
                                    <h5 class="test-des">Client</h5>
                                    <p class="test-rev">{{$row->description }}</p>
                                    <img src="/uploads/testimonial/{{$row->image}}" alt="testimonial image" class="test-image" />
                                </div>
                                @endforeach
                                <!-- <div>
                                    <h3 class="test-name">Emily Johnson</h3>
                                    <h5 class="test-des">Client</h5>
                                    <p class="test-rev">I can't express how thrilled I am with my experience at
                                        AmericanBulldogs! From the moment I contacted them to the day I brought my new
                                        furry family member home, it's been nothing short of exceptional.
                                        <br>
                                        I was initially hesitant about choosing the right breeder for my American
                                        Bulldog puppy, but after extensive research and reading countless reviews, I
                                        stumbled upon AmericanBulldogs. From our first conversation, I knew I had found
                                        the perfect place.
                                    </p>
                                    <img src="/frontend/assets/images/test4.png" alt="testimonial image" class="test-image" />
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-11" data-aos="zoom-in">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="small-h2">OUR <span class="american">PARTNERS </span> </h2>
                </div>
                <div class="col-md-12">
                    <div class="client-div">
                        @foreach($partner as $row)
                        <img src="/uploads/partner/{{$row->image}}" alt="client-1" class="cl-img" />
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="btn-div1">
                        <div class="bone-btn mx-5">
                            <a class="bone" href="/bulldog_stronger">
                                <span>Bulldog Stronger</span>
                            </a>

                            <!-- Filter: https://css-tricks.com/gooey-effect/ -->
                            <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                                xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="goo">
                                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                        <feColorMatrix in="blur" mode="matrix"
                                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                        <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="popup" id="popup">
        <button class="close-button" id="closeButton">X</button>
        <div class="popup-content">
            <div class="popup-img" data-aos="zoom-in">
                  
            <h2 class="small-h2">Become a part of #1 <span class="american bulder">Bulldog Club </span> 
            <br><span class="bulder">and unlock</span> a world of <span class="bulder">of </span>giveaways! … <br>
            Like Bulldog <span class="bulder">gear, </span>toys and stylish apparel.
        
        </h2>
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-12">
                            <!-- <form onclick="return false;">  
                                <div class="inputbox"> 
                                    <input type="text" name="name" class="form-control" placeholder="Email" required="required"> 
                                </div> 
                                <button class="btn btn-danger btn-block">Redeem Your Discount</button> 
                            </form> -->
                            <div style="text-align: left;" class="bone-btn mx-3">
                                <a class="bone" href="join-bulldog-stronger.html">
                                    <span>Redeem your discount</span>
                                </a>
    
                                <!-- Filter: https://css-tricks.com/gooey-effect/ -->
                                <svg style="visibility: hidden; position: absolute;" width="0" height="0"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1">
                                    <defs>
                                        <filter id="goo">
                                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                                            <feColorMatrix in="blur" mode="matrix"
                                                values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                                        </filter>
                                    </defs>
                                </svg>
                            </div>
                            <!-- ////////////////////////// -->
                            <button class="closeButton1" id="closeButton1">No Thanks, I Want To Pay Full Price</button>
                            <!-- <p><a href="#" class="close-button" id="closeButton" >No Thanks, I Want To Pay Full Price</a></p> -->
                        </div>
                        <div class="col col-sm-12 disabled">

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
