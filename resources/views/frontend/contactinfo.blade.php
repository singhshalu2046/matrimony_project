@extends('frontend.layouts.app')

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
            @include('frontend.common.leftsidebar')

            <div class="col-lg-6 main-body">
                @include('frontend.common.innerHeader')
                <div class="profileContent">
                    <div class="info">
                        <div class="row justify-content-between py-2 m-0 bdr-bottom">
                            <div class="col-xs-6 col-sm-8 cs-font">Edit Profile</div>
                            <div class="col-xs-6 col-sm-3"><a href="#" target="_blank" class="float-right small">View my profile</a>
                            </div>
                        </div>
                        <div class="row justify-content-between my-0 py-2 m-0">
                            <div class="col-xs-6 col-sm-6 cs-font">Contact Details</div>
                            <div class="col-xs-6 col-sm-6 small text-right">
                                <div class="col-12 small">Fields marked as <span class="m-field" style="top:3px">*</span> are
                                    Mandatory</div>
                            </div>
                        </div>
                    </div>
                    <div id="content">
                        <!-- Form fields start hee -->
                        <div id="pform">
                            <form method="post" name="profileForm" action="{{ url('save-contact-info') }}" id="profileForm" class="needs-validation" novalidate>
                                     @csrf
                                <div class="form-group d-flex justify-content-start my-4">
                                    <label for="country" class="form-label col-3 pr-2">Country *<span class="m-field">*</span></label>
                                    <div class="col">
                                        <select id="country" name="country" class="form-select" required>
                                            <option selected disabled value="">--Select--</option>

                                            @foreach($countries as $country)
                                                <option value="{{ $country->name }}" data-id="{{ $country->id }}" {{ auth()->user()->country == $country->name ? 'selected' : '' }}>{{ $country->name }}</option>
                                            @endforeach
                    
                                        </select>

                                        <div class="invalid-feedback">Please select the country where your livinig</div>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="birth_place" class="form-label col-3 pr-2"> Place of birth </label>
                                    <div class="col"> <input type="text" id="birth_place" name="birth_place" value="{{ auth()->user()->birth_place??''}}" class="form-control" required>
                                    </div>

                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="state" class="form-label col-3 pr-2">State *<span class="m-field">*</span></label>
                                    <select id="state" name="state" class="form-select" required>
                                        <option selected disabled value="">--Select--</option>

                                        @foreach($states as $state)
                                            <option value="{{ $state->name }}" data-id="{{ $state->id }}" {{ auth()->user()->state == $state->name ? 'selected' : '' }}>{{ $state->name }}</option>
                                        @endforeach
                                </select>

                                    {{-- <label for="applicantResidingState" class="form-label col-3 pr-2">Residing State <span class="m-field">*</span></label> --}}
                                    {{-- <div class="col"> <input type="text" id="applicantResidingState" name="applicantResidingState" value="" class="form-control" required>
                                        <div class="invalid-feedback">Please enter the name of your Residing State</div>
                                    </div> --}}
                                </div>

                                <div class="form-group d-flex justify-content-start">


                                    <label for="district" class="form-label col-3 pr-2">District *<span class="m-field">*</span></label>
                                    <select id="district" name="district" class="form-select" required>
                                        <option selected disabled value="">--Select--</option>
                                        @foreach($districts as $district)
                                            <option value="{{ $district->name }}" data-id="{{ $district->id }}" {{ auth()->user()->district == $district->name ? 'selected' : '' }}>{{ $district->name }}</option>
                                        @endforeach

                                    </select>

                                    {{-- <label for="applicantResidingCity" class="form-label col-3 pr-2">Residing City <span class="m-field">*</span></label>
                                    <div class="col"> <input type="text" id="applicantResidingCity" name="applicantResidingCity" value="" class="form-control" required>
                                        <div class="invalid-feedback">Please enter the name of your Residing City</div>
                                    </div> --}}
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="residence_type" class="form-label col-3 pr-2">Residence Type<span class="m-field">*</span></label>
                                    <div class="col">
                                        <select id="residence_type" name="residence_type" class="form-control" required>
                                            <option selected disabled value="">--Select--</option>
                                            <option value="permanent_resident" {{ auth()->user()->residence_type =='permanent_resident' ?'selected':''}}>Permanent resident</option>
                                            <option value="work_permit" {{ auth()->user()->residence_type =='work_permit' ?'selected':''}}>Work permit</option>
                                            <option value="student_visa" {{ auth()->user()->residence_type =='student_visa' ?'selected':''}}>Student visa</option>
                                            <option value="temporary_visa" {{ auth()->user()->residence_type =='temporary_visa' ?'selected':''}}>Temporary visa</option>
                                            <option value="non_esident" {{ auth()->user()->residence_type =='non_esident' ?'selected':''}}>Non-Resident</option>
                                        </select>
                                        <div class="invalid-feedback">Please select your Residence Type</div>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start">

                                    <label for="citizenship" class="col-3 pr-2">Citizenship<span class="m-field">*</span></label>
                                    <div class="col">
                                        <select id="citizenship" name="citizenship" class="form-control" required>
                                            @foreach($countries as $country)
                                                <option value="{{ $country->name }}" data-id="{{ $country->id }}" {{ auth()->user()->citizenship == $country->name ? 'selected' : '' }}>{{ $country->name }}</option>
                                            @endforeach

                                       </select>
                                        <div class="invalid-feedback">Please select your Citizenship</div>

                                    </div>
                                </div>


                                <div class="row justify-content-between py-2 m-0 bdr-bottom">
                                    <div class="col-12 cs-font">Mobile No. <small style="font-size:11px"><i class="fa fa-check"></i>
                                            Verified</small></div>
                                </div>

                                <div class="form-group d-flex justify-content-start mt-4 mb-2">
                                    <label for="phone_code" class="form-label col-3 pr-2">Mobile Number<span class="m-field">*</span></label>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-2">
                                                <select id="phone_code" name="phone_code" size="1" class="form-control" required>
                                                    <option selected disabled value="">--- Select ---</option>
                                                    <option value="+91" {{ auth()->user()->phone_code == '+91'?'selected':''}}>+91 (India)</option>
                                                    <option value="+1" {{ auth()->user()->phone_code == '+1'?'selected':''}}>+1 (United States of America)</option>
                                                    <option value="220">+971 (United Arab Emirates)</option>
                                                    <option value="129">+60 (Malaysia)</option>
                                                    <option value="221">+44 (United Kingdom)</option>
                                                    <option value="13">+61 (Australia)</option>
                                                    <option value="185">+966 (Saudi Arabia)</option>
                                                    <option value="39">+1 (Canada)</option>
                                                    <option value="189">+65 (Singapore)</option>
                                                    <option value="114">+965 (Kuwait)</option>
                                                    <option value="">-----------------------------</option>
                                                    <option value="1">+93 (Afghanistan)</option>
                                                    <option value="2">+355 (Albania)</option>
                                                    <option value="3">+213 (Algeria)</option>
                                                    <option value="4">+684 (American Samoa)</option>
                                                    <option value="5">+376 (Andorra)</option>
                                                    <option value="6">+244 (Angola)</option>
                                                    <option value="7">+1264 (Anguilla)</option>
                                                    <option value="8">+672 (Antarctica)</option>
                                                    <option value="9">+1268 (Antigua and Barbuda)</option>
                                                    <option value="10">+54 (Argentina)</option>
                                                    <option value="11">+374 (Armenia)</option>
                                                    <option value="12">+297 (Aruba)</option>
                                                    <option value="13">+61 (Australia)</option>
                                                    <option value="14">+43 (Austria)</option>
                                                    <option value="15">+994 (Azerbaijan)</option>
                                                    <option value="16">+1242 (Bahamas)</option>
                                                    <option value="17">+973 (Bahrain)</option>
                                                    <option value="18">+880 (Bangladesh)</option>
                                                    <option value="19">+246 (Barbados)</option>
                                                    <option value="20">+375 (Belarus)</option>
                                                    <option value="21">+32 (Belgium)</option>
                                                    <option value="22">+501 (Belize)</option>
                                                    <option value="23">+229 (Benin)</option>
                                                    <option value="24">+441 (Bermuda)</option>
                                                    <option value="25">+975 (Bhutan)</option>
                                                    <option value="26">+591 (Bolivia)</option>
                                                    <option value="27">+387 (Bosnia and Herzegovina)</option>
                                                    <option value="28">+267 (Botswana)</option>
                                                    <option value="30">+55 (Brazil)</option>
                                                    <option value="32">+284 (British Virgin Islands)</option>
                                                    <option value="33">+673 (Brunei)</option>
                                                    <option value="34">+359 (Bulgaria)</option>
                                                    <option value="35">+226 (Burkina Faso)</option>
                                                    <option value="36">+257 (Burundi)</option>
                                                    <option value="37">+855 (Cambodia)</option>
                                                    <option value="38">+237 (Cameroon)</option>
                                                    <option value="40">+238 (Cape Verde)</option>
                                                    <option value="41">+345 (Cayman Islands)</option>
                                                    <option value="42">+236 (Central African Republic)</option>
                                                    <option value="43">+235 (Chad)</option>
                                                    <option value="44">+56 (Chile)</option>
                                                    <option value="45">+86 (China)</option>
                                                    <option value="46">+672 (Christmas Island)</option>
                                                    <option value="47">+672 (Cocos Islands)</option>
                                                    <option value="48">+57 (Colombia)</option>
                                                    <option value="49">+269 (Comoros)</option>
                                                    <option value="50">+242 (Congo)</option>
                                                    <option value="51">+682 (Cook Islands)</option>
                                                    <option value="52">+506 (Costa Rica)</option>
                                                    <option value="53">+385 (Croatia)</option>
                                                    <option value="54">+53 (Cuba)</option>
                                                    <option value="55">+357 (Cyprus)</option>
                                                    <option value="56">+420 (Czech Republic)</option>
                                                    <option value="57">+45 (Denmark)</option>
                                                    <option value="58">+253 (Djibouti)</option>
                                                    <option value="59">+767 (Dominica)</option>
                                                    <option value="60">+809 (Dominican Republic)</option>
                                                    <option value="61">+670 (East Timor)</option>
                                                    <option value="62">+593 (Ecuador)</option>
                                                    <option value="63">+20 (Egypt)</option>
                                                    <option value="64">+503 (El Salvador)</option>
                                                    <option value="65">+240 (Equatorial Guinea)</option>
                                                    <option value="66">+291 (Eritrea)</option>
                                                    <option value="67">+372 (Estonia)</option>
                                                    <option value="68">+251 (Ethiopia)</option>
                                                    <option value="69">+500 (Falkland Islands)</option>
                                                    <option value="70">+298 (Faroe Islands)</option>
                                                    <option value="71">+679 (Fiji)</option>
                                                    <option value="72">+358 (Finland)</option>
                                                    <option value="73">+33 (France)</option>
                                                    <option value="74">+594 (French Guiana)</option>
                                                    <option value="75">+689 (French Polynesia)</option>
                                                    <option value="77">+241 (Gabon)</option>
                                                    <option value="78">+220 (Gambia)</option>
                                                    <option value="79">+995 (Georgia)</option>
                                                    <option value="80">+49 (Germany)</option>
                                                    <option value="81">+223 (Ghana)</option>
                                                    <option value="82">+350 (Gibraltar)</option>
                                                    <option value="83">+30 (Greece)</option>
                                                    <option value="84">+299 (Greenland)</option>
                                                    <option value="85">+473 (Grenada)</option>
                                                    <option value="86">+590 (Guadeloupe)</option>
                                                    <option value="87">+671 (Guam)</option>
                                                    <option value="88">+502 (Guatemala)</option>
                                                    <option value="89">+224 (Guinea)</option>
                                                    <option value="90">+245 (Guinea-Bissau)</option>
                                                    <option value="91">+592 (Guyana)</option>
                                                    <option value="92">+509 (Haiti)</option>
                                                    <option value="94">+504 (Honduras)</option>
                                                    <option value="95">+852 (Hong Kong)</option>
                                                    <option value="96">+36 (Hungary)</option>
                                                    <option value="97">+354 (Iceland)</option>
                                                    <option value="98">+91 (India)</option>
                                                    <option value="99">+62 (Indonesia)</option>
                                                    <option value="100">+98 (Iran)</option>
                                                    <option value="101">+964 (Iraq)</option>
                                                    <option value="102">+353 (Ireland)</option>
                                                    <option value="103">+972 (Israel)</option>
                                                    <option value="104">+39 (Italy)</option>
                                                    <option value="106">+876 (Jamaica)</option>
                                                    <option value="107">+81 (Japan)</option>
                                                    <option value="108">+962 (Jordan)</option>
                                                    <option value="109">+7 (Kazakhstan)</option>
                                                    <option value="110">+254 (Kenya)</option>
                                                    <option value="111">+686 (Kiribati)</option>
                                                    <option value="112">+82 (Korea, North)</option>
                                                    <option value="113">+82 (Korea, South)</option>
                                                    <option value="114">+965 (Kuwait)</option>
                                                    <option value="115">+996 (Kyrgyzstan)</option>
                                                    <option value="116">+856 (Laos)</option>
                                                    <option value="117">+371 (Latvia)</option>
                                                    <option value="118">+961 (Lebanon)</option>
                                                    <option value="119">+266 (Lesotho)</option>
                                                    <option value="120">+231 (Liberia)</option>
                                                    <option value="121">+218 (Libya)</option>
                                                    <option value="122">+423 (Liechtenstein)</option>
                                                    <option value="123">+370 (Lithuania)</option>
                                                    <option value="124">+352 (Luxembourg)</option>
                                                    <option value="125">+853 (Macau)</option>
                                                    <option value="127">+261 (Madagascar)</option>
                                                    <option value="128">+265 (Malawi)</option>
                                                    <option value="129">+60 (Malaysia)</option>
                                                    <option value="130">+960 (Maldives)</option>
                                                    <option value="131">+223 (Mali)</option>
                                                    <option value="132">+356 (Malta)</option>
                                                    <option value="133">+692 (Marshall Islands)</option>
                                                    <option value="134">+596 (Martinique)</option>
                                                    <option value="135">+222 (Mauritania)</option>
                                                    <option value="136">+230 (Mauritius)</option>
                                                    <option value="137">+269 (Mayotte)</option>
                                                    <option value="138">+52 (Mexico)</option>
                                                    <option value="139">+691 (Micronesia)</option>
                                                    <option value="140">+373 (Moldova)</option>
                                                    <option value="141">+377 (Monaco)</option>
                                                    <option value="142">+976 (Mongolia)</option>
                                                    <option value="143">+664 (Montserrat)</option>
                                                    <option value="144">+212 (Morocco)</option>
                                                    <option value="145">+258 (Mozambique)</option>
                                                    <option value="146">+95 (Myanmar)</option>
                                                    <option value="147">+264 (Namibia)</option>
                                                    <option value="148">+674 (Nauru)</option>
                                                    <option value="149">+977 (Nepal)</option>
                                                    <option value="150">+31 (Netherlands)</option>
                                                    <option value="151">+599 (Netherlands Antilles)</option>
                                                    <option value="152">+687 (New Caledonia)</option>
                                                    <option value="153">+64 (New Zealand)</option>
                                                    <option value="154">+505 (Nicaragua)</option>
                                                    <option value="155">+227 (Niger)</option>
                                                    <option value="156">+234 (Nigeria)</option>
                                                    <option value="157">+683 (Niue)</option>
                                                    <option value="159">+1670 (Northern Mariana Islands)</option>
                                                    <option value="160">+47 (Norway)</option>
                                                    <option value="161">+968 (Oman)</option>
                                                    <option value="162">+92 (Pakistan)</option>
                                                    <option value="163">+680 (Palau)</option>
                                                    <option value="164">+507 (Panama)</option>
                                                    <option value="165">+675 (Papua New Guinea)</option>
                                                    <option value="166">+595 (Paraguay)</option>
                                                    <option value="167">+51 (Peru)</option>
                                                    <option value="168">+63 (Philippines)</option>
                                                    <option value="170">+48 (Poland)</option>
                                                    <option value="171">+351 (Portugal)</option>
                                                    <option value="172">+787 (Puerto Rico)</option>
                                                    <option value="173">+974 (Qatar)</option>
                                                    <option value="174">+262 (Reunion)</option>
                                                    <option value="175">+40 (Romania)</option>
                                                    <option value="176">+7 (Russia)</option>
                                                    <option value="177">+250 (Rwanda)</option>
                                                    <option value="179">+869 (Saint Kitts &amp; Nevis)</option>
                                                    <option value="180">+758 (Saint Lucia)</option>
                                                    <option value="181">+784 (Saint Vincent and The Grenadines)</option>
                                                    <option value="182">+685 (Samoa)</option>
                                                    <option value="183">+378 (San Marino)</option>
                                                    <option value="184">+239 (Sao Tome and Principe)</option>
                                                    <option value="185">+966 (Saudi Arabia)</option>
                                                    <option value="186">+221 (Senegal)</option>
                                                    <option value="187">+248 (Seychelles)</option>
                                                    <option value="188">+232 (Sierra Leone)</option>
                                                    <option value="189">+65 (Singapore)</option>
                                                    <option value="190">+421 (Slovakia)</option>
                                                    <option value="191">+386 (Slovenia)</option>
                                                    <option value="192">+252 (Somalia)</option>
                                                    <option value="193">+27 (South Africa)</option>
                                                    <option value="194">+34 (Spain)</option>
                                                    <option value="195">+94 (Sri Lanka)</option>
                                                    <option value="198">+249 (Sudan)</option>
                                                    <option value="199">+597 (Suriname)</option>
                                                    <option value="201">+268 (Swaziland)</option>
                                                    <option value="202">+46 (Sweden)</option>
                                                    <option value="203">+41 (Switzerland)</option>
                                                    <option value="204">+963 (Syria)</option>
                                                    <option value="205">+886 (Taiwan)</option>
                                                    <option value="206">+992 (Tajikistan)</option>
                                                    <option value="207">+255 (Tanzania)</option>
                                                    <option value="208">+66 (Thailand)</option>
                                                    <option value="209">+228 (Togo)</option>
                                                    <option value="210">+690 (Tokelau)</option>
                                                    <option value="211">+676 (Tonga)</option>
                                                    <option value="212">+868 (Trinidad and Tobago)</option>
                                                    <option value="213">+216 (Tunisia)</option>
                                                    <option value="214">+90 (Turkey)</option>
                                                    <option value="215">+993 (Turkmenistan)</option>
                                                    <option value="216">+649 (Turks and Caicos Islands)</option>
                                                    <option value="217">+688 (Tuvalu)</option>
                                                    <option value="218">+256 (Uganda)</option>
                                                    <option value="219">+380 (Ukraine)</option>
                                                    <option value="220">+971 (United Arab Emirates)</option>
                                                    <option value="221">+44 (United Kingdom)</option>
                                                    <option value="222">+1 (United States of America)</option>
                                                    <option value="223">+598 (Uruguay)</option>
                                                    <option value="224">+998 (Uzbekistan)</option>
                                                    <option value="225">+678 (Vanuatu)</option>
                                                    <option value="226">+379 (Vatican City)</option>
                                                    <option value="227">+58 (Venezuela)</option>
                                                    <option value="228">+84 (Vietnam)</option>
                                                    <option value="230">+681 (Wallis and Futuna Islands)</option>
                                                    <option value="232">+967 (Yemen)</option>
                                                    <option value="233">+381 (Yugoslavia (Former))</option>
                                                    <option value="235">+260 (Zambia)</option>
                                                    <option value="236">+263 (Zimbabwe)</option>
                                                    <option value="237">+243 (DR Congo)</option>
                                                </select>
                                            </div>

                                            <div class="col-10">
                                                <label for="contact_number" class="form-label col-3 pr-2 no-visible">Mobile Number<span class="m-field">*</span></label>
                                                <input type="text" id="contact_number" name="contact_number" value="{{ auth()->user()->contact_number }}" class="form-control" required>
                                                <div class="invalid-feedback">Please enter the valid phone/mobile numbers</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="alt_mobile" class="form-label col-3 pr-2">Alternate Number</label>
                                    <div class="col-12">
                                        <input type="text" id="alt_mobile" name="alt_mobile" value="{{ auth()->user()->alt_mobile }}" class="form-control" style="width:250px">
                                    </div>
                                </div>

                                <div class="row justify-content-between py-2 m-0 bdr-bottom">
                                    <div class="col-12 cs-font">Email Id <small style="font-size:11px"><i class="fa fa-check"></i>
                                            Verified</small></div>
                                </div>

                                <div class="form-group d-flex justify-content-start mt-4 mb-2">
                                    <label for="email" class="form-label col-3 pr-2">Email-Id<span class="m-field">*</span></label>
                                    <div class="col">
                                        <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" class="form-control" required>
                                        <div class="invalid-feedback">Please enter the valid phone/mobile numbers</div>

                                    </div>

                                </div>


                                <div class="form-group d-flex justify-content-end accnt-type mr-5">
                                    <input type="submit" class="s-btn" size="38" id="" name="" value="Save">
                                </div>
                            </form>

                            <!-- Form fields end hee -->
                        </div>
                    </div>
                </div>
            </div>



            @include('frontend.common.rightsidebar')
        </div>
    </div>
</scetion>
@endsection