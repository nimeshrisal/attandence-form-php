
<?php 
$title = 'index';
require_once 'includes/header.php';
require_once 'db/conn.php';
//Get all attendees
$results = $crud->getSpecialities();
 ?>
    <!--
        -First name
        -Last name
        -Date of Birth
        -Speciality (Software Developer, DevOps, Database, other )
        -Contact Number
        -Email Address
-->

    <h1 class="text-center"> Registration for IT Conference</h1>
    
    <form method="post" action="success.php">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control"  placeholder="Enter your first name" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control"  placeholder="Enter your last name" name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="Date" class="form-control" name="dob" placeholder="Date of Birth">
        </div>        
        <div class="mb-3">
            <label for="speciality" class="form-label">Speciality</label>
            <select class="form-select" aria-label="Default select example" name="speciality">
             <?php while($r=$results->fetch(PDO::FETCH_ASSOC)){?>

                <option value="<?php echo $r['speciality_id'];?>"><?php echo $r['name'];?></option>

              <?php }?>  
\                   
            </select>
        </div>        
        <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="phone" class="form-control" name="phone">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your Email">
        </div>
        <div class="d-grid gap-2">
        <button type= "submit" name= "submit "class="btn btn-primary">Submit</button>
        </div>
    </form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
