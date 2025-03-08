<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Us</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        </head>
    <body>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">user_name</th>
                <th scope="col">user_email</th>
                <th scope="col">user_message</th>


              </tr>
            </thead>
            <tbody>
                @foreach ($contact as $contact)
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->user_name}}</td>
                    <td>{{$contact->user_email}}</td>
                    <td>{{$contact->user_message}}</td>



                    <td>
                        <a href="#" class="btn btn-primary">Edit</a> <a href="#" class="btn btn-danger">Delete</a>


                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>

    </body>
</html>
