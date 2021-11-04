@extends('layout.homepage')
@section('content')
<style>
    .pade {
        padding: 25px 100px;
    }

    .roni {
        height: 100%;

    }

    .conect {
        font-size: 69px !important;
        font-weight: 800;
        color: #000000;
        font-family: 'Sarabun', sans-serif;
        line-height: 1.2;
        margin-top: 30px
    }

    .img_roni {
        width: 190px;
    }

    .para {
        margin-bottom: 39px;
    }

    .ronis {
        display: none;
    }

    @media(max-width: 640px) {
        .pade {
            padding: 10px;
        }

        .roni {
            display: none;
        }

        .conect {
            font-size: 33px !important;
            font-weight: 800;
            color: #000000;
            font-family: 'Sarabun', sans-serif;
            line-height: 1.2;
            margin-top: 30px
        }

        .img_roni {
            width: 150px;
        }

        .para {
            margin-bottom: 10px;
        }

        .ronis {
            display: block;
            height: 100vh;
        }
    }
    @media(max-width: 780px) {
        .img_roni{
            width: 153px;
        }
        .conect {
            font-size: 45px !important;
            font-weight: 800;
            color: #000000;
            font-family: 'Sarabun', sans-serif;
            line-height: 1.2;
            margin-top: 30px
        }
    }
    @media(max-width: 1024px) {
        .img_roni{
            width: 153px;
        }
        .conect {
            font-size: 45px !important;
            font-weight: 800;
            color: #000000;
            font-family: 'Sarabun', sans-serif;
            line-height: 1.2;
            margin-top: 30px
        }
    }
</style>

<div class="site-blocks-cover overlay bg-light" id="home-section">

    <div class="pade">
        <div class="row justify-content-center">
            <div class="col-md-12 text-left align-self-center text-intro">
                <div class="row">
                    <div class="col-lg-12">
                        <div><img src="/images/gtc.png" alt="logo" class="img_roni"></div>
                        <div class="col-xl-8 col-lg-7 col-md-8">
                            <h1 class="conect">Connecting talents with Opportunities</h1>
                            <!-- <h1 style="font-weight: 700; font-size: 66px; letter-spacing: 3px;"> </h1> -->
                            <p class="text-secondary" class="para">Do the work you enjoy from anywhere</p>
                            <a href="/home/category">
                                <p class="btn smoothscroll" id="join" style="background-color: #c02830">Join Community</p>
                            </a>
                            <br>
                            <a href="#subscribe" class="lead" style="color: #c02830; text-decoration:underline" id="">Be the first to know when we launch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="images/image.jpg" alt="Image" class="img-face roni">
    <img src="images/new.jpg" alt="Image" class="img-face ronis">
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