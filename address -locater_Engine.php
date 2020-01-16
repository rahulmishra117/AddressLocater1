<!doctype html>
<html lang="en">
  <head>
     <!--font-link -->
      <script src="http://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <style type="text/css">
              .jumbotron1{
                background-image: url(792.jpg);
                height: 700px;
                margin-top: -20px;
              }
              .jumbotron2{
               background-color:#850467;
               height: 400px; 
                
              }
              .jumbotron3{
                background-color: #330843;
                height:500px;
                margin-top: -55px;

              }
              .jumbotron4{
                height: 550px;
                margin-top: 70px;
                background-color: #700186;
                margin-bottom: 120px;

              }
              #find{
                  font-family: 'Paytone One', sans-serif;
                  font-size:40px;
                  color: #EC2C91;
                  margin-left: 15px;
                  margin-top: 20px;
              }

              #find1{
                color:#FFFFFF;
                margin-left: 15px;
                  margin-top: 20px;
              }
              #find3{
                margin-left: 15px;
                  margin-top: 20px;
              }
              #allcard{
                margin-top: 15px;
              }
              #too1{
                margin-top: 180px;
              }
              #own{
                  font-family: 'Paytone One', sans-serif;
                  font-size:40px;
                  color: #EC2C91;
                  margin-top: 70px;
                  text-align: center;
                  color:#fc05a6;
                }
                #own1{
                  color: #FFFFFF;
                  text-align: center;
                }
                #own2{
                  text-align: center;
                }
                #loca{
                  font-family: 'Paytone One', sans-serif;
                  font-size:40px;
                  color: #EC2C91;
                  margin-top: 55px;
                  margin-left: 20px

                }
                #but{
                  margin-top: 10px;
                  color: #FFFFFF;
                }
                #public{
                  font-family: 'Paytone One', sans-serif;
                  font-size:40px;
                  margin-top: 40px;
                  margin-bottom: 70px;
                }
                #public2{
                  font-family: 'Paytone One', sans-serif;
                  font-size:40px;
                  margin-top: 60px;
                  margin-bottom: 40px;
                }
                #public4{
                  font-family: 'Paytone One', sans-serif;
                  font-size:40px;
                  margin-bottom: 300px;
                }
                #img12{
                  height: 500px;
                  width: 350px;
                  
                  padding-bottom: 80px;
                }
                #words{
                  font-family: 'Paytone One', sans-serif;
                  font-size:40px;
                  /*margin-left: 700px;*/
                  color: #FFF;
                  text-align: center;
                  color: #f5075e;

                }
                #words2{
                	text-align: center;
                  /*margin-left: 700px;*/
                  margin-top: 40px;
                  color: #FFF;
                }
                #public5{
                  font-size: 20px;
                  font-family: 'Nunito Sans', sans-serif;
                }
                /* Center the loader */
                #Peopleimage{
                  width: 300px;
                  height: 300px;
                }
					       #imageformate{
                  height: 500px;
                  padding-top: 10px;
                 }


            </style>
    <title>Address Locater-Engine</title>
  </head>
  <body>  

					  	
            
           <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #73008B">
            <a class="navbar-brand" href="#">Locater-Engine</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/Address_Locater/project%20Btech/address%20-locater_Engine.php" id="Home">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Log-in Locater.php">Log In</a>
                                </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Address_Locater/project%20Btech/address_locater_profile.php">LocaterPoint</a>
                                </li>

                <li class="nav-item dropdown">
                 
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="address_Locater_app.html">App</a>
                    <a class="dropdown-item" href="https://www.google.com/maps/@28.7474387,77.4988752,15z">Search Locarion</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="Log-in Locater.php">Access-Portal</a>
                  </div>
                </li>
      
                  </ul>
                  <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form> -->
                </div>
              </nav>            
        

            <!--first section of the web page-->
             <div class="jumbotron1">
                  <h1 class="display-4"id ="find">Own the journey</h1>
                  <p class="lead" id="find1">The technology to deliver mobility services at scale is already here.<br> Our mission is to make mobility services the first choice worldwide.<br> We help the leading transportation providers to bring it to the <br>masses and own the journey..</p>
                  <hr class="my-4">
                  <button type="submit" class="btn btn-success" id="find3" style="background-color: #FF1499">CONTACT</button>
             </div>

             <!--About the address locater-->
                  <div class="container text-center"id="public">
                    <div class="cal-lg-4 col-lg-offset-4">
                      <i class="fa-fa-heart"></i>
                      <p>Powering leading mobility <br>companies & cities</p>
                    </div>
                  </div>
                    <div class="container"id="allcard">
                     <div class="card-deck">
                    <div class="card">
                      <img src="aerial-2178705_1920.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Traffic Analytics</h5>
                        <p class="card-text">Find the best route of travling also check to avoid the traffic.</p>
                        <button type="submit" class="btn btn-success" style="background-color: #FFF" ><a href="traffic.php">SEEMORE</a></button>
                      
                      </div>
                    </div>
                    <div class="card">
                      <img src="locomotive-60539_1920.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Find Train</h5>
                        <p class="card-text">Best way to find the new and faster train and share their location and also she new AR train mode.</p>
                        <button type="submit" class="btn btn-success" style="background-color: #FFF" ><a href="train.php">SEEMORE</a></button>
                      
                       
                      </div>
                    </div>
                    <div class="card">
                      <img src="street-599202_1920.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Bicycle-travel</h5>
                        <p class="card-text">This is a new way to find the best root of travling through biycle .Search best way and share location with anybody </p>
                          <button type="submit" class="btn btn-success" style="background-color: #FFF" ><a href="Bicycle.php">SEEMORE</a></button>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <!--second information of address locater-->
                <div class="container text-center">
                    <div class="cal-lg-4 col-lg-offset-4">
                      <i class="fa-fa-heart"></i>
                      <p id="public2">Full platform capabilities</p>
                      <p>Our platform combines all mobility options to work as a single solution</p>
                    </div>
                  </div>


                <div class="container" id="too1">
                  <div class="card-group">
                        <div class="card">
                          <img src="325245-P9JJEK-209.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Public transport</h5>
                            <p class="card-text">Integrate, enhance and manage public transport information, ETA predictions and ticketing solutions.</p>
                            
                          </div>
                        </div>
                        <div class="card">
                          <img src="182895-OX3LMK-601.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Transport operations</h5>
                            <p class="card-text">Operate and manage all types of ondemand fleets with our tailor made operation management solutions.</p>
                            
                          </div>
                        </div>
                        <div class="card">
                          <img src="117064-OPGZ6K-497.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Routing</h5>
                            <p class="card-text">Provide personalized multimodal routing suggestions that combine  all transport types, based on real time city movement data and personal preferences.</p>
                            
                          </div>
                        </div>
                      </div>
                         <div class="card-group">
                        <div class="card">
                          <img src="OAV9EA0.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">On-demand service</h5>
                            <p class="card-text">Integrate any type of on demand service from electric scooters to vehicle pooling using Trafi’s on-demand management modules..</p>
                           
                          </div>
                        </div>
                        <div class="card">
                          <img src="158187-OVD8K6-38.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">User and payments</h5>
                            <p class="card-text">Allow your customers to register and pay for all mobility services with one account only. Choose  from various pricing models to build a business case for your service.</p>
                           
                          </div>
                        </div>
                        <div class="card">
                          <img src="3277.jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">App white label</h5>
                            <p class="card-text">Allow your customers to register and pay for all mobility services with one account only. Choose  from various pricing models to build a business case for your service</p>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  <!-- this is approch of the product -->
                   <div class="jumbotron4">
                  <div class="container">
                  <div class="row">
                    <div class="col">
                      <img id="imageformate" src="59c9369badda34000133eb32_img-iphone-transports-p-500 (1).png">
                    </div>
                    <div class="col">
                          <!--this related program of approcah-->
                   
                          <h1 class="display-4" id="words">Our approach</h1>
                          <p class="lead" id="words2">The Adress-Locater mobility platform is a result of our ongoing <br>experience of running and developing mobility services We have operated the Address Locater mobility service for eleven years<br> Our collected  experience has given us a deep understanding<br> of user needs, urban planning and mobility service as a<br> business By being customers of our own platform, high demands and expectations ensure relentless development<br> where we constantly innovate and improve our technology.</p>
                         
                         <div class="container">
                                       
                            <!-- <img src="59c9369badda34000133eb32_img-iphone-transports-p-500.png" class="img-rounded" id="img12" alt="Cinque Terre" >  -->
                          </div>
                       </div>    



                    </div>
                  </div>
                </div>




                    <!--this related program of approcah-->
                  
                        <!--this is about public speech-->
                        <div class="container text-center"id="public4">
                    <div class="cal-lg-4 col-lg-offset-4">
                      <i class="fa-fa-heart"></i>
                       <img id="Peopleimage"src="59c8e51497139c000118eecc_logo-cover-svg.svg">
                      <p>People are talking</p>
                      <p id="public5">“Partnering with Address-Locater, Lyft brings public transit options to their app.<br> Riders can now choose between different combinations of transport.<br> It's a move to eliminate the issues with the first or last mile”</p>
                    </div>

                  </div>



                    <!--this is related to own journey page program-->
                    <div class="jumbotron2">
                        <h1 class="display-4"id="own">Own the journey</h1>
                        <p class="lead" id="own1">The technology to deliver mobility services at scale is<br> already here. Our mission is to make mobility services the first<br> choice worldwide. We help the leading transportation <br>providers to bring it to the masses and own the journey.</p>
                        
                    <center><a class="btn btn-primary btn-lg" href="#" role="button"style="background-color: #FF1499">Connect</a></center>
                      </div>
                      
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
                                <!-- Name of City the servious provide -->
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
                              <!-- <p style="color: #FFFFFF">2019 © Address-Locater. All rights reserved.</p> -->
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










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript">
      document.getElementById('Home').onclick=function(){
        swal("Want To reload !","This is home page","success");
      }
    </script>
    	
				    











    
  </body>
</html>