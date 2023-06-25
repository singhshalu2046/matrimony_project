<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{url('admin/dashboard')}}" class="logo logo-dark">
            <span class="logo-sm">
                <!-- <img src="{{ URL::asset('admin/assets/images/logo-sm.png') }}" alt="" height="22"> -->
                <h6>Aquila Matrimony</h6>
            </span>
            <span class="logo-lg">
                <!-- <img src="{{ URL::asset('admin/assets/images/logo-dark.png') }}" alt="" height="17"> -->
                <h6>Aquila Matrimony</h6>
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{url('admin/dashboard')}}" class="logo logo-light">
            <span class="logo-sm">
                <!-- <img src="{{ URL::asset('admin/assets/images/logo-sm.png') }}" alt="" height="22"> -->
                <h6 style="color: white;">Aquila</h6>
            </span>
            <span class="logo-lg">
                <!-- <img src="{{ URL::asset('admin/assets/images/logo-light.png') }}" alt="" height="17">
             -->
             <h6 style="color: white;">Aquila Matrimony</h6>
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span >Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{url('admin/dashboard')}}">
                        <i class="las la-tachometer-alt"></i> <span >Dashboards</span>
                    </a>
                    
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->is("admin/customer*") ? "collapsed" : ""}}" href="#sidebarApps" data-bs-toggle="collapse"
                        role="button" aria-expanded="{{  request()->is("admin/customer*") ? "asa" : "gqwqw" }}" aria-controls="sidebarApps">
                        <i class="lab la-delicious"></i> <span >User</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->is("admin/customer*") ? "show" : ""}}" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                            <a href="{{url('admin/customer')}}" class="nav-link" >All User</a>
                            </li>                            
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->is("admin/country*") ? "menu-open" : "" }} {{ request()->is("admin/language*") ? "menu-open" : "" }}" href="#sidebarApps" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="lab la-delicious"></i> <span >Location</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                            <a href="{{url('admin/country')}}" class="nav-link" >Country</a>
                            </li>
                            
                        </ul>
                    </div>

                    <div class="collapse menu-dropdown"  id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                            <a href="{{url('admin/state')}}" class="nav-link" >State</a>
                            </li>
                           
                            
                        </ul>
                    </div>
                    <div class="collapse menu-dropdown"  id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                            <a href="{{url('admin/district')}}" class="nav-link" >District</a>
                            </li>
                           
                            
                        </ul>
                    </div>

                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->is("admin/religion*") ? "menu-open" : "" }} {{ request()->is("admin/cast*") ? "menu-open" : "" }}" href="#sidebarApps" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="lab la-delicious"></i> <span >Religion</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                            <a href="{{url('admin/religion')}}" class="nav-link" >Religion</a>
                            </li>
                            
                        </ul>
                    </div>

                    <div class="collapse menu-dropdown"  id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                            <a href="{{url('admin/cast')}}" class="nav-link" >Cast</a>
                            </li>
                           
                            
                        </ul>
                    </div>
                    <div class="collapse menu-dropdown"  id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                            <a href="{{url('admin/subcast')}}" class="nav-link" >Subcaste</a>
                            </li>
                           
                            
                        </ul>
                    </div>

                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="lab la-delicious"></i> <span >Qualification</span>
                    </a>

                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                            <a href="{{url('admin/qualification')}}" class="nav-link" >Qualification</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="sidebarApps">
                    <i class="lab la-delicious"></i> <span >Language</span>
                    </a>

                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                            <a href="{{url('admin/language')}}" class="nav-link" >Language</a>
                            </li>
                           
                            
                        </ul>
                    </div>

                </li>


            


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
