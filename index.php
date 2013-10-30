<?php
ob_start();
session_start();
include "config/connect.php";

if(isset($_POST['submit'])){

  ///get form data and validate before sending to form

    $email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['password']);

   
  /// search database for user credentials
   $login = mysql_query("SELECT * FROM login WHERE email = '".$email."' AND password = '".$password."' ")
                        or die (mysql_error()." Query fail");
    ///post user credentials back!
    ///if user data not avaible post error back

    if($user = mysql_fetch_assoc($login)){
        echo $_SESSION['name'] = $user['firstname'];                  
      }else{
        echo $_SESSION['error'] = "fail to login";
      }
   
  
}


?>




<!DOCTYPE html>
<html>
    <head>
        <title>
          Modal login
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css"> -->
        <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen" type="text/css">
    </head>
    <body>
        <!-- Button to trigger modal -->
        <a href="#myModal" role="button" class="btn " data-toggle="modal">Login</a> 
        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 id="myModalLabel">
                    Sign In..
                </h3>
            </div>
            <div class="modal-body">
                <form class="form-inline" method="POST" action="">
  <input type="email" class="input-small span3" name="email" required placeholder="Email">
  <input type="password" class="input-small span3" name="password" required placeholder="Password">
 
  <input type="submit" name="submit" class="btn" value="Sign In">
                </form>

            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <!-- <button class="btn btn-primary">Save changes</button> -->
            </div>
        </div>




<script src="http://code.jquery.com/jquery.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>



</html>
<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery191.js"><\/script>')</script> 