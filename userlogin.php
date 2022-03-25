<!DOCTYPE html>
<html lang="en">
<head>
  <title>user Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  .body-cont{
      margin-right : 30px;
      margin-left : 30px;
  }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

 
}

    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

  <div class="my-nav"></div>
  <script>
             $(function(){
             $(".my-nav").load("nav.html");
         });
      </script>
<div class="container-fluid text-center body-cont">    
    <div class="container">
        <form class="well form-horizontal" action="" method="post">
            <fieldset>
            
            <!-- Form Name -->
            <legend><center><h2><b>User Login Form</b></h2></center></legend><br>
          <div class="form-group">
            <label class="col-md-4 control-label">Username</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input  placeholder="Username" class="form-control"  type="text" name="username" required>
              </div>
            </div>
          </div>
          
          <!-- Text input-->
          
          <div class="form-group">
            <label class="col-md-4 control-label" >Password</label> 
              <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input  placeholder="Password" class="form-control"  type="password" name="pwd" required>
              </div>
            </div>
          </div>
         
         
         
          <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4"><br>
             
              <button type="submit" class="btn btn-lg btn-warning btn-block" name= "login" >Login</button>

            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4"><br>
              
              <a class="btn btn-lg btn-success btn-block" href="register.php">Register</a>
               
            </div>
          </div>
                
                <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4"><br>
             
              <a class="btn btn-lg btn-success btn-block" href="admin/adminlogin.php">Admin Panel</a>

            </div>
          </div>
        </fieldset>
        </form>
      </div>
</div>




</body>
</html>
<?php

    include_once 'include/sqlConnect.php';
    if(isset($_POST['login'])){
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        
        $loginSql = "SELECT * FROM users WHERE username = '$username' AND upwd = '$pwd'";

        $result = mysqli_query($db, $loginSql);

        if (mysqli_num_rows($result) > 0) {
            session_start();
			$_SESSION['user_id'] = $username;
            header('location:user/index.php');

        }
           
        else{

            $message = 'Wrong id or Password';
            echo "<script type='text/javascript'>alert('$message');window.location.href = 'userlogin.html';</script>";
            
	    }
    }
?>