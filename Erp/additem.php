<?php
include "database.php";

if(isset($_POST['submit'])){
   

  $sql="insert into item(item_code,item_category,item_subcategory,item_name,quantity,unit_price) values('{$_POST["item_code"]}','{$_POST["category"]}','{$_POST["sub_category"]}',
  '{$_POST["item_name"]}', '{$_POST["quantity"]}','{$_POST["unit_price"]}')";
      
        $db->query($sql);
        header('location:item.php');
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
    <label >Item Code</label>
    <input type="text" class="form-control" name="item_code" placeholder=" Enter Item Code" autocomplete="off" required >
    
  </div><br>
   <div class="form-group">
    <label>Item Category</label>
    <select class="form-control" name="category">
        <option value="Select Category">Select Category</option>
        <option value="1">Printers</option>
        <option value="2">Laptops</option>
        <option value="3">Gadjets</option>
        <option value="4">Ink Bottles</option>
        <option value="5">Cartridges</option>   
        
    </select>
  </div><br>
  <div class="form-group">
    <label>Item Category</label>
    <select class="form-control" name="sub_category">
        <option value="Select Sub Category">Select Sub Category</option>
        <option value="1">HP</option>
        <option value="2">Dell</option>
        <option value="3">Lenova</option>
        <option value="4">Acer</option>
        <option value="5">Samsung</option>   
        
    </select>
  </div><br>
  <div class="form-group">
    <label>Item Name</label>
    <input type="text" class="form-control" name="item_name" placeholder=" Enter Item Name" required>
  </div><br>
  <div class="form-group">
    <label>Quantity</label>
    <input type="number" class="form-control" name="quantity" placeholder="Enter Quantity" required>
  </div><br>
  <div class="form-group">
    <label>Unit Price</label>
    <input type="number" class="form-control" name="unit_price" placeholder="Enter Unit Price" required>
  </div><br>
  <button type="submit" name="submit" class="btn btn-success">Create</button>
</form>

    </div>

       
          

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>