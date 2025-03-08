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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        </head>
    <body>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>

                <th scope="col">stu_fname</th>
                <th scope="col">stu_name</th>
                <th scope="col">stu_dob</th>
                <th scope="col">stu_sec</th>
                <th scope="col">stu_hobbies</th>
                <th scope="col">stu_address</th>
                <th scope="col">stu_district</th>
                <th scope="col">stu_state</th>
                <th scope="col">stu_pincode</th>
                <th scope="col">stu_country</th>
                <th scope="col">stu_email</th>
                <th scope="col">stu_number</th>
                <th scope="col">stu_password</th>
                <th scope="col">stu_cpassword</th>
                <th scope="col">stu_standard</th>
                <th scope="col">stu_reg_number</th>
                <th scope="col">stu_blood_group</th>
                <th scope="col">stu_gender</th>



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
