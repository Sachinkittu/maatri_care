<?php
  session_start();
  if(isset($_SESSION['UserID']))
  {


?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>
    <link href='https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css' rel='stylesheet'/>
    <title>NMCS</title>
    <link rel='stylesheet' href='img/style.css'>
    
</head>
<body>
<?php
   if(isset($_POST['search'])){

    include "Master.php";

    $sql = "SELECT * FROM child where umrno='$_POST[umr]' ";
    $result=mysqli_query($conn,$sql);
    
 
while($row=mysqli_fetch_array($result))
{
echo "<div class='container-fluid'>
  <div class='row'>
    <div class='col-md-2 header-logo'>
    
    <img src='images/NMCS1.jpg' class='img-fluid' alt='Responsive image'>
    </div>
        <div class='col-md-10 header-top'>
        
       <img src='images/nmcs147.png' class='img-fluid' alt='Responsive image'>
        </div>
<!-------------------------Header menu start -->
    </div>

<!------------------ Nav Bar -------------------------------------->
<div class='row'>
  <div class='col-md-12'>
   <nav class='navbar navbar-expand-lg navbar-dark bg-warning'>
   <!----------------<a class='navbar-brand' href='#'><strong>Narayan Maatri Care System</strong>    <!---<img src='image/nmcs.png' width='30' height='30' class='d-inline-block align-top' alt=''>-->
    
    
  </a>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarSupportedContent'>
  <ul class='navbar-nav mr-auto'>
     
     </ul>
    <a href='index.php'>
    <button class ='btn btn-danger' data-toggle='modal' data-target='#apply_now'>HOME</button></a>&nbsp&nbsp
    
    <a href='logout.php'>
    <button class ='btn btn-danger' data-toggle='modal' data-target='#apply_now'>SIGNOUT</button></a>
  </div>
</nav></div>
</div>
<form action='childvaccineinsert.php' method='POST'>
<!-------------------------------------------------------------------------------------->
<div class='row'>
	<div class='col-12 grid-margin'>
                <div class='card'>
                  <div class='card-body'>
                    <h4 class='card-title'>Child Details</h4>

                    <form class='form-sample'>
                      <p class='card-description'> Personal info </p>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>UMR No.</label>
                            <div class='col-sm-9'>
                              <input type='text' class='form-control' placeholder='UMR No.' name='umrno' value='".$row['umrno']."' disabled/>
                              <input type='text' value='".$row['umrno']."' name='umrno' class='form-control' hidden/>
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Registration Date</label>
                            <div class='col-sm-9'>
                            <input type='text' class='form-control' name='RegistrationDate' value='".$row['RegistrationDate']."' disabled/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Date Of Delivery</label>
                            <div class='col-sm-9'>
                               <input type='date' class='form-control' placeholder='dd/mm/yyyy' name='DateOfDelivery' value='".$row['DateOfDelivery']."' disabled/>
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Gender</label>
                            <div class='col-sm-9'>
                              <select class='form-control' name='Gender' value='".$row['Gender']."' disabled>
                                <option value='Male'>Male</option>
                                <option value='Female'>Female</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Mother Name</label>
                            <div class='col-sm-9'>
                                  <input type='text' class='form-control' name='MotherName' value='".$row['MotherName']."' disabled/>
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Father Name</label>
                             <div class='col-sm-9'>
                                  <input type='text' class='form-control' name='FatherName' value='".$row['FatherName']."' disabled/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Age</label>
                            <div class='col-sm-9'>
                                  <input type='number' class='form-control' placeholder='Age' name='Age' value='".$row['Age']."' disabled/>
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Weight</label>
                             <div class='col-sm-9'>
                                  <input type='text' class='form-control' placeholder='Weight' name='Weight' value='".$row['Weight']."' disabled/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Mobile Number</label>
                            <div class='col-sm-9'>
                                  <input type='text' class='form-control' placeholder='Mobile Number' name='MobileNumber'value='".$row['MobileNumber']."' disabled/>
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Remarks</label>
                             <div class='col-sm-9'>
                              <input type='text' name='Remarks' placeholder='Remarks' class='form-control' value='".$row['Remarks']."' disabled>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Doctor Name</label>
                            <div class='col-sm-9'>
                            <select class='form-control' name='doctor_name' disabled>
                            <option selected disabled>".$row['doctor_name']."</option>";
                              
                              include 'Master.php';
                              $sql1 = 'select * from doctor';
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo "<option value='".$row1['doctor_name']."'>".$row1['doctor_name']."</option>";
                            }
                              
                            echo "</select>
                            
                            </div>
                          </div>
                        </div>
                      </div><br><br>





                      <h4 class='card-title'>Child Details</h4>

                      <div class='card'>
       <div class='card-header'>
            Vaccination
        </div>
      <div class='card-body'>
       <table class='table table-danger'>
    <tr>
       <th scope='row'>At Birth</th>
      <!--<td><input type='radio' class='form-control' name='BCG0' value='yes'/></td> -->
      <td>
    <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='birthvaccine[]'>
    <option selected>".$row['birthvaccine']."</option>";
    
    include 'Master.php';
    $sql1= 'select * from birthtest';
    $result1 = mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
      echo "
    <option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
    }
  
  echo "</select></td>
  <td><input type='text' name='birthtestremark' placeholder='Any Remarks' size='70' value='".$row['birthtestremark']."'></td>
  <td><input type='date' name='birthtestdate' value='".$row['birthtestdate']."'></td>
    </tr>
    <tr>
       <th scope='row'>At 6 Week</th>
      <!--<td><input type='radio' class='form-control' name='BCG0' value='yes'/></td> -->
      <td>
    <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='sixweekvaccine[]'>
    <option selected>".$row['sixweekvaccine']."</option>";
    
    include 'Master.php';
    $sql1= 'select * from 6weektest';
    $result1 = mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
      echo "
          <option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
    }
  
  echo "</select></td>
  <td><input type='text' name='sixweektestremark' placeholder='Any Remarks' size='70' value='".$row['sixweektestremark']."'></td>
  <td><input type='date' name='sixweektestdate' value='".$row['sixweektestdate']."'></td>
    </tr>
    <tr>
       <th scope='row'>At 10 Week</th>
      <!--<td><input type='radio' class='form-control' name='BCG0' value='yes'/></td> -->
      <td>
    <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='tenweekvaccine[]'>
    <option selected>".$row['tenweekvaccine']."</option>";
    
    include 'Master.php';
    $sql1= 'select * from 10weektest';
    $result1 = mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
      echo "
    <option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
    }
  
  echo "</select></td>
  <td><input type='text' name='tenweektestremark' placeholder='Any Remarks' size='70' value='".$row['tenweektestremark']."'></td>
  <td><input type='date' name='tenweektestdate' value='".$row['tenweektestdate']."'></td>
    </tr>
    <tr>
       <th scope='row'>At 14 Week</th>
      <!--<td><input type='radio' class='form-control' name='BCG0' value='yes'/></td> -->
      <td>
    <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='fourteenweekvaccine[]'>
    <option selected>".$row['fourteenweekvaccine']."</option>";
    
    include 'Master.php';
    $sql1= 'select * from 14weektest';
    $result1 = mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
      echo "
    <option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
    }
  
  echo "</select></td>
  <td><input type='text' name='fourteenweektestremark' placeholder='Any Remarks' size='70' value='".$row['fourteenweektestremark']."'></td>
  <td><input type='date' name='fourteenweektestdate' value='".$row['fourteenweektestdate']."'></td>
    </tr>
    <tr>
    <th scope='row'>At 6 Month</th>
   <!--<td><input type='radio' class='form-control' name='BCG0' value='yes'/></td> -->
   <td>
 <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='sixmonthvaccine[]'>
 <option selected>".$row['sixmonthvaccine']."</option>";
 
 include 'Master.php';
 $sql1= 'select * from 6monthtest';
 $result1 = mysqli_query($conn,$sql1);
 while($row1=mysqli_fetch_array($result1))
 {
   echo "
 <option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
 }

echo "</select></td>
<td><input type='text' name='sixmonthtestremark' placeholder='Any Remarks' size='70' value='".$row['sixmonthtestremark']."'></td>
<td><input type='date' name='sixmonthtestdate' value='".$row['sixmonthtestdate']."'></td>
 </tr>
 <tr>
    <th scope='row'>At 9 Month</th>
   <!--<td><input type='radio' class='form-control' name='BCG0' value='yes'/></td> -->
   <td>
 <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='ninemonthvaccine[]'>
 <option selected>".$row['ninemonthvaccine']."</option>";
 
 include 'Master.php';
 $sql1= 'select * from 9monthtest';
 $result1 = mysqli_query($conn,$sql1);
 while($row1=mysqli_fetch_array($result1))
 {
   echo "
 <option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
 }

echo "</select></td>
<td><input type='text' name='ninemonthtestremark' placeholder='Any Remarks' size='70' value='".$row['ninemonthtestremark']."'></td>
<td><input type='date' name='ninemonthtestdate' value='".$row['ninemonthtestdate']."'></td>
 </tr>
 <tr>
    <th scope='row'>At 12 Month</th>
   <!--<td><input type='radio' class='form-control' name='BCG0' value='yes'/></td> -->
   <td>
 <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='twelvemonthvaccine[]'>
 <option selected>".$row['twelvemonthvaccine']."</option>";
 
 include 'Master.php';
 $sql1= 'select * from 12monthtest';
 $result1 = mysqli_query($conn,$sql1);
 while($row1=mysqli_fetch_array($result1))
 {
   echo "
 <option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
 }

echo "</select></td>
<td><input type='text' name='twelvemonthtestremark' placeholder='Any Remarks' size='70' value='".$row['twelvemonthtestremark']."'></td>
<td><input type='date' name='twelvemonthtestdate' value='".$row['twelvemonthtestdate']."'></td>
 </tr>
 <tr>
 <th scope='row'>At 15 Month</th>
<!--<td><input type='radio' class='form-control' name='BCG0' value='yes'/></td> -->
<td>
<select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='fifteenmonthvaccine[]'>
<option selected>".$row['fifteenmonthvaccine']."</option>";

include 'Master.php';
$sql1= 'select * from 15monthtest';
$result1 = mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($result1))
{
echo "
<option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
}

echo "</select></td>
<td><input type='text' name='fifteenmonthtestremark' placeholder='Any Remarks' size='70' value='".$row['fifteenmonthtestremark']."'></td>
<td><input type='date' name='fifteenmonthtestdate' value='".$row['fifteenmonthtestdate']."'></td>
</tr>
<tr>
    <th scope='row'>At 16-18 Month</th>
   <!--<td><input type='radio' class='form-control' name='BCG0' value='yes'/></td> -->
   <td>
 <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='sixteenmonthvaccine[]'>
 <option selected>".$row['sixteenmonthvaccine']."</option>";
 
 include 'Master.php';
 $sql1= 'select * from 18monthtest';
 $result1 = mysqli_query($conn,$sql1);
 while($row1=mysqli_fetch_array($result1))
 {
   echo "
 <option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
 }

echo "</select></td>
<td><input type='text' name='sixteenmonthtestremark' placeholder='Any Remarks' size='70' value='".$row['sixteenmonthtestremark']."'></td>
<td><input type='date' name='sixteenmonthtestdate' value='".$row['sixteenmonthtestdate']."'></td>
 </tr>
 <tr>
    <th scope='row'>At 18 Month</th>
   <!--<td><input type='radio' class='form-control' name='BCG0' value='yes'/></td> -->
   <td>
 <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='eightteenmonthvaccine[]'>
 <option selected>".$row['eightteenmonthvaccine']."</option>";
 
 include 'Master.php';
 $sql1= 'select * from 18monthtest';
 $result1 = mysqli_query($conn,$sql1);
 while($row1=mysqli_fetch_array($result1))
 {
   echo "
 <option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
 }

echo "</select></td>
<td><input type='text' name='eightteenmonthtestremark' placeholder='Any Remarks' size='70' value='".$row['eightteenmonthtestremark']."'></td>
<td><input type='date' name='eightteenmonthtestdate' value='".$row['eightteenmonthtestdate']."'></td>
 </tr>
 <tr>
    <th scope='row'>At 2 Year</th>
   <!--<td><input type='radio' class='form-control' name='BCG0' value='yes'/></td> -->
   <td>
 <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='twoyearvaccine[]'>
 <option selected>".$row['twoyearvaccine']."</option>";
 
 include 'Master.php';
 $sql1= 'select * from 2yeartest';
 $result1 = mysqli_query($conn,$sql1);
 while($row1=mysqli_fetch_array($result1))
 {
   echo "
 <option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
 }

echo "</select></td>
<td><input type='text' name='twoyeartestremark' placeholder='Any Remarks' size='70' value='".$row['twoyeartestremark']."'></td>
<td><input type='date' name='twoyeartestdate' value='".$row['twoyeartestdate']."'></td>
 </tr>
 <tr>
    <th scope='row'>At 4.5-5 Year</th>
   <!--<td><input type='radio' class='form-control' name='BCG0' value='yes'/></td> -->
   <td>
 <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='fiveyearvaccine[]'>
 <option selected>".$row['fiveyearvaccine']."</option>";
 
 include 'Master.php';
 $sql1= 'select * from 5yeartest';
 $result1 = mysqli_query($conn,$sql1);
 while($row1=mysqli_fetch_array($result1))
 {
   echo "
 <option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
 }

echo "</select></td>
<td><input type='text' name='fiveyeartestremark' placeholder='Any Remarks' size='70' value='".$row['fiveyeartestremark']."'></td>
<td><input type='date' name='fiveyeartestdate' value='".$row['fiveyeartestdate']."'></td>
 </tr>
 <tr>
    <th scope='row'>At 10-12 Year</th>
   <!--<td><input type='radio' class='form-control' name='BCG0' value='yes'/></td> -->
   <td>
 <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='tenyearvaccine[]'>
 <option selected>".$row['tenyearvaccine']."</option>";
 
 include 'Master.php';
 $sql1= 'select * from 10yeartest';
 $result1 = mysqli_query($conn,$sql1);
 while($row1=mysqli_fetch_array($result1))
 {
   echo "
 <option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
 }

echo "</select></td>
<td><input type='text' name='tenyeartestremark' placeholder='Any Remarks' size='70' value='".$row['tenyeartestremark']."'></td>
<td><input type='date' name='tenyeartestdate' value='".$row['tenyeartestdate']."'></td>
 </tr>
  
</table>
</div>
  </div></br></br>
                     
                      
                      <div class='text-center'>
                      <button type='submit' class='btn btn-warning mr-2' name='submit'>Submit</button>
                      <button type='reset' class='btn btn-warning mr-2'>Cancel</button>
					  
					  </div><br>
                    </form></div>
                </div>
              </div>
            </div>
          </div>

</div>
</div>

<a href='index.php'><button style='width:100%;' class='btn btn-warning mr-2'>Back</button></a>
<div class='footer'>
            <div class='copyright'>
               <p>Copyright &copy; Designed & Developed by <a href='#'>NMCS</a> 2020</p>
            </div>
        </div>
</form>
<!---------------------foooter------------------------------------------->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx' crossorigin='anonymous'></script> 
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
<script src='https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js'></script>
<script>
$('.chosen-select').chosen({
  no_results_text: 'Oops, nothing found!'
})
</script>
</body>
</html>";
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
