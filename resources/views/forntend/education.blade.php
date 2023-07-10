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
                <li><a class="dropdown-item" href="education-occupation">Education &amp; Occupation</a></li>
                <li><a class="dropdown-item" href="family-info">Family Details</a></li>
                <li><a class="dropdown-item" href="hobbies-and-interest">Hobbies &amp; Interest</a></li>
                <li><a class="dropdown-item" href="partner-preference">Partner Preference</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-info">Contact Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="enhanced-profile">Enhanced Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="trust-badge">Trust Badge</a>
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
              <div class="col-xs-6 col-sm-6 small text-right">Fields marked as <span class="m-field" style="top:3px">*</span> are Mandatory</div>
            </div>
          </div>
          <div id="content">
            <!-- Form fields start hee -->
            <div id="pform">
              <form method="post" name="profileForm" id="profileForm" class="needs-validation" novalidate>

                <div class="form-group d-flex justify-content-start my-4">
                  <label for="educationLevel" class="form-label col-3 pr-2">Higher Education <span class="m-field">*</span></label>
                  <div class="col">
                    <select name="higher_education" id="educationLevel" class="form-select" required>
                      <option class="">--Select--</option>
                      <optgroup label="Doctorates">
                        <option @if($education->higher_education == 'PH.D.') Selected @endif value="PH.D.">PH.D.</option>
                        <option @if($education->higher_education == 'DM') Selected @endif value="DM">DM</option>
                        <option @if($education->higher_education == 'Postdoctoral fellow') Selected @endif value="Postdoctoral fellow">Postdoctoral fellow</option>
                        <option @if($education->higher_education == 'Fellow of National Board (FNB)') Selected @endif value="Fellow of National Board (FNB)">Fellow of National Board (FNB)</option>
                      </optgroup>
                      <optgroup label="Service - IAS / IPS / IRS / IES / IFS">
                        <option @if($education->higher_education == 'IAS') Selected @endif value="IAS">IAS</option>
                        <option @if($education->higher_education == 'IPS') Selected @endif value="IPS">IPS</option>
                        <option @if($education->higher_education == 'IRS') Selected @endif value="IRS">IRS</option>
                        <option @if($education->higher_education == 'IES') Selected @endif value="IES">IES</option>
                        <option @if($education->higher_education == 'IFS') Selected @endif value="IFS">IFS</option>
                        <option @if($education->higher_education == 'Other Degree in Service') Selected @endif value="Other Degree in Service">Other Degree in Service</option>
                      </optgroup>
                      <optgroup label="Any Financial Qualification - ICWAI / CA / CS/ CFA">
                        <option @if($education->higher_education == 'CA') Selected @endif value="CA">CA</option>
                        <option @if($education->higher_education == 'ICWA') Selected @endif value="ICWA">ICWA</option>
                        <option @if($education->higher_education == 'CS') Selected @endif value="CS">CS</option>
                        <option @if($education->higher_education == 'CFA') Selected @endif value="CFA">CFA (Chartered Financial Analyst)</option>
                        <option @if($education->higher_education == 'Other Degree in Finance') Selected @endif value="Other Degree in Finance">Other Degree in Finance</option>
                      </optgroup>
                      <optgroup label="Any Masters in Arts / Science / Commerce">
                        <option @if($education->higher_education == 'M.Phil.') Selected @endif value="M.Phil.">M.Phil.</option>
                        <option @if($education->higher_education == 'MCom') Selected @endif value="MCom">MCom</option>
                        <option @if($education->higher_education == 'M.Sc.') Selected @endif value="M.Sc.">M.Sc.</option>
                        <option @if($education->higher_education == 'M.A.') Selected @endif value="M.A.">M.A.</option>
                        <option @if($education->higher_education == 'M.Ed.') Selected @endif value="M.Ed.">M.Ed.</option>
                        <option @if($education->higher_education == 'MLIS') Selected @endif value="MLIS">MLIS</option>
                        <option @if($education->higher_education == 'MSW') Selected @endif value="MSW">MSW</option>
                        <option @if($education->higher_education == 'MFS') Selected @endif value="MFA">MFA</option>
                        <option @if($education->higher_education == 'M.Des') Selected @endif value="M.Des">M.Des</option>
                        <option @if($education->higher_education == 'Other Master Degree in Arts / Science / Commerce') Selected @endif value="Other Master Degree in Arts / Science / Commerce">Other Master Degree in Arts / Science / Commerce</option>
                      </optgroup>
                      <optgroup label="Any Masters in Engineering / Computers">
                        <option @if($education->higher_education == 'M.S') Selected @endif value="M.S>">M.S.(Engg.)</option>
                        <option @if($education->higher_education == 'M.Arch.') Selected @endif value="M.Arch.">M.Arch.</option>
                        <option @if($education->higher_education == 'MCA') Selected @endif value="MCA">MCA</option>
                        <option @if($education->higher_education == 'PGDCA') Selected @endif value="PGDCA">PGDCA</option>
                        <option @if($education->higher_education == 'ME') Selected @endif value="ME">ME</option>
                        <option @if($education->higher_education == 'M.Tech.') Selected @endif value="M.Tech.">M.Tech.</option>
                        <option @if($education->higher_education == 'M.Sc. IT / Computer Science') Selected @endif value="M.Sc. IT / Computer Science">M.Sc. IT / Computer Science</option>
                        <option @if($education->higher_education == 'Other Masters Degree in Engineering / Computers') Selected @endif value="Other Masters Degree in Engineering / Computers">Other Masters Degree in Engineering / Computers</option>
                      </optgroup>
                      <optgroup label="Any Masters in Legal">
                        <option @if($education->higher_education == 'M.L.') Selected @endif value="M.L.">M.L.</option>
                        <option @if($education->higher_education == 'LL.M.') Selected @endif value="LL.M">LL.M.</option>
                        <option @if($education->higher_education == 'ther Master Degree in Legal') Selected @endif value="ther Master Degree in Legal">Other Master Degree in Legal</option>
                      </optgroup>
                      <optgroup label="Any Masters in Management">
                        <option @if($education->higher_education == 'MHM (Hotel Management)') Selected @endif value="MHM (Hotel Management)">MHM (Hotel Management)</option>
                        <option @if($education->higher_education == 'MBA') Selected @endif value="MBA">MBA</option>
                        <option @if($education->higher_education == 'PGDM') Selected @endif value="PGDM">PGDM</option>
                        <option @if($education->higher_education == 'MHRM (Human Resource Management)') Selected @endif value="MHRM (Human Resource Management)">MHRM (Human Resource Management)</option>
                        <option @if($education->higher_education == 'MFM (Financial Management)') Selected @endif value="MFM (Financial Management)">MFM (Financial Management)</option>
                        <option @if($education->higher_education == 'MHA / MHM (Hospital Administration)') Selected @endif value="MHA / MHM (Hospital Administration)">MHA / MHM (Hospital Administration)</option>
                        <option @if($education->higher_education == 'Other Master Degree in Management') Selected @endif value="Other Master Degree in Management">Other Master Degree in Management</option>
                      </optgroup>
                      <optgroup label="Any Masters in Medicine - General / Dental / Surgeon">
                        <option @if($education->higher_education == 'MD / MS (Medical)') Selected @endif value="MD / MS (Medical)">MD / MS (Medical)</option>
                        <option @if($education->higher_education == 'MDS') Selected @endif value="MDS">MDS</option>
                        <option @if($education->higher_education == 'MVSc') Selected @endif value="MVSc">MVSc </option>
                        <option @if($education->higher_education == 'MCh') Selected @endif value="MCh">MCh</option>
                        <option @if($education->higher_education == 'DNB') Selected @endif value="114">DNB</option>
                      </optgroup>
                      <optgroup label="Any Bachelors in Arts / Science / Commerce">
                        <option @if($education->higher_education == 'Aviation Degree') Selected @endif value="Aviation Degree">Aviation Degree</option>
                        <option @if($education->higher_education == 'B.Phil.') Selected @endif value="B.Phil.">B.Phil.</option>
                        <option @if($education->higher_education == 'B.Com.') Selected @endif value="B.Com.">B.Com.</option>
                        <option @if($education->higher_education == 'B.Sc') Selected @endif value="B.Sc">B.Sc.</option>
                        <option @if($education->higher_education == 'B.A.') Selected @endif value="B.A.">B.A.</option>
                        <option @if($education->higher_education == 'B.Ed.') Selected @endif value="B.Ed.">B.Ed.</option>
                        <option @if($education->higher_education == 'BFA') Selected @endif value="BFA">BFA</option>
                        <option @if($education->higher_education == 'BLIS') Selected @endif value="BLIS">BLIS</option>
                        <option @if($education->higher_education == 'B.S.W') Selected @endif value="B.S.W">B.S.W</option>
                        <option @if($education->higher_education == 'B.M.M.') Selected @endif value="B.M.M.">B.M.M.</option>
                        <option @if($education->higher_education == 'BFT') Selected @endif value="BFT">BFT</option>
                        <option @if($education->higher_education == 'B.Des') Selected @endif value="B.Des">B.Des</option>
                        <option @if($education->higher_education == 'Other Bachelor Degree in Arts / Science / Commerce') Selected @endif value="Other Bachelor Degree in Arts / Science / Commerce">Other Bachelor Degree in Arts / Science / Commerce</option>
                      </optgroup>
                      <optgroup label="Any Bachelors in Engineering / Computers">
                        <option @if($education->higher_education == 'BCA') Selected @endif value="BCA">BCA</option>
                        <option @if($education->higher_education == 'Aeronautical Engineering') Selected @endif value="Aeronautical Engineering">Aeronautical Engineering</option>
                        <option @if($education->higher_education == 'B.Arch') Selected @endif value="B.Arch">B.Arch</option>
                        <option @if($education->higher_education == 'B.Plan') Selected @endif value="B.Plan">B.Plan</option>
                        <option @if($education->higher_education == 'BE') Selected @endif value="BE">BE</option>
                        <option @if($education->higher_education == 'B.Tech.') Selected @endif value="B.Tech.">B.Tech.</option>
                        <option @if($education->higher_education == 'B.Sc IT/ Computer Science') Selected @endif value="B.Sc IT/ Computer Science">B.Sc IT/ Computer Science</option>
                        <option @if($education->higher_education == 'B.S.(Engineering)') Selected @endif value="B.S.(Engineering)">B.S.(Engineering)</option>
                        <option @if($education->higher_education == 'Other Bachelor Degree in Engineering<') Selected @endif value="Other Bachelor Degree in Engineering<">Other Bachelor Degree in Engineering</option>
                      </optgroup>
                      <optgroup label="Any Bachelors in Legal">
                        <option @if($education->higher_education == 'BGL') Selected @endif value="BGL">BGL</option>
                        <option @if($education->higher_education == 'B.L.') Selected @endif value="B.L.">B.L.</option>
                        <option @if($education->higher_education == 'LL.B.') Selected @endif value="LL.B.">LL.B.</option>
                        <option @if($education->higher_education == 'Other Bachelor Degree in Legal') Selected @endif value="Other Bachelor Degree in Legal">Other Bachelor Degree in Legal</option>
                      </optgroup>
                      <optgroup label="Any Bachelors in Management">
                        <option @if($education->higher_education == 'BHM (Hotel Management)') Selected @endif value="BHM (Hotel Management)">BHM (Hotel Management)</option>
                        <option @if($education->higher_education == 'BBA') Selected @endif value="BBA">BBA</option>
                        <option @if($education->higher_education == 'BFM (Financial Management)') Selected @endif value="BFM (Financial Management)">BFM (Financial Management)</option>
                        <option @if($education->higher_education == 'BHA / BHM (Hospital Administration)') Selected @endif value="BHA / BHM (Hospital Administration)">BHA / BHM (Hospital Administration)</option>
                        <option @if($education->higher_education == 'Other Bachelor Degree in Management') Selected @endif value="Other Bachelor Degree in Management">Other Bachelor Degree in Management</option>
                      </optgroup>
                      <optgroup label="Any Bachelors in Medicine in General / Dental / Surgeon">
                        <option @if($education->higher_education == 'MBBS') Selected @endif value="MBBS">MBBS</option>
                        <option @if($education->higher_education == 'BDS') Selected @endif value="BDS">BDS</option>
                        <option @if($education->higher_education == 'BVSc') Selected @endif value="BVSc">BVSc</option>
                        <option @if($education->higher_education == 'BHMS') Selected @endif value="BHMS">BHMS</option>
                        <option @if($education->higher_education == 'B.A.M.S.') Selected @endif value="B.A.M.S.">B.A.M.S.</option>
                        <option @if($education->higher_education == 'BSMS') Selected @endif value="BSMS">BSMS</option>
                        <option @if($education->higher_education == 'BUMS') Selected @endif value="BUMS">BUMS</option>
                      </optgroup>
                      <optgroup label="Any Diploma">
                        <option @if($education->higher_education == 'Trade School') Selected @endif value="45">Trade School</option>
                        <option @if($education->higher_education == 'Diploma') Selected @endif value="Diploma">Diploma</option>
                        <option @if($education->higher_education == 'Polytechnic') Selected @endif value="Polytechnic">Polytechnic</option>
                        <option @if($education->higher_education == 'Others in Diploma') Selected @endif value="Others in Diploma">Others in Diploma</option>
                      </optgroup>
                      <optgroup label="Higher Secondary / Secondary">
                        <option @if($education->higher_education == 'Higher Secondary School / High School') Selected @endif value="Higher Secondary School / High School">Higher Secondary School / High School</option>
                      </optgroup>
                      <optgroup label="Any Bachelors in Medicine Others">
                        <option @if($education->higher_education == 'BPT') Selected @endif value="BPT">BPT</option>
                        <option @if($education->higher_education == 'BPharm') Selected @endif value="BPharm">BPharm</option>
                        <option @if($education->higher_education == 'B.Sc. Nursing') Selected @endif value="B.Sc. Nursing">B.Sc. Nursing</option>
                        <option @if($education->higher_education == 'Other Bachelor Degree in Medicine') Selected @endif value="Other Bachelor Degree in Medicine">Other Bachelor Degree in Medicine</option>
                      </optgroup>
                      <optgroup label="Any Masters in Medicine Others">
                        <option @if($education->higher_education == 'MPT') Selected @endif value="MPT">MPT</option>
                        <option @if($education->higher_education == 'M.Pharm') Selected @endif value="M.Pharm">M.Pharm</option>
                        <option @if($education->higher_education == 'Other Master Degree in Medicine') Selected @endif value="Other Master Degree in Medicine">Other Master Degree in Medicine</option>
                      </optgroup>
                    </select>
                    <div class="invalid-feedback">Please select your Higher Education</div>
                  </div>
                </div>

                <div class="form-group d-flex justify-content-start my-4">
                  <label for="additionalDegree" class="form-label col-3 pr-2">Addiontal Degree</label>
                  <div class="col">

                    <select name="addiontal_degree" id="educationLevel" class="form-select" required>
                      <option class="">--Select--</option>
                      <optgroup label="Doctorates">
                        <option @if($education->addiontal_degree == 'PH.D.') Selected @endif value="PH.D.">PH.D.</option>
                        <option @if($education->addiontal_degree == 'DM') Selected @endif value="DM">DM</option>
                        <option @if($education->addiontal_degree == 'Postdoctoral fellow') Selected @endif value="Postdoctoral fellow">Postdoctoral fellow</option>
                        <option @if($education->addiontal_degree == 'Fellow of National Board (FNB)') Selected @endif value="Fellow of National Board (FNB)">Fellow of National Board (FNB)</option>
                      </optgroup>
                      <optgroup label="Service - IAS / IPS / IRS / IES / IFS">
                        <option @if($education->addiontal_degree == 'IAS') Selected @endif value="IAS">IAS</option>
                        <option @if($education->addiontal_degree == 'IPS') Selected @endif value="IPS">IPS</option>
                        <option @if($education->addiontal_degree == 'IRS') Selected @endif value="IRS">IRS</option>
                        <option @if($education->addiontal_degree == 'IES') Selected @endif value="IES">IES</option>
                        <option @if($education->addiontal_degree == 'IFS') Selected @endif value="IFS">IFS</option>
                        <option @if($education->addiontal_degree == 'Other Degree in Service') Selected @endif value="Other Degree in Service">Other Degree in Service</option>
                      </optgroup>
                      <optgroup label="Any Financial Qualification - ICWAI / CA / CS/ CFA">
                        <option @if($education->addiontal_degree == 'CA') Selected @endif value="CA">CA</option>
                        <option @if($education->addiontal_degree == 'ICWA') Selected @endif value="ICWA">ICWA</option>
                        <option @if($education->addiontal_degree == 'CS') Selected @endif value="CS">CS</option>
                        <option @if($education->addiontal_degree == 'CFA') Selected @endif value="CFA">CFA (Chartered Financial Analyst)</option>
                        <option @if($education->addiontal_degree == 'Other Degree in Finance') Selected @endif value="Other Degree in Finance">Other Degree in Finance</option>
                      </optgroup>
                      <optgroup label="Any Masters in Arts / Science / Commerce">
                        <option @if($education->addiontal_degree == 'M.Phil.') Selected @endif value="M.Phil.">M.Phil.</option>
                        <option @if($education->addiontal_degree == 'MCom') Selected @endif value="MCom">MCom</option>
                        <option @if($education->addiontal_degree == 'M.Sc.') Selected @endif value="M.Sc.">M.Sc.</option>
                        <option @if($education->addiontal_degree == 'M.A.') Selected @endif value="M.A.">M.A.</option>
                        <option @if($education->addiontal_degree == 'M.Ed.') Selected @endif value="M.Ed.">M.Ed.</option>
                        <option @if($education->addiontal_degree == 'MLIS') Selected @endif value="MLIS">MLIS</option>
                        <option @if($education->addiontal_degree == 'MSW') Selected @endif value="MSW">MSW</option>
                        <option @if($education->addiontal_degree == 'MFS') Selected @endif value="MFA">MFA</option>
                        <option @if($education->addiontal_degree == 'M.Des') Selected @endif value="M.Des">M.Des</option>
                        <option @if($education->addiontal_degree == 'Other Master Degree in Arts / Science / Commerce') Selected @endif value="Other Master Degree in Arts / Science / Commerce">Other Master Degree in Arts / Science / Commerce</option>
                      </optgroup>
                      <optgroup label="Any Masters in Engineering / Computers">
                        <option @if($education->addiontal_degree == 'M.S') Selected @endif value="M.S>">M.S.(Engg.)</option>
                        <option @if($education->addiontal_degree == 'M.Arch.') Selected @endif value="M.Arch.">M.Arch.</option>
                        <option @if($education->addiontal_degree == 'MCA') Selected @endif value="MCA">MCA</option>
                        <option @if($education->addiontal_degree == 'PGDCA') Selected @endif value="PGDCA">PGDCA</option>
                        <option @if($education->addiontal_degree == 'ME') Selected @endif value="ME">ME</option>
                        <option @if($education->addiontal_degree == 'M.Tech.') Selected @endif value="M.Tech.">M.Tech.</option>
                        <option @if($education->addiontal_degree == 'M.Sc. IT / Computer Science') Selected @endif value="M.Sc. IT / Computer Science">M.Sc. IT / Computer Science</option>
                        <option @if($education->addiontal_degree == 'Other Masters Degree in Engineering / Computers') Selected @endif value="Other Masters Degree in Engineering / Computers">Other Masters Degree in Engineering / Computers</option>
                      </optgroup>
                      <optgroup label="Any Masters in Legal">
                        <option @if($education->addiontal_degree == 'M.L.') Selected @endif value="M.L.">M.L.</option>
                        <option @if($education->addiontal_degree == 'LL.M.') Selected @endif value="LL.M">LL.M.</option>
                        <option @if($education->addiontal_degree == 'ther Master Degree in Legal') Selected @endif value="ther Master Degree in Legal">Other Master Degree in Legal</option>
                      </optgroup>
                      <optgroup label="Any Masters in Management">
                        <option @if($education->addiontal_degree == 'MHM (Hotel Management)') Selected @endif value="MHM (Hotel Management)">MHM (Hotel Management)</option>
                        <option @if($education->addiontal_degree == 'MBA') Selected @endif value="MBA">MBA</option>
                        <option @if($education->addiontal_degree == 'PGDM') Selected @endif value="PGDM">PGDM</option>
                        <option @if($education->addiontal_degree == 'MHRM (Human Resource Management)') Selected @endif value="MHRM (Human Resource Management)">MHRM (Human Resource Management)</option>
                        <option @if($education->addiontal_degree == 'MFM (Financial Management)') Selected @endif value="MFM (Financial Management)">MFM (Financial Management)</option>
                        <option @if($education->addiontal_degree == 'MHA / MHM (Hospital Administration)') Selected @endif value="MHA / MHM (Hospital Administration)">MHA / MHM (Hospital Administration)</option>
                        <option @if($education->addiontal_degree == 'Other Master Degree in Management') Selected @endif value="Other Master Degree in Management">Other Master Degree in Management</option>
                      </optgroup>
                      <optgroup label="Any Masters in Medicine - General / Dental / Surgeon">
                        <option @if($education->addiontal_degree == 'MD / MS (Medical)') Selected @endif value="MD / MS (Medical)">MD / MS (Medical)</option>
                        <option @if($education->addiontal_degree == 'MDS') Selected @endif value="MDS">MDS</option>
                        <option @if($education->addiontal_degree == 'MVSc') Selected @endif value="MVSc">MVSc </option>
                        <option @if($education->addiontal_degree == 'MCh') Selected @endif value="MCh">MCh</option>
                        <option @if($education->addiontal_degree == 'DNB') Selected @endif value="114">DNB</option>
                      </optgroup>
                      <optgroup label="Any Bachelors in Arts / Science / Commerce">
                        <option @if($education->addiontal_degree == 'Aviation Degree') Selected @endif value="Aviation Degree">Aviation Degree</option>
                        <option @if($education->addiontal_degree == 'B.Phil.') Selected @endif value="B.Phil.">B.Phil.</option>
                        <option @if($education->addiontal_degree == 'B.Com.') Selected @endif value="B.Com.">B.Com.</option>
                        <option @if($education->addiontal_degree == 'B.Sc') Selected @endif value="B.Sc">B.Sc.</option>
                        <option @if($education->addiontal_degree == 'B.A.') Selected @endif value="B.A.">B.A.</option>
                        <option @if($education->addiontal_degree == 'B.Ed.') Selected @endif value="B.Ed.">B.Ed.</option>
                        <option @if($education->addiontal_degree == 'BFA') Selected @endif value="BFA">BFA</option>
                        <option @if($education->addiontal_degree == 'BLIS') Selected @endif value="BLIS">BLIS</option>
                        <option @if($education->addiontal_degree == 'B.S.W') Selected @endif value="B.S.W">B.S.W</option>
                        <option @if($education->addiontal_degree == 'B.M.M.') Selected @endif value="B.M.M.">B.M.M.</option>
                        <option @if($education->addiontal_degree == 'BFT') Selected @endif value="BFT">BFT</option>
                        <option @if($education->addiontal_degree == 'B.Des') Selected @endif value="B.Des">B.Des</option>
                        <option @if($education->addiontal_degree == 'Other Bachelor Degree in Arts / Science / Commerce') Selected @endif value="Other Bachelor Degree in Arts / Science / Commerce">Other Bachelor Degree in Arts / Science / Commerce</option>
                      </optgroup>
                      <optgroup label="Any Bachelors in Engineering / Computers">
                        <option @if($education->addiontal_degree == 'BCA') Selected @endif value="BCA">BCA</option>
                        <option @if($education->addiontal_degree == 'Aeronautical Engineering') Selected @endif value="Aeronautical Engineering">Aeronautical Engineering</option>
                        <option @if($education->addiontal_degree == 'B.Arch') Selected @endif value="B.Arch">B.Arch</option>
                        <option @if($education->addiontal_degree == 'B.Plan') Selected @endif value="B.Plan">B.Plan</option>
                        <option @if($education->addiontal_degree == 'BE') Selected @endif value="BE">BE</option>
                        <option @if($education->addiontal_degree == 'B.Tech.') Selected @endif value="B.Tech.">B.Tech.</option>
                        <option @if($education->addiontal_degree == 'B.Sc IT/ Computer Science') Selected @endif value="B.Sc IT/ Computer Science">B.Sc IT/ Computer Science</option>
                        <option @if($education->addiontal_degree == 'B.S.(Engineering)') Selected @endif value="B.S.(Engineering)">B.S.(Engineering)</option>
                        <option @if($education->addiontal_degree == 'Other Bachelor Degree in Engineering<') Selected @endif value="Other Bachelor Degree in Engineering<">Other Bachelor Degree in Engineering</option>
                      </optgroup>
                      <optgroup label="Any Bachelors in Legal">
                        <option @if($education->addiontal_degree == 'BGL') Selected @endif value="BGL">BGL</option>
                        <option @if($education->addiontal_degree == 'B.L.') Selected @endif value="B.L.">B.L.</option>
                        <option @if($education->addiontal_degree == 'LL.B.') Selected @endif value="LL.B.">LL.B.</option>
                        <option @if($education->addiontal_degree == 'Other Bachelor Degree in Legal') Selected @endif value="Other Bachelor Degree in Legal">Other Bachelor Degree in Legal</option>
                      </optgroup>
                      <optgroup label="Any Bachelors in Management">
                        <option @if($education->addiontal_degree == 'BHM (Hotel Management)') Selected @endif value="BHM (Hotel Management)">BHM (Hotel Management)</option>
                        <option @if($education->addiontal_degree == 'BBA') Selected @endif value="BBA">BBA</option>
                        <option @if($education->addiontal_degree == 'BFM (Financial Management)') Selected @endif value="BFM (Financial Management)">BFM (Financial Management)</option>
                        <option @if($education->addiontal_degree == 'BHA / BHM (Hospital Administration)') Selected @endif value="BHA / BHM (Hospital Administration)">BHA / BHM (Hospital Administration)</option>
                        <option @if($education->addiontal_degree == 'Other Bachelor Degree in Management') Selected @endif value="Other Bachelor Degree in Management">Other Bachelor Degree in Management</option>
                      </optgroup>
                      <optgroup label="Any Bachelors in Medicine in General / Dental / Surgeon">
                        <option @if($education->addiontal_degree == 'MBBS') Selected @endif value="MBBS">MBBS</option>
                        <option @if($education->addiontal_degree == 'BDS') Selected @endif value="BDS">BDS</option>
                        <option @if($education->addiontal_degree == 'BVSc') Selected @endif value="BVSc">BVSc</option>
                        <option @if($education->addiontal_degree == 'BHMS') Selected @endif value="BHMS">BHMS</option>
                        <option @if($education->addiontal_degree == 'B.A.M.S.') Selected @endif value="B.A.M.S.">B.A.M.S.</option>
                        <option @if($education->addiontal_degree == 'BSMS') Selected @endif value="BSMS">BSMS</option>
                        <option @if($education->addiontal_degree == 'BUMS') Selected @endif value="BUMS">BUMS</option>
                      </optgroup>
                      <optgroup label="Any Diploma">
                        <option @if($education->addiontal_degree == 'Trade School') Selected @endif value="45">Trade School</option>
                        <option @if($education->addiontal_degree == 'Diploma') Selected @endif value="Diploma">Diploma</option>
                        <option @if($education->addiontal_degree == 'Polytechnic') Selected @endif value="Polytechnic">Polytechnic</option>
                        <option @if($education->addiontal_degree == 'Others in Diploma') Selected @endif value="Others in Diploma">Others in Diploma</option>
                      </optgroup>
                      <optgroup label="Higher Secondary / Secondary">
                        <option @if($education->addiontal_degree == 'Higher Secondary School / High School') Selected @endif value="Higher Secondary School / High School">Higher Secondary School / High School</option>
                      </optgroup>
                      <optgroup label="Any Bachelors in Medicine Others">
                        <option @if($education->addiontal_degree == 'BPT') Selected @endif value="BPT">BPT</option>
                        <option @if($education->addiontal_degree == 'BPharm') Selected @endif value="BPharm">BPharm</option>
                        <option @if($education->addiontal_degree == 'B.Sc. Nursing') Selected @endif value="B.Sc. Nursing">B.Sc. Nursing</option>
                        <option @if($education->addiontal_degree == 'Other Bachelor Degree in Medicine') Selected @endif value="Other Bachelor Degree in Medicine">Other Bachelor Degree in Medicine</option>
                      </optgroup>
                      <optgroup label="Any Masters in Medicine Others">
                        <option @if($education->addiontal_degree == 'MPT') Selected @endif value="MPT">MPT</option>
                        <option @if($education->addiontal_degree == 'M.Pharm') Selected @endif value="M.Pharm">M.Pharm</option>
                        <option @if($education->addiontal_degree == 'Other Master Degree in Medicine') Selected @endif value="Other Master Degree in Medicine">Other Master Degree in Medicine</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="form-group d-flex justify-content-start">
                  <label for="collegeInstitution" class="form-label col-3 pr-2">College/Institution</label>
                  <div class="col"> <input type="text" id="collegeInstitution" name="college_name" value="{{$education->college_name}}" class="form-control" placeholder="Search for College/Institution">
                  </div>

                </div>

                <div class="form-group d-flex justify-content-start">

                  <label for="employMent" class="col-3 pr-2">Employed In <span class="m-field">*</span></label>
                  <div class="col">
                    <div class="row">
                      <div class="col">
                        <input type="radio" class="w-auto" name="employed" value="Government" @if($education->employed == 'Government') Checked @endif required>
                        <label class="labelradiobtn">Government</label>
                        <input type="radio" class="w-auto" name="employed" value="Defence" @if($education->employed == 'Defence') Checked @endif required>
                        <label class="labelradiobtn">Defence</label>
                        <input type="radio" class="w-auto" name="employed" value="Private" @if($education->employed == 'Private') Checked @endif required>
                        <label class="labelradiobtn">Private</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <input type="radio" class="w-auto" name="employed" value="Business" @if($education->employed == 'Business') Checked @endif required>
                        <label class="labelradiobtn">Business</label>
                        <input type="radio" class="w-auto" name="employed" value="Self Employed" @if($education->employed == 'Self Employed') Checked @endif required>
                        <label class="labelradiobtn">Self Employed</label>
                        <input type="radio" class="w-auto" name="employed" value="Not Working" @if($education->employed == 'Not Working') Checked @endif required>
                        <label class="labelradiobtn">Not Working</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group d-flex justify-content-start">
                  <label for="Occupation" class="form-label col-3 pr-2">Working As<span class="m-field">*</span></label>
                  <div class="col">
                    <input type="text" id="collegeInstitution" name="occupation" value="{{$education->occupation}}" class="form-control" placeholder="Software Develoer">
                  </div>
                </div>
                <div class="form-group d-flex justify-content-start">
                  <label for="Occupation" class="form-label col-3 pr-2">Annual Income<span class="m-field">*</span></label>
                  <div class="col">
                    <select id="Occupation" name="annual_income" class="form-control" required>
                      <option  value="">--Select--</option>
                      <option @if($education->annual_income == 'NA') Checked @endif value="NA">NA</option>
                      <option @if($education->annual_income == 'Upto INR 1 Lakh') Checked @endif value="Upto INR 1 Lakh">Upto INR 1 Lakh</option>
                      <option @if($education->annual_income == 'INR 1 Lakh to 2 Lakh') Checked @endif value="INR 1 Lakh to 2 Lakh">INR 1 Lakh to 2 Lakh</option>
                      <option @if($education->annual_income == 'INR 2 Lakh to 4 Lakh') Checked @endif value="INR 2 Lakh to 4 Lakh">INR 2 Lakh to 4 Lakh</option>
                      <option @if($education->annual_income == 'INR 4 Lakh to 7 Lakh') Checked @endif value="INR 4 Lakh to 7 Lakh">INR 4 Lakh to 7 Lakh</option>
                      <option @if($education->annual_income == 'INR 7 Lakh to 10 Lakh') Checked @endif value="INR 7 Lakh to 10 Lakh">INR 7 Lakh to 10 Lakh</option>
                      <option @if($education->annual_income == 'INR 10 Lakh to 1 Lakh') Checked @endif value="INR 10 Lakh to 15 Lakh">INR 10 Lakh to 15 Lakh</option>
                      <option @if($education->annual_income == 'INR 15 Lakh to 20 Lakh') Checked @endif value="INR 15 Lakh to 20 Lakh">INR 15 Lakh to 20 Lakh</option>
                      <option @if($education->annual_income == 'INR 20 Lakh to 30 Lakh') Checked @endif value="INR 20 Lakh to 30 Lakh">INR 20 Lakh to 30 Lakh</option>
                      <option @if($education->annual_income == 'INR 30 Lakh to 50 Lakh') Checked @endif value="INR 30 Lakh to 50 Lakh">INR 30 Lakh to 50 Lakh</option>
                      <option @if($education->annual_income == 'INR 50 Lakh to 75 Lakh') Checked @endif value="INR 50 Lakh to 75 Lakh">INR 50 Lakh to 75 Lakh</option>
                      <option @if($education->annual_income == 'INR 75 Lakh to 1 Crore') Checked @endif value="INR 75 Lakh to 1 Crore">INR 75 Lakh to 1 Crore</option>
                      <option @if($education->annual_income == 'INR 1 Crore & above') Checked @endif value="INR 1 Crore & above">INR 1 Crore & above</option>
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