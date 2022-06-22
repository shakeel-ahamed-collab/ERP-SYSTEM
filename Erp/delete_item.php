<?php
include "database.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from item where id=$id";
    $res=$db->query($sql);
    header('location:item.php');
}
?>