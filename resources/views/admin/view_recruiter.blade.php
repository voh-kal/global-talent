@extends('layout.adminpage')
@section('content')

<div class="container">
    <div class="card" style="padding: 40px 10px;">
    <a href="/admin/recruiter" class="btn btn-primary">Back</a> <br>
    <h2>Recruiter's Details</h2>
    <br>

        
        <div class="row">
            <div class="col-md-12">
                <div class="row mb-1">
                    <div class="col-md-6">
                       <label for="">Company's Name:</label>
                       <p style="color: #b0979c; font-size: large;">{{ucwords($recruiter->cname)}}</p>
                    </div>
                    <div  class="col-md-6">
                    <label for="">Full Name</label>
                       <p style="color: #b0979c; font-size: large;">{{ucwords($recruiter->cfname)}}</p>
                    </div>
                </div>

                <div class="row mb-1">
                    <div  class="col-md-6">
                       <label for="">Email address</label>
                       <p style="color: #b0979c; font-size: large;">{{ucwords($recruiter->cemail)}}</p>
                    </div>
                    <div  class="col-md-6">
                    <label for="">Mobile Number</label>
                       <p style="color: #b0979c; font-size: large;">{{ucwords($recruiter->cphone)}}</p>
                    </div>
                </div>

                <div class="row mb-1">
                    <div  class="col-md-6">
                       <label for="">Current location</label>
                       <p style="color: #b0979c; font-size: large;">{{ucwords($recruiter->clocation)}}</p>
                    </div>
                    <div  class="col-md-6">
                    <label for="">Job type </label>
                       <p style="color: #b0979c; font-size: large;">{{ucwords($recruiter->cjob)}}</p>
                    </div>
                </div>
               
                <div class="row mb-1">
                    <div  class="col-md-6">
                       <label for="">Working location</label>
                       <p style="color: #b0979c; font-size: large;">{{ucwords($recruiter->cwork)}}</p>
                    </div>
                    <div  class="col-md-6">
                    <label for="">Hiring for what job roles</label>
                       <p style="color: #b0979c; font-size: large;">{{ucwords($recruiter->position)}}</p>
                    </div>
                </div>
                <div class="row mb-1">
                    <div  class="col-md-6">
                       <label for="">  Job role</label>
                       <p style="color: #b0979c; font-size: large;">{{ucwords($recruiter->role)}}</p>
                    </div>
                    <!-- <div  class="col-md-6">
                    <label for="">Hiring for what job roles</label>
                       <p style="color: #b0979c; font-size: large;">{{$recruiter->position}}</p>
                    </div> -->
                </div>
                
              
            </div>
        </div>

    </div>


  

</div>






@endsection