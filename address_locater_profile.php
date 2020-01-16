<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="node_modules/sweetalert2/dist/sweetalert2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script type="text/javascript" src="sourse.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="http://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title></title>
    <!-- GoogleTagMannger -->
         




  <style type="text/css">
body {
  width: 100%;
  float: left;
}

.class1,
.class2,
.class3 {
  width: 33.33%;
  float: left;
  height: 800px;
}

p {
  padding-top: 25px;
  text-align: center;
}
        /*this is css file for user profile*/
                        .card {
                  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                  max-width: 300px;
                  margin: auto;
                  text-align: center;
                  font-family: arial;
                }

                .title {
                  color: grey;
                  font-size: 18px;
                }

                button {
                  border: none;
                  outline: 0;
                  display: inline-block;
                  padding: 8px;
                  color: white;
                  background-color: #000;
                  text-align: center;
                  cursor: pointer;
                  width: 100%;
                  font-size: 18px;
                }

                a {
                  text-decoration: none;
                  font-size: 22px;
                  color: black;
                }

                button:hover, a:hover {
                  opacity: 0.7;
                }    

                #set-city{
                  width: 207px;
                 
                }
                #set-range{
                  width: 207px;
                  

                }
                #img-logo{
                  height: 70px;
                }
                #start{
                  width: 420px;
                  height: 40px;
                }
                #end{
                  width: 420px;
                  height: 40px;
                }
                #Playstore{
                 
                  width: 200px;
                }
                #ios{
                    
                  width: 200px;
                }


                #map {
                height: 900px;  
                width: 100%; 
                position: absolute;   
                }



                #position{
                  padding-top: 30px;
                  position:absolute;
                }
                #map{
                  width: 895px;
                  padding-right: 400px;
                }
                
                  


                #button-size{
                  width: 50px;
                }
                #Logout{
                    width: 70px;
                    color: 
                }
                #Logout1{
                    width:70px;
                }
                #navtop{
                  color: #960f7e;
                  
                }
                #set-set{
                  padding-top: 10px;
                }
                #top-color{
                    background-color:#960f7e;
                }
                #border{
                  height: 10px;
                }
                #Playstore-and-ios{
                  padding-top: 100px;
                  /*border-top: 5px solid;*/
                  /*border-style: solid;*/
                   /*border-right-width: thin;*/

                }
                #selectbar{
                  width: 420px;
                  height: 250px;
                  padding-top: 3px;
                  border: 2px solid;

                  border-color:#ff05bc;

                }
                #routes{
                  padding-top: 8px;
                }

           /*      #right-panel {
                    float: right;
                    width: 10px;
                    height: 10px;
                  }
                  .panel {
                    height: 10px;
                    overflow: auto;
                  }
                    #right-panel {
                    font-family: 'Roboto','sans-serif';
                    line-height: 30px;
                    padding-left: 10px;
                  }

                  #right-panel select, #right-panel input {
                    font-size: 15px;
                  }

                  #right-panel select {
                    width: 100%;
                  }

                  #right-panel i {
                    font-size: 12px;
                 }

        
*/
                #start{
                  padding-right: 150px;
                }
              /*  #floating-panel{
                  padding-right: 700px;
                  padding-top: 100px;
                }*/
                #buttonformate{
                  width: 180px;
                  height:50px;
                }




                  </style>
                
                
                
                
                
</head>
<body>
        <div id="top-color" >  
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" id="navtop">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/Address_Locater/project%20Btech/address%20-locater_Engine.php">AddressLocater<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/Address_Locater/project%20Btech/Locateraccount.php">Yours Sharing</a>
                </li>
                <li>
                  <a class="nav-link" href="friendlist.php">Freind List</a>
                </li>
                <li>
                  <!-- <div class="custom-select custom-select-lg mb-3" id="set-range">
                    <option selected id="set-range">Set Range</option>
                    <option value="1">5km</option>
                    <option value="2">10km</option>
                    <option value="3">15km</option>
                  </div > -->
                </li>
               
               
                
              </ul>
              <div class="form-inline my-2 my-lg-0">
                
                <button  class="btn btn-outline-success my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal" onclick="passvalue();"><a href="http://localhost/Address_Locater/project%20Btech/address%20-locater_Engine.php">Log Out</a></button>
                
                <p id="demo"></p>
                      <p id="demo1"></p>
                      <p id="demo2"></p>
                      <p id="demo3"></p>
              </div>
            </div>
          </nav>
          </div>





 
  <!--  <div class="container" id="block"> -->
    <!-- <div  style="width: 520px; height: 880px; overflow-y: scroll;"> -->
 <div class="class1" style="">
  <div  style="width: 465px; height: 900px; overflow-y: scroll;">
    <!-- <h2 style="text-align: center">Address Locater</h2> -->
   <!--  <img src="logo.png" id="img-logo"> -->
    <div>
    <!-- <button type="button" class="btn btn-primary btn-lg">Large button</button>
    <button type="button" class="btn btn-secondary btn-lg">Large button</button> -->
              <div class="container" id="set-set"></div>
        <div class="container">
          <!-- for passing datavalue from one page to  another page -->
       <?php
       if(isset($_POST['submit'])){
        $strat=$_POST['start'];
        $end=$_POST['end'];
        $mobileno=$_POST['mobileno'];
       }

       ?>
        <form action="sms.php" method="POST">
          

                 <div class="input-group form-group" id="to">
                    <div class="input-group-prepend">
                      <h2>Starting Point:-</h2>
                     </div>
                    <!-- <input type="text" class="form-control" placeholder="To" id="toplace"> -->
                      
                       <div id="floating-panel"></div>
                         <!-- <strong>Start:</strong> -->
                        <input id="start" type="text" name="start">
                        
                  
                  </div>
                    <br>
                    <div class="input-group form-group" id="form">
                      <div class="input-group-prepend">
                      <h2 >Ending Point:-</h2>
                    </div>
                                <input id="end" type="text" name="end">
                                
                  </div>
                   <div class="input-group form-group" id="form">
                      <div class="input-group-prepend">
                      <h2 >Enter Mobileno:-</h2>
                    </div>
                                <input id="end" type="text" name="mobileno">
                                
                  </div>
                  <div>
                    <h2 >Send Location:- <input id="buttonformate" name="Send Location" type="submit" value="Send"></h2>
                  </div>
                

        </form>
      </div>
      </div>
        <div>  
          <div class="container"> 
                <div class="flex-scrollable">
                <div class="card-deck">
                  <div class="card">
                   <a href=""> <img src="Melbourne_train_logo.svg" class="card-img-top"  alt="..." style="width:70px;height:70px;">
                   </a>
                    
                  </div>
                  <div class="card">
                    <a href=""><img src="Victoria_bus_logo.svg" class="card-img-top"  alt="..." style="width:70px;height:70px;">
                    </a>
                    
                  </div>
                  <div class="card">
                  <a href="">  <img src="download.png" class="card-img-top"  alt="..." style="width:70px;height:70px;">
                   </a>
                   
                  </div>
                </div>
                <div class="card-deck">
                   <div class="card">
                    <a href=""><img src="images.png" class="card-img-top"  alt="..." style="width:70px;height:70px;">
                   </a>
                    
                  </div>
                   <div class="card">
                   <a href=""> <img src="108635866-car-vector-icon-isolated-on-transparent-background-car-logo-concept.jpg" class="card-img-top" id="car" alt="..."  style="width:70px;height:70px;">
                   </a>
                    
                  </div>
                   <div class="card">
                    <a href=""><img src="1614-running-man2.png" class="card-img-top" id="transpotation" alt="..." style="width:70px;height:70px;">
                   </a>
                    
                  </div>
                </div>
              </div>
<!-- for previous history of sharing location -->
            
      </div>
               <div class="container">
                  <div id="routes">
                  <div id="textarea" style="width: 420px; height: 380px; overflow-y: scroll;">
                     <div>
                     
                      <form action="sms.php" method="POST">
                        <div id="right-panel">
                        <p><h2 ><center>Total Distance:</center></h2> <span name="totaldistance" id="total"></span></p>
                     </div>
                   </form>

                      </div>
                  </div>
                     
                    </div>
                  
                  <nav class="collapse bd-links" id="bd-docs-nav"><div class="bd-toc-item">
                  </div>
                </nav>

                  </div>
              </div>






                          <div class="container">
                          <div id="Playstore-and-ios">
                           <a href="page404animation.gif"> <img src="Play-Store-Logo-2.png" id="Playstore"></a>
                           <a href="page404animation.gif"> <img src="Available_on_the_App_Store_(black).png" id="ios"></a>
                          </div>
                        </div>
                          <div style="margin: 24px 0;"><center>
                                <a href="#"><i class="fa fa-dribbble"></i></a> 
                                <a href="#"><i class="fa fa-twitter"></i></a>  
                                <a href="#"><i class="fa fa-linkedin"></i></a>  
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                </center> 

                               <center> <h5>@Address-Locater</h5></center>
                              </div>
                             

        </div>
  </div>

 <!--  </div>
</div> -->
</div>

      <div class="class2">
                  
                   <div class="container" id="map-google">
                          <div id="map"></div>
                    <!--  <div id="right-panel">
                        <p>Total Distance: <span id="total"></span></p>
                     </div> -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>




              <script type="text/javascript">
                      var distanceof;
                // <!-- script for multiple location with location services -->
                
                       function initMap() {
                              var directionsRenderer = new google.maps.DirectionsRenderer;
                              var directionsService = new google.maps.DirectionsService;
                              var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 9,
                                center: {lat: 28.7041, lng: 77.1025}
                              });
                              directionsRenderer.setMap(map);
                              directionsRenderer.setPanel(document.getElementById('right-panel'));

                              var control = document.getElementById('floating-panel');
                              control.style.display = 'block';
                              map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

                              var onChangeHandler = function() {
                                calculateAndDisplayRoute(directionsService, directionsRenderer);
                              };
                              document.getElementById('start').addEventListener('change', onChangeHandler);
                              document.getElementById('end').addEventListener('change', onChangeHandler);
                            }

                        function calculateAndDisplayRoute(directionsService, directionsRenderer) {
                              var start = document.getElementById('start').value;
                              var end = document.getElementById('end').value;
                              directionsService.route({
                                origin: start,
                                destination: end,
                                travelMode: 'DRIVING'
                              }, function(response, status) {
                                if (status === 'OK') {
                                  directionsRenderer.setDirections(response);
                                } else {
                                  window.alert('Directions request failed due to ' + status);

                                }
   
                              });
                
                            }

                             // var marker = new google.maps.Marker({
                             //    position:{lat:28.6692,lng:77.4538}
                             //    icon: 'pin.png',
                             //    map: map
                             //  });






          
             </script>
                         

          


                   
<!-- connected to the javascript page -->
<script type="text/javascript" src="mideum.js"></script>

<!-- <script type="text/javascript">
  
// this is for putting value in the To form when selected into list 
var span=document.getElementById("span");
span.innerHTML=total+"km";
</script> -->


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCm8MBhk4A632P3cDssWnF8wCdQC2WO2LI&callback=initMap"
    async defer></script>



    <script type="text/javascript">
     
      function passvalue(){
        var firstvalue=document.getElementById("start").value;
        localStorage.setItem("text",firstvalue);
        return false;
      }
    </script>

</body>
</html>