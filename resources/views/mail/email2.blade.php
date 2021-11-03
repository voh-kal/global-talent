<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body bgcolor="#f7f7f7">
    <div style="padding: 83px;" class="bg-light">
        <div class="container-for-gmail-android" width="50%" style="padding: 5%; background-color: #f2f2ee; box-shadow: 0px 1px 14px #ccc;">
            <div align='center'>
                <img class="force-width-gmail" src="{{env('APP_URL')}}/images/gtc.png" alt="gtc" width="150px"/>

            </div>
            <div style="padding:40px">
                <h2>Hello <span class="text-muted" style="color: #e81224;"> {{ucwords( $data['name'] )}},</span></h2>
                <div style="padding: 0px 50px; font-size: larger;">
                    <p>Thanks for indicating interest in joining the Global Talent Company community. A  special link to join the slack community would be sent to your email shortly. </p> <p style="text-align: right;">❤️GTC</p>
                </div>

            </div>
        </div>


     
    </div>
</body>

</html>