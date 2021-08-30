<?php
$id = $_GET['id'];
require_once 'include/db.php';
$sql = "SELECT * FROM allads WHERE id='$id' ";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_array($result);
$deletable_img = $row['image'];
if(!empty($deletable_img)){
    unlink("image/".$deletable_img);
}
$delete_sql = "DELETE FROM allads WHERE id='$id'";
if(mysqli_query($connection,$delete_sql)){
    header('Location: ads_list.php');
} 

?>