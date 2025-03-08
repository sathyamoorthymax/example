<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Edysync</title>
    <style>
        body{
            font-family: 'Manrope';
            background:linear-gradient(45deg, #bcacff,#BDEBFF);
            width: 100%;
            height: 100%;

        }
        h1{


        }
        form{
            border-radius:15px;
           opacity:1;
            padding:25px;
        }
        form:hover{
            opacity:1;
        }
        label{
            font-weight: bolder;
            margin-top:15px;
        }
i:hover{
    transform: rotatez(150deg);
    animation-duration:9s;
    animation-delay:4s;
}


    </style>
  </head>
  <body class="justify-content-center align-items-center ">

    <div class="col-7 p-3 container my-4">
        <h1 class="container-fluid text-center mt-4"><span id="logo"><i class='example fa fa-graduation-cap ' style="font-size:70px;"></i></span>Student Registration Form</h1>
    <hr>
      <form action="{{ route('edit-student') }}" class="shadow-sm bg-light text-darks " method="post">
        @csrf
      <div class="row">
        <label for="student_name" class="form-label">Student name</label>
        <div class="col">
          <input type="text" class="form-control" placeholder="First name" name="stu_fname" aria-label="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name" name="stu_lname"  aria-label="Last name">
        </div>
      </div>
<div class="row">
    <div class="col-6">
      <label for="formGroupExampleInput" class="form-label">Date of birth</label>

      <input type="date" id="birthday" name="stu_dob" class="form-control" >
      </div>
      <div class="col-6">
      <label for="formGroupExampleInput" class="form-label">Section</label>

      <input type="text" id="birthday" name="stu_sec" class="form-control" >
      </div>

</div>
      <div>
        <label for="formGroupExampleInput" class="form-label">choose your hobbies</label>
        <div>
        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            <input type="checkbox" class="btn-check" name="stu_hobbies[]" value="sports" autocomplete="off">
            <label class="btn btn-outline-dark" for="btncheck1">sports</label>

            <input type="checkbox" class="btn-check" id="btncheck2" name="stu_hobbies[]" value="photograhy" autocomplete="off">
            <label class="btn btn-outline-dark" for="btncheck2">photography</label>

            <input type="checkbox" class="btn-check" id="btncheck3" name="stu_hobbies[]" value="cooking" autocomplete="off">
            <label class="btn btn-outline-dark" for="btncheck3">cooking</label>

            <input type="checkbox" class="btn-check" id="btncheck4" name="stu_hobbies[]" value="coding" autocomplete="off">
            <label class="btn btn-outline-dark" for="btncheck4">coding</label>

            <input type="checkbox" class="btn-check" id="btncheck5" name="stu_hobbies[]" value="swimming" autocomplete="off">
            <label class="btn btn-outline-dark" for="btncheck5">swimming</label>



            <input type="checkbox" class="btn-check" id="btncheck7" name="stu_hobbies[]" value="dancing" autocomplete="off">
            <label class="btn btn-outline-dark" for="btncheck7">Dancing</label>


            <input type="checkbox" class="btn-check" id="btncheck8" name="stu_hobbies[]" value="others" autocomplete="off">
            <label class="btn btn-outline-dark" for="btncheck8">others</label>
          </div>
          </div>
      </div>


        <div>
          <label for="formGroupExampleInput" class="form-label">Address</label>
          <div class="col my-3">
            <input type="text" class="form-control" placeholder="Student Address" name="stu_address" aria-label="First name">
          </div>

          <div class="row">

          <div class="col">
            <input type="text" class="form-control" placeholder="District" name="stu_district" aria-label="city">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="State" name="stu_state" aria-label="state">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="PIN Code" name="stu_pincode" aria-label="postal code">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Country" name="stu_country" aria-label="Country">
          </div>
          </div>

          </div>
          <div>
            <label for="formGroupExampleInput" class="form-label">E-mail</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="student email id" name="stu_email" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <span class="input-group-text" id="basic-addon2">@gmail.com</span>
            </div>
            </div>
            <div>
              <label for="formGroupExampleInput" class="form-label">Phone number</label>
              <input type="number" class="form-control" placeholder="phone number" name="stu_number">
              </div>

              <label for="formGroupExampleInput" class="form-label">standard</label>
              <select class="form-select" name="stu_standard" aria-label="Default select example">
                <option selected>select your standard</option>
                <option value="1">I-STD</option>
                <option value="2">II-STD</option>
                <option value="3">III-STD</option>
                <option value="4">IV-STD</option>
                <option value="5">V-STD</option>
                <option value="6">VI-STD</option>
                <option value="7">VII-STD</option>
                <option value="8">VIII-STD</option>
                <option value="9">IX-STD</option>
                <option value="10">X-STD</option>
                <option value="11">XI-STD</option>
                <option value="12">XII-STD</option>
              </select>
              <div class="row">
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Enter Password</label>
                <input type="password" placeholder="Enter password" class="form-control" name="stu_password">
              </div>
              <div class="col-md-6">
                <label for="inputPassword5" class="form-label">Confirm Password</label>
                <input type="password"  placeholder="verify password" class="form-control" name="stu_cpassword">
              </div>
              </div>
 <div class="my-3">
              <label for="formGroupExampleInput" class="form-label">Gender</label>
<div class="row mx-2">
              <div class="col-2 form-check">
                <input class="form-check-input " type="radio" name="stu_gender" value="male" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  male
                </label>
              </div>

              <div class="col-2 form-check">
                <input class="form-check-input" type="radio" name="stu_gender"  value="female" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  female
                </label>
              </div>
</div>
<div class="row">
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Reg Number</label>
      <input type="text" class="form-control" name="stu_reg_number">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Blood group</label>
      <select class="form-select" aria-label="Default select example" name="stu_blood_group">
        <option selected>select your Blood group</option>
        <option value="A +ve">A +ve</option>
        <option value="A1 +ve">A1 +ve</option>
        <option value="B +ve">B +ve</option>
        <option value="O +VE">O +VE</option>
        <option value="B -ve">B -ve</option>
        <option value="A1B +ve">A1B +ve</option>

      </select>

    </div>
    </div>
</div>
            <div class="col-12 text-center">
              <button class="btn btn-primary col-5" type="submit">Submit form</button>
            </div>
          </form>
      </div>
  </body>
</html>
