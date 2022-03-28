<?php
if(isset($_POST["id"])){
    // Capture selected country
    $student_id = $_POST["id"];
    $region = $_POST["country"];
    

    // Define country and city array
    $city = getCities($region);
     $s_city = getSelectedCity($student_id);
     
    // Display city dropdown based on country name
    if($region !== 'Select'){
        echo "<label> City: </label>";
        echo "<select class = city name = 'city'>";
        foreach($city as $value){
            echo "<option ".selectdCheck($value,$s_city)." value = ". $value.">". $value . "</option>";
        }
        echo "</select>";
    } 
}

function getCities($region){
    include('connection.php');
    include('header.php');

    $query = "SELECT * FROM city where region_id ='$region'";
    $data = array();
   
           $result = mysqli_query($db, $query) or die (mysqli_error($db));
            while ($row = mysqli_fetch_assoc($result)){
                $data[]= 
                    $row['city_name'];
               
               
            }
       
     
    return $data;
}
function getSelectedCity($id){
    include('connection.php');
    include('header.php');

    $query = "SELECT * FROM `city` WHERE City_ID = (SELECT city_id from student_info WHERE Student_ID = '$id')";
    $data;
   
           $result = mysqli_query($db, $query) or die (mysqli_error($db));
            while ($row = mysqli_fetch_assoc($result)){
                $data= 
                    $row['city_name'];
               
               
            }
       
     
    return $data;
}
function selectdCheck($value1,$value2)
{
  if ($value1 == $value2) 
  {
   return 'selected="selected"';
  } else 
  {
    return '';
  }

}
?>