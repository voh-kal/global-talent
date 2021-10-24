@extends('layout.adminpage')
@section('content')

<div class="container">
    <div class="card" style="padding: 40px 10px;">
        <a href="/admin/talent" class="btn btn-primary">Back</a> <br>
        <h2>Talent's Details</h2>
        <br>


        <div class="row">
            <div class="col-md-12">
                <div class="row mb-1">

                    <div class="col-md-6">
                        <label for="">Full Name</label>
                        <p style="color: #b0979c; font-size: large;">{{ucwords($talent->fname)}}</p>

                    </div>
                    <div class="col-md-6">
                        <label for=""> Linkedin url</label>
                        <p style="color: #b0979c; font-size: large;">{{ucwords($talent->linkedin)}}</p>
                    </div>

                </div>

                <div class="row mb-1">
                    <div class="col-md-6">
                        <label for="">Email address</label>
                        <p style="color: #b0979c; font-size: large;">{{ucwords($talent->email)}}</p>
                    </div>
                    <div class="col-md-6">
                        <label for="">Mobile Number</label>
                        <p style="color: #b0979c; font-size: large;">{{ucwords($talent->phone)}}</p>
                    </div>
                </div>
            






                <div class="row mb-1">
                    <div class="col-md-6">
                        <label for="">Current location</label>
                        <p style="color: #b0979c; font-size: large;">{{ucwords($talent->location)}}</p>
                    </div>
                    <div class="col-md-6">
                        <label for="">Job type </label>
                        <p style="color: #b0979c; font-size: large;">{{ucwords($talent->job)}}</p>
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-md-6">
                        <label for="">Working location</label>
                        <p style="color: #b0979c; font-size: large;">{{ucwords($talent->work)}}</p>
                    </div>
                    <div class="col-md-6">
                        <label for="">Interested opportunities</label>
                        <p style="color: #b0979c; font-size: large;">{{ucwords($talent->interest)}}</p>
                    </div>
                </div>

                <div class="row mb-1">
                    <div class="col-md-6">
                        <label for="">Highest Education qualification</label>
                        <p style="color: #b0979c; font-size: large;">{{ucwords($talent->education)}}</p>
                    </div>
                   
                </div>

            </div>
        </div>

    </div>




</div>






@endsection