@extends('layouts.master')
@section('content')
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