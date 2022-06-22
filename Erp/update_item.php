<?php
include "database.php";
$id=$_GET['updateid'];
$sql="select * from item where id=$id";
$res=$db->query($sql);
$row=$res->fetch_assoc();
$item_code=$row['item_code'];
$item_category=$row['item_category'];
$item_subcategory=$row['item_subcategory'];
$item_name=$row['item_name'];
$quantity=$row['quantity'];
$unit_price=$row['unit_price'];
if(isset($_POST['submit'])){
    $item_code=$_POST['item_code'];
    $item_category=$_POST['category'];
    $item_subcategory=$_POST['sub_category'];
    $item_name=$_POST['item_name'];
    $quantity=$_POST['quantity'];
    $unit_price=$_POST['unit_price'];

   
    $sql="update item set id=$id,item_code='$item_code',item_category='$item_category',item_subcategory='$item_subcategory',item_name='$item_name',quantity='$quantity',unit_price='$unit_price' where id=$id";
   
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
    <input type="text" class="form-control" name="item_code" placeholder=" Enter Item Code" autocomplete="off" required value=<?php echo $item_code;?> >
    
  </div><br>
   <div class="form-group">
    <label>Item Category</label>
    <select class="form-control" name="category" value=<?php echo $item_category;?>>
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
    <select class="form-control" name="sub_category" value=<?php echo $item_subcategory;?>>
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
    <input type="text" class="form-control" name="item_name" placeholder=" Enter Item Name" required value=<?php echo $item_name;?>>
  </div><br>
  <div class="form-group">
    <label>Quantity</label>
    <input type="number" class="form-control" name="quantity" placeholder="Enter Quantity" required value=<?php echo $quantity;?>>
  </div><br>
  <div class="form-group">
    <label>Unit Price</label>
    <input type="number" class="form-control" name="unit_price" placeholder="Enter Unit Price" required value=<?php echo $unit_price;?>>
  </div><br>
  <button type="submit" name="submit" class="btn btn-success">Update</button>
</form>

    </div>

       
          

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>