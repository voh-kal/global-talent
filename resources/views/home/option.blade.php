@extends('layout.login_lay')
@section('content')
<style>
    .img_select {
        display: block;
    }

    @media (max-width: 991px) {
        .img_select {
            display: none;
        }
    }

    .margb {

        margin-bottom: 10px;
    }

    .fside {
        padding: 72px;
    }

    .sside {
        padding-right: 26%;
        font-size: 33px;
    }

    .img_st {
        width: 200px;

    }

    @media (max-width: 600px) {
        .fside {
            padding: 30px;
        }

        .sside {
            padding-right: 7%;
            font-size: 30px;
        }

        .img_st {
            width: 200px;

            margin-left: 43px;
        }

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

    .form-control::-moz- {
        color: #999;
        opacity: 1
    }

    .form-control:-ms-input- {
        color: #999
    }

    .form-control::-webkit-input- {
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
<div class="row" style="height: 100vh;">

    <div class="col-lg-12 bg-light">

        <div class="col-md-6 fside" style="height: 100vh; background: #ede9e6;">
            <div><img src="/images/gtc.png" alt="logo" class="img_st"></div>
            <h2 class="sside">Select a category in the options below and fill the form attached </h2>
            <div id="ishow">
                <h3 class="text-secondary">Select a category</h3>
                <div>
                    <select name="category" id="category" class="form-control col-md-8" required>
                        <option value="" id="img_selec">select</option>
                        <option value="talent" id="talent" style="color: black;">Talent</option>
                        <option value="recruiter" id="recruiter" style="color: black;">Company/Recruiter</option>
                    </select>
                </div>

            </div>
            <br>
        </div>



        <div class="col-md-6" style="padding: 20px 8%;">
            @include('home.flash_message')

            <div id="img_select" class="img_select" style="margin-top: 135px;">
                <img src="/images/welcome.jpg" alt="welcome" class="img-fluid">
            </div>

            <!-- talent -->

            <form action="{{route('talent')}}" method="post" id="talent2" style="display: none;">
                <h2 class="text-center">Talent's Form</h2><br>
                @csrf

                <div class="row mb-1 margb">
                    <div class="form-group col-md-6">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control"="Full name" name="fname" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Mobile Number</label>
                        <input type="tel" class="form-control"="Mobile Number" name="phone" required>
                    </div>
                </div>

                <div class="row mb-1 margb">
                    <div class="form-group col-md-12">
                        <label for="">Email address</label>
                        <input type="email" class="form-control"="Email address" name="email" required>
                    </div>
                </div>

                <div class="row mb-1 margb">
                    <div class="form-group col-md-6">
                        <label for="">LinkedIn url</label>
                        <input type="text" class="form-control"="LinkedIn url" name="linkedin" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Current Location</label>
                        <input type="text" class="form-control"="Current location" name="location" required>
                    </div>
                </div>

                <div class="row mb-1 margb">
                    <div class="form-group col-md-6">
                        <label for="">Job type</label>
                        <select name="job" id="job" class="form-control" required>
                            <option value="">select</option>
                            <option value="contract" id="contract" style="color: black;">Contract</option>
                            <option value="fulltime" id="fulltime" style="color: black;">Full-Time</option>
                            <option value="parttime" id="parttime" style="color: black;">Part-Time</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Working Location</label>
                        <select name="work" id="work" class="form-control" required>
                            <option value="">select</option>
                            <option value="hybrid" id="hybrid" style="color: black;">Hybrid</option>
                            <option value="onsite" id="onsite" style="color: black;">Onsite</option>
                            <option value="remote" id="remote" style="color: black;">Remote</option>
                        </select>
                    </div>

                </div>


                <div class="row mb-1 margb">
                    <div class="form-group col-md-6">
                        <label for="">Highest Education Qualification</label>
                        <input type="text" class="form-control"=" Highest Education Qualification" name="education" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Interested Opportunities</label>
                        <input type="text" class="form-control"="Interested opportunities" name="interest" required>

                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-dark" value="Register Information">
                    </div>
                </div>
                <br><br>
            </form>


            <!-- recruiter -->

            <form action="{{route('recruiter')}}" method="post" id="recruiter2" style="display: none;">
                <h2 class="text-center">Recruiter's Form</h2><br>
                @csrf
                <div class="row mb-1 margb">
                    <div class="form-group col-md-6">
                        <label for="">Name of Company</label>
                        <input type="text" class="form-control"="Name of Company" name="cname" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control"="Full Name" name="cfname" required>
                    </div>
                </div>

                <div class="row mb-1 margb">
                    <div class="form-group col-md-6">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control"="Email address" name="cemail" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Mobile Number</label>
                        <input type="tel" class="form-control"="Mobile Number" name="cphone" required>
                    </div>
                </div>

                <div class="row mb-1 margb">
                    <div class="form-group col-md-6">
                        <label for="">Job Role</label>
                        <input type="text" class="form-control"="Job Role" name="role" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Current Location</label>
                        <input type="text" class="form-control"="Current location" name="clocation" required>
                    </div>
                </div>

                <div class="row mb-1 margb">
                    <div class="form-group col-md-6">
                        <label for="">Job type</label>
                        <select name="cjob" id="job" class="form-control" required>
                            <option value="">select</option>
                            <option value="contract" id="contract" style="color: black;">Contract</option>
                            <option value="fulltime" id="fulltime" style="color: black;">Full-Time</option>
                            <option value="parttime" id="parttime" style="color: black;">Part-Time</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Working Location</label>
                        <select name="cwork" id="work" class="form-control" required>
                            <option value="">select</option>
                            <option value="hybrid" name="chybrid" style="color: black;">Hybrid</option>
                            <option value="onsite" name="consite" style="color: black;">Onsite</option>
                            <option value="remote" name="cremote" style="color: black;">Remote</option>
                        </select>
                    </div>

                </div>


                <div class="row mb-1 margb">
                    <div class="form-group col-md-12">
                        <label for="">Hiring for what job roles</label>
                        <input type="text" class="form-control" name="position" required>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-dark" value="Register Information">
                    </div>
                </div>
                <br><br>
            </form>
        </div>




    </div>
</div>

<script>
    $('#category').change(function() {
        let sel = $(this).find(":selected").val()
        $('#img_select').slideUp();

        if (sel == 'talent') {
            //show talent
            $('#talent2').show();
            $('#recruiter2').hide();

        } else if (sel == 'recruiter') {
            //show recruiter
            $('#recruiter2').show();
            $('#talent2').hide();

        } else {
            $('#img_select').slideDown();
            $('#talent2').hide();
            $('#recruiter2').hide();
        }

    })
</script>


@endsection