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
  
<div class='container-fluid'>                   
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
<?php
   if(isset($_POST['search'])){

    include 'Master.php';

    $sql = "SELECT * FROM patient where umrno='$_POST[umr]' ";
    $result=mysqli_query($conn,$sql);
    
 
while($row=mysqli_fetch_array($result))
{
echo "<form action='patientipdinsert.php' method='POST'>
<!---------------------------Nav bar-------------------------------------------------->
<div class='row'>
    <div class='col-12 grid-margin'>
                <div class='card'>
                  <div class='card-body'>
                    <h4 class='card-title'>Patient Details</h4><br>
  
                     
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>UMR NO*</label>
                            <div class='col-sm-9'>
                              <input type='text' class='form-control' name='umrno' placeholder='Enter UMR No.' value='".$row['umrno']."' disabled/>
                              <input type='text' value='".$row['umrno']."' name='umrno' class='form-control' hidden/>
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Regdt.</label>
                            <div class='col-sm-9'>
                             <input type='text' class='form-control' name='RegistrationDate' value='".$row['RegistrationDate']."' disabled/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Patient Name*</label>
                            <div class='col-sm-9'>
                              <input type='text' class='form-control' placeholder='Enter Patient Name' name='PatientName' value='".$row['PatientName']."' disabled/>
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Age</label>
                            <div class='col-sm-9'>
                             <input type='number' class='form-control' maxlength='70' placeholder='Age..' name='Age' value='".$row['Age']."' disabled/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Husband Name</label>
                            <div class='col-sm-9'>
                              <input type='text' class='form-control' placeholder='HusbandName' name='HusbandName' value='".$row['HusbandName']."' disabled/>
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Mobile No</label>
                            <div class='col-sm-9'>
                              <input type='text' class='form-control' placeholder = 'Enter a Mobile Number' name='MobileNumber' value='".$row['MobileNumber']."' disabled/>
                            </div>
                          </div>
                        </div>
                        </div>
                        <div class='row'>
                        <div class='col-md-6'>
                        <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Address</label>
                            <div class='col-sm-9'>
                            <input type='text' class='form-control' placeholder = 'Address' name='address' value='$address".$row['Village'].",".$row['City'].",".$row['District'].",".$row['State']."' disabled/>

                            </div>
                        </div>
                        </div>
                        </div>
                          
                        

					  
				<h4 class='card-title'>Other Details</h4><br>

                   <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>LMP</label>
                            <div class='col-sm-9'>
                               <input type='date' class='form-control' placeholder='dd/mm/yyyy' name='LMP' value='".$row['LMP']."' disabled/>
                            </div>
                          </div>
                        </div>

                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>EDD</label>
                            <div class='col-sm-9'>
                            <input type='date' class='form-control' placeholder='dd/mm/yyyy' name='EDD' value='".$row['EDD']."' disabled/>
                            </div>
                          </div>
                        </div>
                      </div>
					  
					  <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Scheme</label>
                            <div class='col-sm-9'>
                            
                              <select class='form-control' name='Scheme' disabled>
                                <option selected>".$row['Scheme']."</option>";
                                include 'Master.php';
                                $sql1 = 'select * from scheme';
                                $result1 = mysqli_query($conn,$sql1);
                                while($row1=mysqli_fetch_array($result1))
                                {
                                echo "<option value='".$row1['name']."'>".$row1['name']."</option>";
                              }
                                
                              echo "</select>
                              
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Ward Type</label>
                            <div class='col-sm-9'>
                             <select class='form-control' name='ward'>
                            <option selected>".$row['ward']."</option>";
                              
                              include 'Master.php';
                              $sql1 = 'select * from ward';
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo "<option value='".$row1['ward_name']."'>".$row1['ward_name']."</option>";
                            }
                              
                            echo "</select>
                             </div>

                          </div>
                        </div>
                        </div>

                        <div class='row'>
                         <div class='col-md-6'>
                           <div class='form-group row'>
                             <label class='col-sm-3 col-form-label'>Ward Reg. Number</label>
                             <div class='col-sm-9'>
                                <input type='text' class='form-control' placeholder='Enter Ward Reg. No.' name='IPD' value='".$row['IPD']."' />
                             </div>
                           </div>
                         </div>
                         <div class='col-md-6'>
                           <div class='form-group row'>
                           <label class='col-sm-3 col-form-label'>Bed No.</label>
                           <div class='col-sm-9'>
                              <input type='text' class='form-control' placeholder='Enter Bed No.' name='Bed' value='".$row['Bed']."' />
                           </div>
                           </div>
                         </div>
                       </div>
                       <div class='row'>
                         <div class='col-md-6'>
                           <div class='form-group row'>
                             <label class='col-sm-3 col-form-label'>Date Of Admission</label>
                             <div class='col-sm-9'>
                             <input type='date' class='form-control' placeholder='dd/mm/yyyy' name='DateOfAdmission' value='".$row['DateOfAdmission']."' />
                           </div>
                           </div>
                         </div>

                         <div class='col-md-6'>
                         <div class='form-group row'>
                           <label class='col-sm-3 col-form-label'>Any Remark Of Patient</label>
                           <div class='col-sm-9'>
                              <input type='text' class='form-control' placeholder='Enter Remark' name='remarkipd' value='".$row['remarkipd']."' />
                           </div>
                         </div>
                       </div>
                       </div>
                       <div class='row'>
                       <div class='col-md-12'>
                        <label class='col-sm-12 col-form-label'>If the Patient is already admitted once then <a href='patientipd1.php?id=".$row['umrno']."'>click here</a> for its next admission details</label>
                       </div>


                     </div>
					  
                      <div class='text-center'>
                      <button type='submit' class='btn btn-warning mr-2' name='submit'>Submit</button>
                      <button type='reset' class='btn btn-warning mr-2'>Cancel</button>
					  
					  </div><br>
            </form>
                    
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>
<a href='index.php'><button style='width:100%;' class='btn btn-warning mr-2'>Back</button></a>
           
<!-------------------footer----------------------------------->


<div class='container-fluid'>
  <div class='row'>
    <div class='col-md-12'>
    <div class='card-footer text-muted'>
    NMCS - 2020
  </div>
  </div>
  
  </div>
</div>";
                        }
                    }
                    ?>

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
</html>


<?php

}
else 
{
   header('Location:login.php');
}
?>

