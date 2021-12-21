<?php
include "Master.php";

if(isset($_POST['submit'])){
	
    $umrno = $_POST['umrno'];
    // $RegistrationDate = $_POST['RegistrationDate'];
	// $PatientName = $_POST['PatientName'];
	// $HusbandName = $_POST['HusbandName'];
	// $MobileNumber = $_POST['MobileNumber'];
	// $Weight = $_POST['Weight'];
	// $Age = $_POST['Age'];
	// $BloodGroup = $_POST['BloodGroup'];
	// $Prebaby = $_POST['Prebaby'];
	// $MaritalStatus = $_POST['MaritalStatus'];
	// $Village = $_POST['Village'];
	// $District = $_POST['District'];
	// $PinCode = $_POST['PinCode'];
	// $City = $_POST['City'];
	// $State = $_POST['State'];
	// $ChildTwin = $_POST['ChildTwin'];
	// $ChildHeartbeat = $_POST['ChildHeartbeat'];
	// $LMP = $_POST['LMP'];
	// $EDD = $_POST['EDD'];
	// $Scheme = $_POST['Scheme'];
	// $doctor_name1 = $_POST['doctor_name1'];
	// if($_POST['FirstMonth']!= null){
	// 	$FirstMonth = implode(',', $_POST['FirstMonth']);}
	// 	else
	// 	{
	// 		$FirstMonth = $_POST['FirstMonth'];
	// 	}
	// 	$remark1 = $_POST['remark1'];
	// 	$DateOfFirst = $_POST['DateOfFirst'];
	// 	$doctor_name2 = $_POST['doctor_name2'];
	// 	if($_POST['SecondMonth']!= null){
	// 	$SecondMonth = implode(',',$_POST['SecondMonth']);}
	// 	else
	// 	{
	// 		$SecondMonth = $_POST['SecondMonth'];
	// 	}
	// 	$remark2 = $_POST['remark2'];
	// 	$DateOfSecond = $_POST['DateOfSecond'];
	// 	$doctor_name3 = $_POST['doctor_name3'];
	// 	if($_POST['ThirdMonth']!= null){
	// 	$ThirdMonth = implode(',',$_POST['ThirdMonth']);}
	// 	else
	// 	{
	// 		$ThirdMonth = $_POST['ThirdMonth'];
	// 	}
	// 	$remark3 = $_POST['remark3'];
	// 	$DateOfThird = $_POST['DateOfThird'];
	// 	$doctor_name4 = $_POST['doctor_name4'];
	// 	if($_POST['FourthMonth']!= null){
	// 	$FourthMonth = implode(',', $_POST['FourthMonth']);}
	// 	else
	// 	{
	// 		$FourthMonth = $_POST['FourthMonth'];
	// 	}
	// 	$remark4 = $_POST['remark4'];
	// 	$DateOfFourth = $_POST['DateOfFourth'];
	// 	$doctor_name5 = $_POST['doctor_name5'];
	// 	if($_POST['FifthMonth']!= null){
	// 	$FifthMonth = implode(',', $_POST['FifthMonth']);}
	// 	else
	// 	{
	// 		$FifthMonth = $_POST['FifthMonth'];
	// 	}
	// 	$remark5 = $_POST['remark5'];
	// 	$DateOfFifth = $_POST['DateOfFifth'];
	// 	$doctor_name6 = $_POST['doctor_name6'];
	// 	if($_POST['SixMonth']!= null){
	// 	$SixMonth = implode(',', $_POST['SixMonth']);}
	// 	else
	// 	{
	// 		$SixMonth = $_POST['SixMonth'];
	// 	}
	// 	$remark6 = $_POST['remark6'];
	// 	$DateOfSix = $_POST['DateOfSix'];
	// 	$doctor_name7 = $_POST['doctor_name7'];
	// 	if($_POST['SevenMonth']!= null){
	// 	$SevenMonth = implode(',', $_POST['SevenMonth']);}
	// 	else
	// 	{
	// 		$SevenMonth = $_POST['SevenMonth'];
	// 	}
	// 	$remark7 = $_POST['remark7'];
	// 	$DateOfSeven = $_POST['DateOfSeven'];
	// 	$doctor_name8 = $_POST['doctor_name8'];
	// 	if($_POST['EightMonth']!= null){
	// 	$EightMonth = implode(',', $_POST['EightMonth']);}
	// 	else
	// 	{
	// 		$EightMonth = $_POST['EightMonth'];
	// 	}
	// 	$remark8 = $_POST['remark8'];
	// 	$DateOfEight = $_POST['DateOfEight'];
	// 	$doctor_name9 = $_POST['doctor_name9'];
	// 	if($_POST['NinthMonth']!= null){
	// 	$NinthMonth = implode(',', $_POST['NinthMonth']);}
	// 	else
	// 	{
	// 		$NinthMonth = $_POST['NinthMonth'];
	// 	}
	// 	$remark9 = $_POST['remark9'];
	// 	$DateOfNinth = $_POST['DateOfNinth'];
		$patientward = $_POST['patientward'];
        $IPD = $_POST['IPD'];
        $ward = $_POST['ward'];
        $DateOfAdmission = $_POST['DateOfAdmission'];
        $remarkipd = $_POST['remarkipd'];


    //$sql = "INSERT INTO patient(umrno,RegistrationDate,PatientName,HusbandName,MobileNumber,Weight,Age,BloodGroup,Prebaby,MaritalStatus,Village,District,PinCode,City,State,ChildTwin,ChildHeartbeat,LMP,EDD,Scheme,FirstMonth,DateOfFirst,SecondMonth,DateOfSecond,ThirdMonth,DateOfThird,FourthMonth,DateOfFourth,FifthMonth,DateOfFifth,SixMonth,DateOfSix,SevenMonth,DateOfSeven,EightMonth,DateOfEight,NinthMonth,DateOfNinth) VALUES ('$umrno','$RegistrationDate','$PatientName','$HusbandName','$MobileNumber','$Weight','$Age','$BloodGroup','$Prebaby','$MaritalStatus','$Village','$District','$PinCode','$City','$State','$ChildTwin','$ChildHeartbeat','$LMP','$EDD','$Scheme','$FirstMonth','$DateOfFirst','$SecondMonth','$DateOfSecond','$ThirdMonth','$DateOfThird','$FourthMonth','$DateOfFourth','$FifthMonth','$DateOfFifth','$SixMonth','$DateOfSix','$SevenMonth','$DateOfSeven','$EightMonth','$DateOfEight','$NinthMonth','$DateOfNinth')";
	$sql = "UPDATE patient SET patientward = '$patientward',
                                IPD = '$IPD',
                                ward = '$ward',
                                DateOfAdmission = '$DateOfAdmission',
                                remarkipd = '$remarkipd' where umrno = '$umrno' ";
	$result=mysqli_query($conn,$sql);
	

    if($result)
	{
		echo "<script>window.onload = function(){
			window.alert('Patient IPD Report Uploaded successsfully');
		}</script>";
        include ("patientipdsearch.php");
    }
    else
    {
        echo "<h1 style='Color:red;'>Error 404 Not Found</h1>";
    }
}
        ?>
        