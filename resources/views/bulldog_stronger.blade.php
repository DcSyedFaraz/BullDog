@extends('layouts.master')
@section('content')
<div class="banners-slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 leftter">
                <h2 class="plan-text">{{$section10->value}}</h2>
                <p>{{$section11->value}}</p>
                <div class="bone-btn">
                    <a class="bone" href="/join_bulldog_stronger">
                        <span>Join the Club</span>
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
            <div class="col-lg-6 col-sm-12">
                <div class="slider-place text-center">
                <div class="slick-wrapper">
                    <div id="slickly">
                          @foreach($sliders as $row)
                        <div class="slide-item imager">
                            <img src="/uploads/slider/{{$row->image}}">
                          </div>
                          <div class="slide-item content">
                            <div class="member-bio-wrapper">
                                <div class="box-title">{{$row->title}}</div>
                                <div class="member-bio">   
                                    <div class="member-info">
                                        <div class="mname"><strong>{{$row->heading}}</strong></div>
                                        <!-- <div class="mloc">Sarasota to Lee FL</div> -->
                                    </div>
                                </div>
                                <div class="member-comment">
                                    <!-- <strong>First slam shady</strong> -->
                                {{$row->description}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="slide-item imager">
                            <img src="./assets/images/slider/slider11666.jpg">
                          </div>
                          <div class="slide-item content">
                            <div class="member-bio-wrapper"><div class="box-title">Community</div>
                                <div class="member-bio">   
                                    <div class="member-info">
                                        <div class="mname">Jeff Tierney</div>
                                        <div class="mloc">Sarasota to Lee FL</div>
                                    </div>
                                </div>
                                <div class="member-comment"><strong>First slam shady</strong><br> Right off of a point like the weekend game plan said - my first fish on the slam shady. good little fight!</div>
                            </div>
                        </div> -->
                          
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- //////////////////////////////////// -->

<div class="club">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2 class="main-heading">WHAT CAN BULLDOG STRONGER DO FOR YOU?</h2>
            </div>
        </div>
    </div>
    <div class="container boxess">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <img src="/uploads/user/profiles/{{$section20->value}}">
                <h5>{{$section21->value}} </h5>
                <p>{{$section22->value}}</p>
                <a href="#" class="link-with-icon">{{$section23->value}} <i class="fa fa-chevron-down"></i> </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <img src="/uploads/user/profiles/{{$section24->value}}">
                <h5>{{$section25->value}}</h5>
                <p>{{$section26->value}}</p>
                <a href="#" class="link-with-icon">{{$section27->value}} <i class="fa fa-chevron-down"></i> </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <img src="/uploads/user/profiles/{{$section28->value}}">
                <h5>{{$section29->value}} </h5>
                <p>{{$section210->value}}</p>
                <a href="#" class="link-with-icon">{{$section211->value}} <i class="fa fa-chevron-down"></i> </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <img src="/uploads/user/profiles/{{$section212->value}}">
                <h5> {{$section213->value}}</h5>
                <p>{{$section214->value}}</p>
                <a href="#" class="link-with-icon"> {{$section215->value}} <i class="fa fa-chevron-down"></i> </a>
            </div>
        </div>
    </div>
</div>
<!-- //////////////////////////////////// -->
<div class="club started">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2 class="main-heading">
                    What started as massive love for Bulldog Breeds has become Bulldog Stronger!
                </h2>
            </div>
        </div>
    </div>
    <div class="container boxess">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <a href="/">
                <div class="widget-container">
                    <div class="icon-box-wrapper">
                        <div class="icon-box-icon"> 
                            <span class="icon animation"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none"><path d="M9 13C6.791 13 5 11.209 5 9C5 6.791 6.791 5 9 5C11.209 5 13 6.791 13 9C13 11.209 11.209 13 9 13Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M12 43H6L5 32L2 31V22C2 19.791 3.791 18 6 18H12C13.454 18 14.727 18.777 15.427 19.937" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M39 13C41.209 13 43 11.209 43 9C43 6.791 41.209 5 39 5C36.791 5 35 6.791 35 9C35 11.209 36.791 13 39 13Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M36 43H42L43 32L46 31V22C46 19.791 44.209 18 42 18H36C34.546 18 33.273 18.777 32.573 19.937" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M24 14C20.686 14 18 11.314 18 8C18 4.686 20.686 2 24 2C27.314 2 30 4.686 30 8C30 11.314 27.314 14 24 14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M29 46H19L18 34L14 33V23C14 20.791 15.791 19 18 19H30C32.209 19 34 20.791 34 23V33L30 34L29 46Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> </span>
                            </div>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title"> <span> 2000+ </span></h4>
                                    <p class="icon-box-description"> Engaged Community Members</p>
                                </div>
                            </div>
                        </div>
                    </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="/">
                <div class="widget-container-dod">
                    <div class="icon-box-wrapper">
                        <div class="icon-box-icon"> 
                            <span class="icon animation"> 
                                <svg fill="#ed2226" width="48" height="48"  version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                    viewBox="0 0 490 490" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M245,0C109.5,0,0,109.5,0,245s109.5,245,245,245s245-109.5,245-245S380.5,0,245,0z M245,449.3
                                            c-112.6,0-204.3-91.7-204.3-204.3S132.4,40.7,245,40.7S449.3,132.4,449.3,245S357.6,449.3,245,449.3z"/>
                                        <path d="M323.2,287.7c-20.9,20.9-49,32.3-78.2,32.3s-57.3-11.5-78.2-32.3c-8.3-8.3-20.9-8.3-29.2,0s-8.3,20.9,0,29.2
                                            c29.2,29.2,66.7,44.8,107.4,44.8s78.2-15.6,107.4-44.8c8.3-8.3,8.3-20.9,0-29.2C344,279.4,331.5,279.4,323.2,287.7z"/>
                                        <circle cx="156.4" cy="173.5" r="20.5"/>
                                        <circle cx="333.6" cy="173.5" r="20.5"/>
                                    </g>
                                </g>
                                </svg>
							</span>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title"> <span> 500+  </span></h4>
                                <p class="icon-box-description"> Happy Bulldog Owners</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="/available_pups">
                <div class="widget-container-dod">
                    <div class="icon-box-wrapper">
                        <div class="icon-box-icon"> 
                            <span class="icon animation"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none"><path d="M6 29V10C6 8.93913 6.42143 7.92172 7.17157 7.17157C7.92172 6.42143 8.93913 6 10 6H38C39.0609 6 40.0783 6.42143 40.8284 7.17157C41.5786 7.92172 42 8.93913 42 10V29" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M31 34V37H17V34H2V35C2 36.8565 2.7375 38.637 4.05025 39.9497C5.36301 41.2625 7.14348 42 9 42H39C40.8565 42 42.637 41.2625 43.9497 39.9497C45.2625 38.637 46 36.8565 46 35V34H31Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M21 15V25L29 20L21 15Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> 
                            </span>
                        </div>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title"> 
                                <span> Pups Available </span>
                            </h4>
                            <p class="icon-box-description"> For Adoption</p>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="/planned_breeding">
                    <div class="widget-container-dod">
                        <div class="icon-box-wrapper">
                            <div class="icon-box-icon"> 
                                <span class="icon animation"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none"><path d="M24 46C36.1503 46 46 36.1503 46 24C46 11.8497 36.1503 2 24 2C11.8497 2 2 11.8497 2 24C2 36.1503 11.8497 46 24 46Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M24 8V12" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M40 24H36" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M24 40V36" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8 24H12" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M24 24V8" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M24 24V11" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> 
                                </span>
                            </div>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title"> 
                                    <span> 20+ Years </span>
                                </h4>
                                <p class="icon-box-description">Experience Of Successful Breeding</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="/">
                <div class="widget-container-dod">
                    <div class="icon-box-wrapper">
                        <div class="icon-box-icon"> 
                            <span class="icon animation"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none"><path d="M9 12H17" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M23 24H15" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9 36H17" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M30 6V18" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M36 18V30" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M30 30V42" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M40 6H2V18H40V6Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M46 18H8V30H46V18Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M40 30H2V42H40V30Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> 
                            </span>
                        </div>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title"> 
                                <span> Weekly </span>
                            </h4>
                            <p class="icon-box-description"> Bulldog Newsletter </p>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="/contact_us">
                <div class="widget-container-dod">
                    <div class="icon-box-wrapper">
                        <div class="icon-box-icon"> 
                            <span class="icon animation"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none"><g clip-path="url(#clip0_2908_19516)"><rect width="48" height="48" fill="white"></rect><rect x="22.0833" y="7" width="24.9167" height="26" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></rect><rect x="22.0833" y="7" width="24.9167" height="19.5" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></rect><rect x="3.77517" y="5.00195" width="29.2551" height="38.5311" transform="rotate(-13.8475 3.77517 5.00195)" fill="white"></rect><rect x="1.09299" y="8.74121" width="29.2551" height="30.5271" transform="rotate(-13.8475 1.09299 8.74121)" fill="white" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></rect><path d="M35.0152 25.6414L7.4479 32.4368" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M8.8385 12.5991C9.28341 14.404 11.1074 15.5066 12.9123 15.0617C14.7172 14.6168 15.8198 12.7928 15.3749 10.9879C14.93 9.18297 13.106 8.08037 11.3011 8.52528C9.49618 8.97019 8.39358 10.7942 8.8385 12.5991Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M19.7996 28.1731L18.7106 23.7553L18.9663 19.8497M12.9078 29.872L12.3088 27.4422L9.90266 27.5667L8.2147 20.719C7.97414 19.7431 8.8077 18.6984 10.0764 18.3856L16.9682 16.6868C18.2369 16.3741 21.6375 5.97176 21.8781 6.94766" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M27.412 14.2409C26.7643 15.1016 25.8841 15.6945 24.8923 15.9382C23.9016 16.1834 22.8474 16.068 21.8745 15.6079" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M26.1965 21.2291L24.8946 23.921L28.5997 23.0072L26.1965 21.2291Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M23.7662 11.3564C23.7662 11.3564 21.2928 13.8087 22.0066 16.7045C22.8632 20.1795 26.1935 21.2016 26.1935 21.2016C26.1935 21.2016 28.6641 18.7465 27.8103 15.2744C27.0875 12.342 23.7662 11.3564 23.7662 11.3564Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M23.2216 40.1716C24.8504 38.6095 27.4913 38.6095 29.1201 40.1716L32.0694 43L29.1201 45.8284C27.4913 47.3905 24.8504 47.3905 23.2216 45.8284C21.5928 44.2663 21.5928 41.7337 23.2216 40.1716Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M34.8799 40.1716C36.5087 38.6095 39.1496 38.6095 40.7784 40.1716C42.4072 41.7337 42.4072 44.2663 40.7784 45.8284C39.1496 47.3905 36.5087 47.3905 34.8799 45.8284L31.9306 43L34.8799 40.1716Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_2908_19516"><rect width="48" height="48" fill="white"></rect></clipPath></defs></svg> 
                            </span>
                        </div>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title"> <span> Active </span></h4>
                            <p class="icon-box-description"> Customer Support</p>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div>
</div>
<!-- //////////////////////////////////// -->
<div class="first-contentual">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img width="100%" src="/frontend/assets/images/slider/sliderrr%20(2).png">
            </div>
            <div class="col-lg-6 col-sm-12">
                <h6 class="heading-title">{{$section30->value}}</h6>
                <h4 class="main-heading-title">{{$section31->value}}</h4>
                <ul class="icon-list-items">
                    <li class="icon-list-item"> 
                        <!-- <span class="icon-list-icon"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none"><path d="M17 1V6" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M33 17H28" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17 33V28" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 17H6" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M22.2309 18.1976C20.6236 17.9192 19.1419 17.1501 17.9892 15.996C16.8357 14.8443 16.0667 13.364 15.7876 11.7581" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.9227 21.1939C13.9672 20.8823 13.8625 20.568 13.6399 20.3454C13.4173 20.1228 13.103 20.018 12.7914 20.0625L8.85858 20.6244C8.48359 20.6779 8.17106 20.9388 8.05129 21.2982C7.93153 21.6575 8.0251 22.0537 8.29299 22.3215L11.6639 25.6915C11.9318 25.9593 12.3279 26.0528 12.6872 25.933C13.0465 25.8132 13.3073 25.5007 13.3609 25.1258L13.9227 21.1939Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M22.4829 11.5015C22.4829 11.5015 17.4274 9.81599 14.6183 12.6251C12.2635 14.9799 12.7331 19.8588 12.7331 19.8588L13.6664 20.3255C13.6664 20.3255 13.9723 20.3255 13.9723 21.2996C15.6299 21.5975 18.932 21.7909 21.3593 19.367C24.2039 16.5224 22.4829 11.5015 22.4829 11.5015Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><rect x="1" y="1" width="32" height="32" rx="10" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></rect></svg> 
                        </span>  -->
                        <span class="icon-list-text">{{$section32->value}}
							</span></li>
                        <!-- <li class="icon-list-item"> 
                            <span class="icon-list-icon"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M1 27C2.43054 27.0038 3.84431 26.6921 5.14065 26.0871C6.43698 25.4821 7.58399 24.5988 8.5 23.5C9.41852 24.5959 10.566 25.4772 11.8618 26.0818C13.1576 26.6865 14.5701 26.9998 16 26.9998C17.4299 26.9998 18.8424 26.6865 20.1382 26.0818C21.434 25.4772 22.5815 24.5959 23.5 23.5C24.4135 24.6017 25.56 25.4871 26.8569 26.0924C28.1538 26.6976 29.5688 27.0076 31 27" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 19.0001H2.364C10.545 19.0001 8.784 10.2601 13.976 5.92509C19.676 1.16709 24.831 6.60209 25.64 7.61809C19.976 8.63409 21.455 19.0001 29.636 19.0001H31" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> </span> 
                                <span class="icon-list-text">Use along with our other tools like:<br><strong>Smart Tides • Community Spots  • Trend Analyzer</strong>
                                </span>
                            </li> -->
                        </ul>
                        <img src="/uploads/user/profiles/{{$section33->value}}">
                        <p><strong>{{$section34->value}}</strong></p>
                        <div class="bone-btn">
                            <a class="bone" href="{{$section35->value}}">
                                <span>Watch the Demo</span>
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
<!-- //////////////////////////////////// -->
<div class="seconderly-contentual">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <h6 class="heading-title">{{$section40->value}}</h6>
                <h4 class="main-heading-title">{{$section41->value}}</h4>
                <ul class="icon-list-items">
                    <li class="icon-list-item"> 
                        <!-- <span class="icon-list-icon"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none"><path d="M17 1V6" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M33 17H28" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17 33V28" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 17H6" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M22.2309 18.1976C20.6236 17.9192 19.1419 17.1501 17.9892 15.996C16.8357 14.8443 16.0667 13.364 15.7876 11.7581" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.9227 21.1939C13.9672 20.8823 13.8625 20.568 13.6399 20.3454C13.4173 20.1228 13.103 20.018 12.7914 20.0625L8.85858 20.6244C8.48359 20.6779 8.17106 20.9388 8.05129 21.2982C7.93153 21.6575 8.0251 22.0537 8.29299 22.3215L11.6639 25.6915C11.9318 25.9593 12.3279 26.0528 12.6872 25.933C13.0465 25.8132 13.3073 25.5007 13.3609 25.1258L13.9227 21.1939Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M22.4829 11.5015C22.4829 11.5015 17.4274 9.81599 14.6183 12.6251C12.2635 14.9799 12.7331 19.8588 12.7331 19.8588L13.6664 20.3255C13.6664 20.3255 13.9723 20.3255 13.9723 21.2996C15.6299 21.5975 18.932 21.7909 21.3593 19.367C24.2039 16.5224 22.4829 11.5015 22.4829 11.5015Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><rect x="1" y="1" width="32" height="32" rx="10" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></rect></svg> 
                        </span>  -->
                        <span class="icon-list-text">{{$section42->value}}</span></li>
                        <!-- <li class="icon-list-item"> 
                            <span class="icon-list-icon"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M1 27C2.43054 27.0038 3.84431 26.6921 5.14065 26.0871C6.43698 25.4821 7.58399 24.5988 8.5 23.5C9.41852 24.5959 10.566 25.4772 11.8618 26.0818C13.1576 26.6865 14.5701 26.9998 16 26.9998C17.4299 26.9998 18.8424 26.6865 20.1382 26.0818C21.434 25.4772 22.5815 24.5959 23.5 23.5C24.4135 24.6017 25.56 25.4871 26.8569 26.0924C28.1538 26.6976 29.5688 27.0076 31 27" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 19.0001H2.364C10.545 19.0001 8.784 10.2601 13.976 5.92509C19.676 1.16709 24.831 6.60209 25.64 7.61809C19.976 8.63409 21.455 19.0001 29.636 19.0001H31" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> </span> 
                                <span class="icon-list-text">Use along with our other tools like:<br><strong>Smart Tides • Community Spots  • Trend Analyzer</strong>
                                </span>
                            </li> -->
                        </ul>
                        <!--<div class="bone-btn">
                            <a class="bone" href="#">
                                <span>Watch the Demo</span>
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
                        </div>-->
            </div>
            <div class="col-lg-6 col-sm-12">
                <img width="100%" src="/uploads/user/profiles/{{$section43->value}}">
            </div>
        </div>
    </div>
</div>
<!-- //////////////////////////////////// -->
<div class="thirdly-contentual">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img width="100%" src="/uploads/user/profiles/{{$section50->value}}">
            </div>
            <div class="col-lg-6 col-sm-12">
                <h6 class="heading-title">{{$section51->value}}</h6>
                <h4 class="main-heading-title">{{$section52->value}}</h4>
                <ul class="icon-list-items">
                    <li class="icon-list-item"> 
                        <!-- <span class="icon-list-icon"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none"><path d="M17 1V6" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M33 17H28" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17 33V28" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 17H6" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M22.2309 18.1976C20.6236 17.9192 19.1419 17.1501 17.9892 15.996C16.8357 14.8443 16.0667 13.364 15.7876 11.7581" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M13.9227 21.1939C13.9672 20.8823 13.8625 20.568 13.6399 20.3454C13.4173 20.1228 13.103 20.018 12.7914 20.0625L8.85858 20.6244C8.48359 20.6779 8.17106 20.9388 8.05129 21.2982C7.93153 21.6575 8.0251 22.0537 8.29299 22.3215L11.6639 25.6915C11.9318 25.9593 12.3279 26.0528 12.6872 25.933C13.0465 25.8132 13.3073 25.5007 13.3609 25.1258L13.9227 21.1939Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M22.4829 11.5015C22.4829 11.5015 17.4274 9.81599 14.6183 12.6251C12.2635 14.9799 12.7331 19.8588 12.7331 19.8588L13.6664 20.3255C13.6664 20.3255 13.9723 20.3255 13.9723 21.2996C15.6299 21.5975 18.932 21.7909 21.3593 19.367C24.2039 16.5224 22.4829 11.5015 22.4829 11.5015Z" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><rect x="1" y="1" width="32" height="32" rx="10" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></rect></svg> 
                        </span>  -->
                        <span class="icon-list-text">{{$section53->value}}</span></li>
                        <!-- <li class="icon-list-item"> 
                            <span class="icon-list-icon"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M1 27C2.43054 27.0038 3.84431 26.6921 5.14065 26.0871C6.43698 25.4821 7.58399 24.5988 8.5 23.5C9.41852 24.5959 10.566 25.4772 11.8618 26.0818C13.1576 26.6865 14.5701 26.9998 16 26.9998C17.4299 26.9998 18.8424 26.6865 20.1382 26.0818C21.434 25.4772 22.5815 24.5959 23.5 23.5C24.4135 24.6017 25.56 25.4871 26.8569 26.0924C28.1538 26.6976 29.5688 27.0076 31 27" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M1 19.0001H2.364C10.545 19.0001 8.784 10.2601 13.976 5.92509C19.676 1.16709 24.831 6.60209 25.64 7.61809C19.976 8.63409 21.455 19.0001 29.636 19.0001H31" stroke="#ed2226" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> </span> 
                                <span class="icon-list-text">Use along with our other tools like:<br><strong>Smart Tides • Community Spots  • Trend Analyzer</strong>
                                </span>
                            </li> -->
                        </ul>
                        <div class="bone-btn">
                            <a class="bone" href="/">
                                <span>Go Shopping </span>
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
<!-- //////////////////////////////////// -->
<section style="margin: 50px 0px;" class="main-8" id="contact-us" data-aos="zoom-in">
    <div class="container">
        <div class="contact-div">
            <div class="row align-items-center">
                <h3 style="text-align: center;" class="contact-text">Join the #1 Bulldog Club, Become Bulldog Stronger member. </h3>
                <div class="col-sm-6">
                    <img src="/frontend/assets/images/bulldog-stronger.png" alt="penny-img" class="penny-img" />
                </div>
                <div class="col-sm-6">
                    
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

@endsection