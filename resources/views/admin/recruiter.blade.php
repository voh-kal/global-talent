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
                                <td>{{$tal->id}}</td>
                                <td>{{$tal->cname}}</td>
                                <td>{{$tal->cfname}}</td>
                                <td>{{$tal->cemail}}</td>
                                <td>{{$tal->cphone}}</td>
                                <td>{{$tal->clocation}}</td>
                                <td>{{$tal->cjob}}</td>
                                <td>{{$tal->cwork}}</td>
                                <td>{{$tal->position}}</td>
                               
                                <td>{{$tal->role}}</td>
                               
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