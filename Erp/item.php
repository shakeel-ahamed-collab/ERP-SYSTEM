<?php
include "database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- CSS only -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
       <script src="https://kit.fontawesome.com/ee933e84b7.js" crossorigin="anonymous"></script>
        
   <title>Erp System</title>

</head>
<body>
<?php
 include "sidebar.php";
  ?>
  
 <div class="container">
 <button class="btn btn-primary my-5"><a href="additem.php" style="color:white;text-decoration:none">Add Item</a></button>
       <table class="table table-striped table-light">
  <thead>
    <tr class="table-warning">
    <th scope="col"> Id</th>
      <th scope="col">Item Code</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Category</th>
      <th scope="col">Sub Category</th>
      <th scope="col">Quantity</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

   
  <?php

               $sql="select * from item";
               $res=$db->query($sql);
               if($res)
               
               {
                while( $row=$res->fetch_assoc()){
               
                    $id=$row['id'];
                    $item_code=$row['item_code'];
                    $item_name=$row['item_name'];
                    $item_category=$row['item_category'];
                    $item_subcategory=$row['item_subcategory'];
                    $quantity=$row['quantity'];
                    $unit_price=$row['unit_price'];
                    echo '<tr class="table-warning">
                    <th scope="row" >'.$id.'</th>
                    <td>'.$item_code.'</td>
                    <td>'.$item_name.'</td>
                    <td>'.$item_category.'</td>
                    <td>'.$item_subcategory.'</td>
                    <td>'.$quantity.'</td>
                    <td>'.$unit_price.'</td>
                    <td >
                       <button class="btn btn-info"><a href="view_item.php?viewid='.$id.'" style="color:black;text-decoration:none">View</a></button>
                       <button class="btn btn-warning"><a href="update_item.php?updateid='.$id.'"style="color:black;text-decoration:none" >Update</a></button>
                       <button class="btn btn-danger"><a href="delete_item.php?deleteid='.$id.'"style="color:black;text-decoration:none" >Delete</a></button>
                   </td>
                  </tr>';
                }
               
                
               }
              
               ?>
            
 
 </div>
    
    </body>  
</html>