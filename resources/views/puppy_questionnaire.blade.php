@extends('layouts.master')
@section('content')
<section class="bone-secsx">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- <img src="./assets/images/logo.png"> -->
                    <h4 style="text-align: center;" class="meet12 py-5">Puppy’s New Home Questionnaire</h4>
                </div>
                <div class="row">
                <div class="col-sm-6">
                    <img width="350px" src="/frontend/assets/images/logo.png">
                </div>
                <div class="col-sm-6">
                    <p>We Love American Bulldogs & Bulldogs Stronger</p>
                    <p><b>Contact Us Today!</b></p>
                    <p><a href="www.weloveamericanbulldogs.com">www.weloveamericanbulldogs.com</a></p>                       
                    <p><a href="www.bulldogstronger.com">www.bulldogstronger.com</a></p>                       
                    <p><a href="mailto:davettes@mac.com">Email davettes@mac.com</a> </p>                       
                    <p><a href="tel:916-813-5370">Ph# 916-813-5370</a></p>                                        
                </div>
                </div>
            </div>
        </div>
        <!-- /////////////// -->
        <section class="bone-main-form py-5">
            <div class="container">
                <div class="row">
                    <form>
                        <div class="row g-3">
                            <div class="col-sm">
                                    <label for="name" class="form-label">Puppies Parents Name:</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="name">
                            </div>
                            <div class="col-sm">
                                <label for="address" class="form-label">Puppies New Address to be: </label>
                                <input type="text" class="form-control" id="address" aria-describedby="address">
                            </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm">
                                    <label for="phone   " class="form-label">Puppies New Phone#: </label>
                                    <input type="number" class="form-control" id="phone" aria-describedby="phone"> 
                                </div>
                            <div class="col-sm">
                                <label for="new-name" class="form-label">Puppies New Name If You Have One: </label>
                                <input type="text" class="form-control" id="new-name" aria-describedby="new-name">
                              </div>
                          </div>
                        
                        <div class="mb-3">
                            <label for="q1" class="form-label"> 1. Have you owned or do currently own other dogs? How many and what breeds and genders?</label>
                            <input type="text" class="form-control" id="q1" aria-describedby="q1">
                        </div>

                        <div class="mb-3">
                            <label for="q2" class="form-label"> 2. Are you familiar with Bully Breeds? Have you or do you own American Bulldogs.</label>
                            <input type="text" class="form-control" id="q2" aria-describedby="q2">
                        </div>

                        <div class="mb-3">
                            <label for="q3" class="form-label"> 3. Do live in an apartment or house or acreage?</label>
                            <input type="text" class="form-control" id="q3" aria-describedby="q3">
                        </div>

                        <div class="mb-3">
                            <label for="q4" class="form-label"> 4. Do yo have kids living at home? What ages?</label>
                            <input type="text" class="form-control" id="q4" aria-describedby="q4">
                        </div>

                        <div class="mb-3">
                            <label for="q5" class="form-label"> 5. How many hours a will the dog be left alone. Do both parents same hours or opposite hours? </label>
                            <input type="text" class="form-control" id="q5" aria-describedby="q5">
                        </div>

                        <div class="mb-3">
                            <label for="q6" class="form-label"> 6. Will the dog be kept inside? Outside? Both? </label>
                            <input type="text" class="form-control" id="q6" aria-describedby="q6">
                        </div>

                        <div class="mb-3">
                            <label for="q7" class="form-label"> 7. if Dog is kept outside, what type of shelter will be provided. </label>
                            <input type="text" class="form-control" id="q7" aria-describedby="q7">
                        </div>

                        <div class="mb-3">
                            <label for="q8" class="form-label"> 8. Fo you believe in crate training or are using a crate fro any other reason other then traveling? </label>
                            <input type="text" class="form-control" id="q8" aria-describedby="q8">
                        </div>

                        <div class="mb-3">
                            <label for="q9" class="form-label"> 9. Are you willing to use our advise when it comes to training and socializing? </label>
                            <input type="text" class="form-control" id="q9" aria-describedby="q9">
                        </div>

                        <div class="mb-3">
                            <label for="q10" class="form-label"> 10. What family/friend support do you have to help watch you puppy when you are away at work or on vacation? </label>
                            <input type="text" class="form-control" id="q10" aria-describedby="q10">
                        </div>

                        <div class="mb-3">
                            <label for="q11" class="form-label"> 11. Have you read the Handbook for American Bulldogs provide on our website? </label>
                            <input type="text" class="form-control" id="q11" aria-describedby="q11">
                        </div>

                        <div class="bone-btn">
                            <button type="submit"><a class="bone"> <span>submit</span> </a></button>
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
                        
                    </form>
                </div>
            </div>
    </section>
    <img src="/frontend/assets/images/side-rings.png" class="rings1-img" />
@endsection