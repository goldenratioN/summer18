<?php

	$g_f_name = $_POST['givenFirstName'];
	$g_l_name = $_POST['givenLastName'];
	$g_age = $_POST['givenAge'];
	$g_address = $_POST['givenAddress'];

	// post method use kore data niye aslam


	// databse connect code start
	// university databse name
	$db = mysqli_connect("localhost","root","","university");

	if($db){
		echo "databse connect hoyce ! <br>";
	}else{
		echo "databse connect hoy nai ! <br>";
	}
	// databse connect code end


	// registration code start
	// exam is table name
	// first_name,last_name,age,address egula column name

	$query = "insert into exam(first_name,last_name,age,address) values('$g_f_name','$g_l_name','$g_age ','$g_address')";

	$reg_ok = mysqli_query($db,$query);
	if($reg_ok ){

		echo "registration hoyce ! <br>";
	}else{
		echo "registration hoy nai ! <br>";
	}
	// registration code end


	// update code start
	$up_query = "update exam set first_name = 'Sabbir', last_name = 'Khan', age = 15 where first_name = 'Noman'";

	$up_ok = mysqli_query($db,$up_query);

	if($up_ok){
		echo "update hoyce <br>";
	}else{
		echo "update hoy nai <br>";
	}

	// update code end

?>