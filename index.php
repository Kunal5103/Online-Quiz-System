<?php
session_start();
if (isset($_SESSION['username']) && (!isset($_SESSION['key']))) {
  header('location:account.php?q=1');
} else if (isset($_SESSION['username']) && isset($_SESSION['key']) && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39') {
  header('location:dash.php?q=0');
} else {
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="icon" href="favicon.ico" type="image/icon" sizes="16x16">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> ICEM QUIZ TEST </title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">


  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <?php
  if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <script>
    function validateForm() {
      var y = document.forms["form"]["name"].value;
      if (y == null || y == "") {
        document.getElementById("errormsg").innerHTML = "Name must be filled out.";
        return false;
      }
      var r = document.forms["form"]["rollno"].value;
      if (r == null || r == "") {
        document.getElementById("errormsg").innerHTML = "Roll No. must be filled out.";
        return false;
      }
      var g = document.forms["form"]["gender"].value;
      if (g == "") {
        document.getElementById("errormsg").innerHTML = "Please select your gender";
        return false;
      }
      var br = document.forms["form"]["branch"].value;
      if (br == "") {
        document.getElementById("errormsg").innerHTML = "Please select your branch";
        return false;
      }
      var x = document.forms["form"]["username"].value;
      if (x.length == 0) {
        document.getElementById("errormsg").innerHTML = " username must be filled out.";
        return false;
      }
      
      if (x.length < 4) {
        document.getElementById("errormsg").innerHTML = "Username must be at least 4 characters long";
        return false;
      }
     
      var m = document.forms["form"]["phno"].value;
      if (m.length != 10) {
        document.getElementById("errormsg").innerHTML = "Phone number must be 10 digits long";
        return false;
      }
      if (m.length < 10) {
        document.getElementById("errormsg").innerHTML = "Passwordr must be 12 digits long";
        return false;
      }
     
     
      
      var a = document.forms["form"]["password"].value;
      if (a == null || a == "") {
        document.getElementById("errormsg").innerHTML = "Password must be filled out";
        return false;
      }
      if (a.length < 4 || a.length > 15) {
        document.getElementById("errormsg").innerHTML = "Passwords must be 4 to 15 characters long.";
        return false;
      }
      var b = document.forms["form"]["cpassword"].value;
      if (a != b) {
        document.getElementById("errormsg").innerHTML = "Passwords must match.";
        return false;
      }
    }
  </script>
</head>

<body background-size: 300px 100px;>
  <div class="header">
    <div class="row">
      <div class="col-lg-6">

        <span class="logo"><img src="http://localhost/A-Online-Quiz-Site/image/icem.jpg" align="left" width="90" height="70">ICEM QUIZ TEST</span>
      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      <a href="#" class="btn btn-primary logb" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Login </b> </span></a>

      <a href="#" class="btn btn-success logb" data-toggle="modal" data-target="#login"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Admin Login </b> </span></a>
 <div class="col-md-2 col-md-offset-4">
      

      </div>
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content title1">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title title1"><span style="color:darkblack;font-size:22px;font-weight: bold">Login</span></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                <fieldset>
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="username"></label>
                    <div class="col-md-6">
                      <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="username" name="username" placeholder="Username" class="form-control input-md" type="username">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">

                    <label class="col-md-3 control-label" for="password"></label>
                    <div class="col-md-6" ;>
                      <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
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
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg1">

    <div class="row">

      <div class="col-md-7">
        <br>
        <br>
        <br>
        <br>

        <div id="carousel-example-generic" class="carousel slide carousel-bg" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>

          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
          <div class="bg1 item active" style="background-image: url('http://localhost/A-Online-Quiz-Site/image/2.png'); background-repeat: no-repeat;
   background-size: 50% 100%;">

            </div>
            <div class="bg1 item " style="background-image: url('http://localhost/A-Online-Quiz-Site/image/1.jpg');background-repeat: no-repeat;background-size:45% 100%">

            </div>
            <div class="bg1 item" style="background-image: url('http://localhost/A-Online-Quiz-Site/image/indirabg.jpeg');">

            </div>
            
            <div class="bg1 item" style="background-image: url('http://localhost/A-Online-Quiz-Site/image/bgimg1.jpeg'); 
   background-size: 100% 60%;">

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 panel">
        <form class="form-horizontal " name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
          <fieldset>
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <h3 align="center"><i class="glyphicon glyphicon-education"></i>&nbsp;&nbsp;
                  Registration Form</h3>


              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red"><?php
                                                                                                            if (@$_GET['q7']) {
                                                                                                              echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
                                                                                                            }
                                                                                                            ?></div>

              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> <input id="name" name="name" placeholder="Enter your name"  class="form-control input-md" type="text" value="<?php
                                                                                                                                                                                                                                      if (isset($_GET['name'])) {
                                                                                                                                                                                                                                        echo $_GET['name'];
                                                                                                                                                                                                                                      } ?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="rollno"></label>
              <div class="col-md-12">
                <div class="input-group"><span class="input-group-addon">#<i class=""></i></span>
                  <input id="rollno" name="rollno" placeholder="Enter your Roll no (Ex.811***)" class="form-control input-md" type="text" value="<?php
                                                                                                                                                        if (isset($_GET['rollno'])) {
                                                                                                                                                          echo $_GET['rollno'];
                                                                                                                                                        } ?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="gender"></label>
              <div class="col-md-12">
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select id="gender" name="gender" placeholder="Select your gender" class="form-control input-md">
                    <option value="" <?php
                                      if (!isset($_GET['gender']))
                                        echo "selected";
                                      ?>>Select Gender</option>
                    <option value="M" <?php
                                      if (isset($_GET['gender'])) {
                                        if ($_GET['gender'] == "M")
                                          echo "selected";
                                      }
                                      ?>>Male</option>
                    <option value="F" <?php
                                      if (isset($_GET['gender'])) {
                                        if ($_GET['gender'] == "F")
                                          echo "selected";
                                      }
                                      ?>>Female</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="branch"></label>
              <div class="col-md-12">
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select id="branch" name="branch" placeholder="Select your branch" class="form-control input-md">
                    <option value="" <?php
                                      if (!isset($_GET['branch']))
                                        echo "selected";
                                      ?>>Select Branch</option>
                    <option value="CSE" <?php
                                        if (isset($_GET['branch'])) {
                                          if ($_GET['branch'] == "MCA1")
                                            echo "selected";
                                        }
                                        ?>>MCA 1st YEAR</option>
                    <option value="MCA1" <?php
                                          if (isset($_GET['branch'])) {
                                            if ($_GET['branch'] == "MCA2")
                                              echo "selected";
                                          }
                                          ?>>MCA 2nd YEAR</option>
                    <option value="MCA2" <?php
                                          if (isset($_GET['branch'])) {
                                            if ($_GET['branch'] == "MBA1")
                                              echo "selected";
                                          }
                                          ?>>MBA 1st YEAR</option>
                    <option value="MBA1" <?php
                                          if (isset($_GET['branch'])) {
                                            if ($_GET['branch'] == "MBA2")
                                              echo "selected";
                                          }
                                          ?>>MBA 2nd YEAR</option>
                  </select>
                  </input>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label title1" for="username"></label>
              <div class="col-md-12">
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="username" name="username" placeholder="Username"   class="form-control input-md" type="username" value="<?php
                                                                                                                                        if (isset($_GET['username'])) {
                                                                                                                                          echo $_GET['username'];
                                                                                                                                        };
                                                                                                                                        ?>" style="<?php
                                                                                                                                                    if (isset($_GET['q7']))
                                                                                                                                                      echo "border-color:red";
                                                                                                                                                    ?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="phno"></label>
              <div class="col-md-12">
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input id="phno" name="phno" placeholder="Enter your mobile number" class="form-control input-md" type="number" value="<?php
                                                                                                                                          if (isset($_GET['phno'])) {
                                                                                                                                            echo $_GET['phno'];
                                                                                                                                          }
                                                                                                                                          ?>">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for="password"></label>
              <div class="col-md-12">
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12control-label" for="cpassword"></label>
              <div class="col-md-12">
                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12 control-label" for=""></label>
              <div class="col-md-12" style="text-align: center">
                <input type="submit" value=" Register Now " class="btn btn-primary" style="text-align:center" /></br></br>
                <p>Already have an Account ?  <a href="#" data-toggle="modal" data-target="#myModal" > Sign in.</a></p>                                                                                                               </br>
              </div>
            </div>

          </fieldset>
        </form>
      </div>
    </div>
  </div>
  </div>
  


    <div class="col-md-2 box">


      <div class="modal fade" id="login">
        <div class="modal-dialog modal-dialog-centered">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>

          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title"><span style="color:darkblack;font-size:22px;font-weight: bold">Admin Login</span></h4>
            </div>
            <div class="modal-body title1">
              <div class="row">
                
                <div class="col-md-3"></div>
                <div class="col-md-6">
                  <form role="form" method="post" action="admin.php?q=index.php">
                    <div class="form-group">
                      <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="uname" maxlength="20" placeholder="Username" class="form-control" />
                      </div>
                      <div class="form-group">
                        &nbsp;
                        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input type="password" name="password" maxlength="30" placeholder="Password" class="form-control" />
                        </div>
                        &nbsp;
                        <hr>
                        <div class="form-group" align="center">

                          <input type="submit" name="login" value="Login" class="btn btn-primary" />
                        </div>
                  </form>
                </div>
                <div class="col-md-3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>

</html>