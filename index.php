
<?php 
$title = 'index';
require_once 'includes/header.php';
require_once 'db/conn.php'
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
                <option selected>Select</option>
                <option value="1">Software Engineer</option>
                <option value="2">DevOps</option>
                <option value="3">Network Administrator</option>
                <option value="4">Others</option>
            </select>
        </div>        
        <div class="mb-3">
            <label for="varchar" class="form-label">Phone number</label>
            <input type="varchar" class="form-control" name="varchar">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your Email">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
