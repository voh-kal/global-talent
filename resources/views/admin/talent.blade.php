@extends('layout.adminpage')
@section('content')

<div class="user-dashboard">
    <h1>Talent Home</h1>

    <div class="container">
        <div class="row">


            <div class="col-md-12">
               
                <div class="table-responsive">


                    <table id="mytable" class="table table-bordred table-striped">

                        <thead>

                            <th>Id</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Mobile </th>
                            <th>Current location</th>
                            <th>Job type</th>
                            <th>Working location</th>
                            <th>Interested opportunities</th>
                            <th>LinkedIn Url</th>
                            <th>Education qualification</th>
                            <th>Action</th>




                        </thead>
                        <tbody>
                            @foreach($talent as $tal)
                            <tr>
                                <td>{{ucwords($tal->id)}}</td>
                                <td>{{ucwords($tal->fname)}}</td>
                                <td>{{ucwords($tal->email)}}</td>
                                <td>{{ucwords($tal->phone)}}</td>
                                <td>{{ucwords($tal->location)}}</td>
                                <td>{{ucwords($tal->job)}}</td>
                                <td>{{ucwords($tal->work)}}</td>
                                <td>{{ucwords($tal->interest)}}</td>
                                <td>{{ucwords($tal->linkedin)}}</td>
                                <td>{{ucwords($tal->education)}}</td>
                               
                                <td>
                                    <a href="/talent/{{$tal->id}}" class="btn btn-primary">View</a>
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