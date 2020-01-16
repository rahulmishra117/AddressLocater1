<!DOCTYPE html>
<html>
<head>
	<title>FriendList</title>
	 <link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">
	body{
    margin-top:20px;
    background:#FAFAFA;    
}
/*==================================================
  Nearby People CSS
  ==================================================*/

.people-nearby .google-maps{
  background: #f8f8f8;
  border-radius: 4px;
  border: 1px solid #f1f2f2;
  padding: 20px;
  margin-bottom: 20px;
}

.people-nearby .google-maps .map{
  height: 300px;
  width: 100%;
  border: none;
}

.people-nearby .nearby-user{
  padding: 20px 0;
  border-top: 1px solid #f1f2f2;
  border-bottom: 1px solid #f1f2f2;
  margin-bottom: 20px;
}

img.profile-photo-lg{
  height: 80px;
  width: 80px;
  border-radius: 50%;
}

#addbutton{
	height: 35px;
}

                                    


</style>

</head>
<body>

           <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #73008B">
            <a class="navbar-brand" href="#"><h3>Friend List</h3></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/Address_Locater/project%20Btech/address%20-locater_Engine.php" id="Home">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Address_Locater/project%20Btech/address_locater_profile.php">LocaterPoint</a>
                                </li>

                                <li class="nav-item">
                                 <div class="col-md-3 col-sm-3">
				                    <button class="btn  pull-right" id="addbutton"><a href="addfriendlist.php">AddFriend</a></button>
				                  </div>
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










	<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="people-nearby">
              
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Ankur Purwar</a></h5>
                    <p>CSE </p>
                    <p class="text-muted"><h2>Distance:-</h2>500m away</p>
                  </div>
                  
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Pahul Kalra</a></h5>
                    <p>IT</p>
                    <p class="text-muted"><h2>Distance:-</h2>800m away</p>
                  </div>
                  
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Lakshit Sharma</a></h5>
                    <p>IT</p>
                    <p class="text-muted"><h2>Distance:-</h2>2.5km away</p>
                  </div>
                  
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Rahul Chudhary</a></h5>
                    <p>IT</p>
                    <p class="text-muted"><h2>Distance:-</h2>700m away</p>
                  </div>
                  
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Rahul</a></h5>
                    <p>IT</p>
                    <p class="text-muted"><h2>Distance:-</h2>1.5km away</p>
                  </div>
                  
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Shashank Gupta</a></h5>
                    <p>IT</p>
                    <p class="text-muted"><h2>Distance:-</h2>2km away</p>
                  </div>
                  
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Rahul </a></h5>
                    <p>IT</p>
                    <p class="text-muted"><h2>Distance:-</h2>2km away</p>
                  </div>
                  
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Amit</a></h5>
                    <p>CSE</p>
                    <p class="text-muted"><h2>Distance:-</h2>4km away</p>
                  </div>
                 
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Rajat Mishra</a></h5>
                    <p>IT</p>
                    <p class="text-muted"><h2>Distance:-</h2>3km away</p>
                  </div>
                  
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Vishal</a></h5>
                    <p>IT</p>
                    <p class="text-muted"><h2>Distance:-</h2>1km away</p>
                  </div>
                 
                </div>
              </div>
               <h3> <?php echo $_POST['name']; ?></h3></br>
               <h3><?php echo $_POST['frined'];?></h3></br>
               <h3>"Distance:-"<?php echo $_POST['distance']?></h3>
            </div>
    	</div>
	</div>
</div>



</body>
</html>