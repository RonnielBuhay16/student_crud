<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
			$zz = $_POST['id'];
			$fname = $_POST['firstname'];
		    $lname = $_POST['lastname'];
			$mname = $_POST['Middlename'];
			$add_1 = $_POST['add_1'];
			$add_2 = $_POST['add_2'];
			$bday = $_POST['bday'];
			$region = $_POST['region'];
			$city = $_POST['city'];
	   include('connection.php');
		
	 			$query = 'UPDATE student_info set First_Name ="'.$fname.'",
				 Last_Name ="'.$lname.'", Middle_Name="'.$mname.'",
				 Birthday="'.$bday.'",Address_1="'.$add_1.'", 
					Address_2="'.$add_2.'",Region_ID= '.$region.' ,City_id= (SELECT city_id FROM city where city_name ="'.$city.'") WHERE
					student_id ='.$zz;
					
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>