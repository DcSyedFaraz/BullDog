@extends('layouts.master')
@section('content')
<section class="main-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 px-5" data-aos="fade-right">
                    <h2 class="small-h2"> <span class="american-about">{{$section10->value}} </span></h2>
                    <p class="small-p mt-4">{{$section11->value}}</p>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="/uploads/user/profiles/{{$section12->value}}" class="main-img">
                </div>
            </div>
        </div>
    </section>
    <img src="/frontend/assets/images/side-rings.png" class="rings1-img" />
    <section class="main-2" style="background-color: #F1F1F1;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="/uploads/user/profiles/{{$section20->value}}" class="main-1-img1">
                </div>
                <div class="col-md-6 px-5" data-aos="fade-left">
                    <h2 class="small-h2"><span class="american">{{$section21->value}} </span> </h2>
                    <p class="small-p mt-4">{{$section22->value}}
                    </p>
                </div>
            </div>
        </div>
    </section><br><br>
    <section class="about-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center px-5" data-aos="fade-right">
                    <h2 class="bull-h2"> <span class="american-bull">{{$section30->value}}</span> </h2>
                    <p class="small-p mt-4" style="margin-top: 30px;">{{$section31->value}}
                    </p>
                </div>
                <div class="col-md-12 text-center" data-aos="fade-left">
                    <img src="/uploads/user/profiles/{{$section32->value}}" class="main-1-img dedication">
                </div>
            </div>
        </div>
    </section>
    <section class="main-2 py-4" style="background-color: #F1F1F1;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="/uploads/user/profiles/{{$section40->value}}" class="main-1-img">
                </div>
                <div class="col-md-6 px-5" data-aos="fade-left">
                    <h2 class="join-h2">{{$section41->value}} </h2>
                    <p class="small-p mt-4">{{$section42->value}}
                    </p>
                    <div class="btn-div">
                        <!-- <div class="bone-btn">
                            <a class="bone" href="get-a-puppy.html">
                                <span>Get a Puppy</span>
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
    <section style="margin: 50px 0px;" class="main-8" id="contact-us" data-aos="zoom-in">
        <div class="container">
            <div class="contact-div">
                <div class="row align-items-end">
                    <div class="col-sm-6">
                        <!-- <img src="./assets/images/logo.png" alt="penny-img" class="penny-img" /> -->
                        <h3 style="font-size: 40px; font-weight: 800; color: var(--red);" class="contact-text1">Feel free to reach out</h3>
                        <ul>
                            <br><li><strong>Speak With our breeder </strong> <br>
                            <!-- <a href="#">4701 Rambling River Rd, Brandon, FL 33511, USA.</a></li>
                            <li><strong>Give us a ring:</strong> <br> Davette Fournier: 
                                <br> Mon-Sat -->
								<a href="tel:9168135370"> (916) 813-5370 </a></li>
                        </ul>
                        <h5 class="contact-text-small">Follow Us</h5>
                        <ul class="solicalization">
                            <li><a href="https://youtu.be/gKBi83UUZig?si=L65XlRZ2NTBL93uY"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><a href="https://www.facebook.com/VillaFourniersAmericanBulldogs"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/bulldogstronger/"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="contact-text">Get in Touch</h3>
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
                                    <input class="submit-bone" type="submit" value="submit" />

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
@endsection