<!doctype html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">

    <title>Locater Sharing</title>
    <style type="text/css">
        #Postlocation{
          padding-top: 20px;
        }

        #common{
          width: 300px;
          height: 80px;
        }
        .jumbotron3{
                background-color: #330843;
                height:550px;
                margin-top: -55px;

              }
        #border{
            border-bottom: solid 1px; 
            border-top :solid 1px;
          border-right:solid 1px;
           border-left:solid 1px;
          height: 1010px;
        }
         #loca{
                  font-family: 'Paytone One', sans-serif;
                  font-size:40px;
                  color: #EC2C91;
                  margin-top: 55px;
                  margin-left: 20px

                }

    </style>



  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="http://localhost/Address_Locater/project%20Btech/address%20-locater_Engine.php">AddressLocater</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Your sharing <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="profiluser.php">Your Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="page404animation.gif">Your timeline</a>
                </li>
                
              </ul>
            </div>
          </nav>

          <div class="container">
            <div class="row" id="border">
              <div class="col-6"><h2 >Your Sharing</h2>
              <?php
              if(isset($_POST['name']) && isset($_POST['totaldistance']) &&isset($_POST['starting']) &&isset($_POST['ending']) &&isset($_POST['postlocation'])){
              echo "<h3 >Your status</h3>";
              
              echo $_POST['name']."<br>";
              echo $_POST['totaldistance']."<br>";
              echo $_POST['starting']."<br>";
              echo $_POST['ending']."<br>";
              echo $_POST['postlocation']."<br>";
            
            }

              ?>




              </div>
              <div class="col-6"><h2 id="PostLocation">Post Location</h2>
              <form action="" method="POST">
                <h4>Friend:-</h4></br>
                <input id="common" type="text" name="name"><br><br>

                <h4>Total Distance:-</h4></br>
                <input id="common" type="text" name="totaldistance"><br><br>

                <h4>Starting Point:-</h4></br>
                <input id="common" type="text" name="starting"><br><br>
                
                <h4>Ending Point:-</h4></br>
                <input id="common" type="text" name="ending"><br><br>
                
                <h4>Current Location:-</h4></br>
                <input id="common" type="text" name="postlocation"><br><br>

                <h4>Post Location:-</h4></br>
                <input id="common" type="submit" value="Post Location"><br><br>

              </form>
              </div>
            </div>
          </div>

























<!-- this is footer part of the webpage -->


        
         <div class="jumbotron3">
                          <h1 class="display-4"id="loca">Address-Locater</h1>
                     
                            <div class="container">
                             <div class="row">
                              <div class="col-sm" style="color: #FFFFFF"" border : 3px solid">
                                Address Locater connects and compares<br> your favorite city mobility options and<br> always shows them in real-time.


                              </div>
                              <div class="col-sm" style="color: #FFFFFF">
                               <h3> Address Locater</h3>
                                <ul>
                                  <p>Jobs</p>
                                  <p>Blog</p>
                                  <p>Api</p>
                                  <p>Terms and condition</p>
                                </ul>

                              </div>
                              <div class="col-sm" style="color: #FFFFFF">
                                 <h3>Follow Us</h3>
                                  <ul>
                                    <p>Facebook</p>
                                    <p>Instgram</p>
                                    <p>Linkedin</p>
                                  </ul>
                                </div>
                            </div>


                              <div class="row">
                              <div class="col-sm-6 col-md-5 col-lg-6">
                               <h4 style="color: #FFFFFF"> Name of City the servious provide</h4>
                                <h3 style="color: #FFFFFF">Our city</h3>
                                <ul>
                                
                                 <p style="color: #FFFFFF">Delhi</p>
                                 <p style="color: #FFFFFF">Ghaziabad</p>
                                 <p style="color: #FFFFFF">Lucknow</p> 

                                
                              </ul>
                              </div>
                              <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                                <ul>
                                
                                    <p style="color: #FFFFFF">Gujrat</p>
                                    <p style="color: #FFFFFF">Noida</p>
                                    <p style="color: #FFFFFF">Bihar</p>
                                  
                                </ul>
                              </div>
                            </div>
                            </div>
                              <!-- <p style="color: #FFFFFF">2019 © Address-Locater. All rights reserved.</p>
                              <!-- <p style="color: #FFFFFF">Develop By :RAHUL MISHRA</p> -->
                             <div class="container">
                             <div class="row">
                                <div class="col">
                                  <p style="color: #FFFFFF">2019 © Address-Locater. All rights reserved.</p>
                                </div>
                                <div class="col">
                                  <p style="color: #FFFFFF">Developed By :RAHUL MISHRA</p>
                                  <p style="color: #FFFFFF">contact us : 9984630427</p>
                                </div> 
                              </div>
                              </div>


                        </div> 



    
  </body>
</html>