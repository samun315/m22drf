<nav class="navbar-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-content">
                    <ul class="navbar-list">
                        <li class="navbar-item">
                            <a class="navbar-link" href="/">home</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="{{ route('frontend.showShopPage') }}">
                                shop
                            </a>
                        </li>
                        <li class="navbar-item dropdown"><a class="navbar-link dropdown-arrow" href="#">pages</a>
                            <ul class="dropdown-position-list">
                                <li><a href="{{ route('frontend.showFaqPage') }}">faqs</a></li>
                                <li><a href="{{ route('frontend.showUserProfile') }}">my profile</a></li>
                                <li><a href="{{ route('frontend.showAboutUsPage') }}">about us</a></li>
                                <li><a href="{{ route('frontend.showContactUsPage') }}">contact us</a></li>
                                <li><a href="{{ route('frontend.showPrivacyPage') }}">privacy policy</a></li>
                                <li><a href="{{ route('frontend.showOurMissionPage') }}">Our Mission</a></li>
                                <li><a href="{{ route('frontend.showTermsAndConditionPage') }}">terms and condition</a></li>
                                <li><a href="{{ route('frontend.show404NotFoundPage') }}">404 Error</a></li>
                            </ul>
                        </li>
                        <li class="navbar-item dropdown"><a class="navbar-link dropdown-arrow"
                                href="#">authentic</a>
                            <ul class="dropdown-position-list">
                                <li><a href="{{ route('frontend.showLoginForm') }}">login</a></li>
                                <li><a href="{{ route('frontend.showRegisterForm') }}">register</a></li>
                                <li><a href="{{ route('frontend.showResetPasswordForm') }}">reset password</a></li>
                                <li><a href="{{ route('frontend.showChangePasswordForm') }}">change password</a></li>
                            </ul>
                        </li>
                        <li class="navbar-item"><a class="navbar-link" href="{{ route('frontend.showFaqPage') }}">need help</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="{{ route('frontend.showContactUsPage') }}">contact us</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="{{ route('frontend.showAboutUsPage') }}">about us</a></li>
                        <li class="navbar-item"><a class="navbar-link" href="{{ route('frontend.showOurMissionPage') }}">Our Mission</a></li>
                    </ul>
                    {{-- <div class="navbar-select-group">
                        <div class="navbar-select"><i class="fas fa-flag"></i><select class="select">
                                <option value="english" selected>english</option>
                                <option value="bangla">bangla</option>
                            </select></div>
                        <div class="navbar-select"><i class="fas fa-funnel-dollar"></i><select class="select">
                                <option value="doller" selected>doller</option>
                                <option value="taka">taka</option>
                            </select></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</nav>
