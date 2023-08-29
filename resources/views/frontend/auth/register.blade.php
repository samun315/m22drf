<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="template" content="Idea Ago Mart">
    <meta name="title" content="Idea Ago Mart - Ecommerce Food Store HTML Template">
    <meta name="keywords"
        content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, products, farm, grocery, natural, online">

    <title>Idea Ago Mart - Register</title>

    <link rel="icon" href="{{ asset('assets/frontend/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/fonts/fontawesome/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/venobox/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/slickslider/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/niceselect/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/user-auth.css') }}">
</head>

<body>
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10">
                    <div class="user-form-logo"><a href="/"><img
                                src="{{ asset('assets/frontend/images/logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>Join Now!</h2>
                            <p>Setup A New Account In A Minute</p>
                        </div>
                        <div class="user-form-group">
                            <ul class="user-form-social">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Join with
                                        facebook</a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>Join with
                                        twitter</a></li>
                                <li><a href="#" class="google"><i class="fab fa-google"></i>Join with google</a>
                                </li>
                                <li><a href="#" class="instagram"><i class="fab fa-instagram"></i>Join with
                                        instagram</a></li>
                            </ul>
                            <div class="user-form-divider">
                                <p>or</p>
                            </div>
                            <form class="user-form">
                                <div class="form-group"><input type="text" class="form-control"
                                        placeholder="Enter your name"></div>
                                <div class="form-group"><input type="email" class="form-control"
                                        placeholder="Enter your email"></div>
                                <div class="form-group"><input type="password" class="form-control"
                                        placeholder="Enter your password"></div>
                                <div class="form-group"><input type="password" class="form-control"
                                        placeholder="Enter repeat password"></div>
                                <div class="form-check mb-3"><input class="form-check-input" type="checkbox"
                                        value="" id="check"><label class="form-check-label"
                                        for="check">Accept all the <a href="#">Terms & Conditions</a></label>
                                </div>
                                <div class="form-button"><button type="submit">register</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="user-form-remind">
                        <p>Already Have An Account?<a href="{{ route('frontend.showLoginForm') }}">login here</a></p>
                    </div>
                    <div class="user-form-footer">
                        <p>Idea Agro Mart | &COPY; Copyright by <a href="#">Md. Ripon Mia</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/frontend/vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/niceselect/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/slickslider/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/accordion.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/venobox.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/slick.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>

</html>
