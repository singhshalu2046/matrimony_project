<div class="col-lg-3">
    <div class="left-profile">
        <div class="profile-div">
            <img src="{{ URL::asset('forntend/img/personimage.png')}}">
            <h6>{{Session::get('user_name')}}</h6>
            <span>AM0001234</span>
        </div><!-- profile-div-->
        <div class="accnt-type">
            <span>Account Type</span>
            <p>Free Membership <button>Upgrade</button></p>

        </div>
        <div class="accnt-type">
            <span>Mobile no. is verified</span>
            <a href="#">Verify Your Profile</a>

        </div>
        <div class="profile-option">
            <ul>
                <li><a href="#"><i class="fas fa-user-edit"></i>Edit Profile</a></li>
                <li><a href="#"><i class="fas fa-edit"></i>Edit Preferences</a></li>
                <li><a href="#"><i class="fas fa-calendar-alt"></i>Daily Recommendations</a></li>
                <li><a href="#"><i class="fas fa-comments"></i>Your Conversations</a></li>
                <li><a href="#"><i class="fas fa-phone-alt"></i>Your Calls</a></li>
                <li><a href="#"><i class="fas fa-sms"></i>SMS received/sent</a></li>
                <li><a href="#"><i class="fas fa-cog"></i>Settings</a></li>
                <li><a href="#"><i class="fas fa-headset"></i>Help</a></li>
            </ul>
        </div>
    </div><!-- left profile-->
</div><!-- col-lg-3-->