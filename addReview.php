<?php
include_once('classes/initiate.php');
include_once('functions.php');

$fields = array('name','surname','email','subject','rating','category','description','image');
$form = addEmptyFields($fields);
$error = addEmptyFields($fields);

if(isset($_POST['addSubmit'])) {

    $add_ok = true;
    $review = new Reviews();
    $ip = $review->getUserIp();
    $nrImg = '';


    $review->setAllDbParameters($_POST['addName'], $_POST['addSurname'], $_POST['addEmail'], $_FILES['image'], $_POST['star'], $_POST['AddDescription'], $_POST['addCategory'], $ip);

    if (strlen($review->getName()) < 3 || strlen($review->getName()) > 20) {
        $error['name'] = "Pole Imię musi zawierać od 3 do 20 znaków";
        $add_ok = false;
    }
    if (strlen($review->getSurname()) < 3 || strlen($review->getSurname()) > 20) {
        $error['surname'] = "Pole Nazwisko musi zawierać od 3 do 20 znaków";
        $add_ok = false;
    }

    if($review->getEmail() == "")
    {
        $error['email'] = "Pole E-mail nie może być puste";
        $add_ok = false;
    }else {
        $sanitized_email = filter_var($review->getEmail(), FILTER_SANITIZE_EMAIL);
        if ($sanitized_email != filter_var($review->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $error['email'] = "Nieprawidłowy email";
            $add_ok = false;
        }
    }

    if($_FILES['image']['name']!=''){
        if( $_FILES['image']['error'] > 0)
        {
            $error['image'] = "Błąd przy przesyłaniu";
            $add_ok = false;
        }else
            $validExt = array('png','jpg');
            $extension = explode(".", $_FILES['image']['name']);
            $ext = end($extension);

            if((!($_FILES['image']['type'] != 'image/jpg') || ($_FILES['image']['type'] != 'image/png')) && (!in_array($ext,$validExt)))
            {
                $error['image'] = "Nieprawidłowy format";
                $add_ok = false;
            }
        $nrImg = rand(0,100000);
    }
        if($add_ok == true)
        {
            $review->setImageUrl("images/".$nrImg.$_FILES['image']['name']);
            $review->setImageSize($_FILES['image']['size']);
            $review->setImageType($_FILES['image']['type']);
            move_uploaded_file($_FILES['image']['tmp_name'],$review->getImageUrl());
            $review->saveReview();
            header("Location:list_p.php?page=1");
        }
    $form['name']= $review->getName();
    $form['surname']= $review->getSurname();
    $form['description']= $review->getDescription();
    $form['email']= $review->getEmail();
}