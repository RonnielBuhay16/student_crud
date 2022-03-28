
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  
<body>
   

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
 
 $(document).ready(function(){
    $("select.region").change(function(){
        var selectedCountry = $(".region option:selected").val();
        $.ajax({
            type: "POST",
            url: "getCity.php",
            data: { country : selectedCountry } 
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
                <a class="navbar-brand" href="index.php">Student Information</a>
            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Student Info</a>
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
                           STUDENT INFORMATION
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                  <h2>Add new Student</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="transac.php?action=add">
                            
                            <div class="form-group">
                            <label>First name</label>
                              <input class="form-control" placeholder="First Name" name="firstname">
                            </div>
                            
                            <div class="form-group">
                            <label>Middle name</label>
                              <input class="form-control" placeholder="Middle Name" name="Middlename">
                            </div> 
                            <div class="form-group">
                            <label>Last name</label>
                              <input class="form-control" placeholder="Last Name" name="lastname">
                            </div> 
                            <div class="form-group">
                                <label>Birthday</label>
                              <input class="form-control" type = "date" placeholder="Birthday" name="bday">
                            </div> 
                            <div class="form-group">
                            <label>Address 1</label>
                              <input class="form-control" placeholder="Address 1" name="Add_1">
                            </div> 
                            <div class="form-group">
                            <label>Address 2</label>
                              <input class="form-control" placeholder="Address 2" name="Add_2">
                            </div>
                            <div class="form-group">
                        
                              <table>
        <tr>
            <td>
           
            
                <label>Region:</label>
                <select class="region" name = "region">
                <option value = "">Please Select Region </option>
                              <?php 
               $query = 'SELECT * FROM region';
               $result = mysqli_query($db, $query) or die (mysqli_error($db));
                while ($row = mysqli_fetch_assoc($result)):; 
            ?>  
                <option value="<?php echo $row["Region_Name"];
                    
                ?>">
                    <?php echo $row["Region_Name"];
                        // To show the category name to the user
                    ?>
                </option>
                
            <?php 
                endwhile; 
                // While loop must be terminated
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
                           <div>
                              
                           </div>
                            <button type="submit" class="btn btn-default">Save Student</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


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

