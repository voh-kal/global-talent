@extends('layout.login_lay')
@section('content')


<div style="padding: 83px 25%;" class="bg-light">
    <div class="container-for-gmail-android" width="50%" style="padding: 9% 15%; background-color: #f2f2ee; box-shadow: 0px 1px 14px #ccc;">
        <div align='center'>
            <h2>Login</h2>

        </div>
        @include('admin.flash_message')
        <form action="" method="post">
            @csrf
          
            <div class="row mb-3">
                <label for="">Email</label>
                <input type="email" name="email" required class="form-control">
            </div>
            <div class="row" style="margin-top: 15px;">
                <label for="">Password</label>
                <input type="password" name="password" required class="form-control">
            </div>
            <button class="btn btn-success" style="margin-top: 15px;">Login</button>
        </form>



    </div>



</div>

@endsection