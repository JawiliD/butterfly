<?php
include 'config.php';
if(isset($_GET['delete-butterfly-id'])){
    $id=$_GET['delete-butterfly-id'];

    $sql="delete from `butterfly` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:butterfly.php');
    }else{
        die(mysqli_error($con));
    }
}

if(isset($_GET['delete-ltr-id'])){
    $id=$_GET['delete-ltr-id'];

    $sql="delete from `ltr_permit` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:client-application-status.php');
    }else{
        die(mysqli_error($con));
    }
}
?>