@extends('layout.adminpage')
@section('content')


<div class="user-dashboard">
    <h1>Welcome Admin,</h1>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 gutter">
            <a href="/admin/talent">
                <div class="sales" style="font-size: xx-large; color: white; background-color:#5584ff; text-align: center; padding: 64px; border-radius: 12px;">
                    <p>Talents</p>
                    <p>{{$talent}}</p>
                </div>
            </a>

        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 gutter">
            <a href="/admin/recruiter">
                <div class="sales" style="font-size: xx-large; color: white; background-color: #0e1a35; text-align: center; padding: 64px;border-radius: 12px;">
                    <p>Recruiters</p>
                    <p>{{$recruiter}}</p>
                </div>
            </a>

        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 gutter">
            <a href="/admin/subscribers">
                <div class="sales" style="font-size: xx-large;  color: white; background-color: forestgreen; text-align: center; padding: 64px;border-radius: 12px;">
                    <p>Subscribers</p>
                    <p>{{$subscriber}}</p>
                </div>
            </a>

        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $('[data-toggle="offcanvas"]').click(function() {
            $("#navigation").toggleClass("hidden-xs");
        });
    });
</script>
@endsection