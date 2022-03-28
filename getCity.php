<?php
if(isset($_POST["country"])){
    // Capture selected country
    $region = $_POST["country"];
     
    

    // Define country and city array
    $city = getCities($region);
     
    // Display city dropdown based on country name
    if($region !== 'Select'){
        echo "<label> City: </label>";
        echo "<select class = city name = 'city'>";
        foreach($city as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    } 
}

function getCities($region){
    include('connection.php');
    include('header.php');

    $query = "SELECT * FROM city where region_id =(SELECT Region_ID FROM region where Region_Name =  '$region')";
    $data = array();
   
           $result = mysqli_query($db, $query) or die (mysqli_error($db));
            while ($row = mysqli_fetch_assoc($result)){
                $data[]= 
                    $row['city_name'];
               
               
            }
       
     
    return $data;
}
?>