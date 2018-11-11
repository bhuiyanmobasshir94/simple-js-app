<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>SignUp</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="signup.js"></script>
    <style type="text/css">
        .field-validation-error {
            color: red;
        }
        .error{
            color: red;
        }
    </style>
    <style>
     body {
         margin: 0;
         padding: 0;
         height: 100%;
         background-color: #efefef;
     }
 </style>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="text-center">
        <div class="login-form" style="top: 100.5px;">
            <div class="login_header" style="margin-bottom: 30px;">Register before you visit store</div>
            <form  action="sconfirm.php" method="POST" name="signup">                        
                <div class="form-group">
                    <input class="form-control" id="FirstName" name="FirstName" placeholder="First Name" type="text" value="" onkeyup="verify(this)" required/>
                    <!--NEED MODIFICATION-->
                </div>
                <div class="form-group">
                    <input class="form-control" id="LastName" name="LastName" placeholder="last Name" type="text" value="" onkeyup="verify(this)" required/>
                    <!--NEED MODIFICATION-->
                </div>

                <div class="form-group">
                    <input class="form-control" id="Email" name="Email" placeholder="Email" type="text" onkeyup="verify(this)" required/>
                    <!--NEED MODIFICATION-->
                </div>

                    <div class="form-group">
                    <input class="form-control" id="UserName" name="UserName" placeholder="User Name" type="text" onkeyup="verify(this)" required/>
                    <!--NEED MODIFICATION-->
                </div>

                <div class="form-group">
                    <input class="form-control" id="Password" name="Password" placeholder="Password" type="password" onkeyup="verify(this)" required/>
                    <!--NEED MODIFICATION-->
                </div>

                <div class="form-group">
                    <input class="form-control" id="Cpassword" name="Cpassword" placeholder="Confirm Password" type="password" onkeyup="verify(this)" required/>
                    <!--NEED MODIFICATION-->
                </div>
                <!--<input name="User" id="user" type="hidden" value="">-->
                <h6 class="error" name="Error"></h6>
            
                <div class="form-group">
                    <!--NEED MODIFICATION-->
                    <button type="submit" class="btn btn-block btn-primary p-lg-left-right" name="submit" disabled> Sign Up </button>
                </div>
                <div class="login_forgotpassword"><a href="/ultimate_one/signin.php"> Sign in to store</a></div>
            </form>
        </div>
    </div>
</body>
</html>
