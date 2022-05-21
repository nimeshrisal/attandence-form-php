<?php 
$title = 'success';
require_once 'includes/header.php';
require_once 'db/conn.php';

    if(!isset($_GET['submit'])){
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $contact = $_POST['phone'];
        $email = $_POST['email'];
        $speciality = $_POST['speciality'];

        //Call function to insert and track if success or not
        $isSuccess = $crud->insert($fname,$lname,$dob,$email,$contact,$speciality);

        if($isSuccess)
        {
            echo "<h1 class ='test-center text-success'> You have been registered! </h1>";
        }
        else
        {
            echo"<h1 class ='text-center text-danger'> Error !! </h1>";
        }
    }
 ?>
    

<!-- 
    
                        GET METHOD of PHP
    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> 
                <?php //echo $_GET['firstname']."  ". $_GET['lastname']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php // echo $_GET['speciality']; ?>
            </h6>
            <p class="card-text">
                <?php //echo "DOB: ". $_GET['dob']; ?>
            </p>
            <p class="card-number">
                <?php //echo"contact: ". $_GET['number']; ?>
            </p>
            <p class="card-text">
                <?php //echo"e-Mail: ". $_GET['email']; ?>
            </p>
        </div>
    </div>
-->
    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> 
                <?php echo $_POST['firstname']."  ". $_POST['lastname'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_POST['speciality']; ?>
            </h6>
            <p class="card-text">
                <?php echo "DOB: ". $_POST['dob']; ?>
            </p>
            <p class="card-number">
                <?php echo"contact: ". $_POST['phone']; ?>
            </p>
            <p class="card-text">
                <?php echo"e-Mail: ". $_POST['email']; ?>
            </p>
        </div>
    </div>
    
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>