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
                            <form method="post" name="profileForm" action="{{ url('save-family-info') }}" id="profileForm" class="needs-validation" novalidate>
                                @csrf

                                <div class="form-group d-flex justify-content-start">
                                    <label for="family_value" class="col-3 pr-2">Family Value <span class="m-field">*</span></label>
                                    <div class="col">
                                        @foreach(App\Models\Family::FAMILY_VALUE as $key => $label)
                                            <input type="radio" name="family_value" class="w-auto" value="{{ $key }}" {{$key==$family->family_value?'checked':''}} required>
                                            <label class="labelradiobtn">{{ $label }}</label>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start">
                                    <label for="family_type" class="col-3 pr-2">Family Type <span class="m-field">*</span></label>
                                    <div class="col">
                                        @foreach(App\Models\Family::FAMILY_TYPE as $ft_key => $ft_label)
                                            <input type="radio" name="family_type" class="w-auto" value="{{ $ft_key}}"  {{$ft_key==$family->family_type?'checked':''}} required>
                                            <label class="labelradiobtn">{{ $ft_label }}</label>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="family_status" class="col-3 pr-2">Family Status <span class="m-field">*</span></label>
                                    <div class="col">
                                        @foreach(App\Models\Family::FAMILY_STATUS as $fs_key => $fs_label)
                                            <input type="radio" name="family_status" class="w-auto" value="{{ $fs_key}}"  {{$fs_key==$family->family_status?'checked':''}}required>
                                            <label class="labelradiobtn">{{ $fs_label }}</label>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="native_place" class="form-label col-3 pr-2">Native Place</label>
                                    <div class="col"> <input type="text" id="native_place" name="native_place" value="{{ $family->native_place??'' }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="father_occupation" class="form-label col-3 pr-2">Father's Occupation</label>
                                    <div class="col"><input type="text" id="father_occupation" name="father_occupation" value="{{ $family->father_occupation??'' }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="mother_occupation" class="form-label col-3 pr-2">Mother's Occupation</label>
                                    <div class="col"><input type="text" id="mother_occupation" name="mother_occupation" value="{{ $family->mother_occupation ??''}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group d-flex justify-content-start my-4">
                                    <label for="brother" class="form-label col-3 pr-2">No. of Brothers</label>
                                    <div class="col">
                                        <select name="brother" id="brother" class="form-select" required>
                                            <option value='' disabled>--Select--</option>
                                            @for($i=0;$i<=6;$i++)
                                                <option {{$family->brother==$i?'selected':''}} value="{{$i}}">{{ $i==0?'None':$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start my-4">
                                    <label for="married_brother" class="form-label col-3 pr-2">Married Brothers</label>
                                    <div class="col">
                                        <select name="married_brother" id="married_brother" class="form-select" required>
                                            <option disabled>--Select--</option>
                                            <option value='' disabled>--Select--</option>
                                            @for($i=0;$i<=6;$i++)
                                                <option {{$family->married_brother==$i?'selected':''}} value="{{$i}}">{{ $i==0?'None':$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start my-4">
                                    <label for="sister" class="form-label col-3 pr-2">No. of Sisters</label>
                                    <div class="col">
                                        <select name="sister" id="sister" class="form-select" required>
                                            <option disabled>--Select--</option>
                                            <option value="0">None</option>
                                            @for($i=0;$i<=6;$i++)
                                                <option {{$family->sister==$i?'selected':''}} value="{{$i}}">{{ $i==0?'None':$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start my-4">
                                    <label for="married_sister" class="form-label col-3 pr-2">Married Sisters</label>
                                    <div class="col">
                                        <select name="married_sister" id="married_sister" class="form-select" required>
                                            <option disabled>--Select--</option>
                                            <option value="0">None</option>
                                            @for($i=0;$i<=6;$i++)
                                                <option {{$family->married_sister==$i?'selected':''}} value="{{$i}}">{{ $i==0?'None':$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-start">
                                    <label for="about_family" class="col-3 pr-2">About My Family</label>
                                    <div class="col">
                                        <textarea id="about_family" name="about_family" class="w-auto fs-70" cols="50" rows="6">{{ $family->about_family??''}}</textarea>
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