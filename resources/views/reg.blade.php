<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <style>
        #topbar {
            height: 30px;
            background-color: #f4f4f4;
        }

        #header {
            height: 80px;
        }

        #header-row {
            line-height: 80px;
            color: blue;
        }

        #logo {
            width: 300px;

        }

        .register {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #registerinterest {
            font-size: 17px;
            color: white;
            padding: 8px;
            background-color: darkblue;
            width: 195px;
            text-transform: uppercase;
            border-radius: 0 50px 0 0;

        }
        #parentdetail {
            font-size: 17px;
            color: white;
            padding: 8px;
            background-color: skyblue;
            width: 195px;
            text-transform: uppercase;
            border-radius: 0 50px 0 0;

        }
        .relationshipwithchild
        {
            padding-top:10px;
            padding-bottom:10px;
        }
        #childdetail
        {
            font-size: 17px;
            color: white;
            padding: 8px;
            background-color: skyblue;
            width: 195px;
            text-transform: uppercase;
            border-radius: 0 50px 0 0;  
        }
        .submit
        {
            padding:2px;

        }
        .fname
        {
            width:80%;
        }

    </style>
    <section id="topbar">
        <div class="container row" style="height:100%">
            <div class="col-md-8">
            </div>
            <div class="col-md-1 text-center bg-danger">Admission
            </div>
            <div class="col-md-2 text-center">Online payment
            </div>
            <div class="col-md-1 text-center">Sign In
            </div>
        </div>
    </section>
    <section id="header">
        <div class="row" id="header-row">
            <div class="col-md-4"><img id="logo" src="images/logo.png"></div>
            <div class="col-md-8 row text-center">
                <div class="col-md-1">Home</div>
                <div class="col-md-2">Why Eminence</div>
                <div class="col-md-1">Academics</div>
                <div class="col-md-3">Beyond The Acadamics</div>
                <div class="col-md-1">Campus</div>
                <div class="col-md-2">News & Events</div>
                <div class="col-md-1">Blogg</div>
                <div class="col-md-1">Gallery</div>
            </div>
        </div>
    </section>
    <section>
        <div class="row" style="line-height:80px; font-size:30px; font-weight:700">
            <div class="col-md-12 bg-warning text-center text-white ">Registration Form</div>

        </div>
    </section>
    <form action="createentry" method="POST">
        @csrf
    <section>
        <div class="container">
            <div class="register" id="register">
                <div id="registerinterest">
                    Register Interest
                </div>
                <div>
                    where did you heared about us
                </div>
                <div class="body" style="font-weight:500">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="cbwebsite">
                        <label class="form-check-label" for="inlineCheckbox1">Website</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="cbadvertisement">
                        <label class="form-check-label" for="inlineCheckbox1">Advertisement</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="cbsocialmedia">
                        <label class="form-check-label" for="inlineCheckbox1">Social media</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="cbradi">
                        <label class="form-check-label" for="inlineCheckbox1">Radio</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="cbtelevision">
                        <label class="form-check-label" for="flexCheckDefault">
                            Television
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="cbprint">
                        <label class="form-check-label" for="inlineCheckbox1">print</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="cbwordmouth">
                        <label class="form-check-label" for="inlineCheckbox1"> Word Mouth </label>
                    </div>
                    <div class="row mb-3">
                        <label for="other" class="col-sm-2 col-form-label">Other</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="other" name="ibother">
                        </div>
                    </div>
                    <div id="parentdetail">
                        parent details
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            first name
                        </div>
                        <div class="col-md-4">
                            Middle Name
                        </div>
                        <div class="col-md-4">
                            Last Name
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        <input class="fname" type="text" id="firstname" name="first_name"/>
                        </div>
                        <div class="col-md-4">
                        <input  class="fname" type="text" id=" middlename" name="middle_name"/>
                        </div>
                        <div class="col-md-4">
                        <input class="fname" type="text" id="lastname" name="last_name"/>
                        </div>
                    </div>
                    <div class="relationshipwithchild  row">
                        <div class="col-md-2">
                            Relationship With Child
                        </div> 
                        <div class="col-md-2">
                            <input type="radio" id="relation" name="relation" value="father">father
                        </div>  
                        <div class="col-md-2">
                            <input type="radio" id="relation" name="relation" value="mother">Mother
                        </div>
                        <div class="col-md-2">
                            <input type="radio" id="relation" name="relation" value="guardian">Gourdian
                        </div> 
                    </div>
                    <div class="parentinfo">
                        <div class="row mb-3">
                                <label for="occupation" class="col-sm-2 col-form-label">Occupation</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="occupation" name="tboccupation">
                            </div>
                         </div>
                         <div class="row mb-3">
                                <label for="companyname" class="col-sm-2 col-form-label">Company Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="companyname" name="tbcompanyname">
                            </div>
                         </div>
                         <div class="row mb-3">
                                <label for="contactmobilephone" class="col-sm-2 col-form-label">Contact Mobile Phone</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="contactmobilephone" name="tbcontactmobilephone">
                            </div>
                         </div>
                         <div class="row mb-3">
                                <label for="contactemailaddress" class="col-sm-2 col-form-label">Contact Email Address</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="contactemailaddress" name="tbcontactemailaddress">
                            </div>
                         </div>
                         <div class="row mb-3">
                                <label for="homephone" class="col-sm-2 col-form-label">Home Phone</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="homephone" name="tbhomephone">
                            </div>
                         </div>
                         <div class="row mb-3">
                                <label for="otherphone" class="col-sm-2 col-form-label">Other Phone Number If Any</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="otherphone" name="tbotherphone">
                            </div>
                         </div>
                    </div>
                    <div id="childdetail">
                        child details
                    </div>
                    <div class="childinfo">
                    <div class="row mb-3">
                                <label for="FullName" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="fullname" name="tbfullname">
                            </div>
                         </div>
                            <div class="gender  row">
                                 <div class="col-md-2">
                                    Gender
                                 </div> 
                                <div class="col-md-2">
                                     <input type="radio" id="gender" name="gender" value="male">Male
                                </div>  
                                <div class="col-md-2">
                                    <input type="radio" id="gender" name="gender" value="female">Female
                                 </div>
                              </div>
                              <div class="row mb-3">
                                    <label for="dob" class="col-sm-2 col-form-label">Date Of Birth</label>
                                        <div class="col-sm-6">
                                            <input type="date" class="form-control" id="dob" name="tbdob">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="age" class="col-sm-2 col-form-label">Age</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="age" name="tbage">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nationality" class="col-sm-2 col-form-label">Nationality</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="nationality" name="tbnationality">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="primarylanguage" class="col-sm-2 col-form-label">Primary Language</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="primarylanguage" name="tbprimarylanguage">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="secondorylanguage" class="col-sm-2 col-form-label">Secondory Language</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="secondorylanguage" name="tbsecondorylanguage">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="previousschool" class="col-sm-2 col-form-label">Previous School</label>
                                        <div class="col-sm-6">
                                            <input type="taxt" class="form-control" id="previousschool" name="tbpreviousschool">
                                        </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="currentgrade" class="col-sm-2 col-form-label">Current grade</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="currentgrade" name="tbcurrentgrade">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="enrollmentyear" class="col-sm-2 col-form-label">Enrollment year</label>
                                        <div class="col-sm-6">
                                            <input type="taxt" class="form-control" id="enrollmentyear" name="tbcurrentyear">
                                        </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="gas" class="col-sm-2 col-form-label">Grade To Which Admission seeking</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="gas" name="tbadmnseeking">
                                        </div>
                                </div>
                                <div style="width:67%">
                                    <div class="submit" style="float:right">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                                








                </div>
            </div>
        </div>
    </section>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
