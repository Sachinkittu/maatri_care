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
    if($_POST['sixmonthvaccine']!=null)
	{
		$sixmonthvaccine = implode(',', $_POST['sixmonthvaccine']);
	}
	else
	{
		$sixmonthvaccine = $_POST['sixmonthvaccine'];
	}
	
	$sixmonthtestremark = $_POST['sixmonthtestremark'];
	$sixmonthtestdate = $_POST['sixmonthtestdate'];
    if($_POST['ninemonthvaccine']!=null)
	{
		$ninemonthvaccine = implode(',', $_POST['ninemonthvaccine']);
	}
	else
	{
		$ninemonthvaccine = $_POST['ninemonthvaccine'];
	}
	
	$ninemonthtestremark = $_POST['ninemonthtestremark'];
	$ninemonthtestdate = $_POST['ninemonthtestdate'];
    if($_POST['twelvemonthvaccine']!=null)
	{
		$twelvemonthvaccine = implode(',', $_POST['twelvemonthvaccine']);
	}
	else
	{
		$twelvemonthvaccine = $_POST['twelvemonthvaccine'];
	}
	
	$twelvemonthtestremark = $_POST['twelvemonthtestremark'];
	$twelvemonthtestdate = $_POST['twelvemonthtestdate'];
    if($_POST['fifteenmonthvaccine']!=null)
	{
		$fifteenmonthvaccine = implode(',', $_POST['fifteenmonthvaccine']);
	}
	else
	{
		$fifteenmonthvaccine = $_POST['fifteenmonthvaccine'];
	}
	
	$fifteenmonthtestremark = $_POST['fifteenmonthtestremark'];
	$fifteenmonthtestdate = $_POST['fifteenmonthtestdate'];
    if($_POST['sixteenmonthvaccine']!=null)
	{
		$sixteenmonthvaccine = implode(',', $_POST['sixteenmonthvaccine']);
	}
	else
	{
		$sixteenmonthvaccine = $_POST['sixteenmonthvaccine'];
	}
	
	$sixteenmonthtestremark = $_POST['sixteenmonthtestremark'];
	$sixteenmonthtestdate = $_POST['sixteenmonthtestdate'];
    if($_POST['eightteenmonthvaccine']!=null)
	{
		$eightteenmonthvaccine = implode(',', $_POST['eightteenmonthvaccine']);
	}
	else
	{
		$eightteenmonthvaccine = $_POST['eightteenmonthvaccine'];
	}
	
	$eightteenmonthtestremark = $_POST['eightteenmonthtestremark'];
	$eightteenmonthtestdate = $_POST['eightteenmonthtestdate'];
    if($_POST['twoyearvaccine']!=null)
	{
		$twoyearvaccine = implode(',', $_POST['twoyearvaccine']);
	}
	else
	{
		$twoyearvaccine = $_POST['twoyearvaccine'];
	}
	
	$twoyeartestremark = $_POST['twoyeartestremark'];
	$twoyeartestdate = $_POST['twoyeartestdate'];
    if($_POST['fiveyearvaccine']!=null)
	{
		$fiveyearvaccine = implode(',', $_POST['fiveyearvaccine']);
	}
	else
	{
		$fiveyearvaccine = $_POST['fiveyearvaccine'];
	}
	
	$fiveyeartestremark = $_POST['fiveyeartestremark'];
	$fiveyeartestdate = $_POST['fiveyeartestdate'];
    if($_POST['tenyearvaccine']!=null)
	{
		$tenyearvaccine = implode(',', $_POST['tenyearvaccine']);
	}
	else
	{
		$tenyearvaccine = $_POST['tenyearvaccine'];
	}
	
	$tenyeartestremark = $_POST['tenyeartestremark'];
	$tenyeartestdate = $_POST['tenyeartestdate'];

    //$sql = "INSERT INTO child(umrno,RegistrationDate,DateOfDelivery,Gender,MotherName,FatherName,Age,Weight,MobileNumber,Remarks,birthvaccine,birthtestremark,birthtestdate,sixweekvaccine,sixtestremark,sixtestdate,tenweekvaccine,tentestremark,tentestdate,fourteenweekvaccine,fourteentestremark,fourteentestdate) VALUES ('$umrno','$RegistrationDate','$DateOfDelivery','$Gender','$MotherName','$FatherName','$Age','$Weight','$MobileNumber','$Remarks','$birthvaccine','$birthtestremark','$birthtestdate','$sixweekvaccine','$sixweektestremark','$sixweektestdate','$tenweekvaccine','$tenweektestremark','$tenweektestdate','$fourteenweekvaccine','$fourteenweektestremark','$fourteenweektestdate')";
	 $sql = "update child set    birthvaccine = '$birthvaccine',
                                 birthtestremark = '$birthtestremark',
                                 birthtestdate = '$birthtestdate',
                                 sixweekvaccine = '$sixweekvaccine',
                                 sixweektestremark = '$sixweektestremark',
                                 sixweektestdate = '$sixweektestdate',
                                 tenweekvaccine = '$tenweekvaccine',
                                 tenweektestremark = '$tenweektestremark',
                                 tenweektestdate = '$tenweektestdate',
                                 fourteenweekvaccine = '$fourteenweekvaccine',
                                 fourteenweektestremark = '$fourteenweektestremark',
                                 fourteenweektestdate = '$fourteenweektestdate',
                                 sixmonthvaccine = '$sixmonthvaccine',
                                 sixmonthtestremark = '$sixmonthtestremark',
                                 sixmonthtestdate = '$sixmonthtestdate',
                                 ninemonthvaccine = '$ninemonthvaccine',
                                 ninemonthtestremark = '$ninemonthtestremark',
                                 ninemonthtestdate = '$ninemonthtestdate',
                                 twelvemonthvaccine = '$twelvemonthvaccine',
                                 twelvemonthtestremark = '$twelvemonthtestremark',
                                 twelvemonthtestdate = '$twelvemonthtestdate',
                                 fifteenmonthvaccine = '$fifteenmonthvaccine',
                                 fifteenmonthtestremark = '$fifteenmonthtestremark',
                                 fifteenmonthtestdate = '$fifteenmonthtestdate',
                                 sixteenmonthvaccine = '$sixteenmonthvaccine',
                                 sixteenmonthtestremark = '$sixteenmonthtestremark',
                                 sixteenmonthtestdate = '$sixteenmonthtestdate',
                                 eightteenmonthvaccine = '$eightteenmonthvaccine',
                                 eightteenmonthtestremark = '$eightteenmonthtestremark',
                                 eightteenmonthtestdate = '$eightteenmonthtestdate',
                                 twoyearvaccine = '$twoyearvaccine',
                                 twoyeartestremark = '$twoyeartestremark',
                                 twoyeartestdate = '$twoyeartestdate',
                                 fiveyearvaccine = '$fiveyearvaccine',
                                 fiveyeartestremark = '$fiveyeartestremark',
                                 fiveyeartestdate = '$fiveyeartestdate',
                                 tenyearvaccine = '$tenyearvaccine',
                                 tenyeartestremark = '$tenyeartestremark',
                                 tenyeartestdate = '$tenyeartestdate' where umrno = '$umrno'";
                         //$sql = "UPDATE child SET Remarks = '$Remarks' where umrno = '$umrno' ";       
	$result=mysqli_query($conn,$sql);
	

    if($result)
	{
		echo "<script>window.onload = function(){
			window.alert('Child Vaccine uploaded successsfully');
		}</script>";
        include ("childvaccinesearch.php");
    }
    else
    {
        echo "<h1 style='Color:red;'>Error 404 Not Found</h1>";
        
    }
}
  
?>
