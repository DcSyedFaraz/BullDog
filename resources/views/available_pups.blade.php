@extends('layouts.master')
@section('content')
<section class="main-111">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="small-h2"> {{$section10->value}}</span></h2>
                    <p class="paraghrer mt-5">{{$section11->value}} </p>
                </div>
                <div class="col-md-6">
                    <img src="/uploads/user/profiles/{{$section12->value}}" class="pups-img" />
                </div>
            </div>
        </div>
    </section>
    <section class="pups-avail-2">
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-md-6 px-5">
                    <img style="margin-bottom: 20px;" width="70%" class="u-image u-image-1" src="/uploads/user/profiles/{{$section20->value}}" alt="Image-1">
                    <h3 class="ld-dog">{{$section21->value}} </h3>

                    <p class="small-p mt-6">{{$section22->value}}</p>
                    <!-- <img src="./assets/images/pups-avil-1.png" class="pup-avail-img1" /> -->
                </div>
                <div class="col-md-6 px-7 text-center">
                    <div class="container">
                        <div class="row">
                            <h3>{{$section23->value}}</h3>
                            <div class="col-6">
                                
                                <img class="imggbdy" width="100%" src="/uploads/user/profiles/{{$section24->value}}"/>
                            </div>
                            <div class="col-6">
                                <img class="imggbdy" width="100%" src="/uploads/user/profiles/{{$section25->value}}"/>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <h3>{{$section26->value}}</h3>
                            <div class="col-6">
                                <img class="imggbdy" width="100%" src="/uploads/user/profiles/{{$section27->value}}"/>
                            </div>
                            <div class="col-6">
                                <img class="imggbdy" width="100%" src="/uploads/user/profiles/{{$section28->value}}"/>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>



    <section class="main-111 pb-0">
        <div class="container ">
            <div class="row ">

                <div class="col-md-7 px-7 text-center mob">
                    <div class="row align-items-center">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                              <div class="flip-box-front">
                                <img class="u-expanded-width-md u-image u-image-1" src="/uploads/user/profiles/{{$section30->value}}" alt="Image-1">
                              </div>
                              <div class="flip-box-back">
                                <img width="70%" class="u-expanded-width-md u-image u-image-1" src="/uploads/user/profiles/{{$section31->value}}" alt="Image-1">
                                
                              </div>
                            </div>
                          </div>
             
                    </div>
                </div>
                <div class="col-md-5 px-5">
                    <h3>{{$section32->value}}</h3>

                    <p class="small-p mt-6">{{$section33->value}}
                    </p>
                </div>

            </div>
        </div>
    </section>

    <img src="/frontend/assets/images/side-rings.png" class="rings1-img" />
    <section class="bone-sec456">
        <div class="pup-gallery">
            <div class="wrapper">
                <div class="my-slider1">
                    @foreach($gallerys as $row)
                    <div>
                        <img src="/uploads/gallery/{{$row->image}}" class="pup-gallery-img" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="bone-sec" style="url(/uploads/user/profiles/{{$section41->value}});">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="meet12">{{$section40->value}}</h4>
                </div>
                <div class="col-sm-12 mt-3">
                    <div class="btn-div12">
                        <div class="bone-btn">
                            <a class="bone" href="/get_a_puppy">
                                <span>{{$section42->value}}</span>
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
    <section style="margin: 50px 0px;" class="main-8" id="contact-us">
        <div class="container">
            <div class="contact-div">
                <div class="row align-items-end">
                    <div class="col-sm-6">
                        <h3 style="font-size: 40px; font-weight: 800; color: var(--red);" class="contact-text1">Feel free to reach out</h3>
                        <ul>
                            <br><li><strong>Speak With our breeder </strong> <br>

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