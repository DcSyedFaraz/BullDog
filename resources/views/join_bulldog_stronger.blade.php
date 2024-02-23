@extends('layouts.master')
@section('content')
<section class="main-1" data-aos="zoom-in">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="login-form">
                        <form>
                            <h3 class="login-txt">Join Bulldog Stronger</h3>
                            <!-- <p class="new-text">New to this site? <a href="./sign-up.html"> Sign Up</a> </p> -->
                            <div class="form-group mb-3 mt-4">
                                <input type="name" class="form-control" id="nameInputnamne1"
                                    aria-describedby="name" placeholder="Enter Your Name" required>
                            </div>
                            <div class="form-group mb-3 mt-4">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Your Email" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="Zip" class="form-control" id="exampleInputzip1"
                                    placeholder="Enter Your Zip" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1">I agree to receive further information to become member.</label>
                            </div>
                            <div class="bone-btn1">
                                <button class="submit-bone" type="submit">
                                    <span>Join</span>
                                </button>

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
                        <!-- <a class="forget" href="./reset-password.html">Forget Password?</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <img src="/frontend/assets/images/side-rings.png" class="rings1-img" />
    @endsection