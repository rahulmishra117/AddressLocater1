<!-- <?php

// $username=$POST["username"];
// $password=$POST["password"];

// $username=stripcslashes("$username");
// $password=stripcslashes("$password");

// $username=mysql_real_escape_string("$username");
// $password=mysql_real_escape_string("$password");

// mysql_connect("localhost","root","");
// mysql_select_db(log-in_locater);


// $result=mysql_query("select * from user where username="$username" and password="$password");
//         or die("Failed to connect the data base".mysql_error());

//         $row =mysql_fetch_array($result);
//         if($row['$username']==$username && $row['$password']==$password){
//         echo "Login sucessfull!!".$row['$username'];
//       }else{
//       echo "Login is not sucessfull".$row['$username'];
//     }


// ?> -->


<!doctype html>
<html lang="en">
  <head>
    <script src="http://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Css of following login page-->
    <style type="text/css">
                                  @import url('https://fonts.googleapis.com/css?family=Numans');

                        html,body{
                        background-image: url('981.jpg');
                        background-size: cover;
                        background-repeat: no-repeat;
                        height: 100%;
                        font-family: 'Numans', sans-serif;
                        }

                        .container{
                        height: 100%;
                        align-content: center;
                        }

                        .card{
                        height: 370px;
                        margin-top: auto;
                        margin-bottom: auto;
                        width: 400px;
                        background-color: rgba(0,0,0,0.5) !important;
                        }

                        .social_icon span{
                        font-size: 60px;
                        margin-left: 10px;
                        color: #EB2A90;
                        }

                        .social_icon span:hover{
                        color: white;
                        cursor: pointer;
                        }

                        .card-header h3{
                        color: white;
                        }

                        .social_icon{
                        position: absolute;
                        right: 20px;
                        top: -45px;
                        }

                        .input-group-prepend span{
                        width: 50px;
                        background-color: #EB2A90;
                        color: black;
                        border:0 !important;
                        }

                        input:focus{
                        outline: 0 0 0 0  !important;
                        box-shadow: 0 0 0 0 !important;

                        }

                        .remember{
                        color: white;
                        }

                        .remember input
                        {
                        width: 20px;
                        height: 20px;
                        margin-left: 15px;
                        margin-right: 5px;
                        }

                        .login_btn{
                        color: black;
                        background-color: #EB2A90;
                        width: 100px;
                        }

                        .login_btn:hover{
                        color: black;
                        background-color: white;
                        }

                        .links{
                        color: white;
                        }

                        .links a{
                        margin-left: 4px;
                        }






    </style>

   
  </head>
  <body>
    <!--code for log-in page-->
              <body>
            <div class="container">
              <div class="d-flex justify-content-center h-100">
                <div class="card">
                  <div class="card-header">
                    <h3>Sign In</h3>
                    <div class="d-flex justify-content-end social_icon">
                      <span><i class="fab fa-facebook-square"></i></span>
                      <span><i class="fab fa-google-plus-square"></i></span>
                      <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                  </div>
                  <div class="card-body">
                    <form action="Log-in Locater .php" method="POST">
                      <div class="input-group form-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="username" name="username">
                        
                      </div>
                      <div class="input-group form-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="password" name="password">
                      </div>
                      <div class="row align-items-center remember">
                        <input type="checkbox">Remember Me
                      </div>
                      <div class="form-group">
                    <center><button type="submit" class="btn btn-success" id="login"style="background-color: green" >Log in</button></center>
                     
                      </div>
                    </form>
                  </div>
                  <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                      Don't have an account?<a href="Singup.php">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                      <a href="">Forgot your password?</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

















            <div class="spinner-border" role="status">
          <span class="sr-only">Loading...</span>
        </div>
            <script type="text/javascript">
              document.getElementById("login").onclick=function(){
                swal("Log in sucessfully !", "You should Choose the  medium", "success");
              }
            </script>
  </body>
</html>