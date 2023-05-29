<!DOCTYPE html>
<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Assessment Portal </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    




<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Myclass</title>


<!--favicon code-->
<link rel="shortcut icon" href="assets/images/favicon.ico" />
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() 
{
  var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;
  if (y == null || y == "") {alert("Name must be filled out.");return false;}
  var z =document.forms["form"]["college"].value;
  if (z == null || z == "") {alert("college must be filled out.");return false;}
  var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}

var a = document.forms["form"]["password"].value;

if (a.match(/[a-z]/g) && a.match( 
                    /[A-Z]/g) && a.match( 
                    /[0-9]/g) && a.match( 
                    /[^a-zA-Z\d]/g) && a.length >= 8 && a.length <= 16) 
                return true;
            else 
            {
              alert("Passwords must be 8 to 16 characters long and must contain at least one uppercase, one lowercase letter, one number and a special character");
                return false;
            }



/*if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<8 || a.length>16){alert("Passwords must be 8 to 16 characters long.");return false;}*/
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}

</script>

<style>
  input{
    border-radius:5px;
  }
  </style>
</head>

 

<body >


<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body"> 
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<!-- <div class="bg1" style="background-image:url(image/bg.jpg); height: 680px; width:1551px;"> -->
<div class="row" style="margin-top:2.5%;margin-left:5%;margin-right:5%;background-color:white;border-radius:10px;  box-shadow:4px 4px 4px 1px #888888">
<div class="col-md-6" style="overflow:hidden;background-color:transparent;">
<div class="text-center">
  <div ><img src="assets/images/logo.png" alt="logo" style="height:70px;width:350px;margin-top:6%;box-shadow:0px 15px 10px -15px #111" />
</div>
</div>
<img src="image/bg.png" style="height:500px;width:100%; -webkit-filter: drop-shadow(5px 5px 5px #222);filter:drop-shadow(5px 5px 5px #222); " >
</div>

<div class="col-md-5 panel" style="border-radius:15px;border-color:black;">

<!-- registration form begins -->  

<form class="form-horizontal" name="form" action="sign.php?q=home.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" required >
   <option value="">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option>
      <option value="O">Other</option>
 </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
    
  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group" style="margin-top:5%;">
  <label class="col-md-12 control-label" for=""></label>

  <div class="col-md-6"> 
  <input  type="submit" class="btn btn-gradient-success btn-fw"  value="SIGN UP" style="background:linear-gradient(to right, #da8cff, #9a55ff);padding:10px 10px;margin-left:2%;width:80%;border: none;color:white;" />
  </div>

  <div class="col-md-6"> 
  <a href="#" data-toggle="modal" data-target="#myModal">
  <input  type="button" class="btn btn-success btn-fw" value="LOG IN" style="background:linear-gradient(to right, #da8cff, #9a55ff);padding:10px 10px;margin-right:2%;float:right;width:80%;border: none;color:white;"/>
  </a>  
  </div>
</div>

</fieldset>
</form>


<!-- registration form ends -->  



</div><!--col-md-4 end-->


</div>
</div>
</div><!--container end-->























<!--Footer start-->

<!-- 
<div class="row footer" style=" position:absolute;
   bottom:0;
   width:100%;
   height:45px; 
   width:1565px;
   float: center;">
<div class="col-md-3 box">
<a href="about.html" target="">About us</a>
</div>

<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#myModal">Student Login</a></div>

<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<div class="col-md-3 box">
<a href="feedback.php" >Feedback</a></div></div>
 -->

<!--Footer End-->


<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
	  
      
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->
<div class="text-center" style="margin-top:1%;">
<div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="mdi mdi-account d-block mb-1" data-toggle="modal" data-target="#myModal"></i> Student </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="mdi mdi-reload d-block mb-1"></i> About </button>
                            <button type="button" class="btn btn-outline-secondary">
                              <i class="mdi mdi-account d-block mb-1" data-toggle="modal" data-target="#login"></i> Admin </button>
                          </div>

</div>

<br><br>
</body>
</html>
