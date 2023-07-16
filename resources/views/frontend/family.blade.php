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
                            <div class="col-xs-6 col-sm-6 cs-font">Family Details</div>
                            <div class="col-xs-6 col-sm-6 small text-right">Fields marked as <span class="m-field" style="top:3px">*</span> are Mandatory</div>
                        </div>
                    </div>
                    <div id="content">
                        <!-- Form fields start hee -->
                        <div id="pform">
                            <form method="post" name="profileForm" id="profileForm" class="needs-validation" novalidate>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="familyValue" class="col-3 pr-2">Family Value <span class="m-field">*</span></label>
                                    <div class="col">
                                        <input type="radio" class="w-auto" value="1" required>
                                        <label class="labelradiobtn">Orthodox</label>
                                        <input type="radio" class="w-auto" value="2" required>
                                        <label class="labelradiobtn">Traditional</label>
                                        <input type="radio" class="w-auto" value="3" required>
                                        <label class="labelradiobtn">Moderate</label>
                                        <input type="radio" class="w-auto" value="4" required>
                                        <label class="labelradiobtn">Liberal</label>
                                        <div class="invalid-feedback">Please select your Higher Education</div>
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="familyType" class="col-3 pr-2">Family Type <span class="m-field">*</span></label>
                                    <div class="col">
                                        <input type="radio" class="w-auto" value="1" required>
                                        <label class="labelradiobtn">Joint Family</label>
                                        <input type="radio" class="w-auto" value="2" required>
                                        <label class="labelradiobtn">Nuclear Family</label>
                                        <div class="invalid-feedback">Please select your Higher Education</div>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="familyFinStatus" class="col-3 pr-2">Family Status <span class="m-field">*</span></label>
                                    <div class="col">
                                        <input type="radio" class="w-auto" value="1" checked="" required>
                                        <label class="labelradiobtn">Middle Class</label>
                                        <input type="radio" class="w-auto" value="2" required>
                                        <label class="labelradiobtn">Upper middle class</label>
                                        <input type="radio" class="w-auto" value="3" required>
                                        <label class="labelradiobtn">Rich / Affluent</label>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="nativePlace" class="form-label col-3 pr-2">Native Place</label>
                                    <div class="col"> <input type="text" id="nativePlace" name="nativePlace" value="Delhi" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="fatherOccupation" class="form-label col-3 pr-2">Father's Occupation</label>
                                    <div class="col"><input type="text" id="fatherOccupation" name="fatherOccupation" value="Manual Accountant" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="motherOccupation" class="form-label col-3 pr-2">Mother's Occupation</label>
                                    <div class="col"><input type="text" id="motherOccupation" name="motherOccupation" value="House Wife" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start my-4">
                                    <label for="brothers" class="form-label col-3 pr-2">No. of Brothers</label>
                                    <div class="col">
                                        <select name="brothers" id="brothers" class="form-select" required>
                                            <option>--Select--</option>
                                            <option value="0">None</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">5</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start my-4">
                                    <label for="marriedBrothers" class="form-label col-3 pr-2">Married Brothers</label>
                                    <div class="col">
                                        <select name="marriedBrothers" id="marriedBrothers" class="form-select" required>
                                            <option>--Select--</option>
                                            <option value="0">None</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">5</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start my-4">
                                    <label for="sisters" class="form-label col-3 pr-2">No. of Sisters</label>
                                    <div class="col">
                                        <select name="sisters" id="sisters" class="form-select" required>
                                            <option>--Select--</option>
                                            <option value="0">None</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">5</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start my-4">
                                    <label for="marriedSisters" class="form-label col-3 pr-2">Married Sisters</label>
                                    <div class="col">
                                        <select name="marriedSisters" id="marriedSisters" class="form-select" required>
                                            <option>--Select--</option>
                                            <option value="0">None</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">5</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="familyBrief" class="col-3 pr-2">About My Family</label>
                                    <div class="col">
                                        <textarea id="familyBrief" name="familyBrief" class="w-auto fs-70" cols="50" rows="6">I have created this profile for my sister Bharti, She is a well being and caring person, she is first class graduated from Commerce Stream and pursuing MA from Ignou Delhi and also preparing for IBPS exams. She want to become a banker.</textarea>
                                        <div class="small">Please enter your family information here.</div>
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
            </div><!-- col-lg-6-->



            @include('frontend.common.rightsidebar')
        </div>
    </div>
</scetion>
@endsection