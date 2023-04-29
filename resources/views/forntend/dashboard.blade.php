<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ URL::asset('forntend/css/bootstrap.min.css') }}">

       <link rel="stylesheet" href="{{ URL::asset('forntend/css/bootstrap.css') }}">

        <link rel="stylesheet" href="{{ URL::asset('forntend/css/style2.css') }}">
 <link rel='stylesheet' href="{{ URL::asset('forntend/css/owl.carousel.css') }}">
        

       

    <title>Aquila Matrimony</title>
  </head>
  <body style="background-color:#f0f2f5;">
      <section class="main-head">
          
      
      <header>
          <div class="container">
              <div class="row">
                  <div class="col-lg-2">
                      <div class="logo desk-show">
                          <h1>Aquila</h1>
                      </div>
                  </div><!-- col-lg-2-->
                   <div class="col-lg-8">
                       <div class="menu-sec">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                  <div class="mob-logo-show"><a href="#"><div class="logo">
                          <h1>Aquila</h1>
                      </div></a></div>
                                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                  </button>
                                  <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                      <li class="nav-item">
                                        <a class="nav-link" href="#">MY HOME </a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="#">SEARCH</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="#"> MATCHES 2,586</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="#">  MAILBOX  </a>
                                      </li>
                                      
                                      <li class="nav-item">
                                        <a class="nav-link" href="#"> UPGRADE NOW  </a>
                                      </li>
                                      
                                      <li class="nav-item">
                                        <a class="nav-link" href="#"> Help </a>
                                      </li>
                                    </ul>
                                  </div>
                            </nav>
                        </div>
                  </div><!-- col-lg-8-->
                  <div class="col-lg-2">
                      <div class="head-right">
                          <ul>
                              <li><img src="{{ URL::asset('forntend/img/notfication-icon.png')}}"><span>01</span></li>
                              <li><img src="{{ URL::asset('forntend/img/own-profile-icon.png')}}"></li>
                              <li><select class="form-control">


								<option value="{{url('/logout')}}">Logout</option>
									

							</select></li>
                          </ul>
                      </div>
                  </div><!--col-lg-2-->
              </div><!-- row-->
          </div>
      </header>
      </section>

<section class="top-ver">
    <div class="container">
        <div class="veri-prfle-div">
            <span>Your profile is pending verification! Verify now to get better responses</span><a href="#">Verify Profile</a>
        </div>
    </div>
</section>

<scetion class="main-dashboard">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="left-profile">
                    <div class="profile-div">
                        <img src="{{ URL::asset('forntend/img/personimage.png')}}">
                        <h6>{{Session::get('user_name')}}</h6>
                        <span>AM0001234</span>
                    </div><!-- profile-div-->
                    <div class="accnt-type">
                        <span>Account Type</span>
                        <p>Free Membership <button>Upgrade</button></p>
                        
                    </div>
                     <div class="accnt-type">
                        <span>Mobile no. is verified</span>
                        <a href="#">Verify Your Profile</a>
                        
                    </div>
                    <div class="profile-option">
                        <ul>
                            <li><a href="#"><i class="fas fa-user-edit"></i>Edit Profile</a></li>
                            <li><a href="#"><i class="fas fa-edit"></i>Edit Preferences</a></li>
                            <li><a href="#"><i class="fas fa-calendar-alt"></i>Daily Recommendations</a></li>
                            <li><a href="#"><i class="fas fa-comments"></i>Your Conversations</a></li>
                            <li><a href="#"><i class="fas fa-phone-alt"></i>Your Calls</a></li>
                            <li><a href="#"><i class="fas fa-sms"></i>SMS received/sent</a></li>
                            <li><a href="#"><i class="fas fa-cog"></i>Settings</a></li>
                             <li><a href="#"><i class="fas fa-headset"></i>Help</a></li>
                        </ul>
                    </div>
                </div><!-- left profile-->
            </div><!-- col-lg-3-->
              <div class="col-lg-6">
                <div class="center-match-div">
                    <div class="first-head">
                         <p>Today Recommendations<span>Time left - 04 : 56 : 51</span><a href="#">View All</a></p>
                    </div>
                    <div class="owl-carousel today-slider">
                        
                        <div class="today-match">
                            <img src="{{ URL::asset('forntend/img/match-01.png')}}">
                            <p>Kiran Kumari</p>
                        </div>
                         <div class="today-match">
                            <img src="{{ URL::asset('forntend/img/match-02.png')}}">
                            <p>Kiran Kumari</p>
                        </div>
                         <div class="today-match">
                            <img src="{{ URL::asset('forntend/img/match-03.png')}}">
                            <p>Kiran Kumari</p>
                        </div>
                         <div class="today-match">
                            <img src="{{ URL::asset('forntend/img/match-04.png')}}">
                            <p>Kiran Kumari</p>
                        </div>
                         <div class="today-match">
                            <img src="{{ URL::asset('forntend/img/match-05.png')}}">
                            <p>Kiran Kumari</p>
                        </div>
                         <div class="today-match">
                            <img src="{{ URL::asset('forntend/img/match-04.png')}}">
                            <p>Kiran Kumari</p>
                        </div>
                         <div class="today-match">
                            <img src="{{ URL::asset('forntend/img/match-05.png')}}">
                            <p>Kiran Kumari</p>
                        </div>
                       
                        
                    </div><!-- owl-carousel-->
                      <div class="second-head">
                         <p>New Matches for you<span>(227)</span><a href="#">View All</a></p>
                    </div>
                     <div class="owl-carousel new-match-slider">
                         
                         <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/new-match-01.jpg')}}">
                            <p>Kiran Kumari</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/new-match-02.jpg')}}">
                            <p>Kajal Jhaa</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/new-match-03.jpg')}}">
                            <p>Purva Tiwari</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/new-match-04.jpg')}}">
                            <p>Aarshiya Gupta</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/new-match-01.jpg')}}">
                            <p>Kiran Kumari</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                        </div>
                         
                    </div><!-- owl-carousel-->
                    <div class="second-head">
                         <p>Premium Matches<span>(121)</span><a href="#">View All</a></p>
                    </div>
                     <div class="owl-carousel Premium-match-slider">
                         
                         <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-01.jpg')}}">
                            <p>Kiran Kumari</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                        </div>
                       <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-02.jpg')}}">
                            <p>Kajal Jhaa</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                            </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-03.jpg')}}">
                            <p>Purva Tiwari</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                            </div>
                      <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-04.jpg')}}">
                            <p>Aarshiya Gupta</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                            </div>
                       <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/new-match-01.jpg')}}">
                            <p>Kiran Kumari</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                         </div>
                    </div><!-- owl-carousel-->
                     <div class="second-head">
                         <p>Total Matches<span>(1021)</span><a href="#">View All</a></p>
                    </div>
                     <div class="owl-carousel Premium-match-slider">
                         
                         <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-01.jpg')}}">
                            <p>Kiran Kumari</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                        </div>
                       <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-02.jpg')}}">
                            <p>Kajal Jhaa</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                            </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-03.jpg')}}">
                            <p>Purva Tiwari</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                            </div>
                      <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-04.jpg')}}">
                            <p>Aarshiya Gupta</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                            </div>
                       <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/new-match-01.jpg')}}">
                            <p>Kiran Kumari</p>
                            <span>New Delhi<br>
                            28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                         </div>
                    </div><!-- owl-carousel-->
                </div><!-- center match div -->
            </div><!-- col-lg-6-->
              <div class="col-lg-3">
                <div class="right-side">
                    <div class="recent-activity">
                        <p>Recent Activity Summary</p>
                    <ul>
                        <li>05</li>
                        <li>10</li>
                        <li>21</li>
                    </ul>
                    </div>
                     <div class="activity-summary">
                    <ul>
                        <li>Pending 
                        Invitations</li>
                        <li>Accepted 
Invitations</li>
                        <li>Viewed
Your Profile</li>
                    </ul>
                    
                    </div><!-- activity summary-->
                    <div class="online-active" id="myDIV">
                        <p>Online Active Members</p>
				        <ul>

					<li><button class="active-btn ">Active (20)</button></li>

					<li><button class="chats-btn ">Chats</button></li>

					<li><button class="alerts-btn ">Alerts</button></li>

				</ul>
	       
                    </div><!-- online-active-->
                    <div class="online-members div-1">
			    <ul>
			        <li><img src="{{ URL::asset('forntend/img/match-04.png')}}">Divya K</li>
			        <li><span>.</span></li>
			    </ul>
			    <ul>
			        <li><img src="{{ URL::asset('forntend/img/match-04.png')}}">Divya K</li>
			        <li><span>.</span></li>
			    </ul>
			    <ul>
			        <li><img src="{{ URL::asset('forntend/img/match-04.png')}}">Divya K</li>
			        <li><span>.</span></li>
			    </ul>
			   <ul>
			        <li><img src="{{ URL::asset('forntend/img/match-04.png')}}">Divya K</li>
			        <li><span>.</span></li>
			    </ul>
			   
			   <ul>
			        <li><img src="{{ URL::asset('forntend/img/match-04.png')}}">Divya K</li>
			        <li><span>.</span></li>
			    </ul>
			    <ul>
			        <li><img src="{{ URL::asset('forntend/img/match-04.png')}}">Divya K</li>
			        <li><span>.</span></li>
			    </ul>
			     <ul>
			        <li><img src="{{ URL::asset('forntend/img/match-04.png')}}">Divya K</li>
			        <li><span>.</span></li>
			    </ul>
			    <ul>
			        <li><img src="{{ URL::asset('forntend/img/match-04.png')}}">Divya K</li>
			        <li><span>.</span></li>
			    </ul>
			    <ul>
			        <li><img src="{{ URL::asset('forntend/img/match-04.png')}}">Divya K</li>
			        <li><span>.</span></li>
			    </ul>
			   <ul>
			        <li><img src="{{ URL::asset('forntend/img/match-04.png')}}">Divya K</li>
			        <li><span>.</span></li>
			    </ul>
			   
			   <ul>
			        <li><img src="{{ URL::asset('forntend/img/match-04.png')}}">Divya K</li>
			        <li><span>.</span></li>
			    </ul>
			    <ul>
			        <li><img src="{{ URL::asset('forntend/img/match-04.png')}}">Divya K</li>
			        <li><span>.</span></li>
			    </ul>
			</div><!--- online-members-->
			
			 
			
			
                <div class="serach-id">
                    <input type="search" placeholder="Search by Matrimony ID">
                    <select>
							<option>Online</option>
							<option>Demo</option>
							<option>Demo2</option>
						</select>
                </div>
                    
                </div><!-- right side-->
            </div><!-- col-lg-3-->
        </div>
    </div>
</scetion>

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

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script src="{{ URL::asset('forntend/js/owl.carousel.min.js')}}"></script>
<script src="{{ URL::asset('forntend/js/bootstrap.min.js')}}"></script>



<script>
$(document).ready(function(){
  $(".active-btn").click(function(){
  	$(".div-1").show();
    $(".div-2").hide();
    $(".div-3").hide();
  });

  $(".chats-btn").click(function(){
    $(".div-2").show();
    $(".div-1").hide();
    $(".div-3").hide();
  });

  $(".alerts-btn").click(function(){
  	$(".div-3").show();
    $(".div-2").hide();
    $(".div-1").hide();
  });


});
</script>

<script>
	$('.today-slider').owlCarousel({

  items: 6,

  loop: true,

  autoplay: true,

  autoplayTimeout: 3000,

  margin: 15,

  nav: true,

  dots: false,

  navText: ['<span class="fa fa-angle-left  fa-2x"></span>','<span class="fas fa fa-angle-right fa-2x"></span>'],

    responsive: {

        0:{

          items: 2

        },

        768:{

          items: 2

        },

        1080:{

          items: 5

        }

    }

  

  })


</script>

<script>
	$('.new-match-slider').owlCarousel({

  items: 6,

  loop: true,

  autoplay: true,

  autoplayTimeout: 3000,

  margin: 15,

  nav: true,

  dots: false,

  navText: ['<span class="fa fa-angle-left  fa-2x"></span>','<span class="fas fa fa-angle-right fa-2x"></span>'],

    responsive: {

        0:{

          items: 2

        },

        768:{

          items: 2

        },

        1080:{

          items: 4

        }

    }

  

  })


</script>

<script>
	$('.Premium-match-slider').owlCarousel({

  items: 6,

  loop: true,

  autoplay: true,

  autoplayTimeout: 3000,

  margin: 15,

  nav: true,

  dots: false,

  navText: ['<span class="fa fa-angle-left  fa-2x"></span>','<span class="fas fa fa-angle-right fa-2x"></span>'],

    responsive: {

        0:{

          items: 2

        },

        768:{

          items: 2

        },

        1080:{

          items: 4

        }

    }

  

  })


</script>

  </body>
</html>