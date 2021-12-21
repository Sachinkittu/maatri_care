<?php





 include "Master.php";


if(isset($_POST['submit'])){


	$umrno = $_POST['umrno'];
	//$RegistrationDate = $_POST['RegistrationDate'];
	//$DateOfDelivery = $_POST['DateOfDelivery'];
	//$Gender = $_POST['Gender'];
	//$MotherName = $_POST['MotherName'];
	//$FatherName = $_POST['FatherName'];
	//$Age = $_POST['Age'];
	//$Weight = $_POST['Weight'];
	//$MobileNumber = $_POST['MobileNumber'];
	// $Remarks = $_POST['Remarks'];
	// if($_POST['birthvaccine']!=null)
	// {
	// 	$birthvaccine = implode(',', $_POST['birthvaccine']);
	// }
	// else
	// {
	// 	$birthvaccine = $_POST['birthvaccine'];
	// }
	// $birthtestremark = $_POST['birthtestremark'];
	// $birthtestdate = $_POST['birthtestdate'];
	// if($_POST['sixweekvaccine']!=null)
	// {
	// 	$sixweekvaccine = implode(',', $_POST['sixweekvaccine']);
	// }
	// else
	// {
	// 	$sixweekvaccine = $_POST['sixweekvaccine'];
	// }
	
	// $sixweektestremark = $_POST['sixweektestremark'];
	// $sixweektestdate = $_POST['sixweektestdate'];
	// if($_POST['tenweekvaccine']!=null)
	// {
	// 	$tenweekvaccine = implode(',', $_POST['tenweekvaccine']);
	// }
	// else
	// {
	// 	$tenweekvaccine = $_POST['tenweekvaccine'];
	// }
	
	// $tenweektestremark = $_POST['tenweektestremark'];
	// $tenweektestdate = $_POST['tenweektestdate'];
	// if($_POST['fourteenweekvaccine']!=null)
	// {
	// 	$fourteenweekvaccine = implode(',', $_POST['fourteenweekvaccine']);
	// }
	// else
	// {
	// 	$fourteenweekvaccine = $_POST['fourteenweekvaccine'];
	// }
	// $fourteenweektestremark = $_POST['fourteenweektestremark'];
	// $fourteenweektestdate = $_POST['fourteenweektestdate'];
    $childward = $_POST['childward'];
    $IPD = $_POST['IPD'];
    $ward = $_POST['ward'];
    $DateOfAdmission = $_POST['DateOfAdmission'];
    $remarkipd = $_POST['remarkipd'];

    //$sql = "INSERT INTO child(umrno,RegistrationDate,DateOfDelivery,Gender,MotherName,FatherName,Age,Weight,MobileNumber,Remarks,birthvaccine,birthtestremark,birthtestdate,sixweekvaccine,sixtestremark,sixtestdate,tenweekvaccine,tentestremark,tentestdate,fourteenweekvaccine,fourteentestremark,fourteentestdate) VALUES ('$umrno','$RegistrationDate','$DateOfDelivery','$Gender','$MotherName','$FatherName','$Age','$Weight','$MobileNumber','$Remarks','$birthvaccine','$birthtestremark','$birthtestdate','$sixweekvaccine','$sixweektestremark','$sixweektestdate','$tenweekvaccine','$tenweektestremark','$tenweektestdate','$fourteenweekvaccine','$fourteenweektestremark','$fourteenweektestdate')";
	 $sql = "update child set    childward = '$childward',
                                    IPD = '$IPD',
                                    ward = '$ward',
                                    DateOfAdmission = '$DateOfAdmission',
                                    remarkipd = '$remarkipd' where umrno = '$umrno'";
                         //$sql = "UPDATE child SET Remarks = '$Remarks' where umrno = '$umrno' ";       
	$result=mysqli_query($conn,$sql);
	

    if($result)
	{
		echo "<script>window.onload = function(){
			window.alert('Child IPD Report successsfully');
		}</script>";
        include ("childipdsearch.php");
    }
    else
    {
        echo "<h1 style='Color:red;'>Error 404 Not Found</h1>";
        
    }
}
  
?>