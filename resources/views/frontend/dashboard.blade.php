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
    <div class="container">
        <div class="row">
        @include('frontend.common.leftsidebar')
            <div class="col-lg-6">
                <div class="center-match-div">
                    <div class="first-head">
                        <p>Today Recommendations<span>Time left - 04 : 56 : 51</span><a href="#">View All</a></p>
                    </div>
                    <div class="owl-carousel today-slider">

                        <div class="today-match">
                            <img src="{{ URL::asset('forntend/img/match-01.png')}}">
                            <p>Kiran Kumari</p>
                        </div>
                        <div class="today-match">
                            <img src="{{ URL::asset('forntend/img/match-02.png')}}">
                            <p>Kiran Kumari</p>
                        </div>
                        <div class="today-match">
                            <img src="{{ URL::asset('forntend/img/match-03.png')}}">
                            <p>Kiran Kumari</p>
                        </div>
                        <div class="today-match">
                            <img src="{{ URL::asset('forntend/img/match-04.png')}}">
                            <p>Kiran Kumari</p>
                        </div>
                        <div class="today-match">
                            <img src="{{ URL::asset('forntend/img/match-05.png')}}">
                            <p>Kiran Kumari</p>
                        </div>
                        <div class="today-match">
                            <img src="{{ URL::asset('forntend/img/match-04.png')}}">
                            <p>Kiran Kumari</p>
                        </div>
                        <div class="today-match">
                            <img src="{{ URL::asset('forntend/img/match-05.png')}}">
                            <p>Kiran Kumari</p>
                        </div>


                    </div><!-- owl-carousel-->
                    <div class="second-head">
                        <p>New Matches for you<span>(227)</span><a href="#">View All</a></p>
                    </div>
                    <div class="owl-carousel new-match-slider">

                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/new-match-01.jpg')}}">
                            <p>Kiran Kumari</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/new-match-02.jpg')}}">
                            <p>Kajal Jhaa</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/new-match-03.jpg')}}">
                            <p>Purva Tiwari</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/new-match-04.jpg')}}">
                            <p>Aarshiya Gupta</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/new-match-01.jpg')}}">
                            <p>Kiran Kumari</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                        </div>

                    </div><!-- owl-carousel-->
                    <div class="second-head">
                        <p>Premium Matches<span>(121)</span><a href="#">View All</a></p>
                    </div>
                    <div class="owl-carousel Premium-match-slider">

                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-01.jpg')}}">
                            <p>Kiran Kumari</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-02.jpg')}}">
                            <p>Kajal Jhaa</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-03.jpg')}}">
                            <p>Purva Tiwari</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-04.jpg')}}">
                            <p>Aarshiya Gupta</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/new-match-01.jpg')}}">
                            <p>Kiran Kumari</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                        </div>
                    </div><!-- owl-carousel-->
                    <div class="second-head">
                        <p>Total Matches<span>(1021)</span><a href="#">View All</a></p>
                    </div>
                    <div class="owl-carousel Premium-match-slider">

                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-01.jpg')}}">
                            <p>Kiran Kumari</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-02.jpg')}}">
                            <p>Kajal Jhaa</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-03.jpg')}}">
                            <p>Purva Tiwari</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/premium-04.jpg')}}">
                            <p>Aarshiya Gupta</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                        </div>
                        <div class="new-match">
                            <img src="{{ URL::asset('forntend/img/new-match-01.jpg')}}">
                            <p>Kiran Kumari</p>
                            <span>New Delhi<br>
                                28 years, 5'4"</span>
                            <div class="premium-icon-div">
                                <img src="{{ URL::asset('forntend/img/prmium-icon.png')}}">
                            </div>
                        </div>
                    </div><!-- owl-carousel-->
                </div><!-- center match div -->
            </div><!-- col-lg-6-->
            @include('frontend.common.rightsidebar')
        </div>
    </div>
</scetion>
@endsection