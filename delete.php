<?php
include "databaseinfo/Database.php";

$db = new Database();

$id = $_GET['id'];

$query = "delete from marriage_data where id=$id";
$delete =$db->delete($query);

if($delete){
    header("Location:firstpage.php");
}

?>