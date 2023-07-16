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
                            <div class="mob-logo-show"><a href="#">
                                    <div class="logo">
                                        <h1>Aquila</h1>
                                    </div>
                                </a></div>
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
                                        <a class="nav-link" href="#"> MAILBOX </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> UPGRADE NOW </a>
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
                            <li>
                                <a href="{{url('/logout')}}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div><!--col-lg-2-->
            </div><!-- row-->
        </div>
    </header>
</section>