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


        .table-dark.table-bordered {
            border: 0;
        }
        .table-dark {
            color: #fff;
            background-color: #212529;
        }
        .table-dark, .table-dark>td, .table-dark>th {
            background-color: #c6c8ca;
        }

        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
            text-align: center;
        }

        .table-dark {
            color: #fff;
            background-color: #212529;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }

    </style>
</head>
<body>


<div class="title m-b-md">
    Statistics
</div>
<div class="contain">
    <p>Description of table</p>
    <table class="table table-bordered table-dark">
        <thead>
        <tr>
            <th><h3> Total</h3></th>
            <th><h3> In queue jobs</h3></th>
            <th><h3> Jobs in process </h3></th>
            <th><h3> Jobs finished </h3></th>
            <th><h3> Defender type jobs</h3></th>
            <th><h3>Operative type jobs</h3></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><h3>{{$totalJobs}}</h3></td>
            <td><h3>{{$inQueueJobs}}</h3></td>
            <td><h3>{{$processJobs}}</h3></td>
            <td><h3>{{$finishJobs}}</h3></td>
            <td><h3>{{$defenderJobs}}</h3></td>
            <td><h3>{{$operativeJobs}}</h3></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
