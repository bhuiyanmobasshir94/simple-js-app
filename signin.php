<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Signin</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="signin.js"></script>
    <style type="text/css">
        .field-validation-error {
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
        <div class="login-form" style="top: 147.5px;">
            <div class="login_header" style="margin-bottom: 30px;">Sign in with your user name & password.</div>
            <form action="signinconfirm.php" method="post" name="signin">                        
                <div class="form-group">
                    <input  class="form-control" id="UserName" name="UserName" placeholder="User Name" type="text" value="" onkeyup="verify(this)" required />
                </div>
                <div class="form-group">
                    <input class="form-control" id="Password" name="Password" placeholder="Password" type="password" value="" onkeyup="verify(this)" required/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary p-lg-left-right" name="submit" disabled> Log In </button>
                </div>
                <div class="login_forgotpassword"><a href="/Ultimate_one/signup.php">Sign Up for your account</a></div>
            </form>
        </div>
    </div>
</body>
</html>
