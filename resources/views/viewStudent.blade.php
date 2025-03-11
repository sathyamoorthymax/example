<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>student</title>

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
        <h1>STUDENT DETAILS</h1>
        <table class=" table p-4">

            <thead>
              <tr style="background-color:#029779">

                <th scope="col" style="background-color:#029779">STUDENT</th>

                <th scope="col"style="background-color:#029779">First Name</th>
                <th scope="col"style="background-color:#029779">Second Name</th>
                <th scope="col"style="background-color:#029779">Date of Birth</th>
                <th scope="col"style="background-color:#029779">Section</th>
                <th scope="col"style="background-color:#029779">Hobbies</th>
                <th scope="col"style="background-color:#029779">Address</th>
                <th scope="col"style="background-color:#029779">District</th>
                <th scope="col"style="background-color:#029779">state</th>

                <th scope="col"style="background-color:#029779">Pincode</th>
                <th scope="col"style="background-color:#029779">Country</th>
                <th scope="col"style="background-color:#029779">Email</th>
                <th scope="col"style="background-color:#029779">Number</th>
                <th scope="col"style="background-color:#029779">Password</th>
                <th scope="col"style="background-color:#029779">confirm-password</th>
                <th scope="col"style="background-color:#029779">Standard</th>
                <th scope="col"style="background-color:#029779">Reg number</th>
                <th scope="col"style="background-color:#029779">Blood_group</th>
                <th scope="col"style="background-color:#029779">Gender</th>
                <th scope="col"style="background-color:#029779">edit/delete</th>





              </tr>
            </thead>
            <tbody>
                @foreach ($student as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->stu_fname}}</td>
                    <td>{{$student->stu_lname}}</td>
                    <td>{{$student->stu_dob}}</td>
                    <td>{{$student->stu_sec}}</td>
                    <td>
                        @php
                            $hobbies = json_decode($student->stu_hobbies, true) ?? [];
                        @endphp
                        {{ implode(', ', $hobbies) }}
                        </td>

                    <td>{{$student->stu_address}}</td>
                    <td>{{$student->stu_district}}</td>
                    <td>{{$student->stu_state}}</td>
                    <td>{{$student->stu_pincode}}</td>
                    <td>{{$student->stu_country}}</td>
                    <td>{{$student->stu_email}}</td>
                    <td>{{$student->stu_number}}</td>
                    <td>{{$student->stu_password}}</td>
                    <td>{{$student->stu_cpassword}}</td>
                    <td>{{$student->stu_standard}}</td>
                    <td>{{$student->stu_reg_number}}</td>
                    <td>{{$student->stu_blood_group}}</td>
                    <td>{{$student->stu_gender}}</td>





                    <td>
                        <a href="/edit-student" class="btn btn-primary">Edit</a> <a href="/delete-student/{{$student->id}}" class="btn btn-danger">Delete</a>


                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>

    </body>
</html>
