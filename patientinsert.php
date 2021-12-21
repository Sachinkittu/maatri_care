
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

include("Master.php");
echo "
<link rel='stylesheet' href='css/bootstrap.min.css'>";


if(isset($_POST['submit'])){
	
    $umrno = $_POST['umrno'];
	$sql1 = "Select * from patient where umrno = $umrno";
	$result1 = mysqli_query($conn,$sql1);
	$row1=mysqli_num_rows($result1);
	if($row1=='1')
	{
		echo "<h1>This Patient is already registered</h1>";
		exit();
	}
    $RegistrationDate = date('Y/m/d');
	$PatientName = $_POST['PatientName'];
	$HusbandName = $_POST['HusbandName'];
	$MobileNumber = $_POST['MobileNumber'];
	$Weight = $_POST['Weight'];
	$Age = $_POST['Age'];
	$BloodGroup = $_POST['BloodGroup'];
	$Prebaby = $_POST['Prebaby'];
	$MaritalStatus = $_POST['MaritalStatus'];
	$Village = $_POST['Village'];
	$District = $_POST['District'];
	$PinCode = $_POST['PinCode'];
	$City = $_POST['City'];
	$State = $_POST['State'];
	$ChildTwin = $_POST['ChildTwin'];
	$ChildHeartbeat = $_POST['ChildHeartbeat'];
	$LMP = $_POST['LMP'];
	$EDD = $_POST['EDD'];
	$Scheme = $_POST['Scheme'];
	$patientward = $_POST['patientward'];
	$IPD = $_POST['IPD'];
	$ward = $_POST['ward'];
	$DateOfAdmission = $_POST['DateOfAdmission'];
	$remarkipd = $_POST['remarkipd'];
	$DateOfDischarge = $_POST['DateOfDischarge'];
	$diagnosis = $_POST['diagnosis'];
	$dischargetype = $_POST['dischargetype'];
	$dischargereason = $_POST['dischargereason'];
	$doctor_name1 = $_POST['doctor_name1'];
	if($_POST['FirstMonth']!= null){
	$FirstMonth = implode(',', $_POST['FirstMonth']);}
	else
	{
		$FirstMonth = $_POST['FirstMonth'];
	}
	$remark1 = $_POST['remark1'];
	$DateOfFirst = $_POST['DateOfFirst'];
	$doctor_name2 = $_POST['doctor_name2'];
	if($_POST['SecondMonth']!= null){
	$SecondMonth = implode(',',$_POST['SecondMonth']);}
	else
	{
		$SecondMonth = $_POST['SecondMonth'];
	}
	$remark2 = $_POST['remark2'];
	$DateOfSecond = $_POST['DateOfSecond'];
	$doctor_name3 = $_POST['doctor_name3'];
	if($_POST['ThirdMonth']!= null){
	$ThirdMonth = implode(',',$_POST['ThirdMonth']);}
	else
	{
		$ThirdMonth = $_POST['ThirdMonth'];
	}
	$remark3 = $_POST['remark3'];
	$DateOfThird = $_POST['DateOfThird'];
	$doctor_name4 = $_POST['doctor_name4'];
	if($_POST['FourthMonth']!= null){
	$FourthMonth = implode(',', $_POST['FourthMonth']);}
	else
	{
		$FourthMonth = $_POST['FourthMonth'];
	}
	$remark4 = $_POST['remark4'];
	$DateOfFourth = $_POST['DateOfFourth'];
	$doctor_name5 = $_POST['doctor_name5'];
	if($_POST['FifthMonth']!= null){
	$FifthMonth = implode(',', $_POST['FifthMonth']);}
	else
	{
		$FifthMonth = $_POST['FifthMonth'];
	}
	$remark5 = $_POST['remark5'];
	$DateOfFifth = $_POST['DateOfFifth'];
	$doctor_name6 = $_POST['doctor_name6'];
	if($_POST['SixMonth']!= null){
	$SixMonth = implode(',', $_POST['SixMonth']);}
	else
	{
		$SixMonth = $_POST['SixMonth'];
	}
	$remark6 = $_POST['remark6'];
	$DateOfSix = $_POST['DateOfSix'];
	$doctor_name7 = $_POST['doctor_name7'];
	if($_POST['SevenMonth']!= null){
	$SevenMonth = implode(',', $_POST['SevenMonth']);}
	else
	{
		$SevenMonth = $_POST['SevenMonth'];
	}
	$remark7 = $_POST['remark7'];
	$DateOfSeven = $_POST['DateOfSeven'];
	$doctor_name8 = $_POST['doctor_name8'];
	if($_POST['EightMonth']!= null){
	$EightMonth = implode(',', $_POST['EightMonth']);}
	else
	{
		$EightMonth = $_POST['EightMonth'];
	}
	$remark8 = $_POST['remark8'];
	$DateOfEight = $_POST['DateOfEight'];
	$doctor_name9 = $_POST['doctor_name9'];
	if($_POST['NinthMonth']!= null){
	$NinthMonth = implode(',', $_POST['NinthMonth']);}
	else
	{
		$NinthMonth = $_POST['NinthMonth'];
	}
	$remark9 = $_POST['remark9'];
	$DateOfNinth = $_POST['DateOfNinth'];


    $sql = "INSERT INTO patient(umrno,RegistrationDate,PatientName,HusbandName,MobileNumber,Weight,Age,BloodGroup,Prebaby,MaritalStatus,Village,District,PinCode,City,State,ChildTwin,ChildHeartbeat,LMP,EDD,Scheme,patientward,IPD,ward,DateOfAdmission,remarkipd,DateOfDischarge,diagnosis,dischargetype,dischargereason,doctor_name1,FirstMonth,remark1,DateOfFirst,doctor_name2,SecondMonth,remark2,DateOfSecond,doctor_name3,ThirdMonth,remark3,DateOfThird,doctor_name4,FourthMonth,remark4,DateOfFourth,doctor_name5,FifthMonth,remark5,DateOfFifth,doctor_name6,SixMonth,remark6,DateOfSix,doctor_name7,SevenMonth,remark7,DateOfSeven,doctor_name8,EightMonth,remark8,DateOfEight,doctor_name9,NinthMonth,remark9,DateOfNinth) VALUES ('$umrno','$RegistrationDate','$PatientName','$HusbandName','$MobileNumber','$Weight','$Age','$BloodGroup','$Prebaby','$MaritalStatus','$Village','$District','$PinCode','$City','$State','$ChildTwin','$ChildHeartbeat','$LMP','$EDD','$Scheme','$patientward','$IPD','$ward','$DateOfAdmission','$remarkipd','$DateOfDischarge','$diagnosis','$dischargetype','$dischargereason','$doctor_name1','$FirstMonth','$remark1','$DateOfFirst','$doctor_name2','$SecondMonth','$remark2','$DateOfSecond','$doctor_name3','$ThirdMonth','$remark3','$DateOfThird','$doctor_name4','$FourthMonth','$remark4','$DateOfFourth','$doctor_name5','$FifthMonth','$remark5','$DateOfFifth','$doctor_name6','$SixMonth','$remark6','$DateOfSix','$doctor_name7','$SevenMonth','$remark7','$DateOfSeven','$doctor_name8','$EightMonth','$remark8','$DateOfEight','$doctor_name9','$NinthMonth','$remark9','$DateOfNinth')";
	
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
									<label class='col-sm-3 col-form-label'>Regt. Date</label>
									<div class='col-sm-9'>
									  <input type='text' value='".$RegistrationDate."' disabled class='form-control' />
									</div>
								  </div>
								</div>
							  </div>
							  <div class='row'>
								<div class='col-md-6'>
								  <div class='form-group row'>
									<label class='col-sm-3 col-form-label'>Patient Name</label>
									<div class='col-sm-9'>
									<input type='text' value='".$PatientName."' disabled class='form-control' />
									  
									</div>
								  </div>
								</div>
								<div class='col-md-6'>
								  <div class='form-group row'>
									<label class='col-sm-3 col-form-label'>Age</label>
									<div class='col-sm-9'>
									  <input class='form-control' value='".$Age."' disabled />
									</div>
								  </div>
								</div>
							  </div>
							  <div class='row'>
								<div class='col-md-6'>
								  <div class='form-group row'>
									<label class='col-sm-3 col-form-label'>Husband Name</label>
									<div class='col-sm-9'>
									<input class='form-control' value='".$HusbandName."' disabled />
									  
									</div>
								  </div>
								</div>
								<div class='col-md-6'>
								<div class='form-group row'>
									<label class='col-sm-3 col-form-label'>Blood Group</label>
									<div class='col-sm-9'>
									<input class='form-control' value='".$BloodGroup."' disabled />
									  
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
								  <label class='col-sm-3 col-form-label'>No. of Prebaby</label>
								  <div class='col-sm-9'>
									<input type='text' value='".$Prebaby."' disabled class='form-control' />
								  </div>
								</div>
							  </div>
							</div>
							<div class='row'>
							  <div class='col-md-6'>
								<div class='form-group row'>
								  <label class='col-sm-3 col-form-label'>Weight</label>
								  <div class='col-sm-9'>
								  <input type='text' value='".$Weight."' disabled class='form-control' />
									
								  </div>
								</div>
							  </div>
							  <div class='col-md-6'>
								<div class='form-group row'>
								  <label class='col-sm-3 col-form-label'>Marital Status</label>
								  <div class='col-sm-9'>
									<input class='form-control' value='".$MaritalStatus."' disabled />
								  </div>
								</div>
							  </div>
							</div>
							<div class='row'>
							  <div class='col-md-6'>
								<div class='form-group row'>
								  <label class='col-sm-3 col-form-label'>Village</label>
								  <div class='col-sm-9'>
								  <input class='form-control' value='".$Village."' disabled />
									
								  </div>
								</div>
							  </div>
							  <div class='col-md-6'>
							  <div class='form-group row'>
								  <label class='col-sm-3 col-form-label'>District</label>
								  <div class='col-sm-9'>
								  <input class='form-control' value='".$District."' disabled />
									
								  </div>
								</div>
							  </div>
							</div>
							<div class='row'>
							  <div class='col-md-6'>
								<div class='form-group row'>
								  <label class='col-sm-3 col-form-label'>City</label>
								  <div class='col-sm-9'>
								  <input class='form-control' value='".$City."' disabled />
									
								  </div>
								</div>
							  </div>
							  <div class='col-md-6'>
							  <div class='form-group row'>
								  <label class='col-sm-3 col-form-label'>State</label>
								  <div class='col-sm-9'>
								  <input class='form-control' value='".$State."' disabled />
									
								  </div>
								</div>
							  </div>
							</div>
							<div class='row'>
							  <div class='col-md-6'>
								<div class='form-group row'>
								  <label class='col-sm-3 col-form-label'>Pin Code</label>
								  <div class='col-sm-9'>
								  <input class='form-control' value='".$PinCode."' disabled />
									
								  </div>
								</div>
							  </div>
							</div>
							<div class='row'>
							  <div class='col-md-6'>
								<div class='form-group row'>
								  <label class='col-sm-3 col-form-label'>Child Twins</label>
								  <div class='col-sm-9'>
								  <input class='form-control' value='".$ChildTwin."' disabled />
									
								  </div>
								</div>
							  </div>
							
							
							  <div class='col-md-6'>
								<div class='form-group row'>
								  <label class='col-sm-3 col-form-label'>Child HeartBeat</label>
								  <div class='col-sm-9'>
								  <input class='form-control' value='".$ChildHeartbeat."' disabled />
									
								  </div>
								</div>
							  </div>
							</div>
							<div class='row'>
							<div class='col-md-6'>
							  <div class='form-group row'>
								<label class='col-sm-3 col-form-label'>LMP</label>
								<div class='col-sm-9'>
								<input class='form-control' value='".$LMP."' disabled />
								  
								</div>
							  </div>
							</div>
						  
						  
							<div class='col-md-6'>
							  <div class='form-group row'>
								<label class='col-sm-3 col-form-label'>EDD</label>
								<div class='col-sm-9'>
								<input class='form-control' value='".$EDD."' disabled />
								  
								</div>
							  </div>
							</div>
						  </div>
						  <div class='row'>
						  <div class='col-md-6'>
							<div class='form-group row'>
							  <label class='col-sm-3 col-form-label'>Scheme</label>
							  <div class='col-sm-9'>
							  <input class='form-control' value='".$Scheme."' disabled />
								
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
    echo "<h1 style='Color:red;'>Error 404,Not Found</h1>";
	}

}

	 
?>
<br>
<?php 
include "print.php";

 ?>
<br>