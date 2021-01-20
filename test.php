<!DOCTYPE html>
<html>

<head>
    <title>add new member</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <div class="container ">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <h4>Welcome to my scene</h4>
                            <hr>
                        </div>
                        <div class="row">
                            <p>Containers are the most basic layout element in Bootstrap and are required when using our default grid system. Choose
                                from a responsive, fixed-width container
                                (meaning its max-width changes at each breakpoint) or fluid-width (meaning it’s 100% wide all the time).</p>
                        </div>
                        <div class="row">
                            <h6>Basic form with validation</h6>
                            <hr>
                        </div>

                        <form id="form">
                            <div class="row">
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <label>First name</label>
                                </div>
                                <div class="col-sm-9 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="first_name" placeholder="Enter Your First Name" name="fName">
                                </div>
                                <div id="alert1">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <label>Last name</label>
                                </div>
                                <div class="col-sm-9 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="last_name" placeholder="Enter Your Last Name" name="lName">
                                </div>
                                <div id="alert2">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <label>Age</label>
                                </div>
                                <div class="col-sm-9 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="age" placeholder="Enter Your age" name="age">
                                </div>
                                <div id="alert3">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <label>Tel</label>
                                </div>
                                <div class="col-sm-9 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="tel" placeholder="Ex: (+94) 76 261 0633" name="tel">
                                </div>
                                <div id="alert4">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <label>Gender</label>
                                </div>
                                <div class="col-sm-9 mb-3 mb-sm-0">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="smsAlertCheck">Male
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="emailAlertCheck">Female
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <label>Image</label>
                                </div>
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <p>Select image file</p>
                                </div>
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <input type="file" class="form-control-file" id="image">
                                </div>
                            </div>
                            <br><br><br>
                            <div class="row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                </div>
                                <div class="col-sm-2 mb-3 mb-sm-0">
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                                <div class="col-sm-3 mb-3 mb-sm-0">
                                    <button id="btnadd" type="button" class="btn btn-success" onclick="validateForm()">Submit</button>
                                </div>
                            </div>
                            <br>
                        </form>

                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                        </div>
                        <div class="col-md-12">
                            <p>Bootstrap’s form controls expand on our Rebooted form styles with classes. Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices.
                                Be sure to use an appropriate type attribute on all inputs (e.g., email for email address or number for numerical information) to take advantage of newer input controls like email verification,
                                number selection, and more.</p>
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary">Show input</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>