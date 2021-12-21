<?php
  session_start();
  if(isset($_SESSION['UserID']))
  {

include "header.php";
?>



<form action="patientinsert.php" method="POST">
<!---------------------------Nav bar-------------------------------------------------->
<div class="row">
    <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Patient Details</h4><br>
  
                     
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">UMR NO*</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="umrno" name="umrno" placeholder="Enter UMR No." required/>
                            </div>
                          </div>
                        </div>
         
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Regdt.</label>
                            <div class="col-sm-9">
                             <input type="text" class="form-control" name="RegistrationDate" value="<?php echo date('Y/m/d') ;?>" disabled/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Patient Name*</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter Patient Name" name="PatientName" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Age</label>
                            <div class="col-sm-9">
                            <input type="number" class="form-control" maxlength="70" placeholder="Age" name="Age" required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Husband Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="HusbandName" name="HusbandName"  required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Blood Group</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="BloodGroup"  required>
                                <option selected disabled>Select Blood Group</option>
                                <option value="O-">O-</option>
                                <option value="O+">O+</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="B+">B+</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                              </select>
                              
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mobile No</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder = "Enter a Mobile Number" name="MobileNumber"  required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No of Pre Baby*</label>
                            <div class="col-sm-9">
                             <input type="text" class="form-control" placeholder= "Prebaby" name="Prebaby"  required/>
                            </div>
                          </div>
                        </div>
                      </div>
					  
					  

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Weight</label>
                            <div class="col-sm-9">
                               <input type="text" class="form-control" placeholder="Enter a Weight" name="Weight"/>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Marital Status*</label>
                            <div class="col-sm-3">
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="MaritalStatus" id="membershipRadios1" value="Married" checked> Married </label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="MaritalStatus" id="membershipRadios2" value="Un-Married"> Un-Married </label>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div><br><br>



        <!----------------------------------------Address--------------------------------------------------------------------->              <h4 class="card-title">Address Details</h4><br>
                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Village</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter a Village Name" name="Village" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">District</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter a District Name" name="District" required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter a City Name" name="City" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter a State Name" name="State" required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Pin Code</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter a Pin Code" name="PinCode" required/>
                            </div>
                          </div>
                        </div> 
                      </div>
                      <br><br>

                <h4 class="card-title">Child Details</h4><br>

                    <div class="row">
                         <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Does Child Twins?*</label>
                            <div class="col-sm-3">
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="ChildTwin" id="membershipRadios1" value="Yes">  Yes </label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="ChildTwin" id="membershipRadios2" value="No" checked> No </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Child Heartbeat</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="Enter a child Heartbeat" name="ChildHeartbeat"/>
                            </div>
                          </div>
                        </div>
                      </div><br><br>
					  
				<h4 class="card-title">Other Details</h4><br>

                   <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">LMP</label>
                            <div class="col-sm-9">
                               <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="LMP" />
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">EDD</label>
                            <div class="col-sm-9">
                            <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="EDD" />
                            </div>
                          </div>
                        </div>
                      </div>
					  
					  <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Scheme</label>
                            <div class="col-sm-9">
                            
                              <select class="form-control" name="Scheme">
                                <?php
                                include "Master.php";
                                $sql = "select * from scheme";
                                $result = mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_array($result))
                                {
                                echo "<option value='".$row['name']."'>".$row['name']."</option>";
                              }
                                ?>
                              </select>
                              
                            </div>
                          </div>
                        </div>
                        </div>
                        <!-- <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Patient Is In Ward?*</label>
                            <div class="col-sm-3">
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="patientward" onclick="check();" id="membershipRadios3" value="Yes">  Yes </label>
                                
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="patientward" onclick ="check();" id="membershipRadios4" value="No" checked> No </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <script>
                        function check()
                        {
                        if(document.getElementById('membershipRadios3').checked == true)
                        {
                          document.getElementById('show').style.display = "inline";
                          document.getElementById('show1').style.display = "inline";
                          document.getElementById('show2').style.display = "inline";
                          document.getElementById('show3').style.display = "inline";
                          document.getElementById('show4').style.display = "inline";
                          document.getElementById('show5').style.display = "inline";
            
                        }
                        }
                        </script>
                        <div class='row'>
                         <div class='col-md-6'>
                           <div class='form-group row'>
                             <label class='col-sm-3 col-form-label' id="show">IMD No.</label>
                             <div class='col-sm-9'>
                                <input type='text' class='form-control' placeholder='Enter IMD No.' name='IMD' id="show1"/>
                             </div>
                           </div>
                         </div>

                         <div class='col-md-6'>
                           <div class='form-group row'>
                             <label class='col-sm-3 col-form-label' id="show2">Ward Number</label>
                             <div class='col-sm-9'>
                             <select class="form-control" name="ward" id="show3">
                            <option selected disabled>Select a Ward</option>
                              <?php
                              include "Master.php";
                              $sql = "select * from ward";
                              $result = mysqli_query($conn,$sql);
                              while($row=mysqli_fetch_array($result))
                              {
                              echo "<option value='".$row['ward_name']."'>".$row['ward_name']."</option>";
                            }
                              ?>
                            </select>
                             </div>
                           </div>
                         </div>
                       </div>
                       <div class='row'>
                         <div class='col-md-6'>
                           <div class='form-group row'>
                             <label class='col-sm-3 col-form-label' id="show4">Date Of Admission</label>
                             <div class='col-sm-9'>
                             <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="DateOfAdmission" id="show5"/>
                           </div>
                           </div>
                         </div> -->

                         <!-- <div class='col-md-6'>
                           <div class='form-group row'>
                             <label class='col-sm-3 col-form-label' id="show2">Ward Number</label>
                             <div class='col-sm-9'>
                             <select class="form-control" name="ward" id="show3">
                            <option selected disabled>Select a Ward</option>
                              
                              include "Master.php";
                              $sql = "select * from ward";
                              $result = mysqli_query($conn,$sql);
                              while($row=mysqli_fetch_array($result))
                              {
                              echo "<option value=".$row['ward_name'].">".$row['ward_name']."</option>";
                            }
                              ?>
                            </select>
                             </div>
                           </div>
                         </div> -->
                       </div>
					  
                      <div class="text-center">
                      <button type="submit" class="btn btn-warning mr-2" name="submit">Submit</button>
                      <button type="reset" class="btn btn-warning mr-2">Cancel</button>
					  
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


<?php
include "footer.php";
?>

<!---------------------foooter------------------------------------------->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
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

