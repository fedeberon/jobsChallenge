<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Statistics</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .title {
            font-size: 84px;
            text-align: center;
            margin:auto;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .contain{
            width: 64%;
            margin:auto;
        }
        .counter{
            width:150px;
            height: 150px;
            background: blue;
            float: left;
            margin: 10px;
            position: relative;
        }
        h3{
            position:absolute;
            top:-50px;
            left:0px;

        }
    </style>
</head>
<body>
<div class="title m-b-md">
    Statistics
</div>
<div class="contain">
    <div class="counter"><h3>Total</h3></div>
    <div class="counter"><h3>Jobs Process</h3></div>
    <div class="counter"><h3>Jobs Finish</h3></div>
    <div class="counter"><h3>Defender Jobs</h3></div>
    <div class="counter"><h3>Operative Jobs</h3></div>
</div>
</body>
</html>
