<?php
include "database.php";
if(isset($_GET['viewid'])){
    $id=$_GET['viewid'];

    $sql="select * from customer where id=$id";
    $res=$db->query($sql);
    {
    echo "<table border=1 border-collapse>
    <tr >
    <th>Id</th>
    <th>title</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>Contact</th>
    <th>District</th>
     </tr>
    ";
   
    }
    while( $row=$res->fetch_assoc()){
               
        $id=$row['id'];
        $title=$row['title'];
        $first_name=$row['first_name'];
        $middle_name=$row['middle_name'];
        $last_name=$row['last_name'];
        $contact_no=$row['contact_no'];
        $district=$row['district'];
        echo '<tr">
        <th scope="row" >'.$id.'</th>
        <td>'.$title.'</td>
        <td>'.$first_name.'</td>
        <td>'.$middle_name.'</td>
        <td>'.$last_name.'</td>
        <td>'.$contact_no.'</td>
        <td>'. $district.'</td>
        </tr>';
        echo "</table>";
    }
}
?>
