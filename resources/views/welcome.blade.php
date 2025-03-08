<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
    body {
            font-family: 'Manrope';
            background: linear-gradient(90deg, teal, cyan);
            color: floralwhite;
            margin: 0px;
            padding: 0px;
            width: 100%;

        }
        .logo h6 {
            font-weight: bold;
        }

        .header img {
            width: 80%;
            height: 80%;
        }

        .header button {
            background-color: teal;
            border: none;
            font-weight: bold;
            color: white;

        }
        .navbar {}

        .navbar ul li {

            list-style-type: none;

        }

        .navbar ul li:hover {

            color:white;
            text-shadow: 2px 3px 4px whitesmoke;
            font-weight: bold;


        }

        .navbar ul li a {
            color:white;
            text-shadow: 2px 3px 4px whitesmoke;
            font-weight: bold;
            text-decoration:none;

            padding: 4px;
        }

</style>
    </head><body class="antialiased">
    <header>
        <div class="header">
            <nav class="navbar container d-flex p-4">
                <div class="logo">
                    <h4 class="fw-bolder">Timothy</h4>
                </div>
                <div>
                    <ul class="d-inline-flex fw-bold">
                        <li class="px-4">Header</li>
                        <li class="px-4">Hero blocks</li>
                        <li class="px-4"><a href="/view-student">viewstudent</a></li>
                        <li class="px-4"><a href="home">Home</a></li>
                        <li class="px-4">About</li>
                        <li class="px-4"><a href="/student">student</li>
                        <li class="px-4"><a href="/view-users">viewuser</a></li>
                        <li class="px-4"><a href="contact">Contact</a></li>
                        <li><a href="" class="px-4 py-2 rounded-2 bg-warning text-white"
                                style="text-decoration:none !important">BUY NOW</a></li>
                    </ul>
                </div>

            </nav>
            <div class="d-flex container align-items-center">
                <div class="col-6 align-items-left py-5 mb-5">
                    <h1 class="fw-bold">Make Business Easy With Timothy</h1>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ratione provident iste
                        sapiente aliquam, pariatur doloremque ut asperiores quisquam soluta autem
                        accusantium.Maiores, eaque. Perferendis quae nam dolorum neque voluptate!</p>
                    <button class="px-5 py-3 mt-2 mb-5">DOWNLOAD FREE TRAIL</button>

                </div>
                <div class="col-6">
                    <img class="w-100 h-100"
                        src="https://www.softzenia.com/assets/images/android-ios-application-development.png">
                </div>
            </div>
    </header>

    </body>


</html>
