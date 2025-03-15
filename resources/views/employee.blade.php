<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>

        body{
            font-family: manrope;

            background-color:#ff0844;

            margin:0px;
            padding:0px;
        }
    </style>

</head>
<body>

<div class="d-flex justify-content-center align-items-center container-fluid my-3" >


       <div class="shadow-sm my-4 p-3 col-8" style="background-color:white" >
          <div class="header text-center text-uppercase"><div class="h3 fw-bold">Employee Info</div></div>


            <form action="{{ route('store-employee') }}"class="form-control p-3 " method="post">
                @csrf
                <div class="h4">PERSONAL INFO</div>

            <div class="row my-3 ">
                <label for="emp_name" class="form-label">EMPLOYEE NAME</label>
                <div class="col">
                    <input type="text" class="form-control" placeholder="first name" name="emp_fname">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="second name" name="emp_lname">
               </div>
            </div>
            <div class="row my-3 ">

                <div class="col">
                    <label for="emp_id" class="form-label">EMPLOYEE ID NO</label>
                    <input type="text" class="form-control" placeholder="Register number" name="emp_id" >
                </div>
                <div class="col">
                    <label for="emp_dob" class="form-label">DATE OF BIRTH</label>
                    <input type="date" class="form-control" placeholder="Date of birth" name="emp_dob">
               </div>
            </div>
            <div class="row my-3 ">

                <div class="col">
              <label for="emp_email" class="form-label">Email</label>
              <input type="text" class="form-control" placeholder="example@gmail.com" name="emp_email">


                </div>
                <div class="col">
                    <label for="emp_number" class="form-label">MOBILE NUMBER</label>
                    <input type="number" class="form-control" placeholder="Mobile number" name="emp_number">
               </div>
            </div>

            <div>
                <label for="emp_address" class="form-label"> ADDRESS</label>
                <div class="col my-2">
                  <input type="text" class="form-control" placeholder=" Address" name="emp_address" aria-label="First name">
                </div>

                <div class="row">

                <div class="col">
                  <input type="text" class="form-control" placeholder="District" name="emp_district" aria-label="city">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="State" name="emp_state" aria-label="state">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="PIN Code" name="emp_pincode" aria-label="postal code">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Country" name="emp_country" aria-label="Country">
                </div>
                </div>

            </div>
            <div class="row my-3 ">

                <div class="col">
                    <label for="emp_age" class="form-label">AGE</label>
                    <input type="number" class="form-control" placeholder="Age" name="emp_age">
                </div>
                <div class="col">
                    <div>
                    <label for="emp_gender" class="form-label">GENDER</label>
                    </div>

                    <div class=" form-check-inline">
                        <input class="form-check-input " type="radio" name="emp_gender" value="male" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          male
                        </label>
                      </div>
                      <div class=" form-check-inline">
                        <input class="form-check-input" type="radio" name="emp_gender"  value="female" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          female
                        </label>
                      </div>



               </div>
            </div>
            <hr>
            <div class="h4">PROFFESSIONAL INFO</div>

            <div class="row my-3 ">

                <div class="col">
              <label for="emp_branch" class="form-label">WORKING BRANCH </label>
              <select class="form-select" aria-label="Default select example" name="emp_branch">
                <option selected>select the branch</option>
                <option value="Technology & IT Depatment">Technology & IT Depatment</option>
                <option value="Human resource (HR) Depatment">Human resource (HR) Depatment</option>
                <option value="Marketing & Sales Department">Marketing & Sales Department</option>
                <option value="Finance & Accounting Department">Finance & Accounting Department</option>


              </select>


                </div>
                <div class="col">
                    <label for="emp_date_of_join" class="form-label">DATE OF JOINING</label>
                    <input type="date" class="form-control" placeholder="" name="emp_date_of_join">
               </div>
            </div>
            <div class="row my-3 ">

                <div class="col">
              <label for="emp_work_floor" class="form-label">EMPLOYEE WORKING FLOOR</label>
              <select class="form-select" aria-label="Default select example" name="emp_work_floor">
                <option selected>select the floor</option>
                <option value="1 st Floor">1 ST Floor</option>
                <option value="2 nd Floor">2 nd Floor</option>
                <option value="3 Floor">3 rd Floor</option>
                <option value="Ground Floor">Ground Floor</option>


              </select>



                </div>
                <div class="col">
                    <div>
                        <label for="optionjoined" class="form-label">METHOD OF JOINING </label>
                   </div>
                     <div class=" form-check-inline">
                            <input class="form-check-input " type="radio" name="emp_method_of_joining" value="referal" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Referal
                            </label>
                     </div>
                    <div class=" form-check-inline">
                            <input class="form-check-input" type="radio" name="emp_method_of_joining"  value="non-referal" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Non-Referal
                            </label>
                    </div>


               </div>
            </div>
     <div>
                <label for="emp_experience" class="form-label">Choose Working Experience In The Following Fields (if any) <label>
                </div>
     <div class="d-inline-flex">

        <div class=" form-checkinline mx-2">
         <input class="form-check-input" type="checkbox" name="emp_experience[]" value=" Marketing & branding" id="flexCheckDefault1">
        <label class="form-check-label" for="flexCheckDefault">
                                Marketing & branding
         </label>
        </div>
        <div class=" form-check mx-2">
        <input class="form-check-input " type="checkbox" name="emp_experience[]" value=" Quality Assurance & Testing" id="flexCheckDefault2">
           <label class="form-check-label" for="flexCheckDefault">
                                   Quality Assurance & Testing
            </label>
        </div>
           <div class="form-check mx-2">
            <input class="form-check-input " type="checkbox" name="emp_experience[]" value="Soft Skills Developement" id="flexCheckDefault3">
                   <label class="form-check-label" for="flexCheckDefault">
                                           Soft Skills Developement
                    </label>
           </div>
     </div>





                    <hr>

                    <div class="h4">SALARY INFO</div>
                    <div class="row my-3 ">

                        <div class="col">
                      <label for="emp_monthly_salary" class="form-label"> MONTHLY SALARY</label>
                      <input type="number" class="form-control" placeholder="" name="emp_monthly_salary">


                        </div>
                        <div class="col">
                            <label for="emp_tax" class="form-label">TAX PERCENTAGE </label>

                            <select class="form-select" aria-label="Default select example" name="emp_tax">
                                <option selected >select tax %</option>
                                <option value="18%">18%</option>
                                <option value="15%">15%</option>
                                <option value="10%">10%</option>
                                <option value="5%">5%</option>
                                <option value="3%">3%</option>


                              </select>

                       </div>
                    </div>
                    <div class="row my-3 ">

                        <div class="col">
                      <label for="emp_ctc" class="form-label">ANNUAL CTC</label>
                      <input type="number" class="form-control" placeholder="" name="emp_ctc">


                        </div>
                        <div class="col">

                            <label for="emp_pf" class="form-label">PF</label>
                            <input type="number" class="form-control" placeholder="" name="emp_pf">





                       </div>
                    </div>

                <div class=" form-check  p-3 ">
                    <input class="form-check-input mx-2" type="checkbox" name="emp_reg" value="yes agreed" id="flexCheckDefault">

                           <p> I hereby declare that the information given by me in application is true ,complete and correct.. </p>

                 </div>




                    <div class="col-12 text-center ">
                        <button class="btn btn-success col-4 my-3" type="submit">Submit form</button>
                      </div>





            </form>

</div>

</div>
</body>
</html>
