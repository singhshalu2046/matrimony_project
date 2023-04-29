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

<body style="background-color:#f0f2f5;">
<scetion class="signin-page">
    <div class="container">
      <div class="logo">
        <h1>Aquila Matrimony</h1>
      </div>
      <div class="row">


        <div class="col-lg-6 signup-leftimg">

          <img src="{{ URL::asset('forntend/images/signin-img.jpg') }}">

        </div>

        <div class="col-lg-6">

          <h2>Sign in</h2>

          <form action="{{url('/login')}}" method="post">
@csrf

            <input type="text" name="email" placeholder="Enter your Email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button> Sing in</button>

          </form>

          <div class="forget-password"><a href="#">Forgot password?</a> <input type="checkbox" name="remember"><label>
              Remember Me</label> </div>

          <div class="social-login">
            <p>Or Login with</p>

            <a href="#" class="facebook-login"><i class="fab fa-facebook-f"></i> Facebook</a> <a href="#"
              class="linkedin-login"><i class="fab fa-linkedin-in"></i> Linkedin</a>
          </div>


        </div>


      </div>
    </div>
  </scetion>

  <footer>
    <section class="main-footer">
      <div class="container">


        <p class="copyright">All rights reserved © 2022 Aquila Matrimony </p>
      </div><!-- container-->
    </section>
  </footer>


    



    <script src="https://kit.fontawesome.com/69b12198c3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<script src="{{ URL::asset('forntend/js/bootstrap.min.js') }}"></script>


</body>

</html>