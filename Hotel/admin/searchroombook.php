<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    <li>
                        <a href="searchroombook.php"><i class="fa fa-search"></i>Search Room Booking</a>
                    </li>
                    <li>
                        <a href="messages.php"><i class="fa fa-desktop"></i> News Letters</a>
                    </li>
					<li>
                        <a href="roombook.php"><i class="fa fa-bar-chart-o"></i> Room Booking</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <small>Search Room Booking</small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            SEARCH BOOKING
                        </div>
                        <div class="panel-body">
                        <form name="form" method="post">
                            <div class="form-group">
                                            <label>Booking Code</label>
                                            <input name="bcode" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>Identity Number</label>
                                            <input name="idnumb" class="form-control" required>
                               </div>
                               <input type="submit" name="submit" class="btn btn-primary">
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-info">
                    <div class="panel-heading">
                           Booking Detail
                    </div>
                    <div class="table-responsive">
                    <table class="table">
                    <?php
                    include 'encrypted.php';
                    include 'db.php';
                    if(isset($_POST['submit']))
                    {
                        $bcoder = $_POST['bcode'];
                        $idnumbr = $_POST['idnumb'];
                        $bcodee = my_simple_crypt( $bcoder, 'e' );
                        $idnumbe = my_simple_crypt( $idnumbr, 'e' );
                        $bcode = mysqli_real_escape_string($con, $bcodee);
                        $idnumb = mysqli_real_escape_string($con, $idnumbe);

                        $qry = mysqli_query($con, "select * from roombook where kodepemesanan = '$bcode' AND identitynumber = '$idnumb'");
                        if(mysqli_num_rows($qry) > 0)
                        {
                            while($data = mysqli_fetch_assoc($qry)){
                            echo"<tr>";
                            echo"<th>Name</th>";
                            echo"<th>".$data['Title'].' '.$data['FName'].' '.$data['LName']."</th>";
                                            
                            echo"</tr>";
                            echo"<tr>";
                            echo"                <th>Email</th>";
                            echo"                <th>".$data['Email']."</th>";
                                            
                            echo"            </tr>";
                            echo"            <tr>";
                            echo"                <th>Nationality </th>";
                            echo"                <th>".$data['National']."</th>";
                                            
                            echo"            </tr>";
                            echo"            <tr>";
                            echo"                <th>Country </th>";
                            echo"                <th>".$data['Country']."</th>";
                                            
                            echo"            </tr>";
                            echo"            <tr>";
                            echo"                <th>Identity No </th>";
                            echo"                <th>".my_simple_crypt($data['identitynumber'],'d')."</th>";
                                            
                            echo"            </tr>";
                            echo"            <tr>";
                            echo"                <th>Phone No </th>";
                            echo"                <th>".$data['Phone']."</th>";
                                            
                            echo"            </tr>";
                            echo"            <tr>";
                            echo"                <th>Type Of the Room </th>";
                            echo"                <th>".$data['TRoom']."</th>";
                                            
                            echo"            </tr>";
                            echo"            <tr>";
                            echo"                <th>Meal Plan </th>";
                            echo"                <th>".$data['Meal']."</th>";
                                            
                            echo"            </tr>";
                            echo"            <tr>";
                            echo"                <th>Check-in Date </th>";
                            echo"                <th>".$data['cin']."</th>";
                                            
                            echo"            </tr>";
                            echo"            <tr>";
                            echo"                <th>Check-out Date</th>";
                            echo"                <th>".$data['cout']."</th>";
                                            
                            echo"            </tr>";
                            echo"            <tr>";
                            echo"                <th>No of days</th>";
                            echo"                <th>".$data['nodays']."</th>";
                                            
                            echo"            </tr>";
                            echo"            <tr>";
                            echo"                <th>Status Level</th>";
                            echo"                <th>".$data['stat']."</th>";
                                            
                            echo"            </tr>";
                            echo"            <tr>";
                            echo"            <th>";
                            echo"           <a href='roombook.php?rid=".$data['id']."' class='btn btn-primary'>Action</a>";
                            echo"           </th>";
                            echo"            </tr>";
                            }
                        }
                        else
                        {
                            echo"            <tr>";
                            echo"            <th>";
                            echo"           There is no Data";
                            echo"           </th>";
                            echo"            </tr>";

                        }

                    }
                    ?>
                    </table>
                </div>
                </div>
                </div>
            </div>
            
			
				<!-- DEOMO-->
				<!--DEMO END-->
				
										
                    

                <!-- /. ROW  -->
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

</body>

</html>