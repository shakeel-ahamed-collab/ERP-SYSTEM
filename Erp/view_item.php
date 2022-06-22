<?php
include "database.php";
if(isset($_GET['viewid'])){
    $id=$_GET['viewid'];

    $sql="select * from item where id=$id";
    $res=$db->query($sql);
    {
    echo "<table border=1 border-collapse>
    <tr >
    <th> Id</th>
    <th>Item Code</th>
    <th>Item Name</th>
    <th>Item Category</th>
    <th>Sub Category</th>
    <th>Quantity</th>
    <th>Unit Price</th>
     </tr>
    ";
   
    }
    while( $row=$res->fetch_assoc()){
               
        $item_code=$row['item_code'];
        $item_category=$row['item_category'];
        $item_subcategory=$row['item_subcategory'];
        $item_name=$row['item_name'];
        $quantity=$row['quantity'];
        $unit_price=$row['unit_price'];
        echo '<tr">
        <th scope="row" >'.$id.'</th>
        <td>'.$item_code.'</td>
        <td>'.$item_category.'</td>
        <td>'.$item_subcategory.'</td>
        <td>'.$item_name.'</td>
        <td>'.$quantity.'</td>
        <td>'.$unit_price.'</td>
        </tr>';
        echo "</table>";
    }
}
?>
