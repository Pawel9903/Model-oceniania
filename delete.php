<?php
include_once ("classes/initiate.php");

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $reviews = new Reviews();
    $reviews->deleteReview($_GET['id']);

    header('Location:list_p.php?page=1');
}else{
    header('Location:list_p.php?page=1');
}