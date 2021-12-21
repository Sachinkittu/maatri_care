<?php
 include("Master.php");
?>
<?php
  session_start();
  if(isset($_SESSION['UserID']))
  {
      

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>NMCS</title>
    <!-- Custom Stylesheet -->
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <hr class="my-2">
                                       
                                        <li><a href="logout.php"><i class="icon-key"></i> <span>Logout</span></a></li>
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

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="index.php">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Child Details Table</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>UMR No.</th>
                                                <th>Registrtaion Date</th>
                                                <th>Baby Name</th>
                                                <th>Date Of Delivery</th>
                                                <th>Gender</th>
                                                <th>Mother Name</th>
                                                <th>Father Name</th>
                                                <th>Age</th>
                                                <th>Delivery Status</th>
                                                <th>Weight</th>
                                                <th>Mobile Number</th>
                                                <th>Remarks</th>
                                                <th>Child Ward?</th>
                                                <th>IPD No.</th>
                                                <th>Ward No.</th>
                                                <th>Date Of Admission</th>
                                                <th>Remark Of IPD</th>
                                                <th>Doctor Name</th>
                                                <th>Delivery Location</th>
                                                <th>Date Of Discharge</th>
                                                <th>Diagnosis</th>
                                                <th>Discharge Type</th>
                                                <th>Remark Of Discharge</th>
                                                <th>Birth Vaccine Name</th>
                                                <th>Birth Test Remark</th>
                                                <th>Birth Test Date</th>
                                                <th>6 Week Vaccine Name</th>
                                                <th>6 Week Test Remark</th>
                                                <th>6 Week Test Date</th>
                                                <th>10 Week Vaccine Name</th>
                                                <th>10 Week Test Remark</th>
                                                <th>10 Week Test Date</th>
                                                <th>14 Week Vaccine Name</th>
                                                <th>14 Week Test Remark</th>
                                                <th>14 Week Test Date</th>
                                                <th>6 Month Vaccine Name</th>
                                                <th>6 Month Test Remark</th>
                                                <th>6 Month Test Date</th>
                                                <th>9 Month Vaccine Name</th>
                                                <th>9 Month Test Remark</th>
                                                <th>9 Month Test Date</th>
                                                <th>12 Month Vaccine Name</th>
                                                <th>12 Month Test Remark</th>
                                                <th>12 Month Test Date</th>
                                                <th>15 Month Vaccine Name</th>
                                                <th>15 Month Test Remark</th>
                                                <th>15 Month Test Date</th>
                                                <th>16 Month Vaccine Name</th>
                                                <th>16 Month Test Remark</th>
                                                <th>16 Month Test Date</th>
                                                <th>18 Month Vaccine Name</th>
                                                <th>18 Month Test Remark</th>
                                                <th>18 Month Test Date</th>
                                                <th>2 Year Vaccine Name</th>
                                                <th>2 Year Test Remark</th>
                                                <th>2 Year Test Date</th>
                                                <th>5 Year Vaccine Name</th>
                                                <th>5 Year Test Remark</th>
                                                <th>5 Year Test Date</th>
                                                <th>10 Year Vaccine Name</th>
                                                <th>10 Year Test Remark</th>
                                                <th>10 Year Test Date</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
      <?php
   

    $sql = "SELECT * FROM child";
    $result=mysqli_query($conn,$sql);
 
while($row=mysqli_fetch_array($result))
{
echo "<tr>
<td>".$row[0]."</td>
<td>".$row[1]."</td>
<td>".$row[2]."</td>
<td>".$row[3]."</td>
<td>".$row[4]."</td>
<td>".$row[5]."</td>
<td>".$row[6]."</td>
<td>".$row[7]."</td>
<td>".$row[8]."</td>
<td>".$row[9]."</td>
<td>".$row[10]."</td>
<td>".$row[11]."</td>
<td>".$row[12]."</td>
<td>".$row[13]."</td>
<td>".$row[14]."</td>
<td>".$row[15]."</td>
<td>".$row[16]."</td>
<td>".$row[17]."</td>
<td>".$row[18]."</td>
<td>".$row[19]."</td>
<td>".$row[20]."</td>
<td>".$row[21]."</td>
<td>".$row[22]."</td>
<td>".$row[23]."</td>
<td>".$row[24]."</td>
<td>".$row[25]."</td>
<td>".$row[26]."</td>
<td>".$row[27]."</td>
<td>".$row[28]."</td>
<td>".$row[29]."</td>
<td>".$row[30]."</td>
<td>".$row[31]."</td>
<td>".$row[32]."</td>
<td>".$row[33]."</td>
<td>".$row[34]."</td>
<td>".$row[35]."</td>
<td>".$row[36]."</td>
<td>".$row[37]."</td>
<td>".$row[38]."</td>
<td>".$row[39]."</td>
<td>".$row[40]."</td>
<td>".$row[41]."</td>
<td>".$row[42]."</td>
<td>".$row[43]."</td>
<td>".$row[44]."</td>
<td>".$row[45]."</td>
<td>".$row[46]."</td>
<td>".$row[47]."</td>
<td>".$row[48]."</td>
<td>".$row[49]."</td>
<td>".$row[50]."</td>
<td>".$row[51]."</td>
<td>".$row[52]."</td>
<td>".$row[53]."</td>
<td>".$row[54]."</td>
<td>".$row[55]."</td>
<td>".$row[56]."</td>
<td>".$row[57]."</td>
<td>".$row[58]."</td>
<td>".$row[59]."</td>
<td>".$row[60]."</td>
<td>".$row[61]."</td>
<td><a href='childshowtable.php?id=".$row[0]."'>Edit</a></td>

</tr>";

}

?>
                                            
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="#">NMCS</a> 2020</p>
            </div>
        </div>
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

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>

<?php

}
else 
{
   header("Location:login.php");
}
?>