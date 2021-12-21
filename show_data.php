<?php
  session_start();
  if(isset($_SESSION['UserID']))
  {


?>

<?php
 include("Master.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <table border="1px">
        <tr>
        <th>UMR No.</th>
        <th>Registration Date</th>
        <th>Patient Name</th>
        <th>Husband Name</th>
        <th>Mobile Number</th>
        <th>Weight</th>
        <th>Age</th>
        <th>Blood Group</th>
        <th>Number of PreBaby</th>
        <th>Marital Status</th>
        <th>Village</th>
        <th>District</th>
        <th>Pin Code</th>
        <th>City</th>
        <th>State</th>
        <th>Child Twin</th>
        <th>Child Heartbeat</th>
</tr>


<?php
   if(isset($_POST['search'])){



    $sql = "SELECT * FROM patient where umrno='$_POST[umr]' ";
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


</tr>";
}
}

?>
        
</table>

</body>
</html>

<?php

}
else 
{
   header('Location:login.php');
}
?>