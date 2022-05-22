<?php 
    $title = 'index';
    require_once 'includes/header.php';
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';
    //Get all attendees
    $results = $crud->getSpecialities();

    if(!isset($_GET['id'])){
        
        echo 'error';
    }
    else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeesDetails($id);
    
?>

<h1 class="text-center"> Edit Record</h1>
    
    <form method="post" action="editpost.php">
        <input type = "hidden" name ='id' value = "<?php echo $attendee['id']; ?>"/>
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" value = "<?php echo $attendee['firstname']; ?>" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control"   value = "<?php echo $attendee['lastname']; ?>"  name="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="Date" class="form-control"  value = "<?php echo $attendee['dob']; ?>" name="dob">
        </div>        
        <div class="mb-3">
            <label for="speciality" class="form-label">Speciality</label>
            <select class="form-select" aria-label="Default select example" name= "speciality">
             <?php while($r=$results->fetch(PDO::FETCH_ASSOC)){?>
                <option value="<?php echo $r['speciality_id'];?>"<?php 
                    if($r['speciality_id']==$attendee['speciality_id'])
                    {
                        echo 'selected';
                    }
                    ?>>

                <?php echo $r['name'];?></option>

              <?php }?>                    
            </select>
        </div>        
        <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="phone" class="form-control"  value = "<?php echo $attendee['contact'] ?>" name="phone" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control"  value = "<?php echo $attendee['email'] ?> "  name= "email">
        </div>
        <div class="d-grid gap-2">
        <button type= "submit" name= "submit "class="btn btn-warning">Save Changes</button>
        </div>
    </form>


<?php }?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
