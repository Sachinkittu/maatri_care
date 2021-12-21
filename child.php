<?php
  session_start();
  if(isset($_SESSION['UserID']))
  {

include "header.php";
?>


<form action="insert.php" method="POST">
<!-------------------------------------------------------------------------------------->
<div class="row">
	<div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Child Details</h4>

                    <form class="form-sample">
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">UMR No.</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" placeholder="UMR No." name="umrno" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Registration Date</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="RegistrationDate" value="<?php echo date('Y/m/d') ;?>" disabled/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Baby Name</label>
                            <div class="col-sm-9">
                               <input type="text" class="form-control" placeholder="Enter baby name" name="babyname" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date Of Delivery</label>
                            <div class="col-sm-9">
                            <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="DateOfDelivery" required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-9">
                            <select class="form-control" name="Gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                              </select>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mother Name</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Mother's Name" name="MotherName" required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Father Name</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Father's Name" name="FatherName" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Age</label>
                             <div class="col-sm-9">
                             <input type="text" class="form-control" placeholder="Age" name="Age" required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Delivery Status</label>
                            <div class="col-sm-9">
                            <select class="form-control" name="deliverystatus">
                            <option selected disabled>Choose Delivery Status</option>
                            <option value="normal">Normal</option>
                            <option value="operation">Operation</option>
                            </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Weight</label>
                             <div class="col-sm-9">
                                  <input type="text" class="form-control" placeholder="Weight" name="Weight"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mobile Number</label>
                            <div class="col-sm-9">
                                  <input type="text" class="form-control" placeholder="Mobile Number" name="MobileNumber"/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Remarks</label>
                             <div class="col-sm-9">
                              <input type="text" name="Remarks" placeholder="Remarks" class="form-control">
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Doctor Name</label>
                            <div class="col-sm-9">
                            <select class="form-control" name="doctor_name">
                            <option selected disabled>Select a Doctor</option>
                              <?php
                              include "Master.php";
                              $sql = "select * from doctor";
                              $result = mysqli_query($conn,$sql);
                              while($row=mysqli_fetch_array($result))
                              {
                              echo "<option value='".$row['doctor_name']."'>".$row['doctor_name']."</option>";
                            }
                              ?>
                            </select>
                            
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Delivery Location</label>
                            <div class="col-sm-9">
                            <select class="form-control" name="deliverylocation">
                            <option selected disabled>Choose Delivery Location</option>
                            <option value="inside">Inside</option>
                            <option value="outside">Outside</option>
                            </select>
                            
                            </div>
                          </div>
                        </div>
                      </div><br><br>






  
</table>
</div>
  </div></br></br>
                     
                      
                      <div class="text-center">
                      <button type="submit" class="btn btn-warning mr-2" name="submit">Submit</button>
                      <button type="reset" class="btn btn-warning mr-2">Cancel</button>
					  
					  </div><br>
                    </form></div>
                </div>
              </div>
            </div>
          </div>

</div>
</div>

<a href='index.php'><button style='width:100%;' class='btn btn-warning mr-2'>Back</button></a>
<?php
include "footer.php";
?>
</form>
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
