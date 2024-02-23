@extends('layouts.master')
@section('content')
<section class="bone-sec" style="background: linear-gradient(0deg, rgb(255 255 255 / 30%), rgb(255 255 255 / 30%)),url(/uploads/user/profiles/{{$section11->value}}) !importent;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="meet12">{{$section10->value}}</h4>
                </div>
                <div class="col-sm-12 mt-3">
                    <iframe width="700" height="400" src="{{$section12->value}}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="col-sm-12 mt-3">
                    <div class="btn-div12">
                        <div class="bone-btn">
                            <a class="bone" href="/frontend/assets/docs/ab_handbook_new_2023.docx.pdf">
                                <span>AB Handbook</span>
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
                        <div class="bone-btn mx-5">
                            <a class="bone" href="/frontend/assets/docs/AB_History_%26_Orgin.pdf">
                                <span>History & Origin</span>
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
                        <div class="bone-btn">
                            <a class="bone" href="/frontend/assets/docs/ab_traits_characteristics.pdf">
                                <span>AB Traits</span>
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
                    <div class="btn-div12">
                        <div class="bone-btn">
                            <a class="bone" href="/frontend/assets/docs/Male_Puppy_Agrement.pdf">
                                <span>Male Puppy</span>
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
                        <div class="bone-btn mx-5">
                            <a class="bone" href="/frontend/assets/docs/2023_Female_Puppy_Agrement.pdf">
                                <span>Female Puppy</span>
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
                        <div class="bone-btn">
                            <a class="bone" href="/puppy_questionnaire">
                                <span>Questionnaire</span>
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
    <img src="/frontend/assets/images/side-rings.png" class="rings1-img" />
    <!-- ////////////////////// -->
    <section style="margin: 80px 0px ;" class="main-8" id="contact-us" data-aos="zoom-in">
        
        <div class="container">
            <!-- <h3 style="text-align: center; margin-bottom: 60px;" class="meet12">Wanna know about us more fill the form and Speak with the breeder we'll call you right back.
            </h3> -->
            <div class="contact-div">
                <div class="row align-items-center">
                    
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