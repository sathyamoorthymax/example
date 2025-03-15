<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>viewemployee</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        *{
            font-family: 'Manrope';
            box-sizing: border-box;
            margin: 0;
            padding: 0;

        }
        body{
            background-color:whitesmoke;

        }

        table{
            border:2px solid;
        }
         tr td :hover{
            background-color:wheat;
        }
    </style>
    </head>
    <body class="py-4 text-center">
        <h1 class="text-secondary">EMPLOYEE DETAILS</h1>
        <table class="table p-4">

            <thead>
              <tr style="background-color:#e28e40">

                <th scope="col" style="background-color:#e28e40">Employee</th>

                <th scope="col"style="background-color:#e28e40">First Name</th>
                <th scope="col"style="background-color:#e28e40">Second Name</th>
                <th scope="col"style="background-color:#e28e40">Date of Birth</th>
                <th scope="col"style="background-color:#e28e40">Reg id</th>

                <th scope="col"style="background-color:#e28e40">Address</th>
                <th scope="col"style="background-color:#e28e40">Gender</th>


                <th scope="col"style="background-color:#e28e40">Email</th>
                <th scope="col"style="background-color:#e28e40">Number</th>

                <th scope="col"style="background-color:#e28e40">salary</th>
                <th scope="col"style="background-color:#e28e40">branch</th>

                <th scope="col"style="background-color:#e28e40">verified</th>
                <th scope="col"style="background-color:#e28e40">edit/delete</th>





              </tr>
            </thead>
            <tbody>
                @foreach ($employee as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->emp_fname}}</td>
                    <td>{{$employee->emp_lname}}</td>
                    <td>{{$employee->emp_dob}}</td>
                    <td>{{$employee->emp_id}}</td>

                    <td>{{$employee->emp_address}}</td>
                    <td>{{$employee->emp_gender}}</td>

                    <td>{{$employee->emp_email}}</td>
                    <td>{{$employee->emp_number}}</td>


                    <td>{{$employee->emp_monthly_salary}}</td>
                    <td>{{$employee->emp_branch}}</td>

                    <td>{{$employee->emp_reg}}</td>





                    <td>
                        <a href="/edit-employee/{{$employee->id}}" class="btn btn-primary">Edit</a> <a href="/delete-employee/{{$employee->id}}" class="btn btn-danger">Delete</a>


                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>

    </body>
</html>
