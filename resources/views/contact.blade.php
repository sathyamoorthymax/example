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

        <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
    .section_6 {
            background-color: whitesmoke;
        }
        .navbar {
            position:sticky;
            top:0;
            background: linear-gradient(90deg, teal, cyan);
            color: floralwhite;

            width:100%;

        }

.navbar ul li {

    list-style-type: none;


}

.navbar ul li:hover {

    color:wheat;
    text-shadow: 2px 3px 4px black;

    font-weight: bold;

}

.navbar ul li a {

    color: white;
    font-weight: bolder;
    padding: 4px;
    text-decoration:none;
}
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

</style>
    </head>

    <body class="antialiased">
        <nav class="navbar container d-flex p-4">
            <div class="logo">
                <h4 class="fw-bolder">Timothy</h4>
            </div>
            <div>
                <ul class="d-inline-flex fw-bold">
                    <li class="px-4">Header</li>
                    <li class="px-4">Hero blocks</li>
                    <li class="px-4">Pages</li>
                    <li class="px-4"><a href="home">Home</a></li>
                    <li class="px-4">About</li>
                    <li class="px-4">FAQ</li>
                    <li class="px-4">Pricing</li>
                    <li class="px-4"><a href="contact">Contact</a></li>
                    <li><a href="" class="px-4 py-2 rounded-2 bg-warning text-white"
                            style="text-decoration:none !important">BUY NOW</a></li>
                </ul>
            </div>

        </nav>
        <div class="section_6 p-4 text-black">
            <div class="text-center container py-5">
                <h4> <b>Get In Touch With Us</b></h4>
                <p class="mt-3 col-md-8 mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero voluptatum non ex rem
                    dicta! Magni iusto doloremque numquam cum totam tempore rem, fugit quod ipsam aliquam a, blanditiis
                    quibusdam at!</p>
            </div>
            <form action="{{ route('store-contact') }}" class="px-5 mb-5 col-md-8 mx-auto" method="post">
                @csrf
                <div class="row mb-4">
                    <div class="col">
                        <label for="user_name">Name</label>
                        <input type="text" class="form-control mt-2" placeholder="name" name="user_name">

                    </div>
                    <div class="col">
                        <label for="user_name">E-mail Address</label>
                        <input type="text" class="form-control mt-2" placeholder="e-mail" name="user_email">

                    </div>
                </div>
                <div class="form-group">
                    <label for="user_name">Messages</label>
                    <textarea class="form-control mt-2" rows="5" placeholder="" name="user_message"></textarea>


                </div>
                <button type="submit" class="btn btn-default bg-info text-white px-4 mt-2">SUBMIT ENQUIRY</button>
            </form>
        </div>


    </body>
</html>
