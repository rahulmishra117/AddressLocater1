<?php
	session_start();
	$link=mysqli_connect("localhost","root","","locaterlogin");
	//mysqli_select_db($link,'locaterlogin');

	if(mysqli_connect_error()){
		print_r(mysqli_connect_error());
		exit();
	}

	include('sharing.php');

	function displayLocation($type){
		echo "$type";
		// global $link;
		// if($type == 'public'){
		// 	$whereClause="";
		// }

		// $query="SELECT * FROM sharelocation".$whereClause."OPDER BY 'datetime' DESC LIMIT 10";
		// $result =mysqli_query($link,$query);
		// if(mysqli_num_rows($result)==0){
		// 	echo "There is no sharing location";
		// }
	}



?>