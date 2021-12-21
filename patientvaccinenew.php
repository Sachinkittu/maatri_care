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
   <style>
   #show1{
       display : none;
   }
   #show11{
       display : none;
   }
   #show12{
       display : none;
   }
   #show13{
       display : none;
   }
   #show14{
       display : none;
   }
   #show2{
       display : none;
   }
   #show3{
       display : none;
   }
   #show4{
       display : none;
   }
   #show5{
       display : none;
   }
   #show6{
       display : none;
   }
   #show7{
       display : none;
   }
   #show8{
       display : none;
   }
   #show9{
       display : none;
   }
    </style>

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
echo "<form action='patientvaccineinsert.php' method='POST'>
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
                              <input type='text' class='form-control' name='umrno' value=".$row['umrno']." disabled/>
                              <input type='text' value=".$row['umrno']." name='umrno' class='form-control' hidden/>
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Regdt.</label>
                            <div class='col-sm-9'>
                             <input type='text' class='form-control' name='RegistrationDate' value=".$row['RegistrationDate']." disabled/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Patient Name*</label>
                            <div class='col-sm-9'>
                              <input type='text' class='form-control' placeholder='Enter Patient Name' size='70' name='PatientName' disabled value=".$row['PatientName']." >
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Age</label>
                            <div class='col-sm-9'>
                             <input type='number' class='form-control' maxlength='70' placeholder='Age..' name='Age' value=".$row['Age']." disabled/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class='row'>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Husband Name</label>
                            <div class='col-sm-9'>
                              <input type='text' class='form-control' placeholder='HusbandName' name='HusbandName' value=".$row['HusbandName']." disabled/>
                            </div>
                          </div>
                        </div>
                        <div class='col-md-6'>
                          <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Mobile Number</label>
                            <div class='col-sm-9'>
                            <input type='text' class='form-control' placeholder = 'Enter a Mobile Number' name='MobileNumber'  value=".$row['MobileNumber']." disabled/>
                              
                            </div>
                          </div>
                        </div>
                        </div>
                        <div class='row'>
                        <div class='col-md-6'>
                        <div class='form-group row'>
                            <label class='col-sm-3 col-form-label'>Address</label>
                            <div class='col-sm-9'>
                            <input type='text' class='form-control' placeholder = 'Address' name='address' value=$address".$row['Village'].",".$row['City'].",".$row['District'].",".$row['State']." disabled/>

                            </div>
                        </div>
                        </div>
                        </div>
                      <br><br>




                

					  
					  
<h4 class='card-title'>Patient Investigation (By Month)</h4><br>
<div class='row'>
                        <div class='col-md-3'>
                          <div class='form-group row'>
                            <label class='col-sm-10 col-form-label'>Choose Month</label>
                            </div>
                            </div>
                            <div class='col-md-3'>
                            <div class='form-group-row'>
                            <select class='form-control'>
                            <option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>
                            <option value='4'>4</option>
                            <option value='5'>5</option>
                            <option value='6'>6</option>
                            <option value='7'>7</option>
                            <option value='8'>8</option>
                            <option value='9'>9</option>
                            </select>
                            </div>
                            </div>
                            
                          <div class='col-md-3'>
                          <div class='form-group row'>
                          <input type='button' onclick='show();' value='Add New Row'>
                            
                            </div>
                          </div>
                          </div>
                         
                             
                          
                    
                    <div class='row'>
                        <div class='col-md-1'>
                          <div class='form-group row'>
                            <label class='col-sm-10 col-form-label' id='show1'>1</label>
                            
                            </div>
                          </div>
                          <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                            
                            <select class='form-control' name='doctor_name1' id='show11'>
                            <option selected>".$row['doctor_name1']."</option>";
                              
                              include 'Master.php';
                              $sql1 = 'select * from doctor';
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo '<option value='.$row1['doctor_name'].'>'.$row1['doctor_name'].'</option>';
                            }
                              
                            echo "</select>
                            
                          </div>
                            
                            </div>
                          </div>

                        <div class='col-md-3'>
                          <div class='form-group row'>
                           
                            <div class='col-sm-9'>
                            <select  data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control'  name='FirstMonth[]' >
    <option selected>".$row['FirstMonth']."</option>";
    
    include 'Master.php';
    $sql1= 'select * from test';
    $result1 = mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
      echo '
    <option value='.$row1['test_name'].'>'.$row1['test_name'].'</option>';
    }
  
  echo "</select>
                              <!-- <input type='text' class='form-control' name='FirstMonth'/> -->
                            </div>
                          </div>
                        </div>
                        <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                          <input type='text' class='form-control' name='remark1' placeholder='Remarks' id='show13' value=".$row['remark1'].">
                          </div>
                          </div>
                          </div>
                       
                      <div class='col-md-2'>
                          <div class='form-group row'>
                            
                            <div class='col-sm-10'>
                            <input type='date' class='form-control' name='DateOfFirst' id='show14' value=".$row['DateOfFirst']." >
                            </div>
                          </div>
                        </div>
                      </div>

                        <div class='row' id='show2'>
                        <div class='col-md-1'>
                          <div class='form-group row'>
                            <label class='col-sm-10 col-form-label'>2</label>
                            
                            </div>
                          </div>
                          <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                            
                            <select class='form-control' name='doctor_name2'>
                            <option selected>".$row['doctor_name2']."</option>";
                              
                              include 'Master.php';
                              $sql1 = 'select * from doctor';
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo '<option value='.$row1['doctor_name'].'>'.$row1['doctor_name'].'</option>';
                            }
                              
                            echo "</select>
                            
                          </div>
                            
                            </div>
                          </div>

                       

                        <div class='col-md-3'>
                          <div class='form-group row'>
                           
                            <div class='col-sm-9'>
                            <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='SecondMonth[]'>
    <option selected>".$row['SecondMonth']."</option>";
    
    include 'Master.php';
    $sql1= 'select * from test';
    $result1 = mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
      echo '
    <option value='.$row1['test_name'].'>'.$row1['test_name'].'</option>';
    }
  
  echo "</select>
                              <!-- <input type='text' class='form-control' name='SecondMonth'/> -->
                            </div>
                          </div>
                        </div>
                        <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                          <input type='text' class='form-control' name='remark2' placeholder='Remarks' value=".$row['remark2']." >
                          </div>
                          </div>
                          </div>
                          
                       
                      <div class='col-md-2'>
                          <div class='form-group row'>
                            
                            <div class='col-sm-10'>
                            <input type='date' class='form-control' name='DateOfSecond' value=".$row['DateOfSecond']." >
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class='row' id='show3'>
                        <div class='col-md-1'>
                          <div class='form-group row'>
                            <label class='col-sm-10 col-form-label'>3</label>
                            
                            </div>
                          </div>
                          <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                            
                            <select class='form-control' name='doctor_name3' >
                            <option selected>".$row['doctor_name3']."</option>";
                              
                              include 'Master.php';
                              $sql1 = 'select * from doctor';
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo '<option value='.$row1['doctor_name'].'>'.$row1['doctor_name'].'</option>';
                            }
                              
                            echo "</select>
                            
                          </div>
                            
                            </div>
                          </div>

                        <div class='col-md-3'>
                          <div class='form-group row'>
                           
                            <div class='col-sm-9'>
                            <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='ThirdMonth[]'>
                            <option selected>".$row['ThirdMonth']."</option>";
    
    include 'Master.php';
    $sql1= 'select * from test';
    $result1 = mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
      echo '
    <option value='.$row1['test_name'].'>'.$row1['test_name'].'</option>';
    }
  
  echo "</select>
                              <!-- <input type='text' class='form-control' name='ThirdMonth'/> -->
                            </div>
                          </div>
                        </div>
                        <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                          <input type='text' class='form-control' name='remark3' placeholder='Remarks' value=".$row['remark3'].">
                          </div>
                          </div>
                          </div>
                       
                      <div class='col-md-2'>
                          <div class='form-group row'>
                            
                            <div class='col-sm-10'>
                            <input type='date' class='form-control' name='DateOfThird' value=".$row['DateOfThird']." >
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class='row' id='show4'>
                        <div class='col-md-1'>
                          <div class='form-group row'>
                            <label class='col-sm-10 col-form-label'>4</label>
                            
                            </div>
                          </div>
                          <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                            
                            <select class='form-control' name='doctor_name4'>
                            <option selected>".$row['doctor_name4']."</option>";
                              
                              include 'Master.php';
                              $sql1 = 'select * from doctor';
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo '<option value='.$row1['doctor_name'].'>'.$row1['doctor_name'].'</option>';
                            }
                              
                            echo "</select>
                            
                          </div>
                            
                            </div>
                          </div>
                       

                        <div class='col-md-3'>
                          <div class='form-group row'>
                           
                            <div class='col-sm-9'>
                            <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='FourthMonth[]'>
                            <option selected>".$row['FourthMonth']."</option>";
    
    include 'Master.php';
    $sql1= 'select * from test';
    $result1 = mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
      echo '
    <option value='.$row1['test_name'].'>'.$row1['test_name'].'</option>';
    }
  
 echo "</select>
                              <!-- <input type='text' class='form-control' name='FourthMonth'/> -->
                            </div>
                          </div>
                        </div>
                        <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                          <input type='text' class='form-control' name='remark4' placeholder='Remarks' value=".$row['remark4'].">
                          </div>
                          </div>
                          </div>
                          
                       
                      <div class='col-md-2'>
                          <div class='form-group row'>
                            
                            <div class='col-sm-10'>
                            <input type='date' class='form-control' name='DateOfFourth' value=".$row['DateOfFourth']." >
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class='row' id='show5'>
                        <div class='col-md-1'>
                          <div class='form-group row'>
                            <label class='col-sm-10 col-form-label'>5</label>
                            
                            </div>
                          </div>
                          <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                            
                            <select class='form-control' name='doctor_name5'>
                            <option selected>".$row['doctor_name5']."</option>";
                              
                              include 'Master.php';
                              $sql1 = 'select * from doctor';
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo '<option value='.$row1['doctor_name'].'>'.$row1['doctor_name'].'</option>';
                            }
                              
                            echo "</select>
                            
                          </div>
                            
                            </div>
                          </div>

                        <div class='col-md-3'>
                          <div class='form-group row'>
                           
                            <div class='col-sm-9'>
                            <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='FifthMonth[]'>
                            <option selected>".$row['FifthMonth']."</option>";
    
    include 'Master.php';
    $sql1= 'select * from test';
    $result1 = mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
      echo '
    <option value='.$row1['test_name'].'>'.$row1['test_name'].'</option>';
    }
  
  echo "</select>
                              <!-- <input type='text' class='form-control' name='FifthMonth'/> -->
                            </div>
                          </div>
                        </div>
                        <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                          <input type='text' class='form-control' name='remark5' placeholder='Remarks' value=".$row['remark5'].">
                          </div>
                          </div>
                          </div>
                          
                       
                      <div class='col-md-2'>
                          <div class='form-group row'>
                            
                            <div class='col-sm-10'>
                            <input type='date' class='form-control' name='DateOfFifth' value=".$row['DateOfFifth']." >
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class='row' id='show6'>
                        <div class='col-md-1'>
                          <div class='form-group row'>
                            <label class='col-sm-10 col-form-label'>6</label>
                            
                            </div>
                          </div>
                          <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                            
                            <select class='form-control' name='doctor_name6'>
                            <option selected>".$row['doctor_name6']."</option>";
                              
                              include 'Master.php';
                              $sql1 = 'select * from doctor';
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo '<option value='.$row1['doctor_name'].'>'.$row1['doctor_name'].'</option>';
                            }
                              
                            echo "</select>
                            
                          </div>
                            
                            </div>
                          </div>
                       

                        <div class='col-md-3'>
                          <div class='form-group row'>
                           
                            <div class='col-sm-9'>
                            <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='SixMonth[]'>
                            <option selected>".$row['SixMonth']."</option>";
    
    include 'Master.php';
    $sql1= 'select * from test';
    $result1 = mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
      echo '
    <option value='.$row1['test_name'].'>'.$row1['test_name'].'</option>';
    }
  
  echo "</select>
                              <!-- <input type='text' class='form-control' name='SixMonth'/> -->
                            </div>
                          </div>
                        </div>
                        <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                          <input type='text' class='form-control' name='remark6' placeholder='Remarks' value=".$row['remark6'].">
                          </div>
                          </div>
                          </div>
                          
                       
                      <div class='col-md-2'>
                          <div class='form-group row'>
                            
                            <div class='col-sm-10'>
                            <input type='date' class='form-control' name='DateOfSix' value=".$row['DateOfSix']." >
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class='row' id='show7'>
                        <div class='col-md-1'>
                          <div class='form-group row'>
                            <label class='col-sm-10 col-form-label'>7</label>
                            
                            </div>
                          </div>
                          <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                            
                            <select class='form-control' name='doctor_name7'>
                            <option selected>".$row['doctor_name7']."</option>";
                              
                              include 'Master.php';
                              $sql1 = 'select * from doctor';
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo '<option value='.$row1['doctor_name'].'>'.$row1['doctor_name'].'</option>';
                            }
                            
                            echo "</select>
                            
                          </div>
                            
                            </div>
                          </div>

                        <div class='col-md-3'>
                          <div class='form-group row'>
                           
                            <div class='col-sm-9'>
                            <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='SevenMonth[]'>
                            <option selected>".$row['SevenMonth']."</option>";
    
    include 'Master.php';
    $sql1= 'select * from test';
    $result1 = mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
      echo '
    <option value='.$row1['test_name'].'>'.$row1['test_name'].'</option>';
    }
  
  echo "</select>
                              <!-- <input type='text' class='form-control' name='SevenMonth'/> -->
                            </div>
                          </div>
                        </div>
                        <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                          <input type='text' class='form-control' name='remark7' placeholder='Remarks' value=".$row['remark7'].">
                          </div>
                          </div>
                          </div>
                          
                       
                      <div class='col-md-2'>
                          <div class='form-group row'>
                            
                            <div class='col-sm-10'>
                            <input type='date' class='form-control' name='DateOfSeven' value=".$row['DateOfSeven']." >
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class='row' id='show8'>
                        <div class='col-md-1'>
                          <div class='form-group row'>
                            <label class='col-sm-10 col-form-label'>8</label>
                            
                            </div>
                          </div>
                          <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                            
                            <select class='form-control' name='doctor_name8'>
                            <option selected>".$row['doctor_name8']."</option>";
                              
                              include 'Master.php';
                              $sql1 = 'select * from doctor';
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo '<option value='.$row1['doctor_name'].'>'.$row1['doctor_name'].'</option>';
                            }
                              
                            echo "</select>
                            
                          </div>
                            
                            </div>
                          </div>

                        <div class='col-md-3'>
                          <div class='form-group row'>
                           
                            <div class='col-sm-9'>
                            <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='EightMonth[]'>
                            <option selected>".$row['EightMonth']."</option>";

    include 'Master.php';
    $sql1= 'select * from test';
    $result1 = mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
      echo '
    <option value='.$row1['test_name'].'>'.$row1['test_name'].'</option>';
    }
  
  echo "</select>
                              <!-- <input type='text' class='form-control' name='EightMonth'/> -->
                            </div>
                          </div>
                        </div>
                        <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                          <input type='text' class='form-control' name='remark8' placeholder='Remarks' value=".$row['remark8'].">
                          </div>
                          </div>
                          </div>
                          
                       
                      <div class='col-md-2'>
                          <div class='form-group row'>
                            
                            <div class='col-sm-10'>
                            <input type='date' class='form-control' name='DateOfEight' value=".$row['DateOfEight']." >
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class='row' id='show9'>
                        <div class='col-md-1'>
                          <div class='form-group row'>
                            <label class='col-sm-10 col-form-label'>9</label>
                            
                            </div>
                          </div>
                          <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                            
                            <select class='form-control' name='doctor_name9'>
                            <option selected>".$row['doctor_name9']."</option>";
                              
                              include 'Master.php';
                              $sql1 = 'select * from doctor';
                              $result1 = mysqli_query($conn,$sql1);
                              while($row1=mysqli_fetch_array($result1))
                              {
                              echo '<option value='.$row1['doctor_name'].'>'.$row1['doctor_name'].'</option>';
                            }
                              
                            echo "</select>
                            
                          </div>
                            
                            </div>
                          </div>
                       

                        <div class='col-md-3'>
                          <div class='form-group row'>
                           
                            <div class='col-sm-9'>
                            <select data-placeholder='Begin typing a name to filter...' multiple class='chosen-select form-control' name='NinthMonth[]'>
                            <option selected>".$row['NinthMonth']."</option>";
    
    include 'Master.php';
    $sql1= 'select * from test';
    $result1 = mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1))
    {
      echo '
    <option value='.$row1['test_name'].'>'.$row1['test_name'].'</option>';
    }
  
  echo "</select>
                              <!-- <input type='text' class='form-control' name='NinthMonth'/> -->
                            </div>
                          </div>
                        </div>
                        <div class='col-md-3'>
                          <div class='form-group row'>
                          <div class='col-sm-9'>
                          <input type='text' class='form-control' name='remark9' placeholder='Remarks' value=".$row['remark9'].">
                          </div>
                          </div>
                          </div>
                          
                       
                      <div class='col-md-2'>
                          <div class='form-group row'>
                            
                            <div class='col-sm-10'>
                            <input type='date' class='form-control' name='DateOfNinth' value=".$row['DateOfNinth']." >
                            </div>
                          </div>
                        </div>
                      </div><br>
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
?>
<!---------------------foooter------------------------------------------->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
                            <script>
                              function show() {

                                  document.getElementById('show1').style.display='inline';
                                  document.getElementById('show11').style.display='inline';
                                  document.getElementById('show12').style.display='inline';
                                  document.getElementById('show13').style.display='inline';
                                  document.getElementById('show14').style.display='inline';
                                  document.getElementById('show15').style.display='inline';
                                  
                              }

                              </script>
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
}
}
else 
{
   header('Location:login.php');
}
?>

