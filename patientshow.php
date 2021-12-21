<?php
  session_start();
  if(isset($_SESSION['UserID']))
  {


?>

<?php
 include("Master.php");
 include "header.php";
?>
<?php
   if(isset($_POST['search'])){
     



    $sql = "SELECT * FROM patient where umrno ='$_POST[umr]' ";
    $result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
  echo"
  <div class='card'>
                    <div class='card-body'>
                      <h4 class='card-title'>Patient Details</h4>
                      <form class='form-sample' method='POST' action='patientsearchinsert.php'>
                        <p class='card-description'> <b>Basic Information</b> </p>
                        <div class='row'>
                          <div class='col-md-6'>
                            <div class='form-group row'>
                              <label class='col-sm-3 col-form-label'>UMR No.</label>
                              <div class='col-sm-9'>
                                <input type='text' value='".$row['umrno']."' class='form-control' disabled/>
                                <input type='text' value='".$row['umrno']."' class='form-control' name='umrno' hidden/>
                              </div>
                            </div>
                          </div>
                          <div class='col-md-6'>
                            <div class='form-group row'>
                              <label class='col-sm-3 col-form-label'>Regt. Date</label>
                              <div class='col-sm-9'>
                                <input type='text' value='".$row['RegistrationDate']."' class='form-control' name='RegistrationDate' disabled/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class='row'>
                          <div class='col-md-6'>
                            <div class='form-group row'>
                              <label class='col-sm-3 col-form-label'>Patient Name</label>
                              <div class='col-sm-9'>
                              <input type='text' value='".$row['PatientName']."' class='form-control' name='PatientName' disabled/>
                                
                              </div>
                            </div>
                          </div>
                          <div class='col-md-6'>
                            <div class='form-group row'>
                              <label class='col-sm-3 col-form-label'>Age</label>
                              <div class='col-sm-9'>
                                <input class='form-control' value='".$row['Age']."' name='Age' disabled />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class='row'>
                          <div class='col-md-6'>
                            <div class='form-group row'>
                              <label class='col-sm-3 col-form-label'>Husband Name</label>
                              <div class='col-sm-9'>
                              <input class='form-control' value='".$row['HusbandName']."' name='HusbandName' disabled />
                                
                              </div>
                            </div>
                          </div>
                          <div class='col-md-6'>
                          <div class='form-group row'>
                              <label class='col-sm-3 col-form-label'>Blood Group</label>
                              <div class='col-sm-9'>
                              <input class='form-control' value='".$row['BloodGroup']."' name='BloodGroup' disabled />
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Mobile Number</label>
                            <div class='col-sm-9'>
                              <input type='text' value='".$row['MobileNumber']."'  name='MobileNumber' class='form-control' disabled/>
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>No. of Prebaby</label>
                            <div class='col-sm-9'>
                              <input type='text' value='".$row['Prebaby']."' name='Prebaby' class='form-control' disabled/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Weight</label>
                            <div class='col-sm-9'>
                            <input type='text' value='".$row['Weight']."'  name='Weight' class='form-control' disabled/>
                              
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Marital Status</label>
                            <div class='col-sm-9'>
                              <input class='form-control' value='".$row['MaritalStatus']."' name='MaritalStatus' disabled />
                            </div>
                          </div>
                        </div>
                      </div>
                      <p><b>Address Details</b></p>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Village</label>
                            <div class='col-sm-9'>
                            <input class='form-control' value='".$row['Village']."' name='Village' disabled />
                              
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                        <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>District</label>
                            <div class='col-sm-9'>
                            <input class='form-control' value='".$row['District']."' name='District' disabled />
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>City</label>
                            <div class='col-sm-9'>
                            <input class='form-control' value='".$row['City']."' name='City' disabled />
                              
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                        <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>State</label>
                            <div class='col-sm-9'>
                            <input class='form-control' value='".$row['State']."' name='State' disabled />
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Pin Code</label>
                            <div class='col-sm-9'>
                            <input class='form-control' value='".$row['PinCode']."' name='PinCode' disabled />
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Child Twins</label>
                            <div class='col-sm-9'>
                            <input class='form-control' value='".$row['ChildTwin']."' name='ChildTwin' disabled/>
                              
                            </div>
                          </div>
                        </div>
                      
                      
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Child HeartBeat</label>
                            <div class='col-sm-9'>
                            <input class='form-control' value='".$row['ChildHeartbeat']."' name='ChildHeartbeat' />
                              
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class='row'>
							<div class='col-md-6'>
							  <div class='form-group row'>
								<label class='col-sm-3 col-form-label'>LMP</label>
								<div class='col-sm-9'>
								<input type='date' class='form-control' value='".$row['LMP']."' name='LMP' />
								  
								</div>
							  </div>
							</div>
						  
						  
							<div class='col-md-6'>
							  <div class='form-group row'>
								<label class='col-sm-3 col-form-label'>EDD</label>
								<div class='col-sm-9'>
								<input type='date' class='form-control' value='".$row['EDD']."' name='EDD' />
								  
								</div>
							  </div>
							</div>
						  </div>
              <div class='row'>
              <div class='col-md-6'>
                <div class='form-group row'>
                  <label class='col-sm-3 col-form-label'>Scheme</label>
                  <div class='col-sm-9'>

                  <select class='form-control' name='Scheme'>
                  <option selected>".$row['Scheme']."</option>";
                  
                  include "Master.php";
                  $sql1 = "select * from scheme";
                  $result1 = mysqli_query($conn,$sql1);
                  while($row1=mysqli_fetch_array($result1))
                  {
                  echo "<option value='".$row1['name']."'>".$row1['name']."</option>";
                }
                  
                echo "</select>
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
                                <input type='text' class='form-control' placeholder='Enter IPD No.' name='IPD' value='".$row['IPD']."' disabled/>
                             </div>
                           </div>
                         </div>

                         <div class='col-md-6'>
                           <div class='form-group row'>
                             <label class='col-sm-3 col-form-label'>Ward Number</label>
                             <div class='col-sm-9'>
                             <select class='form-control' name='ward'>
                            <option selected>".$row['ward']."</option>";
                              
                              include "Master.php";
                              $sql1 = "select * from ward";
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo "<option value='".$row1['ward_name']."'>".$row1['ward_name']."</option>";
                            }
                              echo "
                            </select>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class='row'>
                       <div class='col-md-6'>
                         <div class='form-group row'>
                           <label class='col-sm-3 col-form-label'>Date Of Admission</label>
                           <div class='col-sm-9'>
                              
                           <input type='date' class='form-control' placeholder='dd/mm/yyyy' name='DateOfAdmission' value='".$row['DateOfAdmission']."' disabled/>
                           
                           </div>
                         </div>
                       </div>
  
                       <div class='col-md-6'>
                         <div class='form-group row'>
                           <label class='col-sm-3 col-form-label'>Remark Of IPD</label>
                           <div class='col-sm-9'>
                           <input type='text' class='form-control' placeholder='IPD Remark' name='remarkipd' value='".$row['remarkipd']."'/>
                           
  
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
                              <input type='date' class='form-control' placeholder='dd/mm/yyyy' name='DateOfDischarge' value='".$row['DateOfDischarge']."' disabled/>
                           </div>
                         </div>
                       </div>
                       <div class='col-md-6'>
                       <div class='form-group row'>
                         <label class='col-sm-3 col-form-label'>Diagnosis</label>
                         <div class='col-sm-9'>
                            <input type='text' class='form-control' name='diagnosis' value='".$row['diagnosis']."'/>
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
                         <label class='col-sm-3 col-form-label'>Remark Of Discharge</label>
                         <div class='col-sm-9'>
                         <input type='text' class='form-control' placeholder='Discharge Remark' name='dischargereason' value='".$row['dischargereason']."'/>
                         

                         </div>
                       </div>
                     </div>
                   </div>
                   <p><b>Vaccination Details</b></p>
                   <div class='row'>
              <div class='col-md-1'>
                <div class='form-group row'>
                  <p><b>Month Number</b></p>
                  
                  </div>
                </div>
                <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                          <p><b>Doctor Name</b></p>
                            
                          </div>
                            
                            </div>
                          </div>

             

              <div class='col-md-3'>
                <div class='form-group row'>
                 
                  <div class='col-sm-6'>



                  <p><b>Test Name</b></p>
                    </div>
                </div>
              </div>
              <div class='col-md-3'>
              <div class='form-group row'>
              <div class='col-sm-9'> 
                               <p><b>Any Remarks</b></p>
                               </div>
              </div>
              </div>
                
             
            <div class='col-md-2'>
                <div class='form-group row'>
                  
                  <div class='col-sm-12'>
                                    <p><b>Date Of Patient Visited</b></p> 
                  </div>
                </div>
              </div>
            </div>


                   <div class='row'>
              <div class='col-md-1'>
                <div class='form-group row'>
                  <label class='col-sm-3 col-form-label'>1</label>
                  
                  </div>
                </div>
                <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                            
                            <select class='form-control' name='doctor_name1'>
                            <option selected>".$row['doctor_name1']."</option>";
                            
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

             

              <div class='col-md-3'>
                <div class='form-group row'>
                 
                  <div class='col-sm-6'>";



                  echo "<select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='FirstMonth[]'>
<option value='".$row['FirstMonth']."' selected>".$row['FirstMonth']."</option>";

include 'Master.php';
$sql1= 'select * from test';
$result1 = mysqli_query($conn,$sql1);

while($row1=mysqli_fetch_array($result1))
{
  
echo "
<option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
}

echo "</select>
                    </div>
                </div>
              </div>
              <div class='col-md-3'>
              <div class='form-group row'>
              <div class='col-sm-9'>
              <input type='text' class='form-control' name='remark1' value='".$row['remark1']."'>
              </div>
              </div>
              </div>
                
             
            <div class='col-md-2'>
                <div class='form-group row'>
                  
                  <div class='col-sm-12'>
                  <input type='date' class='form-control' name='DateOfFirst' value='".$row['DateOfFirst']."'>
                  </div>
                </div>
              </div>
            </div>

            <div class='row'>
            <div class='col-md-1'>
              <div class='form-group row'>
                <label class='col-sm-3 col-form-label'>2</label>
                
                </div>
              </div>
              <div class='col-md-3'>
              <div class='form-group row'>
              <div class='col-sm-9'>
                
                <select class='form-control' name='doctor_name2'>
                <option selected>".$row['doctor_name2']."</option>";
                  
                  include "Master.php";
                  $sql1 = "select * from doctor";
                  $result1 = mysqli_query($conn,$sql1);
                  while($row1=mysqli_fetch_array($result1))
                  {
                  echo "<option value='".$row1['doctor_name']."'>".$row1['doctor_name']."</option>";
                }
                  
                echo "</select>
                
              </div>
                
                </div>
              </div>
           

            <div class='col-md-3'>
              <div class='form-group row'>
               
                <div class='col-sm-6'>";


                echo "<select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='SecondMonth[]'>
<option value='".$row['SecondMonth']."' selected>".$row['SecondMonth']."</option>";

include 'Master.php';
$sql1 = 'select * from test';
$result1 = mysqli_query($conn,$sql1);
while($row1 =mysqli_fetch_array($result1))
{
echo "
<option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
}

echo "</select>
                  
                </div>
              </div>
            </div>
            <div class='col-md-3'>
            <div class='form-group row'>
            <div class='col-sm-9'>
            <input type='text' class='form-control' name='remark2' value='".$row['remark2']."'>
            </div>
            </div>
            </div>
              
           
          <div class='col-md-2'>
              <div class='form-group row'>
                
                <div class='col-sm-12'>
                <input type='date' class='form-control' name='DateOfSecond' value='".$row['DateOfSecond']."'>
                </div>
              </div>
            </div>
          </div>

                                <div class='row'>
              <div class='col-md-1'>
                <div class='form-group row'>
                  <label class='col-sm-3 col-form-label'>3</label>
                  
                  </div>
                </div>
                <div class='col-md-3'>
                <div class='form-group row'>
                <div class='col-sm-9'>
                  
                  <select class='form-control' name='doctor_name3'>
                  <option selected>".$row['doctor_name3']."</option>";
                    
                    include "Master.php";
                    $sql1 = "select * from doctor";
                    $result1 = mysqli_query($conn,$sql1);
                    while($row1=mysqli_fetch_array($result1))
                    {
                    echo "<option value='".$row1['doctor_name']."'>".$row1['doctor_name']."</option>";
                  }
                    
                  echo "</select>
                  
                </div>
                  
                  </div>
                </div>


              <div class='col-md-3'>
                <div class='form-group row'>
                 
                  <div class='col-sm-6'>";
                  
                  
                  echo "<select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='ThirdMonth[]'>
<option value='".$row['ThirdMonth']."' selected>".$row['ThirdMonth']."</option>";

include 'Master.php';
$sql1 = 'select * from test';
$result1  = mysqli_query($conn,$sql1);
while($row1 =mysqli_fetch_array($result1))
{
echo "
<option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
}

echo "</select>
                    
                  </div>
                </div>
              </div>
              <div class='col-md-3'>
              <div class='form-group row'>
              <div class='col-sm-9'>
              <input type='text' class='form-control' name='remark3' value='".$row['remark3']."'>
              </div>
              </div>
              </div>
                
             
            <div class='col-md-2'>
                <div class='form-group row'>
                  
                  <div class='col-sm-12'>
                  <input type='date' class='form-control' name='DateOfThird' value='".$row['DateOfThird']."'>
                  </div>
                </div>
              </div>
            </div>
            <div class='row'>
            <div class='col-md-1'>
              <div class='form-group row'>
                <label class='col-sm-3 col-form-label'>4</label>
                
                </div>
              </div>
              <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                            
                            <select class='form-control' name='doctor_name4'>
                            <option selected>".$row['doctor_name4']."</option>";
                              
                              include "Master.php";
                              $sql1 = "select * from doctor";
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo "<option value='".$row1['doctor_name']."'>".$row1['doctor_name']."</option>";
                            }
                              
                            echo "</select>
                            
                          </div>
                            
                            </div>
                          </div>
                       
           

            <div class='col-md-3'>
              <div class='form-group row'>
               
                <div class='col-sm-6'>";
              
                

                echo "<select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='FourthMonth[]'>
<option value='".$row['FourthMonth']."' selected>".$row['FourthMonth']."</option>";

include 'Master.php';
$sql1 = 'select * from test';
$result1 = mysqli_query($conn,$sql1);
while($row1 =mysqli_fetch_array($result1))
{
echo "
<option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
}

echo "</select>
                  
                </div>
              </div>
            </div>
            <div class='col-md-3'>
            <div class='form-group row'>
            <div class='col-sm-9'>
            <input type='text' class='form-control' name='remark4' value='".$row['remark4']."'>
            </div>
            </div>
            </div>
              
           
          <div class='col-md-2'>
              <div class='form-group row'>
                
                <div class='col-sm-12'>
                <input type='date' class='form-control' name='DateOfFourth' value='".$row['DateOfFourth']."'>
                </div>
              </div>
            </div>
          </div>

                            <div class='row'>
              <div class='col-md-1'>
                <div class='form-group row'>
                  <label class='col-sm-3 col-form-label'>5</label>
                  
                  </div>
                </div>
                <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                            
                            <select class='form-control' name='doctor_name5'>
                            <option selected>".$row['doctor_name5']."</option>";
                              
                              include "Master.php";
                              $sql1 = "select * from doctor";
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo "<option value='".$row1['doctor_name']."'>".$row1['doctor_name']."</option>";
                            }
                              
                            echo "</select>
                            
                          </div>
                            
                            </div>
                          </div>

             

              <div class='col-md-3'>
                <div class='form-group row'>
                 
                  <div class='col-sm-6'>";
                  
                  
                  echo "<select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='FifthMonth[]'>
<option value='".$row['FifthMonth']."' selected>".$row['FifthMonth']."</option>";

include 'Master.php';
$sql1= 'select * from test';
$result1 = mysqli_query($conn,$sql1);
while($row1 =mysqli_fetch_array($result1))
{
echo "
<option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
}

echo "</select>
                    
                  </div>
                </div>
              </div>
              <div class='col-md-3'>
              <div class='form-group row'>
              <div class='col-sm-9'>
              <input type='text' class='form-control' name='remark5' value='".$row['remark5']."'>
              </div>
              </div>
              </div>
                
             
            <div class='col-md-2'>
                <div class='form-group row'>
                  
                  <div class='col-sm-12'>
                  <input type='date' class='form-control' name='DateOfFifth' value='".$row['DateOfFifth']."'>
                  </div>
                </div>
              </div>
            </div>

                          <div class='row'>
              <div class='col-md-1'>
                <div class='form-group row'>
                  <label class='col-sm-3 col-form-label'>6</label>
                  
                  </div>
                </div>
                <div class='col-md-3'>
                <div class='form-group row'>
                <div class='col-sm-9'>
                  
                  <select class='form-control' name='doctor_name6'>
                  <option selected>".$row['doctor_name6']."</option>";
                    
                    include "Master.php";
                    $sql1 = "select * from doctor";
                    $result1 = mysqli_query($conn,$sql1);
                    while($row1=mysqli_fetch_array($result1))
                    {
                    echo "<option value='".$row1['doctor_name']."'>".$row1['doctor_name']."</option>";
                  }
                    
                  echo "</select>
                  
                </div>
                  
                  </div>
                </div>
             

              <div class='col-md-3'>
                <div class='form-group row'>
                 
                  <div class='col-sm-6'>";
                 
                  
                  echo "<select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='SixMonth[]'>
<option value='".$row['SixMonth']."' selected>".$row['SixMonth']."</option>";

include 'Master.php';
$sql1 = 'select * from test';
$result1 = mysqli_query($conn,$sql1);
while($row1 =mysqli_fetch_array($result1))
{
echo "
<option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
}

echo "</select>
                    <!-- <input type='text' class='form-control' name='SixMonth'/> -->
                  </div>
                </div>
              </div>
              <div class='col-md-3'>
              <div class='form-group row'>
              <div class='col-sm-9'>
              <input type='text' class='form-control' name='remark6' value='".$row['remark6']."'>
              </div>
              </div>
              </div>
                
             
            <div class='col-md-2'>
                <div class='form-group row'>
                  
                  <div class='col-sm-12'>
                  <input type='date' class='form-control' name='DateOfSix' value='".$row['DateOfSix']."'>
                  </div>
                </div>
              </div>
            </div>

                        <div class='row'>
              <div class='col-md-1'>
                <div class='form-group row'>
                  <label class='col-sm-3 col-form-label'>7</label>
                  
                  </div>
                </div>
                <div class='col-md-3'>
                <div class='form-group row'>
                <div class='col-sm-9'>
                  
                  <select class='form-control' name='doctor_name7'>
                  <option selected>".$row['doctor_name7']."</option>";
                    
                    include "Master.php";
                    $sql1 = "select * from doctor";
                    $result1 = mysqli_query($conn,$sql1);
                    while($row1=mysqli_fetch_array($result1))
                    {
                    echo "<option value='".$row1['doctor_name']."'>".$row1['doctor_name']."</option>";
                  }
                    
                  echo "</select>
                  
                </div>
                  
                  </div>
                </div>


              <div class='col-md-3'>
                <div class='form-group row'>
                 
                  <div class='col-sm-6'>";
                     

                 echo "<select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='SevenMonth[]'>
<option value='".$row['SevenMonth']."' selected>".$row['SevenMonth']."</option>";

include 'Master.php';
$sql1 = 'select * from test';
$result1 = mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($result1))
{
echo "
<option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
}

echo "</select>
                    <!-- <input type='text' class='form-control' name='SevenMonth'/> -->
                  </div>
                </div>
              </div>
              <div class='col-md-3'>
              <div class='form-group row'>
              <div class='col-sm-9'>
              <input type='text' class='form-control' name='remark7' value='".$row['remark7']."'>
              </div>
              </div>
              </div>
                
             
            <div class='col-md-2'>
                <div class='form-group row'>
                  
                  <div class='col-sm-12'>
                  <input type='date' class='form-control' name='DateOfSeven' value='".$row['DateOfSeven']."'>
                                    </div>
                </div>
              </div>
            </div>

                      <div class='row'>
              <div class='col-md-1'>
                <div class='form-group row'>
                  <label class='col-sm-3 col-form-label'>8</label>
                  
                  </div>
                </div>
                <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                            
                            <select class='form-control' name='doctor_name8'>
                            <option selected>".$row['doctor_name8']."</option>";
                              
                              include "Master.php";
                              $sql1 = "select * from doctor";
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo "<option value='".$row1['doctor_name']."'>".$row1['doctor_name']."</option>";
                            }
                              
                            echo "</select>
                            
                          </div>
                            
                            </div>
                          </div>

             

              <div class='col-md-3'>
                <div class='form-group row'>
                 
                  <div class='col-sm-6'>";

                  
                  echo "<select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='EightMonth[]'>
<option value='".$row['EightMonth']."' selected>".$row['EightMonth']."</option>";

include 'Master.php';
$sql1 = 'select * from test';
$result1 = mysqli_query($conn,$sql1);
while($row1 =mysqli_fetch_array($result1))
{
echo "
<option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
}

echo "</select>
                    <!-- <input type='text' class='form-control' name='EightMonth'/> -->
                  </div>
                </div>
              </div>
              <div class='col-md-3'>
              <div class='form-group row'>
              <div class='col-sm-9'>
              <input type='text' class='form-control' name='remark8' value='".$row['remark8']."'>
              </div>
              </div>
              </div>
                
             
            <div class='col-md-2'>
                <div class='form-group row'>
                  
                  <div class='col-sm-12'>
                  <input type='date' class='form-control' name='DateOfEight' value='".$row['DateOfEight']."'>
                  </div>
                </div>
              </div>
            </div>

                    <div class='row'>
              <div class='col-md-1'>
                <div class='form-group row'>
                  <label class='col-sm-3 col-form-label'>9</label>
                  
                  </div>
                </div>
                <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                            
                            <select class='form-control' name='doctor_name9'>
                            <option selected>".$row['doctor_name9']."</option>";
                              
                              include "Master.php";
                              $sql1 = "select * from doctor";
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo "<option value='".$row1['doctor_name']."'>".$row1['doctor_name']."</option>";
                            }
                              
                            echo "</select>
                            
                          </div>
                            
                            </div>
                          </div>
                       
             

              <div class='col-md-3'>
                <div class='form-group row'>
                 
                  <div class='col-sm-6'>";

                  
                  echo "<select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='NinthMonth[]'>
<option value='".$row['NinthMonth']."' selected>".$row['NinthMonth']."</option>";

include 'Master.php';
$sql1= 'select * from test';
$result1 = mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($result1))
{
echo "
<option value='".$row1['test_name']."'>".$row1['test_name']."</option>";
}

echo "</select>
                    <!-- <input type='text' class='form-control' name='NinthMonth'/> -->
                  </div>
                </div>
              </div>
              <div class='col-md-3'>
              <div class='form-group row'>
              <div class='col-sm-9'>
              <input type='text' class='form-control' name='remark9' value='".$row['remark9']."'>
              </div>
              </div>
              </div>
                
             
            <div class='col-md-2'>
                <div class='form-group row'>
                  
                  <div class='col-sm-12'>
                  <input type='date' class='form-control' name='DateOfNinth' value='".$row['DateOfNinth']."'>
                   </div>
                </div>
              </div>
            </div>   
            <div class='text-center'>
            
            <button type='submit' class='btn btn-warning mr-2' name='submit'>Submit</button>
            <button type='reset' class='btn btn-warning mr-2'>Cancel</button>
  
  </div>              
                      </form><br>
                      <div class='text-center'>
                      <button onClick='window.print()' class='btn btn-warning mr-2'>Print</button>
                      </div><br>
                      <a href='patientsearchumr.php'><button style='width:100%;' class='btn btn-warning mr-2'>Back</button></a>
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