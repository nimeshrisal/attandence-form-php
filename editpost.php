<?php
    require_once 'db/conn.php';

    if(!isset($_GET['submit'])){
        //Get values from $_POST operation
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $speciality = $_POST['speciality'];  

        //calling crud function
        $result = $crud->editAttandee($id,$fname,$lname,$dob,$contact,$email,$speciality);

        //Redirect to index.php

        if($result){
            header("Location: viewrecord.php");

        }
        //else{
            //echo"Error";
       // }
    }

else{
    echo "error";
}

?>