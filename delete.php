<?php
    require_once 'db/conn.php';
    require_once 'includes/auth_check.php';
    if(!$_GET['id']){

        echo 'Error';

    }
    else{

        //Get ID values
        $id = $_GET['id'];

        //Call Delete function
            $result = $crud->deleteAttandee($id);

        //Redirect to list 
        if($result){
            header('Location: viewrecord.php');
        }
        else{
            echo "Error";
        }
    }
?>