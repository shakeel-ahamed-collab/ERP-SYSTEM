<?php
include "database.php";



?>


<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<title>Admin Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="style.css">
		<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	
	
	</head>

	<body>
	
	<?php
    include "sidebar.php";
    ?>
      <div class="container my-5">
      <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group"><br>
                                      <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
          

      </div>
      <?php
      if(isset($_GET['from_date']) && isset($_GET['to_date']))
{
    $from_date = $_GET['from_date'];
    $to_date = $_GET['to_date'];

    $sql = "SELECT * FROM invoice WHERE date BETWEEN '$from_date' AND '$to_date' AND ";
    $res=$db->query($sql);
               if($res->num_rows>0)
               {
                  echo "<table border=1 border-collapse>
                  <tr>
                  <th>Invoice No</th>
                  <th>Date</th>
                  <th>Customer</th>
                  <th>Item Count</th>
                  <th>Invoice Amount</th>
                  <th>Customer District</th>
                  </tr>
                  ";
               
                    
                  while( $row=$res->fetch_assoc())
                  {
                      echo "<tr>";
                     
                      echo"<td>{$row["invoice_no"]}</td>";
                      echo"<td>{$row["date"]}</td>";
                      echo"<td>{$row["customer"]}</td>";
                      echo"<td>{$row["item_count"]}</td>";
                      echo"<td>{$row["amount"]}</td>";
                     
                      echo "</tr>";
                      
                  }
                  echo "</table>";
                 
               
    }
    else{
    
        echo "<p>No Record Found</P>";
    }
}
	?>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>