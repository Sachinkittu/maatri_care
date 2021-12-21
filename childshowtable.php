<?php
  session_start();
  if(isset($_SESSION['UserID']))
  {


?>

<?php
 include ("Master.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NMCS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>
 
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
     
     </ul>
    <a href="index.php">
    <button class ="btn btn-danger" data-toggle="modal" data-target="#apply_now">HOME</button></a>&nbsp&nbsp
    
    <a href="logout.php">
    <button class ="btn btn-danger" data-toggle="modal" data-target="#apply_now">SIGNOUT</button></a>
  </div>
</nav></div>
</div>
    
<?php
   if(isset($_GET['id'])){



    $sql = "SELECT * FROM child where umrno='$_GET[id]' ";
    $result=mysqli_query($conn,$sql);
    
 
while($row=mysqli_fetch_array($result))
{
  echo"
  <div class='card'>
                    <div class='card-body'>
                      <h4 class='card-title'>Patient Details</h4>
                      <form class='form-sample' method='POST' action='childsearchinsert.php'>
                        <p class='card-description'> Basic Information </p>
                        <div class='row'>
                          <div class='col-md-6'>
                            <div class='form-group row'>
                              <label class='col-sm-3 col-form-label'>UMR No.</label>
                              <div class='col-sm-9'>
                                <input type='text' value='".$row['umrno']."' class='form-control' disabled/>
                                <input type='text' value='".$row['umrno']."' name='umrno' class='form-control' hidden/>
                              </div>
                            </div>
                          </div>
                          <div class='col-md-6'>
                            <div class='form-group row'>
                              <label class='col-sm-3 col-form-label'>Regt. Date</label>
                              <div class='col-sm-9'>
                                <input type='text' value='".$row['RegistrationDate']."' disabled class='form-control' />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class='row'>
                          <div class='col-md-6'>
                            <div class='form-group row'>
                              <label class='col-sm-3 col-form-label'>Baby Name</label>
                              <div class='col-sm-9'>
                              <input type='text' name='babyname' value='".$row['babyname']."' disabled class='form-control' />
                                
                              </div>
                            </div>
                          </div>
                          <div class='col-md-6'>
                            <div class='form-group row'>
                              <label class='col-sm-3 col-form-label'>Date Of Delivery</label>
                              <div class='col-sm-9'>
                              <input type='date' value='".$row['DateOfDelivery']."' disabled class='form-control' />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class='row'>
                          <div class='col-md-6'>
                            <div class='form-group row'>
                              <label class='col-sm-3 col-form-label'>Gender</label>
                              <div class='col-sm-9'>
                              <input class='form-control' value='".$row['Gender']."' disabled />
                                
                              </div>
                            </div>
                          </div>
                          <div class='col-md-6'>
                            <div class='form-group row'>
                              <label class='col-sm-3 col-form-label'>Mother Name</label>
                              <div class='col-sm-9'>
                              <input class='form-control' value='".$row['MotherName']."' disabled />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class='row'>
                          <div class='col-md-6'>
                            <div class='form-group row'>
                              <label class='col-sm-3 col-form-label'>Father Name</label>
                              <div class='col-sm-9'>
                              <input class='form-control' value='".$row['FatherName']."' disabled />
                                
                              </div>
                            </div>
                          </div>
                          <div class='col-md-6'>
                          <div class='form-group row'>
                              <label class='col-sm-3 col-form-label'>Age</label>
                              <div class='col-sm-9'>
                              <input type='text' value='".$row['Age']."' disabled class='form-control' />
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Delivery Status</label>
                            <div class='col-sm-9'>
                            <input type='text'  name='deliverystatus' value='".$row['deliverystatus']."' disabled class='form-control' />
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
                            <input type='text' value='".$row['MobileNumber']."' disabled class='form-control' />
                              
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Remarks</label>
                            <div class='col-sm-9'>
                              <input type='text' class='form-control' value='".$row['Remarks']."' name ='Remarks'/>
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
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Delivery Location</label>
                            <div class='col-sm-9'>
                            <select class='form-control' name='deliverylocation' disabled>
                            <option selected disabled>".$row['deliverylocation']."</option>
                            <option value='Inside'>Inside</option>
                            <option calue='Outside'>Outside</option>
                              </select>
                            
                            </div>
                          </div>
                        </div>
                      </div>
                      <p><b>Treatment Details</b></p>
                      <div class='row'>
                      <div class='col-md-6'>
                        <div class='form-group row'>
                          <label class='col-sm-3 col-form-label'>IPD No.</label>
                          <div class='col-sm-9'>

                           <input type='text' class='form-control' value='".$row['IPD']."' name ='IPD' disabled/>
                          </div>
                        </div>
                      </div>
                      <div class='col-md-6'>
                        <div class='form-group row'>
                          <label class='col-sm-3 col-form-label'>Ward No.</label>
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
                          <label class='col-sm-3 col-form-label'>Date Of Admission</label>
                          <div class='col-sm-9'>
                            <input type='date' class='form-control' value='".$row['DateOfAdmission']."' name ='DateOfAdmission' disabled/>
                          </div>
                        </div>
                      </div>

                      <div class='col-md-6'>
                        <div class='form-group row'>
                          <label class='col-sm-3 col-form-label'>Any Remark Of Child In IPD</label>
                          <div class='col-sm-9'>
                          <input type='text' class='form-control' value='".$row['remarkipd']."' name ='remarkipd'/>
                          
                          </div>
                        </div>
                      </div>
                      </div>
                      <p><b>Discharge Details</b></p>
                      <div class='row'>
                      <div class='col-md-6'>
                        <div class='form-group row'>
                          <label class='col-sm-3 col-form-label'>Date Of Discharge</label>
                          <div class='col-sm-9'>

                           <input type='date' class='form-control' value='".$row['DateOfDischarge']."' name ='DateOfDischarge' disabled/>
                          </div>
                        </div>
                      </div>
                      <div class='col-md-6'>
                        <div class='form-group row'>
                          <label class='col-sm-3 col-form-label'>Diagnosis</label>
                          <div class='col-sm-9'>
                          <input type='text' class='form-control' value='".$row['diagnosis']."' name ='diagnosis'/>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div class='row'>
                      <div class='col-md-6'>
                        <div class='form-group row'>
                          <label class='col-sm-3 col-form-label'>Discharge Type</label>
                          <div class='col-sm-9'>
                          <select class='form-control' name='dischargetype' disabled>
                          <option selected disabled>".$row['dischargetype']."</option>
                          <option value='Normal'>Normal</option>
                          <option value='LAMA'>LAMA</option>
                          <option value='Refer'>Refer</option>  
                           </select>
                          </div>
                        </div>
                      </div>

                      <div class='col-md-6'>
                        <div class='form-group row'>
                          <label class='col-sm-3 col-form-label'>Any Remark Of Child In Discharge</label>
                          <div class='col-sm-9'>
                          <input type='text' class='form-control' value='".$row['dischargereason']."' name ='dischargereason'/>
                          
                          </div>
                        </div>
                      </div>
                      </div>
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
          <div class='text-center'>
          <button type='submit' class='btn btn-warning mr-2' name='submit'>Submit</button>
          <button type='reset' class='btn btn-warning mr-2'>Cancel</button>

</div>
                       
                      </form><br>
                      <div class='text-center'>
                      <button onClick='window.print()' class='btn btn-warning mr-2'>Print</button>
                      </div><br>
                      
                      <a href='childsearchumr.php'><button style='width:100%;' class='btn btn-warning mr-2'>Back</button></a>
                    </div>
                  </div>";
}
}

?>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<script>
$(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
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