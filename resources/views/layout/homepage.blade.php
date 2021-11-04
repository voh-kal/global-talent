<!doctype html>
<html lang="en">

<head>
    <title>Global Talent Company</title>
    <meta charset="utf-8">
    <meta name="csrf_token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

    <style>
        .sub_btn {
            background-color: #c02830;
            border-radius: 5px;
            float: right;
        }

        .sub_btn:hover {
            color: black !important;
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
        }

        .form-control:focus {
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6)
        }

        .form-control::-moz-placeholder {
            color: #999;
            opacity: 1
        }

        .form-control:-ms-input-placeholder {
            color: #999
        }

        .form-control::-webkit-input-placeholder {
            color: #999
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0
        }

        .form-control[disabled],
        .form-control[readonly],
        fieldset[disabled] .form-control {
            background-color: #eee;
            opacity: 1
        }

        .form-control[disabled],
        fieldset[disabled] .form-control {
            cursor: not-allowed
        }

        textarea.form-control {
            height: auto
        }

        input[type=search] {
            -webkit-appearance: none
        }

        @media screen and (-webkit-min-device-pixel-ratio:0) {

            input[type=date].form-control,
            input[type=time].form-control,
            input[type=datetime-local].form-control,
            input[type=month].form-control {
                line-height: 34px
            }

        }
    </style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <!-- <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">

                    <div class="">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="#home-section" class="nav-link">Home</a></li>
                                <li><a href="#about-section" class="nav-link">About</a></li>
                                <li><a href="#services-section" class="nav-link">Services</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class=" text-center mx-5">
                        <h1 class="m-0 site-logo"><a href="index.html">Credo</a></h1>
                    </div>

                    <div class="text-left">

                        <nav class="site-navigation position-relative" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="#portfolio-section" class="nav-link">Photography</a></li>
                                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                            </ul>
                        </nav>


                        <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

                    </div>

                </div>
            </div>

        </header> -->
        @yield('content')



        <footer class=" footer" style="padding-top: 80px; background: #f2e1d1; padding-bottom: 20px">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="footer-title">Global Talent Company</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, animi.</p>
                        <p><span class="d-inline-block d-md-block">203 Fake St. College Road,</span> Lagos, Nigeria</p>
                    </div>

                    <div class="col-md-4">
                        <h3 class="footer-title">Follow Us</h3>
                        <a href="#" class="social-circle p-2"><span class="icon-twitter"></span></a>
                        <a href="#" class="social-circle p-2"><span class="icon-facebook"></span></a>
                        <a href="#" class="social-circle p-2"><span class="icon-instagram"></span></a>
                        <a href="#" class="social-circle p-2"><span class="icon-linkedin"></span></a>
                    </div><br>
                    <div class="col-md-4">
                        <h3 class="footer-title">Subscribe to get new updates</h3>
                        <div class="alert alert-success alert-block flash" id="alr" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong id="msgg"></strong>
                        </div>
                        <form id="subscribe">
                            @csrf

                            <div class="form-group col-md-12 p-0">
                                <input type="text" class="form-control" placeholder=" Full Name" name="sub_name" id="sub_name" required>
                            </div>
                            <div class="form-group col-md-12 p-0">
                                <input type="email" class="form-control" placeholder="Email address" name="sub_email" id="sub_email" required>
                            </div>


                            <div class="col-md-12 p-0">
                                <input type="button" class="btn text-white sub_btn" id="subt" value="submit">
                            </div>

                        </form>
                    </div>
                </div>


            </div>
        </footer>

    </div> <!-- .site-wrap -->


    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <script src="js/main.js"></script>

    <script>
        $('#subt').click(function(){
            $(this).val('loading...')
            $(this).attr('disabled', true)
            let sub_name = $('#sub_name').val();
            let sub_email = $('#sub_email').val();
            $.post('/api/subscription', {sub_name, sub_email}).done(function(response){
                $('#alr').slideDown()
                $('#subt').val('Submit')
                $('#subt').attr('disabled', false)
                if(response == 0){
                    $('#msgg').html('Already subscribed')
                    $('#alr').removeClass('alert-success')
                    $('#alr').addClass('alert-danger')
                }else if(response == 1){
                    $('#msgg').html('Subscription Successful')
                }else{
                    $('#alr').removeClass('alert-success')
                    $('#alr').addClass('alert-danger')
                    $('#msgg').html('An error occured')
                }
            })
        })
    </script>


</body>

</html>