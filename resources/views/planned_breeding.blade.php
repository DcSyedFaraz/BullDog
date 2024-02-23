@extends('layouts.master')
@section('content')
<section class="plan-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="plan-text">{{$section10->value}}</h2>
                </div>
            </div>
        </div>
    </section>

    <img src="/uploads/user/profiles/{{$section11->value}}" class="rings1-img" />

    <section class="plan-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h3 class="plan-h3">Upcoming <span class="litter-before">Litter</span></h3>
                </div>
                <div class="col-md-4">
                    <a href="junior.html"><img src="/frontend/assets/images/Junior/buddy-jounir.png" class="plan-dog-1" />
                        <div class="overlayy">Click for more Info</div></a>
                    
                </div>
                <div class="col-md-4 px-4">
                    <h4 class="litter-1">{{$section20->value}}</h4>
                    <div class="bone-btn">
                        <a class="bone" href="pups-available.html">
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
                    <p class="litter-1p">
                    {{$section21->value}}

                    </p>
                </div>
                <div class="col-md-4">
                    <a href="nova.html"><img src="/frontend/assets/images/Nova/nova-new.png" class="plan-dog-1" />
                        <div class="overlayy">Click for more Info</div></a>
                    
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- <section class="plan-2">
        <div class="container">
            <div class="row align-items-center">
               
            </div>
        </div>
    </section> -->
    <section class="plan-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <a href="bigdaddy.html"><img src="/frontend/assets/images/Bigdaddy/Cover-Big-Daddy.png"
                            class="plan-dog-1" />
                            <div class="overlayy">Click for more Info</div></a>
                            
                </div>
                <div class="col-md-4 px-4">
                    <h4 class="litter-1">  {{$section30->value}}</h4>
                    <div class="bone-btn">
                        <a class="bone" href="pups-available.html">
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
                    <p class="litter-1p">
                    {{$section31->value}}
                        </p>

                </div>
                <div class="col-md-4">
                    <a href="jax.html"><img src="/frontend/assets/images/Jax/Cover%20-%20Jax.jpg" class="plan-dog-1" />
                        <div class="overlayy">Click for more Info</div></a>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="plan-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="./captain.html"><img src="./assets/images/Captain/cover-picture-4-planned2.jpg" class="plan-dog-1" />
                        <div class="overlayy">Click for more Info</div></a>
                    
                </div>
                <div class="col-md-4 px-4">
                    <h4 class="litter-1">Captain & CRK Precious</h4>
                    <div class="bone-btn">
                        <a class="bone" href="./pups-available.html">
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
                    </div>
                    <p class="litter-1p">This planned breeding will happen in Summer 2024.
                        Get on the waiting list before it sells out.
                        See their Bio pages by clicking on their pictures.
                        
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="./precious.html"><img src="./assets/images/Precious/cover-picture-4-planned.jpg"
                            class="plan-dog-1" />
                            <div class="overlayy">Click for more Info</div></a>
                            
                </div>
            </div>
        </div>
    </section> -->
    <section class="plan-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="obi-happy.html"><img src="/frontend/assets/images/Obi/Cover---Obi-Happy.png"
                            class="plan-dog-1" />
                            <div class="overlayy">Click for more Info</div></a>
                            
                </div>
                <div class="col-md-4 px-4">
                    <h4 class="litter-1">  {{$section40->value}}</h4>
                    <div class="bone-btn">
                        <a class="bone" href="pups-available.html">
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
                    <p class="litter-1p">  {{$section41->value}}                     
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="kismet.html"><img src="/frontend/assets/images/Kismet/kismet.png" class="plan-dog-1" />
                        <div class="overlayy">Click for more Info</div>
                    </a>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="plan-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="plan-br-h3"><span class="litter-before">Our Sires for Stud Service</span></h3>
                </div>
                <div class="col-md-4 upcoming-1">
                    <a href="obi-happy.html">
                    <img src="/frontend/assets/images/Obi/cover-obi.png" class="upcoming-breeder" />
                    <h4 class="up-br">Obi-Happy</h4>
                    <!-- <p class="up-br-p">As all our bloodline he is very loving , smart and loves the water and boat
                        rides, he is so easy going and loves kids.
                        He & Kismet have a planned litter for first part of Dec 2023.
                    </p> -->
                </a>
                </div>
                <div class="col-md-4 upcoming-1">
                    <a href="leroy.html">
                    <img src="/frontend/assets/images/Lebroy/cover-leroy.png" class="upcoming-breeder" />
                    <h4 class="up-br">CRK Leroy</h4>
                    <!-- <p class="up-br-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elem entum viverra
                        lectus vel pul vinar. Mae cenas conseq uat et libero et dignissim. Pelle ntesque .</p> -->
                    </a>
                    </div>
                <div class="col-md-4 upcoming-1">
                    <a href="bigdaddy.html">
                    <img src="/frontend/assets/images/Bigdaddy/cover-bigdaddy-abc.png" class="upcoming-breeder" />
                    <h4 class="up-br">Big Daddy</h4>
                    <!-- <p class="up-br-p">As all our bloodline he is very loving , smart and as no idea he is as big as he
                        is and still loves to try and sit in his daddy John’s Lap</p> -->
                    </a>
                    </div>
                <div class="col-md-2"></div>
                <div class="col-md-4 upcoming-1 mt-4">
                    <a href="junior.html">
                    <img src="/frontend/assets/images/Junior/captain-junior.png" class="upcoming-breeder" />
                    <h4 class="up-br">Junior</h4>
                    <!-- <p class="up-br-p">As all our bloodline he is very loving , smart and a easy going spirit </p> -->
                </a>
                </div>
                <div class="col-md-4 upcoming-1 mt-4">
                    <a href="captain.html">
                    <img src="/frontend/assets/images/Captain/cover-cap.png" class="upcoming-breeder" />
                    <h4 class="up-br">Captain</h4>
                    <!-- <p class="up-br-p">As all our bloodline he is very loving , smart and a super easy going dog
                        He & Dottie's just had a litter earlier this year, so no plans for this year Check back. However
                        he is available for stud
                    </p> -->
                </a>
                </div>
                <div class="col-md-2"></div>
                <!-- <div class="col-md-4 upcoming-1 mt-4">
                    <img src="./assets/images/cover-bam.png" class="upcoming-breeder" />
                    <h4 class="up-br">B.A.M.</h4>
                    <p class="up-br-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elem entum viverra
                        lectus vel pul vinar. Mae cenas conseq uat et libero et dignissim. Pelle ntesque .</p>
                </div> -->
            </div>
        </div>
    </section>
    <section class="foot-above" data-aos="zoom-in">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="/frontend/assets/images/foot-above.png" class="foot-above-img" />
                    <!-- <p class="foot-above-txt mt-3"><b>
                            We Love American Bulldogs - Est. 1997 <br>916-813-5370</b>
                    </p> -->
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
                            <form action="https://www.weloveamericanbulldogs.com/Mailer/Sending.php" method="post" > 
                                <input type="text" name="name" class="contact-input" placeholder="Enter Your Full Name" required />
                                <input type="text" name="phone" class="contact-input" placeholder="Enter Your Phone Number"
                                    required />
                                <input type="email" name="email" class="contact-input" placeholder="Enter Your Email Address"
                                    required />
                                <textarea name="message" placeholder="Enter Your Message" rows="4" class="w-100 text-ar"></textarea>
                                <div class="bone-btn1">
                                    <input class="submit-bone" name="submit" type="submit" value="submit" />

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