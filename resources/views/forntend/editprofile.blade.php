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
                            <a class="nav-link" href="contact-info.html">Contact Details</a>
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
                            <form method="post" name="profileForm" id="profileForm">

                                <div class="form-group d-flex justify-content-start my-4">
                                    <label for="profilecreatedfor" class="col-3 pr-2">Profile created by <span class="m-field">*</span></label>
                                    <div class="col">
                                        <select name="profile_creator" id="profilecreatedfor" class="form-select  ml-2" tabindex="1">
                                            <option value="0">--Select--</option>
                                            <option value="Self">Self</option>
                                            <option value="Parents">Parents</option>
                                            <option value="Sibling">Sibling</option>
                                            <option value="Relative">Relative</option>
                                            <option value="Friend">Friend</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="name" class="col-3 pr-2"> Name <span class="m-field">*</span> </label>
                                    <div class="col"> <input type="text" id="name" name="user_name" value="" class="form-control ml-2">
                                    </div>
                                </div>

                                <!-- Date of Birth  -->
                                <div class="form-group d-flex justify-content-start">
                                    <label for="dob" class="col-3 pr-2"> Date of Birth<span class="m-field">*</span> </label>
                                    <div class="col">
                                        <div class="col-2 float-left">
                                            <select class="w-auto form-select" id="dobpart" name="date" style="margin-left:-5px">
                                                <option value="0" selected="">-Date-</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11" selected="">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="col-3 float-left mx-2">
                                            <select class="w-auto form-select" id="dobpart" name="mont">
                                                <option value="0" selected="">-Month-</option>
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11" selected="">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                        <div class="col-2 float-left">
                                            <select class="w-auto form-select" id="dobpart" name="year">
                                                <option value="0" selected="">-Year-</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996" selected="">1996</option>
                                                <option value="1995">1995</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group d-flex justify-content-start">

                                    <label for="mStatus" class="col-3 pr-2">Marital Status <span class="m-field">*</span></label>
                                    <div class="col">
                                        <input type="radio" id="mStatus1" name="marital_status" class="w-auto" value="1" checked="">
                                        <label class="labelradiobtn" id="mStatus1" for="satus1">Unmarried</label>
                                        <input type="radio" id="maritalStatus2" name="marital_status" class="w-auto" value="2">
                                        <label class="labelradiobtn" id="mStatus2" for="satus2">Widow / Widower</label>
                                        <input type="radio" id="maritalStatus3" name="marital_status" class="w-auto" value="3">
                                        <label class="labelradiobtn" id="mStatus3" for="satus3">Divorced</label>
                                        <input type="radio" id="maritalStatus4" name="marital_status" class="w-auto" value="4">
                                        <label class="labelradiobtn" id="mStatus4" for="satus4">Separated</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="noOfChildren" class="col-3 pr-2">No. of Children </label>
                                    <div class="col">
                                        <input type="radio" id="noOfChildren1" name="noOfChildren" class="w-auto" value="0" checked="">
                                        <label class="labelradiobtn" for="noOfChildren1">None</label>
                                        <input type="radio" id="noOfChildren2" name="noOfChildren" class="w-auto" value="1">
                                        <label class="labelradiobtn" for="noOfChildren2"> 1 </label>&nbsp;
                                        <input type="radio" id="noOfChildren3" name="noOfChildren" class="w-auto" value="2">
                                        <label class="labelradiobtn" for="noOfChildren3"> 2 </label>&nbsp;
                                        <input type="radio" id="noOfChildren4" name="noOfChildren" class="w-auto" value="3">
                                        <label class="labelradiobtn" for="noOfChildren4"> 3 </label>
                                        <input type="radio" id="noOfChildren5" name="noOfChildren" class="w-auto" value="4">
                                        <label class="labelradiobtn" for="noOfChildren5"> 3+ </label>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="childrenLivingStatus" class="col-3 pr-2">Children living status <span class="m-field">*</span></label>
                                    <div class="col">
                                        <input type="radio" id="childrenLivingWithMe1" tabindex="18" name="childLivingWithMe" class="w-auto" value="0" checked=""><label class="labelradiobtn" for="childrenLivingWithMe1">Living with me</label>
                                        <input type="radio" id="childrenLivingWithMe2" tabindex="19" name="childLivingWithMe" class="w-auto" value="1">
                                        <label class="labelradiobtn" for="childrenLivingWithMe2" id="childrenLivingWithMes">Not living
                                            with me </label>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="mheight" class="col-3 pr-2">Height <span class="m-field">*</span></label>
                                    <div class="col">
                                        <select name="mheight" id="mheight" class="form-select">
                                            <option>--- Feet--- </option>
                                            <option value="4" value="4 feet">4 feet</option>
                                            <option value="5" title="5 feet">5 feet</option>
                                            <option value="6" title="6 feet">6 feet</option>

                                        </select>
                                    </div>
                                    <div class="col">
                                        <select name="mheight" id="mheight" class="form-select">
                                            <option>--- Inches --- </option>
                                            <option value="0" title="0 inches"> 0 inches</option>
                                            <option value="1" title="1 inches"> 1 inches</option>
                                            <option value="2" title="2 inches"> 2 inches</option>
                                            <option value="3" title="3 inches"> 3 inches</option>
                                            <option value="4" title="4 inches"> 4 inches</option>
                                            <option value="5" title="5 inches"> 5 inches</option>
                                            <option value="6" title="1 inches"> 6 inches</option>
                                            <option value="7" title="2 inches"> 7 inches</option>
                                            <option value="8" title="3 inches"> 8 inches</option>
                                            <option value="9" title="4 inches"> 9 inches</option>
                                            <option value="10" title="5 inches"> 10 inches</option>
                                            <option value="11" title="5 inches"> 11 inches</option>
                                        </select>
                                    </div>

                                </div>


                                <div class="form-group d-flex justify-content-start">
                                    <label for="physicalStatus" class="col-3 pr-2">Physical Status <span class="m-field">*</span></label>
                                    <div class="col">
                                        <input type="radio" name="physicalStatus" id="physicalStatus0" value="0" checked="" class="w-auto">
                                        <label for="physicalStatus0" class="labelradiobtn">Normal</label>
                                        <input type="radio" name="physicalStatus" id="physicalStatus1" value="1" class="w-auto">
                                        <label for="physicalStatus1" class="labelradiobtn">Physically Challenged</label>
                                    </div>
                                </div>


                                <!--CASTE-->
                                <div class="form-group d-flex justify-content-start">
                                    <label for="casteDivision" class="col-3 pr-2">Caste / Division<span class="m-field">
                                            *</span></label>
                                    <div class="col">
                                        <select name="casteDivision" id="casteDivision" class="form-select">
                                            <option>--- Select ---</option>
                                            <option value="Anavil" alt="Anavil">Anavil</option>
                                            <option value="Audichya" alt="Audichya">Audichya</option>
                                            <option value="Barendra" alt="Barendra">Barendra</option>
                                            <option value="Bhatt" alt="Bhatt">Bhatt</option>
                                            <option value="Bhumihar" alt="Bhumihar">Bhumihar</option>
                                            <option value="Chattada Sri Vaishnava" alt="Chattada Sri Vaishnava">Chattada Sri
                                                Vaishnava</option>
                                            <option value="Daivadnya" alt="Daivadnya">Daivadnya</option>
                                        </select>
                                    </div>
                                </div>

                                <!--CASTE-->

                                <div class="form-group d-flex justify-content-start">
                                    <label for="subCaste" class="col-3 pr-2">Subcaste <span class="m-field"> *</span></label>
                                    <div class="col">
                                        <select name="subCaste" id="subCaste" class="form-select">
                                            <option>--- Select ---</option>
                                            <option value="Bharadwaj" alt="Bharadwaj">Bharadwaj</option>
                                            <option value="Choudhary" alt="Choudhary">Choudhary</option>
                                            <option value="Jha" alt="Jha">Jha</option>
                                            <option value="Kashyap" alt="Kashyap">Kashyap</option>
                                            <option value="Katyayan" alt="Katyayan">Katyayan</option>
                                            <option value="Mishra" alt="Mishra">Mishra</option>
                                            <option value="Ojha" alt="Ojha">Ojha</option>
                                            <option value="Parashar" alt="Parashar">Parashar</option>
                                            <option value="Pathak" alt="Pathak">Pathak</option>
                                            <option value="Pratihast" alt="Pratihast">Pratihast</option>
                                            <option value="Roy/Raj" alt="Roy/Raj">Roy/Raj</option>
                                            <option value="Shandilya" alt="Shandilya">Shandilya</option>
                                            <option value="Sharma" alt="Sharma">Sharma</option>
                                            <option value="Singh" alt="Singh">Singh</option>
                                            <option selected="" value="Thakur" alt="Thakur">Thakur</option>
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
                                        <select id="motherTongue" name="motherTongue" class="form-select">
                                            <option value="">Select Mother Tongue</option>
                                            <option value="Bengali">Bengali</option>
                                            <option value="Gujarati">Gujarati</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="Kannada">Kannada</option>
                                            <option value="Konkani">Konkani</option>
                                            <option value="">-------------------------</option>
                                            <option value="Angika" alt="Angika">Angika</option>
                                            <option value="Arunachali" alt="Arunachali">Arunachali</option>
                                            <option value="Assamese" alt="Assamese">Assamese</option>
                                            <option value="Awadhi" alt="Awadhi">Awadhi</option>
                                            <option value="Badaga" alt="Badaga">Badaga</option>
                                            <option value="Bengali" alt="Bengali">Bengali</option>
                                            <option value="Bhojpuri" alt="Bhojpuri">Bhojpuri</option>
                                            <option value="Bihari" alt="Bihari">Bihari</option>
                                            <option value="Brij" alt="Brij">Brij</option>
                                            <option value="Chatisgarhi" alt="Chatisgarhi">Chatisgarhi</option>
                                            <option value="Dogri" alt="Dogri">Dogri</option>
                                            <option value="English" alt="English">English</option>
                                            <option value="French" alt="French">French</option>
                                            <option value="Garhwali" alt="Garhwali">Garhwali</option>
                                            <option value="Garo" alt="Garo">Garo</option>
                                            <option value="Gujarati" alt="Gujarati">Gujarati</option>
                                            <option value="Haryanvi" alt="Haryanvi">Haryanvi</option>
                                            <option value="Himachali/Pahari" alt="Himachali/Pahari">Himachali/Pahari</option>
                                            <option value="Hindi" alt="Hindi">Hindi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="knownLanguages" class="col-3 pr-2">Languages Known </label>
                                    <div class="col">
                                        <select id="knownLanguages" multiple="multiple" name="knownLanguages" class="form-select h-auto" size="5">
                                            <option value="1">Assamese</option>
                                            <option value="2">Bengali</option>
                                            <option value="3">English</option>
                                            <option value="4">Gujarati</option>
                                            <option value="6">Kannada</option>
                                            <option value="7">Kashmiri</option>
                                            <option value="8">Konkani</option>
                                            <option value="9">Kutchi</option>
                                            <option value="10">Malayalam</option>
                                            <option value="11">Marathi</option>
                                            <option value="12">Marwadi</option>
                                            <option value="13">Odiya</option>
                                            <option value="14">Punjabi</option>
                                            <option value="15">Sindhi</option>
                                            <option value="16">Tamil</option>
                                            <option value="17">Telugu</option>
                                            <option value="18">Tulu</option>
                                            <option value="19">Urdu</option>
                                        </select>
                                        <div class="fs-70">Double click on the values to select.</div>
                                    </div>

                                    <div class="float-left"><i class="arrow-right"></i></div>
                                    <div class="col">
                                        <select id="knownLanguages" multiple="multiple" name="knownLanguages" class="form-select h-auto" size="5">
                                            <option value="5">Hindi</option>
                                        </select>

                                        <div class="fs-70">Double click on the values to deselect.</div>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="gothram" class="col-3 pr-2">Gothra <span class="m-field">*</span></label>
                                    <div class="col">
                                        <div class="float-left mr-2" id="gothramDivText">
                                            <input type="text" name="gothramOthers" id="gothramOthers" value="Vats" class="form-control">
                                        </div>
                                        <select name="gothram" id="gothram" class="form-select">
                                            <option value="0">--Select--</option>
                                            <option value="Aatharvas"></option>
                                            <option value="Agasthi"></option>
                                            <option value="Ahabhunasa"></option>
                                            <option value="Alampayana"></option>
                                            <option value="Angiras"></option>
                                            <option value="Arrishinimi"></option>
                                            <option value="Athreyasya"></option>
                                            <option value="Atri"></option>
                                            <option value="Attarishi"></option>
                                        </select>
                                    </div>

                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="start" class="col-3 pr-2">Star </label>
                                    <div class="col">
                                        <select name="star" id="star" class="form-select">
                                            <option value="0">--Select--</option>
                                            <option value="17">Anuradha / Anusham / Anizham</option>
                                            <option value="6">Ardra / Thiruvathira</option>
                                            <option value="9">Ashlesha / Ayilyam</option>
                                            <option value="1">Ashwini / Ashwathi</option>
                                            <option value="2">Bharani</option>
                                            <option value="14">Chitra / Chitha</option>
                                            <option value="23">Dhanista / Avittam</option>
                                            <option value="13">Hastha / Atham</option>
                                            <option value="18">Jyesta / Kettai / Thrikketa</option>
                                            <option value="3">Krithika / Karthika</option>
                                            <option value="10">Makha / Magam</option>
                                            <option value="19">Moolam / Moola</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="raasi" class="col-3 pr-2">Raasi</label>
                                    <div class="col"><select name="raasi" id="raasi" class="form-select">
                                            <option value="0">--Select--</option>
                                            <option value="1">Dhanu (Sagittarius)</option>
                                            <option value="2">Kanya (Virgo)</option>
                                            <option value="3">Kark (Cancer)</option>
                                            <option value="4">Kumbh (Aquarius)</option>
                                            <option value="5">Makar (Capricorn)</option>
                                            <option value="6">Meen (Pisces)</option>
                                            <option value="7">Mesh (Aries)</option>
                                            <option value="8">Mithun (Gemini)</option>
                                            <option value="9">Simha (Leo)</option>
                                            <option value="10">Tula (Libra)</option>
                                            <option value="11">Vrishabh (Taurus)</option>
                                            <option value="12">Vrishchik (Scorpio)</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group d-flex justify-content-start">

                                    <label for="dosham" class="col-3 pr-2">Manglik </label>
                                    <div class="col">
                                        <input type="radio" name="dosham" value="1" id="dosham1" class="w-auto" onclick="showhide(1);">
                                        <label for="dosham1" class="labelradiobtn">Yes</label>
                                        <input type="radio" name="dosham" value="2" id="dosham2" checked="" class="w-auto" onclick="showhide(2);">
                                        <label for="dosham2" class="labelradiobtn">No</label>
                                        <input type="radio" name="dosham" value="3" id="dosham3" class="w-auto" onclick="showhide(3);">
                                        <label for="dosham3" class="labelradiobtn">Don't Know</label>
                                    </div>
                                </div>

                                <div id="doshamdiv" name="doshamdiv" style="display:none">
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
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="eatingOptions" class="col-3 pr-2">Eating Habits </label>
                                    <div class="col">
                                        <input type="radio" name="eatingOptions" id="eatingOptions1" value="1" class="w-auto">
                                        <label for="eatingOptions1" class="labelradiobtn">Vegetarian</label>
                                        <input type="radio" name="eatingOptions" id="eatingOptions2" value="2" checked="" class="w-auto">
                                        <label for="eatingOptions2" class="labelradiobtn">Non-vegetarian</label>
                                        <input type="radio" name="eatingOptions" id="eatingOptions3" value="3" class="w-auto">
                                        <label for="eatingHabits3" class="labelradiobtn">Eggetarian</label>
                                        <input type="radio" name="eatingOptions" id="eatingOptions4" value="4" class="w-auto">
                                        <label for="eatingHabits4" class="labelradiobtn">Vegan</label>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="smoker" class="col-3 pr-2">Smoking Habits </label>
                                    <div class="col">
                                        <input type="radio" name="smoker" id="smoker1" value="1" checked="" class="w-auto">
                                        <label for="smoke1" class="labelradiobtn">Non-smoker</label>
                                        <input type="radio" name="smoker" id="smoker2" value="2" class="w-auto">
                                        <label for="smoke2" class="labelradiobtn">Light / Social smoker</label>
                                        <input type="radio" name="smoker" id="smoker3" value="3" class="w-auto">
                                        <label for="smoke3" class="labelradiobtn">Regular smoker</label>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="drinker" class="col-3 pr-2">Drinking Habits </label>

                                    <div class="col"><input type="radio" name="drinker" id="drinker1" value="1" checked="" class="w-auto">
                                        <label for="drink1" class="labelradiobtn">Non-drinker</label>
                                        <input type="radio" name="drinker" id="drinker2" value="2" class="w-auto">
                                        <label for="drink2" class="labelradiobtn">Light / Social drinker</label>
                                        <input type="radio" name="drinker" id="drinker3" value="3" class="w-auto">
                                        <label for="drink3" class="labelradiobtn">Regular drinker</label>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="ApplicantInfo" class="col-3 pr-2">About Me <span class="m-field">*</span></label>
                                    <div class="col">
                                        <textarea id="description" name="description" class="w-auto input-group fs-70" cols="60" rows="7">I have created this profile for my sister Bharti, She is a well being and caring person, she is first class graduated from Commerce Stream and pursuing MA from Ignou Delhi and also preparing for IBPS exams. She want to become a banker.

                                                            She is attached with maithili culture and tradition and we are looking for a government / non government / private sector groom who are well moderated and who values our tradition and inspire her for a bright future.</textarea>
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