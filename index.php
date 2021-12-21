<?php
  session_start();
  if(isset($_SESSION['UserID']))
  {
      

?>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>NMCS</title>
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png"> -->
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


    <?php
                                    include "Master.php";
                                    $sql = "select COUNT(umrno) FROM patient";
                                    $result = mysqli_query($conn,$sql);
                                    $row = mysqli_fetch_array($result);

                                    $patient = $row[0];
                                    ?>
                                    <?php
                                    include "Master.php";
                                    $sql = "select COUNT(umrno) FROM patient where Scheme = 'ANC'";
                                    $result = mysqli_query($conn,$sql);
                                    $row = mysqli_fetch_array($result);

                                    $ANC = $row[0];
                                    ?>
                                    <?php
                                    include "Master.php";
                                    $sql = "select COUNT(umrno) FROM patient where Scheme = 'Non - ANC'";
                                    $result = mysqli_query($conn,$sql);
                                    $row = mysqli_fetch_array($result);

                                    $NonANC = $row[0];
                                    ?>
                                    <?php
                                    include "Master.php";
                                    $sql = "select COUNT(umrno) FROM child";
                                    $result = mysqli_query($conn,$sql);
                                    $row = mysqli_fetch_array($result);

                                    $child = $row[0];
                                    $tot = $ANC + $NonANC;
                                    $ancgraph = ($ANC*100)/$tot;
                                    $nonancgraph = ($NonANC*100)/$tot;
                                    ?>
    <?php

 $dataPoints = array( 
     //array("label"=>"Patients Registered", "y"=>$patient),
     array("label"=>"ANC Patients", "y"=>$ancgraph),
     array("label"=>"Non-ANC Patients", "y"=>$nonancgraph)
     //array("label"=>"Child Delivery", "y"=>$child)
 )
  
 ?>
    <script>

    window.onload = function() {
 
 
 var chart = new CanvasJS.Chart("chartContainer", {
     theme: "light2",
     animationEnabled: true,
     title: {
         text: "NMCS Report"
     },
     data: [{
         type: "pie",
         indexLabel: "{y}",
         yValueFormatString: "#,##0.00\"%\"",
         indexLabelPlacement: "inside",
         indexLabelFontColor: "#36454F",
         indexLabelFontSize: 18,
         indexLabelFontWeight: "bolder",
         showInLegend: true,
         legendText: "{label}",
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
  
 }
 </script>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                   
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/2.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/form-user.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        
                                        
                                        
                                       <li><a href='logout.php'><i class='icon-key'></i> <span>Logout</span></a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php
        include "sidebar.php";
        ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                            <a href="patienttable.php">
                                <h3 class="card-title text-white">Total Number of Patients</h3> 
                                <div class="d-inline-block">
                                    <h2 class="text-white">
                                    <?php
                                    include "Master.php";
                                    $sql = "select COUNT(umrno) FROM patient";
                                    $result = mysqli_query($conn,$sql);
                                    $row = mysqli_fetch_array($result);

                                    echo $row[0];
                                    ?>
                                    </h2>
                                    <!-- <p class="text-white mb-0">Jan - March 2019</p> -->
                                </div>
                                <!-- <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>-->
                                </a>
                           
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                            <a href="anctable.php">
                                <h3 class="card-title text-white">Total ANC Patients</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">
                                    <?php
                                    include "Master.php";
                                    $sql = "select COUNT(umrno) FROM patient where Scheme = 'ANC'";
                                    $result = mysqli_query($conn,$sql);
                                    $row = mysqli_fetch_array($result);

                                    echo $row[0];
                                    ?>
                                    </h2>
                                    <!-- <p class="text-white mb-0">Jan - March 2019</p> -->
                                </div>
                                <!-- <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span> -->
                                </a>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                            <a href="nonanctable.php">
                                <h3 class="card-title text-white">Total Non - ANC Patients</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">
                                    <?php
                                    include "Master.php";
                                    $sql = "select COUNT(umrno) FROM patient where Scheme = 'Non - ANC'";
                                    $result = mysqli_query($conn,$sql);
                                    $row = mysqli_fetch_array($result);

                                    echo $row[0];
                                    ?>
                                    </h2>
                                    <!-- <p class="text-white mb-0">Jan - March 2019</p> -->
                                </div>
                                <!-- <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span> -->
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                            <a href="childtable.php">
                                <h3 class="card-title text-white">Total Number of Child Delivery</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">
                                    <?php
                                    include "Master.php";
                                    $sql = "select COUNT(umrno) FROM child";
                                    $result = mysqli_query($conn,$sql);
                                    $row = mysqli_fetch_array($result);

                                    echo $row[0];
                                    ?>
                                    </h2>
                                    <!-- <p class="text-white mb-0">Jan - March 2019</p> -->
                                </div>
                                <!-- <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span> -->
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
				</div>
          
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
     <?php
include "footer.php";
     ?>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>


 

</body>

</html>



<?php

}
else 
{
   header("Location:login.php");
}
?>