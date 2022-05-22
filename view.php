<?php 
$title = 'index';
require_once 'includes/header.php';
require_once 'db/conn.php';
 //get attendee by id
 if(!isset($_GET['id'])){
    echo "<h1 class='text-danger'>Please Check the details and try again</h1>";
 }
 else{
    $id = $_GET['id'];
    $result = $crud->getAttendeesDetails($id);
?>
<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"> 
                <?php echo $result['firstname']."  ". $result['lastname'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $result['name']; ?>
            </h6>
            <p class="card-text">
                <?php echo "DOB: ". $result['dob']; ?>
            </p>
            <p class="card-number">
                <?php echo"contact: ". $result['contact']; ?>
            </p>
            <p class="card-text">
                <?php echo"e-Mail: ". $result['email']; ?>
            </p>
            <a href ="edit.php?id= <?php echo $result['id']; ?> " class="btn btn-warning">Edit</a>               
            <a onclick = "return confirm ('Are you sure you want to delete the record.');"
                    href ="delete.php?id= <?php echo $result['id']; ?> " class="btn btn-danger">Delete</a>   
            <a href ="viewrecord.php" class= "btn btn-success">Go back</a>
            
        </div>
    </div>





<?php } ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
