<!DOCTYPE html>
<html lang="en">


<?php
       
       include('connection.php');
       include('header.php');
       $id = $_GET['id'];
        ?>  
<body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
 
 $(document).ready(function(){
    $("select.region").change(function(){
        var selectedCountry = $(".region option:selected").val();
        var s_id = '<?php echo $id; ?>';
     
        $.ajax({
            type: "POST",
            url: "getCites_update.php",
            data: { country : selectedCountry,id : s_id } 
        }).done(function(data){
            $("#response").html(data);
        });
    });
});

</script>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CRUD Using PHP/MySQL</a>
            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Student Information</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           PHP CRUD <small>Create, Read, Update and Delete</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
<?php 
$query = "SELECT Student_ID,First_Name,Middle_Name,Last_Name,Birthday,Address_1,Address_2,Region_Name,City_Name,student_info.Region_ID FROM `student_info`,city,region WHERE Student_ID = ".$_GET['id']." AND (student_info.Region_ID = region.Region_ID AND student_info.city_id = city.city_id)";
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['Student_ID'];
                $i= $row['First_Name'];
                $a=$row['Last_Name'];
                $b=$row['Middle_Name'];
                $c=$row['Birthday'];
                $d=$row['Address_1'];
                $e=$row['Address_2'];
                $f=$row['Region_Name'];
                $g=$row['City_Name'];
                $r_Id = $row['Region_ID'];
              }
           
             
         
        
?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                            <label>First name</label>
                              <input class="form-control" placeholder="First Name" name="firstname" value="<?php echo $i; ?>">
                            </div>
                            <div class="form-group">
                            <label>Middle name</label>
                              <input class="form-control" placeholder="Middle Name" name="Middlename" value="<?php echo $b; ?>">
                            </div> 
                            <div class="form-group">
                            <label>Lastname</label>
                              <input class="form-control" placeholder="Last Name" name="lastname" value="<?php echo $a; ?>">
                            </div> 
                            
                            <div class="form-group">
                            <label>Birthday</label>
                              <input class="form-control" placeholder="Birthday" name="bday" value="<?php echo $c; ?>">
                            </div> 
                            
                            <div class="form-group">
                            <label>Address 1</label>
                              <input class="form-control" placeholder="Address 1" name="add_1" value="<?php echo $d; ?>">
                            </div> 
                            <div class="form-group">
                            <label>Address 2</label>
                              <input class="form-control" placeholder="Address 2" name="add_2" value="<?php echo $e; ?>">
                            </div>
                            <div class="form-group">
                        
                        <table>
                            <tr>
            <td>
                            <label>Region</label>
                            <select class="region" name = "region">
                              <?php 
                               
               $query = 'SELECT * FROM region';
  function selectdCheck($value1,$value2)
   {
     if ($value1 == $value2) 
     {
      echo 'selected="selected"';
     } else 
     {
       echo '';
     }
     return;
   }
               $result = mysqli_query($db, $query) or die (mysqli_error($db));
                while ($rows= mysqli_fetch_assoc($result)):; 
                
            ?>  
              <option <?php selectdCheck($rows['Region_ID'],$r_Id); ?> value=<?php echo $rows['Region_ID']?>><?php echo $rows['Region_Name']?></option>
                
            <?php 
                endwhile; 
                
            ?>
                </select>
                           
                            
                </td>
           
            
           </tr>
           <tr>
           <td id="response">
              
                   <!--Response will be inserted here-->
               </td>
               </tr>
       </table>
              </div>    
                            <button type="submit" class="btn btn-default">Update Record</button>
                         


                      </form>  
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

