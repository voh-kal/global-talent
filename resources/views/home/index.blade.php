@extends('layout.homepage')
@section('content')

<div class="site-blocks-cover overlay bg-light" id="home-section">

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="text-white">Connecting talents with Opportunities</h1>
                        <p class="text-secondary">Do the work you enjoy from anywhere</p>

                        <p class="btn smoothscroll btn-primary" id="join">Join Community</p>
                        <p class="lead text-warning" id="subscribe">Be the first to know when we launch</p>
                        <form action="{{route('subscription')}}" method="post" id="subscr" style="display: none;">
                            @csrf

                            <div class="form-group col-6">
                                <input type="text" class="form-control" placeholder=" Full Name" name="sub_name" required>
                            </div>
                            <div class="form-group col-6">
                                <input type="email" class="form-control" placeholder="Email address" name="sub_email" required>
                            </div>

                            <div class="row">
                                <div class="col-md-3" style="margin: 0px 70px;">
                                    <input type="submit" class="btn btn-dark" placeholder="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        @include('home.flash_message')
                        <div id="ishow" style="display: none;">
                            <h3 class="text-secondary">Select a category</h3>
                            <select name="category" id="category" class="form-control" required>
                                <option value="">select</option>
                                <option value="talent" id="talent" style="color: black;">Talent</option>
                                <option value="recruiter" id="recruiter" style="color: black;">Company/Recruiter</option>
                            </select>
                        </div>
                        <br>

                        <!-- talent -->
                        <form action="{{route('talent')}}" method="post" id="talent2" style="display: none;">
                            @csrf

                            <div class="row mb-1">
                                <div class="form-group col-7">
                                    <input type="text" class="form-control" placeholder="Full name" name="fname" required>
                                </div>
                                <div class="form-group col-5">
                                    <input type="tel" class="form-control" placeholder="Mobile Number" name="phone" required>
                                </div>
                            </div>

                            <div class="row mb-1">
                                <div class="form-group col-12">
                                    <input type="email" class="form-control" placeholder="Email address" name="email" required>
                                </div>
                            </div>

                            <div class="row mb-1">
                                <div class="form-group col-6">
                                    <input type="text" class="form-control" placeholder="LinkedIn url" name="linkedin" required>
                                </div>
                                <div class="form-group col-6">
                                    <input type="text" class="form-control" placeholder="Current location" name="location" required>
                                </div>
                            </div>

                            <div class="row mb-1">
                                <div class="form-group col-6">
                                    <label for="">Job type</label>
                                    <select name="job" id="job" class="form-control" required>
                                        <option value="">select</option>
                                        <option value="contract" id="contract" style="color: black;">Contract</option>
                                        <option value="fulltime" id="fulltime" style="color: black;">Full-Time</option>
                                        <option value="parttime" id="parttime" style="color: black;">Part-Time</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Working Location</label>
                                    <select name="work" id="work" class="form-control" required>
                                        <option value="">select</option>
                                        <option value="hybrid" id="hybrid" style="color: black;">Hybrid</option>
                                        <option value="onsite" id="onsite" style="color: black;">Onsite</option>
                                        <option value="remote" id="remote" style="color: black;">Remote</option>
                                    </select>
                                </div>

                            </div>


                            <div class="row mb-1">
                                <div class="form-group col-6">
                                    <input type="text" class="form-control" placeholder=" Highest Education qualification" name="education" required>
                                </div>
                                <div class="form-group col-6">

                                    <input type="text" class="form-control" placeholder="Interested opportunities" name="interest" required>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-dark" value="Register Information">
                                </div>
                            </div>

                        </form>


                        <!-- recruiter -->
                        <form action="{{route('recruiter')}}" method="post" id="recruiter2" style="display: none;">
                            @csrf
                            <div class="row mb-1">
                                <div class="form-group col-6">
                                    <input type="text" class="form-control" placeholder="Name of Company" name="cname" required>
                                </div>
                                <div class="form-group col-6">
                                    <input type="text" class="form-control" placeholder="Full Name" name="cfname" required>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="form-group col-9">
                                    <input type="email" class="form-control" placeholder="Email address" name="cemail" required>
                                </div>
                                <div class="form-group col-3">
                                    <input type="tel" class="form-control" placeholder="Mobile Number" name="cphone" required>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="form-group col-6">
                                    <input type="text" class="form-control" placeholder="Job Role" name="role" required>
                                </div>
                                <div class="form-group col-6">
                                    <input type="text" class="form-control" placeholder="Current location" name="clocation" required>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="form-group col-6">
                                    <label for="">Job type</label>
                                    <select name="cjob" id="job" class="form-control" required>
                                        <option value="">select</option>
                                        <option value="contract" id="contract" style="color: black;">Contract</option>
                                        <option value="fulltime" id="fulltime" style="color: black;">Full-Time</option>
                                        <option value="parttime" id="parttime" style="color: black;">Part-Time</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Working Location</label>
                                    <select name="cwork" id="work" class="form-control" required>
                                        <option value="">select</option>
                                        <option value="hybrid" name="chybrid" style="color: black;">Hybrid</option>
                                        <option value="onsite" name="consite" style="color: black;">Onsite</option>
                                        <option value="remote" name="cremote" style="color: black;">Remote</option>
                                    </select>
                                </div>

                            </div>


                            <div class="row mb-4">
                                <div class="form-group col-12">
                                    <label for="">Hiring for what job roles</label>
                                    <input type="text" class="form-control" name="position" required>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-dark" value="Register Information">
                                </div>
                            </div>

                        </form>


                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <img src="images/image.jpg" alt="Image" class="img-face" width="100%">

</div>
<script>
    $('#category').change(function() {
        let sel = $(this).find(":selected").val()
        if (sel == 'talent') {
            //show talent
            $('#talent2').show();
            $('#recruiter2').hide();

        } else if (sel == 'recruiter') {
            //show recruiter
            $('#recruiter2').show();
            $('#talent2').hide();
        } else {
            $('#talent2').hide();
            $('#recruiter2').hide();
        }
    })



    let get = document.getElementById("subscribe");
    let sub_show = document.getElementById("subscr");
    get.onclick = function() {
        if (sub_show.style.display == "block") {
            return sub_show.style.display = "none"
        }
        sub_show.style.display = "block";
    }

    let join = document.getElementById("join");
    let ishow = document.getElementById("ishow");
    join.onclick = function() {
        if (ishow.style.display == "block") {
            return ishow.style.display = "none"
        }
        ishow.style.display = "block";
    }
</script>

@endsection