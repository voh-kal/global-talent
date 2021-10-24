@extends('layout.adminpage')
@section('content')

<div class="user-dashboard">
    <h1>subscriber's Home</h1>

    <div class="container">
        <div class="row">


            <div class="col-md-12">
               
                <div class="table-responsive">


                    <table id="mytable" class="table table-bordred table-striped">

                        <thead>

                            <th>Id</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            
                           


                        </thead>
                        <tbody>
                            @foreach($subscriber as $tal)
                            <tr>
                                <td>{{$tal->id}}</td>
                                <td>{{$tal->sub_name}}</td>
                                <td>{{$tal->sub_email}}</td>
                               
                               
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