<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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

</div>
</body>
</html><br>

<?php
  session_start();
  if(isset($_SESSION['UserID']))
  {


?>

<?php

include("Master.php");
echo "
<link rel='stylesheet' href='css/bootstrap.min.css'>";


if(isset($_POST['submit'])){
	
	$umrno = $_POST['umrno'];
	$sql1 = "Select * from child where umrno = $umrno";
	$result1 = mysqli_query($conn,$sql1);
	$row1=mysqli_num_rows($result1);
	if($row1=='1')
	{
		echo "<h1>This Patient is already registered</h1>";
		exit();
	}
	$RegistrationDate = date('Y-m-d');
	$DateOfDelivery = $_POST['DateOfDelivery'];
	$Gender = $_POST['Gender'];
	$MotherName = $_POST['MotherName'];
	$FatherName = $_POST['FatherName'];
	$Age = $_POST['Age'];
	$Weight = $_POST['Weight'];
	$MobileNumber = $_POST['MobileNumber'];
	$Remarks = $_POST['Remarks'];

	if($_POST['birthvaccine']!=null)
	{
		$birthvaccine = implode(',', $_POST['birthvaccine']);
	}
	else
	{
		$birthvaccine = $_POST['birthvaccine'];
	}
	$birthtestremark = $_POST['birthtestremark'];
	$birthtestdate = $_POST['birthtestdate'];
	if($_POST['sixweekvaccine']!=null)
	{
		$sixweekvaccine = implode(',', $_POST['sixweekvaccine']);
	}
	else
	{
		$sixweekvaccine = $_POST['sixweekvaccine'];
	}
	
	$sixweektestremark = $_POST['sixweektestremark'];
	$sixweektestdate = $_POST['sixweektestdate'];
	if($_POST['tenweekvaccine']!=null)
	{
		$tenweekvaccine = implode(',', $_POST['tenweekvaccine']);
	}
	else
	{
		$tenweekvaccine = $_POST['tenweekvaccine'];
	}
	
	$tenweektestremark = $_POST['tenweektestremark'];
	$tenweektestdate = $_POST['tenweektestdate'];
	if($_POST['fourteenweekvaccine']!=null)
	{
		$fourteenweekvaccine = implode(',', $_POST['fourteenweekvaccine']);
	}
	else
	{
		$fourteenweekvaccine = $_POST['fourteenweekvaccine'];
	}

	$fourteenweektestremark = $_POST['fourteenweektestremark'];
	$fourteenweektestdate = $_POST['fourteenweektestdate'];

    $sql = "INSERT INTO child(umrno,RegistrationDate,DateOfDelivery,Gender,MotherName,FatherName,Age,Weight,MobileNumber,Remarks,birthvaccine,birthtestremark,birthtestdate,sixweekvaccine,sixweektestremark,sixweektestdate,tenweekvaccine,tenweektestremark,tenweektestdate,fourteenweekvaccine,fourteenweektestremark,fourteenweektestdate) VALUES ('$umrno','$RegistrationDate','$DateOfDelivery','$Gender','$MotherName','$FatherName','$Age','$Weight','$MobileNumber','$Remarks','$birthvaccine','$birthtestremark','$birthtestdate','$sixweekvaccine','$sixweektestremark','$sixweektestdate','$tenweekvaccine','$tenweektestremark','$tenweektestdate','$fourteenweekvaccine','$fourteenweektestremark','$fourteenweektestdate')";
	
	$result=mysqli_query($conn,$sql);
	

    if($result)
	{
		echo"
		<div class='card'>
						  <div class='card-body'>
							<h4 class='card-title'>Patient Details</h4>
							<form class='form-sample'>
							  <p class='card-description'> Basic Information </p>
							  <div class='row'>
								<div class='col-md-6'>
								  <div class='form-group row'>
									<label class='col-sm-3 col-form-label'>UMR No.</label>
									<div class='col-sm-9'>
									  <input type='text' value='".$umrno."' disabled class='form-control' />
									</div>
								  </div>
								</div>
								<div class='col-md-6'>
								  <div class='form-group row'>
									<label class='col-sm-3 col-form-label'>Registration Date</label>
									<div class='col-sm-9'>
									  <input type='text' value='".$RegistrationDate."' disabled class='form-control' />
									</div>
								  </div>
								</div>
							  </div>
							  <div class='row'>
								<div class='col-md-6'>
								  <div class='form-group row'>
									<label class='col-sm-3 col-form-label'>Date Of Delivery</label>
									<div class='col-sm-9'>
									<input type='text' value='".$DateOfDelivery."' disabled class='form-control' />
									  
									</div>
								  </div>
								</div>
								<div class='col-md-6'>
								  <div class='form-group row'>
									<label class='col-sm-3 col-form-label'>Gender</label>
									<div class='col-sm-9'>
									  <input class='form-control' value='".$Gender."' disabled />
									</div>
								  </div>
								</div>
							  </div>
							  <div class='row'>
								<div class='col-md-6'>
								  <div class='form-group row'>
									<label class='col-sm-3 col-form-label'>Mother Name</label>
									<div class='col-sm-9'>
									<input class='form-control' value='".$MotherName."' disabled />
									  
									</div>
								  </div>
								</div>
								<div class='col-md-6'>
								<div class='form-group row'>
									<label class='col-sm-3 col-form-label'>Father Name</label>
									<div class='col-sm-9'>
									<input class='form-control' value='".$FatherName."' disabled />
									  
									</div>
								  </div>
								</div>
							  </div>
							  <div class='row'>
							  <div class='col-md-6'>
								<div class='form-group row'>
								  <label class='col-sm-3 col-form-label'>Age</label>
								  <div class='col-sm-9'>
									<input type='text' value='".$Age."' disabled class='form-control' />
								  </div>
								</div>
							  </div>
							  <div class='col-md-6'>
								<div class='form-group row'>
								  <label class='col-sm-3 col-form-label'>Weight</label>
								  <div class='col-sm-9'>
									<input type='text' value='".$Weight."' disabled class='form-control' />
								  </div>
								</div>
							  </div>
							</div>
							<div class='row'>
							  <div class='col-md-6'>
								<div class='form-group row'>
								  <label class='col-sm-3 col-form-label'>Mobile Number</label>
								  <div class='col-sm-9'>
								  <input type='text' value='".$MobileNumber."' disabled class='form-control' />
									
								  </div>
								</div>
							  </div>
							  <div class='col-md-6'>
								<div class='form-group row'>
								  <label class='col-sm-3 col-form-label'>Remarks</label>
								  <div class='col-sm-9'>
									<input class='form-control' value='".$Remarks."' disabled />
								  </div>
								</div>
							  </div>
							</div>
							<div class='row'>
							<div class='col-md-6'>
							  <div class='form-group row'>
								<label class='col-sm-3 col-form-label'>Birth Vaccine</label>
								<div class='col-sm-9'>
								<input type='text' value='".$birthvaccine."' disabled class='form-control' />
								  
								</div>
							  </div>
							</div>
							<div class='col-md-6'>
							  <div class='form-group row'>
								<label class='col-sm-3 col-form-label'>Birth Vaccine Remarks</label>
								<div class='col-sm-9'>
								  <input class='form-control' value='".$birthtestremark."' disabled />
								</div>
							  </div>
							</div>
						  </div>
						  <div class='row'>
						  <div class='col-md-6'>
							<div class='form-group row'>
							  <label class='col-sm-3 col-form-label'>Birth Test Date</label>
							  <div class='col-sm-9'>
							  <input type='text' value='".$birthtestdate."' disabled class='form-control' />
								
							  </div>
							</div>
						  </div>
						  <div class='col-md-6'>
							<div class='form-group row'>
							  <label class='col-sm-3 col-form-label'>6 Week Vaccine </label>
							  <div class='col-sm-9'>
								<input class='form-control' value='".$sixweekvaccine."' disabled />
							  </div>
							</div>
						  </div>
						</div>
						<div class='row'>
						<div class='col-md-6'>
						  <div class='form-group row'>
							<label class='col-sm-3 col-form-label'>6 Week Test Remark</label>
							<div class='col-sm-9'>
							<input type='text' value='".$sixweektestremark."' disabled class='form-control' />
							  
							</div>
						  </div>
						</div>
						<div class='col-md-6'>
						  <div class='form-group row'>
							<label class='col-sm-3 col-form-label'>6 Week Test Date</label>
							<div class='col-sm-9'>
							  <input class='form-control' value='".$sixweektestdate."' disabled />
							</div>
						  </div>
						</div>
					  </div>
					  <div class='row'>
					  <div class='col-md-6'>
						<div class='form-group row'>
						  <label class='col-sm-3 col-form-label'>10 Week Vaccine</label>
						  <div class='col-sm-9'>
						  <input type='text' value='".$tenweekvaccine."' disabled class='form-control' />
							
						  </div>
						</div>
					  </div>
					  <div class='col-md-6'>
						<div class='form-group row'>
						  <label class='col-sm-3 col-form-label'>10 Week Test Remark</label>
						  <div class='col-sm-9'>
							<input class='form-control' value='".$tenweektestremark."' disabled />
						  </div>
						</div>
					  </div>
					</div>
					<div class='row'>
					<div class='col-md-6'>
					  <div class='form-group row'>
						<label class='col-sm-3 col-form-label'>10 Week Test Date</label>
						<div class='col-sm-9'>
						<input type='text' value='".$tenweektestdate."' disabled class='form-control' />
						  
						</div>
					  </div>
					</div>
					<div class='col-md-6'>
					  <div class='form-group row'>
						<label class='col-sm-3 col-form-label'>14 Week Vaccine</label>
						<div class='col-sm-9'>
						  <input class='form-control' value='".$fourteenweekvaccine."' disabled />
						</div>
					  </div>
					</div>
				  </div>
				  <div class='row'>
				  <div class='col-md-6'>
					<div class='form-group row'>
					  <label class='col-sm-3 col-form-label'>14 Week Test Remark</label>
					  <div class='col-sm-9'>
					  <input type='text' value='".$fourteenweektestremark."' disabled class='form-control' />
						
					  </div>
					</div>
				  </div>
				  <div class='col-md-6'>
					<div class='form-group row'>
					  <label class='col-sm-3 col-form-label'>14 Week Test date</label>
					  <div class='col-sm-9'>
						<input class='form-control' value='".$fourteenweektestdate."' disabled />
					  </div>
					</div>
				  </div>
				</div>


							
							 
							</form>
						  </div>
						</div>";
	}
	else
	{
        echo "<h1 style='Color:red;'>Error 404 Not Found</h1>";
	}
}

?>

<?php

}
else 
{
   header('Location:login.php');
}
?>

<br>
<?php 
include "childprint.php";

 ?>
 
 <br>