<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jobs challenge</title>

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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
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

            header {
                border-radius: 2px;
            }

            section {
                border-radius: 2px;
            }

            h1 {
                text-align: center;
                margin-top: 5px;
                padding: 10px;
            }

            h2 {
                padding: 10px;
                text-align: center;
            }

            p {
                text-align: center;
            }

            h3 {
                text-align: center;
            }

            .image-two {
                width: 800px;
                height: 551px;
                background-image: url(images/graph-results.png);
                background-size: 800px 551px;
                margin: auto;
            }

            .image-three {
                width: 800px;
                height: 551px;
                background-image: url(images/response-time-graph.png);
                background-size: 800px 551px;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <header class="content">
            <h1 class="title m-b-md">Stress test example</h1>
        </header>

        <section class="links">
            <h2> Computer specifications </h2>
            <p> Intel Core i5-7200U 2.50GHz CPU
                <br/> 16GB RAM </p>

            <h3>Graph results</h3>
            <div class="image-two">
            </div>

            <h3>Response time graph</h3>
            <div class="image-three">
            </div>
        </section>
    </body>
</html>
