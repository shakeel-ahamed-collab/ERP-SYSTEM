<?php
include "database.php";
function countrecord($sql,$db)
{
    $res=$db->query($sql);
    return $res->num_rows;
}
?>

<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<title>Admin Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="style.css">
		<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	
	
	</head>

	<body>
	
	<?php
    include "sidebar.php";
    ?>
	<div class="content">
        <div class="cards">
            <div class="card">
                <h1>Customers</h1>
                <div class="box">
                    <h1> <?php echo countrecord("select * from customer",$db); ?></h1>
                </div>
                <div class="icon-case">
                    <img src="img/cutomer.png" alt="" height="80px" width="80px">
                </div>
            </div>

            <div class="card">
            <h1>Items</h1>
                <div class="box">
                    <h1> <?php echo countrecord("select * from item",$db); ?> </h1>
                </div>
                <div class="icon-case">
                    <img src="img/item.png" alt="" height="80px" width="80px">
                </div>
            </div>
            <div class="card">
            <h1>Districts</h1>
                <div class="box">
                    <h1> <?php echo countrecord("select * from district",$db); ?></h1>
                </div>
                <div class="icon-case">
                    <img src="img/area.png" alt="" height="80px" width="80px">
                </div>
            </div>
        </div>
    </div>
       
          

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>