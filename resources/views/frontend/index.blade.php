<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="{{ URL::asset('forntend/css/bootstrap.min.css') }}">



    <link rel="stylesheet" href="{{ URL::asset('forntend/css/bootstrap.css') }}">



    <link rel="stylesheet" href="{{ URL::asset('forntend/css/style.css') }}">



    <title>Aquila Matrimony</title>

</head>

<body>

    <header>

        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="logo">

                        <h1>Aquila Matrimony</h1>

                    </div>

                </div><!-- col-lg-6-->

                <div class="col-lg-6">

                    <div class="accnt-div">

                        <ul>

                            <li><a href="{{url('/')}}"><i class="fas fa-user"></i>SIGN UP</a></li>

                            <li><a href="{{url('/login')}}"><i class="fas fa-sign-in-alt"></i>LOGIN</a></li>

                        </ul>

                    </div>

                </div><!-- col-lg-6-->

            </div><!-- row-->

        </div>

    </header>



    <section class="banner">

        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="banner-left">

                        <p>FIND YOUR PERFECT LIFE

                            Partner</p>

                        <span>We bring people together, Love unites them...</span>



                        <ul>

                            <li>
                                <div class="qlity-box">

                                    <img src="{{ URL::asset('forntend/images/bst-match-icon.png')}}">

                                    <p>Best Matches</p>

                                </div>
                            </li>

                            <li>
                                <div class="qlity-box">

                                    <img src="{{ URL::asset('forntend/images/trst-family-icon.png')}}">

                                    <p>Trusted Family</p>

                                </div>
                            </li>

                            <li>
                                <div class="qlity-box">

                                    <img src="{{ URL::asset('forntend/images/verf-prfl-icon.png')}}">

                                    <p>Verified Profiles</p>

                                </div>
                            </li>

                            <li>
                                <div class="qlity-box">

                                    <img src="{{ URL::asset('forntend/images/privacy-icon.png')}}">

                                    <p>100% Privacy</p>

                                </div>
                            </li>

                        </ul>



                    </div>

                </div><!-- col-lg-6-->

                <div class="col-lg-1">



                </div>

                <div class="col-lg-4">

                    <div class="sign-up-form">

                        <p>Sign up for Free</p>
                        @if (Session::get('success'))

                        <div class="alert alert-success alert-dismissable">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                            {{ Session::get('success') }}

                        </div>

                        @endif


                        @if($errors->any())
                    	@foreach($errors->all() as $error)
                            
                            <div class="alert alert-danger alert-dismissable m-0">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                            {{  $error }}

                            </div> 
                            @endforeach
                        @endif



                        <form action="{{url('/signup')}}" method="post">

                            @csrf
                            <input type="radio" id="html" name="gender" value="Male" required><label for="html">Male</label>

                            <input type="radio" id="css" name="gender" value="Female" required><label for="css">Female</label>

                            <input type="radio" id="javascript" name="gender" value="Others" required><label for="">Others</label>

                            <div class="contact-form">

                                <input type="text" class="form-control" name="user_name" required placeholder="Name">

                                <select class="form-control" name="profile_creator" required id="exampleFormControlSelect1">

                                    <option>Profile Creator</option>
                                    <option value="Parents">Parents</option>
                                    <option value="Self">Self</option>
                                    <option value="Sibling">Sibling</option>
                                    <option value="Relative">Relative</option>
                                    <option value="Friend">Friend</option>
                                </select>
                              
                                <select class="form-control" name="religion" required id="exampleFormControlSelect1">

                                    <option>Select Religion</option>
                                   
                                    @foreach($religions as $religion)
                                 
                                    <option value="{{$religion->name}}">{{$religion->name}}</option>
                                   
                                    @endforeach

                                </select>

                                <input type="email" name="email" required class="form-control" placeholder="Email Address">

                                <input type="number" name="contact_number" required class="form-control" placeholder="Mobile No.">

                                <input type="password" name="password" required class="form-control" placeholder="Password">

                                <input type="password" name="c_password" required class="form-control" placeholder="Confirm Password.">

                                <button type="submit">SIGN UP NOW</button>

                                <span>By clicking on 'Register Free', you confirm that you

                                    accept the <a href="#"> Terms of Use</a> and <a href="">Privacy Policy</a></span>

                            </div>
                        </form>
                    </div>

                </div><!-- col-lg-3-->

            </div><!-- row-->

        </div>

    </section>

    <section class="quote">

        <div class="container">

            <div class="quote-box">

                <h4><i class="fas fa-quote-left"></i>Quote of the day <i class="fas fa-quote-right"></i></h4>

                <p>A successful marriage requires falling in love many times, always with the same person.</p>

            </div>

        </div><!-- container-->

    </section>



    <section class="how sec-padd">

        <div class="container">

            <div class="hm-heading">

                <h2>How you will find <span>your loved one? </span></h2>

            </div>

            <div class="row">

                <div class="col-lg-3">

                    <div class="how-box">

                        <img src="{{ URL::asset('forntend/images/accnt-icon.png')}}">

                        <h4>Create Account</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indu stry. Lorem Ipsum has been the industry's standard .</p>

                    </div>

                </div><!-- col-lg-3-->

                <div class="col-lg-3">

                    <div class="how-box">

                        <img src="{{ URL::asset('forntend/images/profile-icon.png')}}">

                        <h4>Browse Profiles</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indu stry. Lorem Ipsum has been the industry's standard .</p>

                    </div>

                </div><!-- col-lg-3-->

                <div class="col-lg-3">

                    <div class="how-box">

                        <img src="{{ URL::asset('forntend/images/hw-cnnct-icon.png')}}">

                        <h4>Connect</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indu stry. Lorem Ipsum has been the industry's standard .</p>

                    </div>

                </div><!-- col-lg-3-->

                <div class="col-lg-3">

                    <div class="how-box">

                        <img src="{{ URL::asset('forntend/images/inertact-icon.png')}}">

                        <h4>Interact</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indu stry. Lorem Ipsum has been the industry's standard .</p>

                    </div>

                </div><!-- col-lg-3-->

            </div><!-- row-->

        </div>

    </section>



    <section class="about-us sec-padd">

        <div class="container">

            <div class="hm-heading">

                <h2>About The <span>Aquila Matrimony</span></h2>

            </div>

            <div class="row">

                <div class="col-lg-1">



                </div>

                <div class="col-lg-10">

                    <div class="about-box">

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker of Lorem Ipsum... <a href="">Read More</a></p>

                    </div>

                </div>

                <div class="col-lg-1">



                </div>

            </div><!-- row-->

        </div><!-- container-->

    </section>

    <section class="why-choose sec-padd">

        <div class="container">

            <div class="hm-heading">

                <h2>Why Choose Aquila Matrimony?</h2>

            </div>

            <div class="row">

                <div class="col-lg-4">

                    <div class="why-chhoose-box">

                        <img src="{{ URL::asset('forntend/images/family-icon.png')}}">

                        <h4>Get Complete Family Information</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indu stry. Lorem Ipsum has been the industry's standard .</p>

                    </div>

                </div><!-- col-lg-4-->

                <div class="col-lg-4">

                    <div class="why-chhoose-box">

                        <img src="{{ URL::asset('forntend/images/commnty-icon.png')}}">

                        <h4>Get Matches from your Community</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indu stry. Lorem Ipsum has been the industry's standard .</p>

                    </div>

                </div><!-- col-lg-4-->

                <div class="col-lg-4">

                    <div class="why-chhoose-box">

                        <img src="{{ URL::asset('forntend/images/connect-icon.png')}}">

                        <h4>Find Common Links with Prospects</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting indu stry. Lorem Ipsum has been the industry's standard .</p>

                    </div>

                </div><!-- col-lg-4-->

            </div><!-- row-->

        </div>

    </section>

    <section class="per-match sec-padd">

        <div class="container">

            <div class="hm-heading">

                <h2>Perfect Match by <span>Aquila Matrimony ?</span></h2>

            </div>

            <div class="row">

                <div class="col-lg-4">

                    <div class="perfect-match-box">

                        <img src="{{ URL::asset('forntend/images/couple-image.jpg')}}">

                        <h4>Akash & Kat</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially...<a href="#">Read More</a></p>

                    </div>

                </div><!-- col-lg-4-->

                <div class="col-lg-4">

                    <div class="perfect-match-box">

                        <img src="{{ URL::asset('forntend/images/couple-image-2.jpg')}}">

                        <h4>Akash & Kat</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially...<a href="#">Read More</a></p>

                    </div>

                </div><!-- col-lg-4-->

                <div class="col-lg-4">

                    <div class="perfect-match-box">

                        <img src="{{ URL::asset('forntend/images/couple-image-3.jpg')}}">

                        <h4>Akash & Kat</h4>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially...<a href="#">Read More</a></p>

                    </div>

                </div><!-- col-lg-4-->

            </div><!-- row-->

        </div>

    </section>



    <section class="browse sec-padd">

        <div class="container">

            <div class="hm-heading">

                <h2>Browse Profile by</h2>

            </div>

            <div class="brwse-top">

                <ul>

                    <li><a href="#">Mother Tongue</a></li>

                    <li><a href="#">Caste</a></li>

                    <li><a href="#">Religion</a></li>

                    <li><a href="#">City</a></li>

                    <li><a href="#">Occupation</a></li>

                    <li><a href="#">State</a></li>

                    <li><a href="#">Nri</a></li>

                    <li><a href="#">College</a></li>

                </ul>

            </div><!-- brwse-top-->

            <div class="brwse-link">

                <ul>

                    <li><a href="#">Bihari</a></li>

                    <li><a href="#">Hindi</a></li>

                    <li><a href="#">Gujrati</a></li>

                    <li><a href="#">Hindi Delhi</a></li>

                    <li><a href="#">Kannada</a></li>

                    <li><a href="#">Malayalam</a></li>

                    <li><a href="#">Marathi</a></li>

                    <li><a href="#">Oriya</a></li>

                    <li><a href="#">Punjab</a></li>

                    <li><a href="#">Rajasthani</a></li>

                    <li><a href="#">Tamil</a></li>

                    <li><a href="#">Telugu</a></li>

                    <li><a href="#">Hindi UP</a></li>

                    <li><a href="#">Hindi MP</a></li>

                    <li><a href="#">Konkani</a></li>

                    <li><a href="#">Himachali</a></li>

                    <li><a href="#">Haryanvi</a></li>

                    <li><a href="#">Assamase</a></li>

                    <li><a href="#">Kashmiri</a></li>

                    <li><a href="#">Sikkim Nepali</a></li>

                    <li><a href="#">Tulu</a></li>

                </ul>

            </div>

        </div>

    </section>

    <footer>

        <section class="main-footer">

            <div class="container">

                <div class="footer-link">

                    <ul>

                        <li><a href="#">Home </a></li>

                        <li><a href="#">About Us</a></li>

                        <li><a href="#">Blogs</a></li>

                        <li><a href="#">Careers</a></li>

                        <li><a href="#">Contact Us</a></li>

                        <li><a href="#">Terms Of Use</a></li>

                        <li><a href="#">Privacy Policy</a></li>

                        <li><a href="#">Feedback / Queries</a></li>

                    </ul>

                </div><!-- footer-link-->

                <div class="ftr-social">

                    <span>Follow Us</span>

                    <ul>

                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>

                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>

                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                    </ul>

                </div><!-- ftr-social-->

                <div class="ftr-loc">

                    <span>OFFICE LOCATIONS :</span>

                    <ul>

                        <li><a href="#">Mumbai</a></li>

                        <li><a href="#">Delhi</a></li>

                        <li><a href="#">Banglore</a></li>

                        <li><a href="#">Hyderabad</a></li>

                        <li><a href="#">Ahmedabad</a></li>

                        <li><a href="#">Chennai</a></li>

                        <li><a href="#">Jaipur</a></li>

                        <li><a href="#">Lucknow</a></li>

                        <li><a href="#">Bhopal</a></li>

                        <li><a href="#">Agra...</a></li>

                        <li><a href="#">View All</a></li>

                    </ul>

                </div><!-- ftr-social-->

                <p class="copyright">All rights reserved © 2022 Aquila Matrimony </p>

            </div><!-- container-->

        </section>

    </footer>



























    <script src="https://kit.fontawesome.com/69b12198c3.js" crossorigin="anonymous"></script>













</body>

</html>