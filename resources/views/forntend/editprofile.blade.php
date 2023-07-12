@extends('forntend.layouts.app')

@section('content')
<section class="top-ver">
    <div class="container">
        <div class="veri-prfle-div">
            <span>Your profile is pending verification! Verify now to get better responses</span><a href="#">Verify Profile</a>
        </div>
    </div>
</section>

<scetion class="main-dashboard">
    <div class="container my-3">
        <div class="row">
            @include('forntend.common.leftsidebar')


            <div class="col-lg-6 main-body">
                <div class="nav-tab-profile">
                    <ul class="nav justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Basic Info.</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="education-and-occupation.html">Education &amp; Occupation</a></li>
                                <li><a class="dropdown-item" href="family-info.html">Family Details</a></li>
                                <li><a class="dropdown-item" href="hobbies-and-interest.html">Hobbies &amp; Interest</a></li>
                                <li><a class="dropdown-item" href="partner-preference.html">Partner Preference</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact-info')}}">Contact Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="enhanced-profile.html">Enhanced Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="trust-badge.html">Trust Badge</a>
                        </li>
                    </ul>
                </div>
                <div class="profileContent">
                    <div class="info">
                        <div class="row justify-content-between py-2 m-0 bdr-bottom">
                            <div class="col-xs-6 col-sm-8 cs-font">Edit Profile</div>
                            <div class="col-xs-6 col-sm-3"><a href="#" target="_blank" class="float-right small">View my profile</a>
                            </div>
                        </div>
                        <div class="row justify-content-between my-0 py-2 m-0">
                            <div class="col-xs-6 col-sm-6 cs-font">Basic Information</div>
                            <div class="col-xs-6 col-sm-6 small text-right">Fields marked as <span class="m-field" style="top:3px">*</span> are Mandatory</div>
                        </div>
                    </div>
                    <div id="content">
                        <!-- Form fields start hee -->
                        <div id="pform">
                            <form method="post" method="post" action="{{url('/profile')}}" id="profileForm">
                            @csrf
                                <div class="form-group d-flex justify-content-start my-4">
                                    <label for="profilecreatedfor" class="col-3 pr-2">Profile created by <span class="m-field">*</span></label>
                                    <div class="col">
                                        <select name="profile_creator" id="profilecreatedfor" class="form-select  ml-2" tabindex="1">
                                            <option >--Select--</option>
                                            <option value="Self" @if(Auth::user()->profile_creator == 'Self') selected @endif>Self</option>
                                            <option value="Parents"  @if(Auth::user()->profile_creator == 'Parents') selected @endif>Parents</option>
                                            <option value="Sibling"  @if(Auth::user()->profile_creator == 'Sibling') selected @endif>Sibling</option>
                                            <option value="Relative"  @if(Auth::user()->profile_creator == 'Relative') selected @endif>Relative</option>
                                            <option value="Friend"  @if(Auth::user()->profile_creator == 'Friend') selected @endif>Friend</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="name" class="col-3 pr-2"> Name <span class="m-field">*</span> </label>
                                    <div class="col"> <input type="text" id="name" name="user_name" value="{{Auth::user()->user_name}}" class="form-control ml-2">
                                    </div>
                                </div>

                                <!-- Date of Birth  -->
                                <div class="form-group d-flex justify-content-start">
                                    <label for="dob" class="col-3 pr-2"> Date of Birth<span class="m-field">*</span> </label>
                                    <div class="col">
                                        <div class="col-2 float-left">
                                            <select class="w-auto form-select" id="dobpart" name="day" style="margin-left:-5px">
                                                <option >-Date-</option>
                                                <option value="01"  @if(date('d', strtotime(Auth::user()->dob)) == '01') selected @endif >1</option>
                                                <option value="02"  @if(date('d', strtotime(Auth::user()->dob)) == '02') selected @endif >2</option>
                                                <option value="03"  @if(date('d', strtotime(Auth::user()->dob)) == '03') selected @endif >3</option>
                                                <option value="04"  @if(date('d', strtotime(Auth::user()->dob)) == '04') selected @endif >4</option>
                                                <option value="05"  @if(date('d', strtotime(Auth::user()->dob)) == '05') selected @endif >5</option>
                                                <option value="06"  @if(date('d', strtotime(Auth::user()->dob)) == '06') selected @endif >6</option>
                                                <option value="07"  @if(date('d', strtotime(Auth::user()->dob)) == '07') selected @endif >7</option>
                                                <option value="08"  @if(date('d', strtotime(Auth::user()->dob)) == '08') selected @endif >8</option>
                                                <option value="09"  @if(date('d', strtotime(Auth::user()->dob)) == '09') selected @endif >9</option>
                                                <option value="10"  @if(date('d', strtotime(Auth::user()->dob)) == '10') selected @endif >10</option>
                                                <option value="11"  @if(date('d', strtotime(Auth::user()->dob)) == '11') selected @endif >11</option>
                                                <option value="12"  @if(date('d', strtotime(Auth::user()->dob)) == '12') selected @endif >12</option>
                                                <option value="13"  @if(date('d', strtotime(Auth::user()->dob)) == '13') selected @endif >13</option>
                                                <option value="14"  @if(date('d', strtotime(Auth::user()->dob)) == '14') selected @endif >14</option>
                                                <option value="15"  @if(date('d', strtotime(Auth::user()->dob)) == '15') selected @endif >15</option>
                                                <option value="16"  @if(date('d', strtotime(Auth::user()->dob)) == '16') selected @endif >16</option>
                                                <option value="17"  @if(date('d', strtotime(Auth::user()->dob)) == '17') selected @endif >17</option>
                                                <option value="18"  @if(date('d', strtotime(Auth::user()->dob)) == '18') selected @endif >18</option>
                                                <option value="19"  @if(date('d', strtotime(Auth::user()->dob)) == '19') selected @endif >19</option>
                                                <option value="20"  @if(date('d', strtotime(Auth::user()->dob)) == '20') selected @endif >20</option>
                                                <option value="21"  @if(date('d', strtotime(Auth::user()->dob)) == '21') selected @endif >21</option>
                                                <option value="22"  @if(date('d', strtotime(Auth::user()->dob)) == '22') selected @endif >22</option>
                                                <option value="23"  @if(date('d', strtotime(Auth::user()->dob)) == '23') selected @endif >23</option>
                                                <option value="24"  @if(date('d', strtotime(Auth::user()->dob)) == '24') selected @endif >24</option>
                                                <option value="25"  @if(date('d', strtotime(Auth::user()->dob)) == '25') selected @endif >25</option>
                                                <option value="26"  @if(date('d', strtotime(Auth::user()->dob)) == '26') selected @endif >26</option>
                                                <option value="27"  @if(date('d', strtotime(Auth::user()->dob)) == '27') selected @endif >27</option>
                                                <option value="28"  @if(date('d', strtotime(Auth::user()->dob)) == '28') selected @endif >28</option>
                                                <option value="29"  @if(date('d', strtotime(Auth::user()->dob)) == '29') selected @endif >29</option>
                                                <option value="30"  @if(date('d', strtotime(Auth::user()->dob)) == '30') selected @endif >30</option>
                                                <option value="31"  @if(date('d', strtotime(Auth::user()->dob)) == '31') selected @endif >31</option>
                                            </select>
                                        </div>
                                        <div class="col-3 float-left mx-2">
                                            <select class="w-auto form-select" id="dobpart" name="month">
                                                <option >-Month-</option>
                                                <option value="01"  @if(date('m', strtotime(Auth::user()->dob )) == '01') selected @endif >January</option>
                                                <option value="02"  @if(date('m', strtotime(Auth::user()->dob )) == '02') selected @endif >February</option>
                                                <option value="03"  @if(date('m', strtotime(Auth::user()->dob )) == '03') selected @endif >March</option>
                                                <option value="04"  @if(date('m', strtotime(Auth::user()->dob )) == '04') selected @endif >April</option>
                                                <option value="05"  @if(date('m', strtotime(Auth::user()->dob )) == '05') selected @endif >May</option>
                                                <option value="06"  @if(date('m', strtotime(Auth::user()->dob )) == '06') selected @endif >June</option>
                                                <option value="07"  @if(date('m', strtotime(Auth::user()->dob )) == '07') selected @endif >July</option>
                                                <option value="08"  @if(date('m', strtotime(Auth::user()->dob )) == '08') selected @endif >August</option>
                                                <option value="09"  @if(date('m', strtotime(Auth::user()->dob )) == '09') selected @endif >September</option>
                                                <option value="10"  @if(date('m', strtotime(Auth::user()->dob )) == '10') selected @endif >October</option>
                                                <option value="11"  @if(date('m', strtotime(Auth::user()->dob )) == '11') selected @endif >November</option>
                                                <option value="12"  @if(date('m', strtotime(Auth::user()->dob )) == '12') selected @endif >December</option>
                                            </select>
                                        </div>
                                        <div class="col-2 float-left">
                                            <select class="w-auto form-select" id="dobpart" name="year">
                                                <option >-Year-</option>
                                                <option value="2005" @if(date('Y', strtotime(Auth::user()->dob)) == '2005') selected @endif >2005</option>
                                                <option value="2004" @if(date('Y', strtotime(Auth::user()->dob)) == '2004') selected @endif >2004</option>
                                                <option value="2003" @if(date('Y', strtotime(Auth::user()->dob)) == '2003') selected @endif >2003</option>
                                                <option value="2002" @if(date('Y', strtotime(Auth::user()->dob)) == '2002') selected @endif >2002</option>
                                                <option value="2001" @if(date('Y', strtotime(Auth::user()->dob)) == '2001') selected @endif >2001</option>
                                                <option value="2000" @if(date('Y', strtotime(Auth::user()->dob)) == '2000') selected @endif >2000</option>
                                                <option value="1999" @if(date('Y', strtotime(Auth::user()->dob)) == '1999') selected @endif >1999</option>
                                                <option value="1998" @if(date('Y', strtotime(Auth::user()->dob)) == '1998') selected @endif >1998</option>
                                                <option value="1997" @if(date('Y', strtotime(Auth::user()->dob)) == '1997') selected @endif >1997</option>
                                                <option value="1996" @if(date('Y', strtotime(Auth::user()->dob)) == '1996') selected @endif >1996</option>
                                                <option value="1995" @if(date('Y', strtotime(Auth::user()->dob)) == '1995') selected @endif >1995</option>
                                                <option value="1994" @if(date('Y', strtotime(Auth::user()->dob)) == '1994') selected @endif >1994</option>
                                                <option value="1993" @if(date('Y', strtotime(Auth::user()->dob)) == '1993') selected @endif >1993</option>
                                                <option value="1992" @if(date('Y', strtotime(Auth::user()->dob)) == '1992') selected @endif >1992</option>
                                                <option value="1991" @if(date('Y', strtotime(Auth::user()->dob)) == '1991') selected @endif >1991</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group d-flex justify-content-start">

                                    <label for="mStatus" class="col-3 pr-2">Marital Status <span class="m-field">*</span></label>
                                    <div class="col">
                                        <input type="radio" id="mStatus1"  @if(Auth::user()->marital_status == 'Unmarried') checked @endif name="marital_status" class="w-auto" value="Unmarried" checked="">
                                        <label class="labelradiobtn" id="mStatus1" for="satus1">Unmarried</label>
                                        <input type="radio" id="maritalStatus2"  @if(Auth::user()->marital_status == 'Widow / Widower') checked @endif name="marital_status" class="w-auto" value="Widow / Widower">
                                        <label class="labelradiobtn" id="mStatus2" for="satus2">Widow / Widower</label>
                                        <input type="radio" id="maritalStatus3"   @if(Auth::user()->marital_status == 'Divorced') checked @endif name="marital_status" class="w-auto" value="Divorced">
                                        <label class="labelradiobtn" id="mStatus3"  for="satus3">Divorced</label>
                                        <input type="radio" id="maritalStatus4" name="marital_status" class="w-auto" @if(Auth::user()->marital_status == 'Separated') checked @endif value="Separated">
                                        <label class="labelradiobtn" id="mStatus4"   for="satus4">Separated</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="noOfChildren" class="col-3 pr-2">No. of Children </label>
                                    <div class="col">
                                        <input type="radio" id="noOfChildren1"  @if(Auth::user()->children_number == '0') checked @endif name="children_number" class="w-auto" value="0" checked="">
                                        <label class="labelradiobtn" for="noOfChildren1">None</label>
                                        <input type="radio" id="noOfChildren2"  @if(Auth::user()->children_number == '1') checked @endif name="children_number" class="w-auto" value="1">
                                        <label class="labelradiobtn" for="noOfChildren2"> 1 </label>&nbsp;
                                        <input type="radio" id="noOfChildren3"  @if(Auth::user()->children_number == '2') checked @endif name="children_number" class="w-auto" value="2">
                                        <label class="labelradiobtn" for="noOfChildren3"> 2 </label>&nbsp;
                                        <input type="radio" id="noOfChildren4"  @if(Auth::user()->children_number == '3') checked @endif name="children_number" class="w-auto" value="3">
                                        <label class="labelradiobtn" for="noOfChildren4"> 3 </label>
                                        <input type="radio" id="noOfChildren5"   @if(Auth::user()->children_number == '4') checked @endif name="children_number" class="w-auto" value="4">
                                        <label class="labelradiobtn" for="noOfChildren5"> 3+ </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="childrenLivingStatus" class="col-3 pr-2">Children living status <span class="m-field">*</span></label>
                                    <div class="col">
                                        <input type="radio" id="childrenLivingWithMe1" tabindex="18" name="children_living_status" class="w-auto" @if(Auth::user()->children_living_status == '1') checked @endif value="1" >
                                        <label class="labelradiobtn" for="childrenLivingWithMe1">Living with me</label>
                                        <input type="radio" id="childrenLivingWithMe2" tabindex="19" name="children_living_status" class="w-auto"  @if(Auth::user()->children_living_status == '2') checked @endif value="2" checked="">
                                        <label class="labelradiobtn" for="childrenLivingWithMe2" id="childrenLivingWithMes">Not living with me </label>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="mheight" class="col-3 pr-2">Height <span class="m-field">*</span></label>
                                    <div class="col">
                                        <select name="feet" id="mheight" class="form-select">
                                            <option>--- Feet--- </option>
                                            <option value="4" @if(Auth::user()->height == '4') selected @endif title="4 feet">4 feet</option>
                                            <option value="5" @if(Auth::user()->height == '5') selected @endif title="5 feet">5 feet</option>
                                            <option value="6" @if(Auth::user()->height == '6') selected @endif title="6 feet">6 feet</option>

                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="inches" id="mheight" class="form-select">
                                            <option>--- Inches --- </option>
                                            <option value="0"  @if(Auth::user()->height == '0') selected @endif title="0 inches"> 0 inches</option>
                                            <option value="1"  @if(Auth::user()->height == '1') selected @endif title="1 inches"> 1 inches</option>
                                            <option value="2"  @if(Auth::user()->height == '2') selected @endif title="2 inches"> 2 inches</option>
                                            <option value="3"  @if(Auth::user()->height == '3') selected @endif title="3 inches"> 3 inches</option>
                                            <option value="4"  @if(Auth::user()->height == '4') selected @endif title="4 inches"> 4 inches</option>
                                            <option value="5"  @if(Auth::user()->height == '5') selected @endif title="5 inches"> 5 inches</option>
                                            <option value="6"  @if(Auth::user()->height == '6') selected @endif title="6 inches"> 6 inches</option>
                                            <option value="7"  @if(Auth::user()->height == '7') selected @endif title="7 inches"> 7 inches</option>
                                            <option value="8"  @if(Auth::user()->height == '8') selected @endif title="8 inches"> 8 inches</option>
                                            <option value="9"  @if(Auth::user()->height == '9') selected @endif title="9 inches"> 9 inches</option>
                                            <option value="10" @if(Auth::user()->height == '10') selected @endif  title="10 inches"> 10 inches</option>
                                            <option value="11" @if(Auth::user()->height == '11') selected @endif  title="11 inches"> 11 inches</option>
                                        </select>
                                    </div>

                                </div>


                                <div class="form-group d-flex justify-content-start">
                                    <label for="physicalStatus" class="col-3 pr-2">Physical Status <span class="m-field">*</span></label>
                                    <div class="col">
                                        <input type="radio" name="physical_status" id="physicalStatus0" @if(Auth::user()->physical_status == '1') checked @endif value="1" checked="" class="w-auto">
                                        <label for="physicalStatus0" class="labelradiobtn">Normal</label>
                                        <input type="radio" name="physical_status" id="physicalStatus1" @if(Auth::user()->physical_status == '2') checked @endif value="2" class="w-auto">
                                        <label for="physicalStatus1" class="labelradiobtn">Physically Challenged</label>
                                    </div>
                                </div>


                                <!--CASTE-->
                                <div class="form-group d-flex justify-content-start">
                                    <label for="casteDivision" class="col-3 pr-2">Caste / Division<span class="m-field">
                                            *</span></label>
                                    <div class="col">
                                        <select name="cast" id="cast" class="form-select">
                                        <option value="" >--- Select ---</option>
@foreach($casts as $cast)
                                            <option value="{{$cast->name}}"  @if(Auth::user()->cast == $cast->name) selected @endif  >{{$cast->name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!--CASTE-->

                                <div class="form-group d-flex justify-content-start">
                                    <label for="subCaste" class="col-3 pr-2">Subcaste <span class="m-field"> *</span></label>
                                    <div class="col">
                                        <select name="subcast" id="subcast" class="form-select">
                                            <option value="">--- Select ---</option>
                                           
                                            <option value="Others" alt="Others">Others</option>
                                            <option value="Don't wish to specify" alt="Don't wish to specify">Don't wish to
                                                specify</option>
                                            <option value="Don't know my sub-caste" alt="Don't know my sub-caste">Don't know my
                                                sub-caste</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Denomination -->
                                <div class="form-group d-flex justify-content-start">
                                    <label for="motherTounge" class="col-3 pr-2">Mother Tongue<span class="rdclr"> *</span></label>

                                    <div class="col">
                                        <select id="motherTongue" name="mother_tongue" class="form-select">
                                            <option value="">Select Mother Tongue</option>
                                            @foreach($langauges as $langauge)
                                            <option value="{{$langauge->name}}"  @if(Auth::user()->mother_tongue == $langauge->name) selected @endif >{{$langauge->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="knownLanguages" class="col-3 pr-2">Languages Known </label>
                                    <div class="col">
                                        <select id="knownLanguages" multiple="multiple" name="languages_known[]" class="form-select h-auto" size="5">
                                        @foreach($langauges as $langauge)
                                            <option value="{{$langauge->name}}">{{$langauge->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="gothram" class="col-3 pr-2">Gothra <span class="m-field">*</span></label>
                                    <div class="col">
                                        <div class="float-left mr-2" id="gothramDivText">
                                            <input type="text" name="gothra"  value="{{Auth::user()->gothra}}" id="gothramOthers" value="Vats" class="form-control">
                                        </div>
                                        
                                    </div>

                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="start" class="col-3 pr-2">Star </label>
                                    <div class="col">
                                        <select name="star" id="star" class="form-select">
                                            <option value="">--Select--</option>
                                            <option  @if(Auth::user()->star == 'Anuradha / Anusham / Anizham') selected @endif  value="Anuradha / Anusham / Anizham">Anuradha / Anusham / Anizham</option>
                                            <option  @if(Auth::user()->star == 'Ardra / Thiruvathira') selected @endif  value="Ardra / Thiruvathira">Ardra / Thiruvathira</option>
                                            <option  @if(Auth::user()->star == 'Ashlesha / Ayilyam') selected @endif  value="Ashlesha / Ayilyam">Ashlesha / Ayilyam</option>
                                            <option  @if(Auth::user()->star == 'Ashwini / Ashwathi') selected @endif  value="Ashwini / Ashwathi">Ashwini / Ashwathi</option>
                                            <option  @if(Auth::user()->star == 'Bharani') selected @endif  value="Bharani">Bharani</option>
                                            <option  @if(Auth::user()->star == 'Chitra / Chitha') selected @endif  value="Chitra / Chitha">Chitra / Chitha</option>
                                            <option  @if(Auth::user()->star == 'Dhanista / Avittam') selected @endif  value="Dhanista / Avittam">Dhanista / Avittam</option>
                                            <option  @if(Auth::user()->star == 'Hastha / Atham') selected @endif  value="Hastha / Atham">Hastha / Atham</option>
                                            <option  @if(Auth::user()->star == 'Jyesta / Kettai / Thrikketa') selected @endif  value="Jyesta / Kettai / Thrikketa">Jyesta / Kettai / Thrikketa</option>
                                            <option  @if(Auth::user()->star == 'Krithika / Karthika') selected @endif  value="Krithika / Karthika">Krithika / Karthika</option>
                                            <option  @if(Auth::user()->star == 'Makha / Magam') selected @endif  value="Makha / Magam">Makha / Magam</option>
                                            <option  @if(Auth::user()->star == 'Moolam / Moola') selected @endif  value="Moolam / Moola">Moolam / Moola</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="raasi" class="col-3 pr-2">Raasi</label>
                                    <div class="col"><select name="raasi" id="raasi" class="form-select">
                                            <option   value="">--Select--</option>
                                            <option @if(Auth::user()->raasi == 'Dhanu (Sagittarius)') selected @endif  value="Dhanu (Sagittarius)">Dhanu (Sagittarius)</option>
                                            <option @if(Auth::user()->raasi == 'Kanya (Virgo)') selected @endif  value="Kanya (Virgo)">Kanya (Virgo)</option>
                                            <option @if(Auth::user()->raasi == 'Kark (Cancer)') selected @endif  value="Kark (Cancer)">Kark (Cancer)</option>
                                            <option @if(Auth::user()->raasi == 'Kumbh (Aquarius)') selected @endif  value="Kumbh (Aquarius)">Kumbh (Aquarius)</option>
                                            <option @if(Auth::user()->raasi == 'Makar (Capricorn)') selected @endif  value="Makar (Capricorn)">Makar (Capricorn)</option>
                                            <option @if(Auth::user()->raasi == 'Meen (Pisces)') selected @endif  value="Meen (Pisces)">Meen (Pisces)</option>
                                            <option @if(Auth::user()->raasi == 'Mesh (Aries)') selected @endif  value="Mesh (Aries)">Mesh (Aries)</option>
                                            <option @if(Auth::user()->raasi == 'Mithun (Gemini)') selected @endif  value="Mithun (Gemini)">Mithun (Gemini)</option>
                                            <option @if(Auth::user()->raasi == 'Simha (Leo)') selected @endif  value="Simha (Leo)">Simha (Leo)</option>
                                            <option @if(Auth::user()->raasi == 'Tula (Libra)') selected @endif  value="Tula (Libra)">Tula (Libra)</option>
                                            <option @if(Auth::user()->raasi == 'Vrishabh (Taurus)') selected @endif  value="Vrishabh (Taurus)">Vrishabh (Taurus)</option>
                                            <option @if(Auth::user()->raasi == 'Vrishchik (Scorpio)') selected @endif  value="Vrishchik (Scorpio)">Vrishchik (Scorpio)</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group d-flex justify-content-start">

                                    <label for="dosham" class="col-3 pr-2">Manglik </label>
                                    <div class="col">
                                        <input type="radio" name="manglik" value="1" id="dosham1" @if(Auth::user()->manglik == '1') checked @endif class="w-auto" onclick="showhide(1);">
                                        <label for="dosham1" class="labelradiobtn">Yes</label>
                                        <input type="radio" name="manglik" value="2" id="dosham2"  @if(Auth::user()->manglik == '2') checked @endif checked="" class="w-auto" onclick="showhide(2);">
                                        <label for="dosham2" class="labelradiobtn">No</label>
                                        <input type="radio" name="manglik" value="3" id="dosham3" @if(Auth::user()->manglik == '3') checked @endif class="w-auto" onclick="showhide(3);">
                                        <label for="dosham3" class="labelradiobtn">Don't Know</label>
                                    </div>
                                </div>

                                <!-- <div id="doshamdiv" name="doshamdiv" style="display:none">
                                    <dl></dl>
                                    <dl>
                                        <dd style="width:458px;padding-left:150px;">
                                            <div class="fleft" style="width: 150px;">
                                                <input type="checkbox" name="manglik_m[]" value="4" class="checked" id="manglik_m4">
                                                <label for="manglik_m4"> &nbsp;Manglik&nbsp;</label>
                                            </div>
                                            <div class="fleft" style="width: 150px;">
                                                <input type="checkbox" name="manglik_m[]" value="5" class="checked" id="manglik_m5">
                                                <label for="manglik_m5"> &nbsp;Sarpa Dosh&nbsp;</label>
                                            </div>
                                            <div class="fleft" style="width: 150px;">
                                                <input type="checkbox" name="manglik_m[]" value="10" class="checked" id="manglik_m10">
                                                <label for="manglik_m10"> &nbsp;Kala Sarpa Dosh&nbsp;</label>
                                            </div>
                                            <div class="fleft" style="width: 150px;">
                                                <input type="checkbox" name="manglik_m[]" value="20" class="checked" id="manglik_m20">
                                                <label for="manglik_m20"> &nbsp;Rahu Dosh&nbsp;</label>
                                            </div>
                                            <br>
                                            <div class="fleft" style="width: 150px;">
                                                <input type="checkbox" name="manglik_m[]" value="40" class="checked" id="manglik_m40">
                                                <label for="manglik_m40"> &nbsp;Kethu Dosh&nbsp;</label>
                                            </div>
                                            <div class="fleft" style="width: 150px;">
                                                <input type="checkbox" name="manglik_m[]" value="80" class="checked" id="manglik_m80">
                                                <label for="manglik_m80"> &nbsp;Kalathra Dosh&nbsp;</label>
                                            </div>
                                            <br clear="all">
                                        </dd>
                                    </dl>
                                    <div style="width:420px;padding-left:150px;" class="padb5">
                                        <div id="doshamSpan" class="error" style="display:none;"></div>
                                    </div><br clear="all">
                                </div> -->

                                <div class="form-group d-flex justify-content-start">
                                    <label for="eatingOptions" class="col-3 pr-2">Eating Habits </label>
                                    <div class="col">
                                        <input type="radio" name="eating_habits" id="eatingOptions1" @if(Auth::user()->eating_habits == '1') checked @endif value="1" class="w-auto">
                                        <label for="eatingOptions1" class="labelradiobtn">Vegetarian</label>
                                        <input type="radio" name="eating_habits" id="eatingOptions2" @if(Auth::user()->eating_habits == '2') checked @endif value="2" checked="" class="w-auto">
                                        <label for="eatingOptions2" class="labelradiobtn">Non-vegetarian</label>
                                        <input type="radio" name="eating_habits" id="eatingOptions3" @if(Auth::user()->eating_habits == '3') checked @endif value="3" class="w-auto">
                                        <label for="eatingHabits3" class="labelradiobtn">Eggetarian</label>
                                        <input type="radio" name="eating_habits" id="eatingOptions4" @if(Auth::user()->eating_habits == '4') checked @endif value="4" class="w-auto">
                                        <label for="eatingHabits4" class="labelradiobtn">Vegan</label>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="smoker" class="col-3 pr-2">Smoking Habits </label>
                                    <div class="col">
                                        <input type="radio" name="smoking_habits" id="smoker1" value="1" @if(Auth::user()->smoking_habits == '1') checked @endif  checked="" class="w-auto">
                                        <label for="smoke1" class="labelradiobtn">Non-smoker</label>
                                        <input type="radio" name="smoking_habits" id="smoker2" value="2" @if(Auth::user()->smoking_habits == '2') checked @endif  class="w-auto">
                                        <label for="smoke2" class="labelradiobtn">Light / Social smoker</label>
                                        <input type="radio" name="smoking_habits" id="smoker3" value="3" @if(Auth::user()->smoking_habits == '3') checked @endif  class="w-auto">
                                        <label for="smoke3" class="labelradiobtn">Regular smoker</label>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="drinker" class="col-3 pr-2">Drinking Habits </label>

                                    <div class="col"><input type="radio" name="drinking_habits" id="drinker1" @if(Auth::user()->drinking_habits == '1') checked @endif value="1" checked="" class="w-auto">
                                        <label for="drink1" class="labelradiobtn">Non-drinker</label>
                                        <input type="radio" name="drinking_habits" id="drinker2" value="2" @if(Auth::user()->drinking_habits == '2') checked @endif class="w-auto">
                                        <label for="drink2" class="labelradiobtn">Light / Social drinker</label>
                                        <input type="radio" name="drinking_habits" id="drinker3" value="3" @if(Auth::user()->drinking_habits == '3') checked @endif class="w-auto">
                                        <label for="drink3" class="labelradiobtn">Regular drinker</label>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="ApplicantInfo" class="col-3 pr-2">About Me <span class="m-field">*</span></label>
                                    <div class="col">
                                        <textarea id="description" name="about_me" class="w-auto input-group fs-70" cols="60" rows="7">{{Auth::user()->about_me}}</textarea>
                                        <div class="small">Min. 50 characters &nbsp;&nbsp;|&nbsp;&nbsp;<span id="totalWordCount" class="small">455</span> Characters typed
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-end accnt-type mr-5">
                                    <input type="submit" class="s-btn" size="38" id="" name="" value="Submit">
                                </div>

                            </form>

                            <!-- Form fields end hee -->
                        </div>
                    </div>
                </div>
            </div><!-- col-lg-6-->



            @include('forntend.common.rightsidebar')
        </div>
    </div>
</scetion>
@endsection