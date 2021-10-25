<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body bgcolor="#f7f7f7">
    <div style="padding: 83px 25%;" class="bg-light">
        <div class="container-for-gmail-android" width="50%" style="padding: 5%; background-color: #f2f2ee; box-shadow: 0px 1px 14px #ccc;">
            <div align='center'>
                <img class="force-width-gmail text-center" src="{{env('APP_URL')}}/" alt="gtc" />

            </div>
            <div style="padding:20px 0px 0px 20px">
                <h2>Welcome <span class="text-muted" style="color: #88e5b3;"> {{ucwords( $data['name'] )}}</span></h2>
                <div style="padding-left: 50px; font-size: larger;">
                    <p>You registered with <span style="color: #88e5b3;"></span> {{ucwords( $data['email'] )}}</p>
                    <p>click <a href="#" style="color: danger;">here</a> to join the Community</p>
                </div>

            </div>
        </div>



    </div>
</body>

</html>