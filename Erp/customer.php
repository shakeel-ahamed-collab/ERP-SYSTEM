<?php
include "database.php";
function countrecord($sql,$db)
{
    $res=$db->query($sql);
    return $res->num_rows;
}

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
 <button class="btn btn-primary my-5"><a href="addcustomer.php" style="color:white;text-decoration:none">Add Customer</a></button>
       <table class="table table-striped table-light">
  <thead>
    <tr class="table-warning">
    <th scope="col"> Id</th>
      <th scope="col">Title</th>
      <th scope="col">First Name</th>
      <th scope="col">Middel Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Contact No</th>
      <th scope="col">District</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

   
  <?php

               $sql="select * from customer";
               $res=$db->query($sql);
               if($res)
               
               {
                while( $row=$res->fetch_assoc()){
               
                    $id=$row['id'];
                    $title=$row['title'];
                    $first_name=$row['first_name'];
                    $middle_name=$row['middle_name'];
                    $last_name=$row['last_name'];
                    $contact_no=$row['contact_no'];
                    $district=$row['district'];
                    echo '<tr class="table-warning">
                    <th scope="row" >'.$id.'</th>
                    <td>'.$title.'</td>
                    <td>'.$first_name.'</td>
                    <td>'.$middle_name.'</td>
                    <td>'.$last_name.'</td>
                    <td>'.$contact_no.'</td>
                    <td>'. $district.'</td>
                    <td >
                       <button class="btn btn-info"><a href="view.php?viewid='.$id.'" style="color:black;text-decoration:none">View</a></button>
                       <button class="btn btn-warning"><a href="update.php?updateid='.$id.'"style="color:black;text-decoration:none" >Update</a></button>
                       <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"style="color:black;text-decoration:none" >Delete</a></button>
                   </td>
                  </tr>';
                }
               
                
               }
              
               ?>
            
 
 </div>
    
    </body>  
</html>