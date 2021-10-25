@extends('layout.adminpage')
@section('content')

<div class="user-dashboard">
    <h1>Recruiter Home</h1>

    <div class="container">
        <div class="row">


            <div class="col-md-12">
               
                <div class="table-responsive">


                    <table id="mytable" class="table table-bordred table-striped">

                        <thead>

                            <th>Id</th>
                            <th>Company's Name</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Mobile </th>
                            <th>Location</th>
                            <th>Job</th>
                            <th>Work</th>
                            <th>Position</th>
                            <th>Role</th>
                            <th>Action</th>


                        </thead>
                        <tbody>
                            @foreach($recruiter as $tal)
                            <tr>
                                <td>{{ucwords($tal->id)}}</td>
                                <td>{{ucwords($tal->cname)}}</td>
                                <td>{{ucwords($tal->cfname)}}</td>
                                <td>{{ucwords($tal->cemail)}}</td>
                                <td>{{ucwords($tal->cphone)}}</td>
                                <td>{{ucwords($tal->clocation)}}</td>
                                <td>{{ucwords($tal->cjob)}}</td>
                                <td>{{ucwords($tal->cwork)}}</td>
                                <td>{{ucwords($tal->position)}}</td>
                               
                                <td>{{ucwords($tal->role)}}</td>
                               
                                <td>
                                    <a href="/recruiter/{{$tal->id}}" class="btn btn-primary">View</a>
                                </td>

                            </tr>
                            @endforeach
                            
                        </tbody>

                    </table>

                    <div class="clearfix"></div>
                    <ul class="pagination pull-right">
                        <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                    </ul>

                </div>

            </div>
        </div>
    </div>


</div>


@endsection