

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register - JobsChallenge</title>

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

        .content {
            text-align: center;
            margin: auto;
        }

        .title {
            font-size: 64px;
        }

        input, button {
            color: #636b6f;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            width: 200px;
            margin-top: 5px;
        }

        li{
            list-style: none;
        }

        button {
            margin-right: 3px;
        }

        .text-danger {
            color: #a94442;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="title">
            Register - JobsChallenge
        </div>

        <form class="" action="{{URL::to('/store')}}" method="post">
            <input type="text" name="name" value="" placeholder="Enter Your name">
            <br>
            <input type="password" name="password" value="" placeholder="Enter Your Password">
            <br>
            <input type="text" name="email" value="" placeholder="Enter Your mail">
            <br>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button type="sumbit" name="button">Register</button>
        </form>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
</body>
</html>
