<?php
include "database.php";
$id=$_GET['updateid'];
$sql="select * from customer where id=$id";
$res=$db->query($sql);
$row=$res->fetch_assoc();
$title=$row['title'];
$first_name=$row['first_name'];
$middle_name=$row['middle_name'];
$last_name=$row['last_name'];
$contact_no=$row['contact_no'];
$district=$row['district'];
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $first_name=$_POST['first_name'];
    $middle_name=$_POST['middle_name'];
    $last_name=$_POST['last_name'];
    $contact_no=$_POST['contact_no'];
    $district=$_POST['district'];

   
    $sql="update customer set id=$id,title='$title',first_name='$first_name',middle_name='$middle_name',last_name='$last_name',contact_no='$contact_no',district='$district' where id=$id";
   
                    $db->query($sql);
					header('location:customer.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Crud Operation</title>
</head>
<body>
<div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Tilte" autocomplete="off" required value=<?php echo $title;?> >
    
  </div><br>
  <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required value=<?php echo $first_name;?>>
  </div><br>
  <div class="form-group">
    <label>Middle Name</label>
    <input type="text" class="form-control" name="middle_name" placeholder="Enter Middle Name" autocomplete="off" required value=<?php echo $middle_name;?>>
  </div><br>
  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" autocomplete="off" required value=<?php echo $last_name;?>>
  </div><br>
  <div class="form-group">
    <label>Contact No</label>
    <input type="text" class="form-control" name="contact_no" placeholder="Enter Contact" autocomplete="off" required value=<?php echo $contact_no;?>>
  </div><br>
  <div class="form-group">
    <label>District</label>
    <select class="form-control" name="district" value=<?php echo $district;?>>
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
  <button type="submit" name="submit" class="btn btn-success">Update</button>
</form>

    </div>

        <script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script src="js/main.js"></script>
</body>
</html>