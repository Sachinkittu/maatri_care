<?php
  session_start();
  if(isset($_SESSION['UserID']))
  {


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title>NMCS</title>
    <link rel="stylesheet" href="img/style.css">
    
</head>
<body>
  
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 header-logo">
    
    <img src="images/NMCS1.jpg" class="img-fluid" alt="Responsive image">
    </div>
        <div class="col-md-10 header-top">
        
        <img src="images/nmcs147.png" class="img-fluid" alt="Responsive image">
        </div>
<!-------------------------Header menu start -->
    </div>

<!------------------ Nav Bar -------------------------------------->
<div class="row">
  <div class="col-md-12">
   <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
   <!----------------<a class="navbar-brand" href="#"><strong>Narayan Maatri Care System</strong>    <!---<img src="image/nmcs.png" width="30" height="30" class="d-inline-block align-top" alt="">-->
    
    
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
     <!----------------<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Patient Detail</a>
          <a class="dropdown-item" href="#">Child Details</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Search</a>
        </div>
      </li>--------->
    </ul>
    <a href="index.php">
    <button class ="btn btn-danger" data-toggle="modal" data-target="#apply_now">HOME</button></a>&nbsp&nbsp&nbsp
    <a href="logout.php">
    <button class ="btn btn-danger" data-toggle="modal" data-target="#apply_now">SIGNOUT</button></a>
  </div>
</nav></div>
</div>
</div></br></br>

<!--------------------------------------Search Bar--------------------------------------->
	<div class="container">
    <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm" action="childdischarge.php" method="POST">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Write UMR No." name="umr">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit" name="search">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>
  
</div>
<!---------------------foooter------------------------------------------->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
  
</body>
</html>

<?php

}
else 
{
   header('Location:login.php');
}
?>