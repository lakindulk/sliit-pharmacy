<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

            header#ph-header {
                padding: 40px 20px;
            }

            div#ph-nav-profile {
                display: grid;
                grid-template-columns: auto auto;
            }       

            div#ph-profile {
                align-items: end;
                justify-self: end;
            }     
        </style>
    </head>
    <body>
        <header id="ph-header">
            <div id="ph-nav-profile">
                <div id="ph-logo">logo</div>
                <div id="ph-profile">sign in / out</div>
            </div>
            <nav id="ph-navigation">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about-us">About Us</a></li>
                    <li><a href="/contact-us">Contact Us</a></li>
                </ul>
            </nav>
        </header>
        <div id="ph-main-content">
            @yield('content')
        </div>
        <footer id="ph-footer"></footer>
    </body>
</html>
