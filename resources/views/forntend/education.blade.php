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

            <div class="col-lg-6  main-body">
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
                <div class="col-xs-6 col-sm-6 cs-font">Education &amp; Occupation </div>
                <div class="col-xs-6 col-sm-6 small text-right">Fields marked as <span class="m-field"
                    style="top:3px">*</span> are Mandatory</div>
              </div>
            </div>
            <div id="content">
              <!-- Form fields start hee -->
              <div id="pform">
                <form method="post" name="profileForm" id="profileForm" class="needs-validation" novalidate>

                  <div class="form-group d-flex justify-content-start my-4">
                    <label for="educationLevel" class="form-label col-3 pr-2">Higher Education <span
                        class="m-field">*</span></label>
                    <div class="col">
                      <select name="educationLevel" id="educationLevel" class="form-select" required>
                        <option class="">--Select--</option>
                        <optgroup label="Doctorates">
                          <option value="33">Ph.D.</option>
                          <option value="116">DM</option>
                          <option value="117">Postdoctoral fellow</option>
                          <option value="118">Fellow of National Board (FNB)</option>
                        </optgroup>
                        <optgroup label="Service - IAS / IPS / IRS / IES / IFS">
                          <option value="77">IAS</option>
                          <option value="78">IPS</option>
                          <option value="79">IRS</option>
                          <option value="80">IES</option>
                          <option value="81">IFS</option>
                          <option value="92">Other Degree in Service</option>
                        </optgroup>
                        <optgroup label="Any Financial Qualification - ICWAI / CA / CS/ CFA">
                          <option value="36">CA</option>
                          <option value="37">ICWA</option>
                          <option value="48">CS</option>
                          <option value="75">CFA (Chartered Financial Analyst)</option>
                          <option value="91">Other Degree in Finance</option>
                        </optgroup>
                        <optgroup label="Any Masters in Arts / Science / Commerce">
                          <option value="10">M.Phil.</option>
                          <option value="11">MCom</option>
                          <option value="12">M.Sc.</option>
                          <option value="13">M.A.</option>
                          <option value="38">M.Ed.</option>
                          <option value="60">MLIS</option>
                          <option value="63">MSW</option>
                          <option value="86">Other Master Degree in Arts / Science / Commerce</option>
                          <option value="98">MFA</option>
                          <option value="120">M.Des</option>
                        </optgroup>
                        <optgroup label="Any Masters in Engineering / Computers">
                          <option value="3">M.S.(Engg.)</option>
                          <option value="7">M.Arch.</option>
                          <option value="51">MCA</option>
                          <option value="52">PGDCA</option>
                          <option value="53">ME</option>
                          <option value="54">M.Tech.</option>
                          <option value="55">M.Sc. IT / Computer Science</option>
                          <option value="84">Other Masters Degree in Engineering / Computers</option>
                        </optgroup>
                        <optgroup label="Any Masters in Legal">
                          <option value="70">M.L.</option>
                          <option value="71">LL.M.</option>
                          <option value="89">Other Master Degree in Legal</option>
                        </optgroup>
                        <optgroup label="Any Masters in Management">
                          <option value="14">MHM (Hotel Management)</option>
                          <option value="61">MBA</option>
                          <option value="62">PGDM</option>
                          <option value="64">MHRM (Human Resource Management)</option>
                          <option value="76">MFM (Financial Management)</option>
                          <option value="96">Other Master Degree in Management</option>
                          <option value="112">MHA / MHM (Hospital Administration)</option>
                        </optgroup>
                        <optgroup label="Any Masters in Medicine - General / Dental / Surgeon">
                          <option value="20">MD / MS (Medical)</option>
                          <option value="22">MDS</option>
                          <option value="23">MVSc </option>
                          <option value="113">MCh</option>
                          <option value="114">DNB</option>
                        </optgroup>
                        <optgroup label="Any Bachelors in Arts / Science / Commerce">
                          <option value="15">B.Phil.</option>
                          <option value="16">B.Com.</option>
                          <option value="17">B.Sc.</option>
                          <option value="18">B.A.</option>
                          <option value="39">B.Ed.</option>
                          <option value="43">Aviation Degree</option>
                          <option value="56">BFA</option>
                          <option value="57">BLIS</option>
                          <option value="58">B.S.W</option>
                          <option value="59">B.M.M.</option>
                          <option value="66">BFT</option>
                          <option value="85">Other Bachelor Degree in Arts / Science / Commerce</option>
                          <option value="119">B.Des</option>
                        </optgroup>
                        <optgroup label="Any Bachelors in Engineering / Computers">
                          <option value="5">BCA</option>
                          <option value="6">Aeronautical Engineering</option>
                          <option value="8">B.Arch</option>
                          <option value="9">B.Plan</option>
                          <option value="49">BE</option>
                          <option value="50">B.Tech.</option>
                          <option value="83">Other Bachelor Degree in Engineering / Computers</option>
                          <option value="95">B.Sc IT/ Computer Science</option>
                          <option value="109">B.S.(Engineering)</option>
                        </optgroup>
                        <optgroup label="Any Bachelors in Legal">
                          <option value="72">BGL</option>
                          <option value="73">B.L.</option>
                          <option value="74">LL.B.</option>
                          <option value="90">Other Bachelor Degree in Legal</option>
                        </optgroup>
                        <optgroup label="Any Bachelors in Management">
                          <option value="19">BHM (Hotel Management)</option>
                          <option value="35">BBA</option>
                          <option value="65">BFM (Financial Management)</option>
                          <option value="87">Other Bachelor Degree in Management</option>
                          <option value="110">BHA / BHM (Hospital Administration)</option>
                        </optgroup>
                        <optgroup label="Any Bachelors in Medicine in General / Dental / Surgeon">
                          <option value="21">MBBS</option>
                          <option value="25">BDS</option>
                          <option value="26">BVSc</option>
                          <option value="28">BHMS</option>
                          <option value="29">B.A.M.S.</option>
                          <option value="68">BSMS</option>
                          <option value="69">BUMS</option>
                        </optgroup>
                        <optgroup label="Any Diploma">
                          <option value="45">Trade School</option>
                          <option value="46">Diploma</option>
                          <option value="82">Polytechnic</option>
                          <option value="94">Others in Diploma</option>
                        </optgroup>
                        <optgroup label="Higher Secondary / Secondary">
                          <option value="47">Higher Secondary School / High School</option>
                        </optgroup>
                        <optgroup label="Any Bachelors in Medicine Others">
                          <option value="27">BPT</option>
                          <option value="31">BPharm</option>
                          <option value="88">Other Bachelor Degree in Medicine</option>
                          <option value="101">B.Sc. Nursing</option>
                        </optgroup>
                        <optgroup label="Any Masters in Medicine Others">
                          <option value="24">MPT</option>
                          <option value="30">M.Pharm</option>
                          <option value="97">Other Master Degree in Medicine</option>
                        </optgroup>
                      </select>
                      <div class="invalid-feedback">Please select your Higher Education</div>
                    </div>
                  </div>

                  <div class="form-group d-flex justify-content-start my-4">
                    <label for="additionalDegree" class="form-label col-3 pr-2">Addiontal Degree</label>
                    <div class="col">
                      <select name="additionalDegree" id="additionalDegree" class="form-select">
                        <optgroup label="Doctorates">
                          <option value="33">Ph.D.</option>
                          <option value="116">DM</option>
                          <option value="117">Postdoctoral fellow</option>
                          <option value="118">Fellow of National Board (FNB)</option>
                        </optgroup>
                        <optgroup label="Service - IAS / IPS / IRS / IES / IFS">
                          <option value="77">IAS</option>
                          <option value="78">IPS</option>
                          <option value="79">IRS</option>
                          <option value="80">IES</option>
                          <option value="81">IFS</option>
                          <option value="92">Other Degree in Service</option>
                        </optgroup>
                        <optgroup label="Any Financial Qualification - ICWAI / CA / CS/ CFA">
                          <option value="36">CA</option>
                          <option value="37">ICWA</option>
                          <option value="48">CS</option>
                          <option value="75">CFA (Chartered Financial Analyst)</option>
                          <option value="91">Other Degree in Finance</option>
                        </optgroup>
                        <optgroup label="Any Masters in Arts / Science / Commerce">
                          <option value="10">M.Phil.</option>
                          <option value="11">MCom</option>
                          <option value="12">M.Sc.</option>
                          <option value="13">M.A.</option>
                          <option value="38">M.Ed.</option>
                          <option value="60">MLIS</option>
                          <option value="63">MSW</option>
                          <option value="86">Other Master Degree in Arts / Science / Commerce</option>
                          <option value="98">MFA</option>
                          <option value="120">M.Des</option>
                        </optgroup>
                        <optgroup label="Any Masters in Engineering / Computers">
                          <option value="3">M.S.(Engg.)</option>
                          <option value="7">M.Arch.</option>
                          <option value="51">MCA</option>
                          <option value="52">PGDCA</option>
                          <option value="53">ME</option>
                          <option value="54">M.Tech.</option>
                          <option value="55">M.Sc. IT / Computer Science</option>
                          <option value="84">Other Masters Degree in Engineering / Computers</option>
                        </optgroup>
                        <optgroup label="Any Masters in Legal">
                          <option value="70">M.L.</option>
                          <option value="71">LL.M.</option>
                          <option value="89">Other Master Degree in Legal</option>
                        </optgroup>
                        <optgroup label="Any Masters in Management">
                          <option value="14">MHM (Hotel Management)</option>
                          <option value="61">MBA</option>
                          <option value="62">PGDM</option>
                          <option value="64">MHRM (Human Resource Management)</option>
                          <option value="76">MFM (Financial Management)</option>
                          <option value="96">Other Master Degree in Management</option>
                          <option value="112">MHA / MHM (Hospital Administration)</option>
                        </optgroup>
                        <optgroup label="Any Masters in Medicine - General / Dental / Surgeon">
                          <option value="20">MD / MS (Medical)</option>
                          <option value="22">MDS</option>
                          <option value="23">MVSc </option>
                          <option value="113">MCh</option>
                          <option value="114">DNB</option>
                        </optgroup>
                        <optgroup label="Any Bachelors in Arts / Science / Commerce">
                          <option value="15">B.Phil.</option>
                          <option value="16">B.Com.</option>
                          <option value="17">B.Sc.</option>
                          <option value="18">B.A.</option>
                          <option value="39">B.Ed.</option>
                          <option value="43">Aviation Degree</option>
                          <option value="56">BFA</option>
                          <option value="57">BLIS</option>
                          <option value="58">B.S.W</option>
                          <option value="59">B.M.M.</option>
                          <option value="66">BFT</option>
                          <option value="85">Other Bachelor Degree in Arts / Science / Commerce</option>
                          <option value="119">B.Des</option>
                        </optgroup>
                        <optgroup label="Any Bachelors in Engineering / Computers">
                          <option value="5">BCA</option>
                          <option value="6">Aeronautical Engineering</option>
                          <option value="8">B.Arch</option>
                          <option value="9">B.Plan</option>
                          <option value="49">BE</option>
                          <option value="50">B.Tech.</option>
                          <option value="83">Other Bachelor Degree in Engineering / Computers</option>
                          <option value="95">B.Sc IT/ Computer Science</option>
                          <option value="109">B.S.(Engineering)</option>
                        </optgroup>
                        <optgroup label="Any Bachelors in Legal">
                          <option value="72">BGL</option>
                          <option value="73">B.L.</option>
                          <option value="74">LL.B.</option>
                          <option value="90">Other Bachelor Degree in Legal</option>
                        </optgroup>
                        <optgroup label="Any Bachelors in Management">
                          <option value="19">BHM (Hotel Management)</option>
                          <option value="35">BBA</option>
                          <option value="65">BFM (Financial Management)</option>
                          <option value="87">Other Bachelor Degree in Management</option>
                          <option value="110">BHA / BHM (Hospital Administration)</option>
                        </optgroup>
                        <optgroup label="Any Bachelors in Medicine in General / Dental / Surgeon">
                          <option value="21">MBBS</option>
                          <option value="25">BDS</option>
                          <option value="26">BVSc</option>
                          <option value="28">BHMS</option>
                          <option value="29">B.A.M.S.</option>
                          <option value="68">BSMS</option>
                          <option value="69">BUMS</option>
                        </optgroup>
                        <optgroup label="Any Diploma">
                          <option value="45">Trade School</option>
                          <option value="46">Diploma</option>
                          <option value="82">Polytechnic</option>
                          <option value="94">Others in Diploma</option>
                        </optgroup>
                        <optgroup label="Higher Secondary / Secondary">
                          <option value="47">Higher Secondary School / High School</option>
                        </optgroup>
                        <optgroup label="Any Bachelors in Medicine Others">
                          <option value="27">BPT</option>
                          <option value="31">BPharm</option>
                          <option value="88">Other Bachelor Degree in Medicine</option>
                          <option value="101">B.Sc. Nursing</option>
                        </optgroup>
                        <optgroup label="Any Masters in Medicine Others">
                          <option value="24">MPT</option>
                          <option value="30">M.Pharm</option>
                          <option value="97">Other Master Degree in Medicine</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
                  <div class="form-group d-flex justify-content-start">
                    <label for="collegeInstitution" class="form-label col-3 pr-2">College/Institution</label>
                    <div class="col"> <input type="text" id="collegeInstitution" name="placeofbirth" value=""
                        class="form-control" placeholder="Search for College/Institution">
                    </div>

                  </div>

                  <div class="form-group d-flex justify-content-start">

                    <label for="employMent" class="col-3 pr-2">Employed In <span class="m-field">*</span></label>
                    <div class="col">
                      <div class="row">
                        <div class="col">
                          <input type="radio" class="w-auto" value="1" checked="" required>
                          <label class="labelradiobtn">Government</label>
                          <input type="radio" class="w-auto" value="2" required>
                          <label class="labelradiobtn">Defence</label>
                          <input type="radio" class="w-auto" value="3" required>
                          <label class="labelradiobtn">Private</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <input type="radio" class="w-auto" value="4" required>
                          <label class="labelradiobtn">Business</label>
                          <input type="radio" class="w-auto" value="5" required>
                          <label class="labelradiobtn">Self Employed</label>
                          <input type="radio" class="w-auto" value="6" required>
                          <label class="labelradiobtn">Not Working</label>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="form-group d-flex justify-content-start">
                    <label for="Occupation" class="form-label col-3 pr-2">Occupation<span
                        class="m-field">*</span></label>
                    <div class="col">
                      <select id="Occupation" name="Occupation" class="form-control" required>
                        <option selected disabled value="">--Select--</option>
                        <option value="2">Student</option>
                        <option value="3">Retired</option>
                        <option value="4">Not Working</option>
                      </select>
                      <div class="invalid-feedback">Please select occupation</div>
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


            @include('forntend.common.rightsidebar')
        </div>
    </div>
</scetion>
@endsection