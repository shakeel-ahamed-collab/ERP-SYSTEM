<?php
$error="";
include "database.php";

if(isset($_POST['submit'])){
   

  $sql="insert into customer(title,first_name,middle_name,last_name,contact_no,district) values('{$_POST["title"]}','{$_POST["fname"]}','{$_POST["mname"]}',
        '{$_POST["lname"]}','{$_POST["contact"]}','{$_POST["district"]}')";
        
        if(!preg_match("/^([6-9]\d{9})$/",$contact)){
         $error="invalid";
        }
        
        $db->query($sql);
        header('location:customer.php');
}
?>

<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<title>Admin Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="style.css">
		<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	
	
	</head>

	<body>
	
	<?php
    include "sidebar.php";
    ?>
    
    <div class="container my-5">
    <form method="post">
  
    <div class="form-group">
    <label>District</label>
    <select class="form-control" name="title">
        <option value="district">Select Title</option>
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Miss">Miss</option>
        <option value="Dr">Dr</option>
      
    </select>
  </div><br>
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
  </div><br>
  <div class="form-group">
    <label>Middle Name</label>
    <input type="text" class="form-control" name="mname" placeholder="Enter Middle Name" autocomplete="off" required>
  </div><br>
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" autocomplete="off" required>
  </div><br>
  <div class="form-group">
    <label>Contact No</label>
    <input type="text" class="form-control" name="contact" placeholder="Enter Contact" autocomplete="off" pattern="{0-9}{10}" required>
  </div><br>
  <div class="form-group">
    <label>District</label>
    <select class="form-control" name="district">
        <option value="district">Select District</option>
        <option value="1">Colombo</option>
        <option value="2">Kalutara</option>
        <option value="3">Jaffna</option>
        <option value="4">Polonnaruwa</option>
        <option value="5">Badulla</option>
        <option value="6">Galle</option>
        <option value="7">Kurunagala</option>
        <option value="8">Anurathapura</option>
        <option value="9">Trincomale</option>
        <option value="10">Ampara</option>
        <option value="11">Rathnapura</option>
        <option value="12">Puttalam</option>
        <option value="13">Kandy</option>
        <option value="14">Kegalla</option>
        <option value="15">Vavuniya</option>
        <option value="16">Mullaitivu</option>
        <option value="17">Matara</option>
        <option value="18">Gampaha</option>
        <option value="19">Batticlo</option>
        <option value="20">North Central</option>
        <option value="21">North Western</option>
        <option value="22">Matale</option>
        <option value="23">Nuvareliya</option>
        <option value="24">Sabragamuva</option>
        <option value="25">Hambandota</option>
    </select>
  </div><br>
  <button type="submit" name="submit" class="btn btn-success">Create</button>
</form>

    </div>

       
          

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>