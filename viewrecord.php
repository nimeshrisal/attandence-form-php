<?php 
$title = 'records';
require_once 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';

$results = $crud->getAttendees();
?>

    <table class ="table">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Speciality</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php while($r=$results->fetch(PDO::FETCH_ASSOC)){ ?>

            <tr>
                <td><?php echo $r['id']; ?> </td>
                <td><?php echo $r['firstname']; ?> </td>
                <td><?php echo $r['lastname']; ?> </td>
                <td><?php echo $r['name']; ?> </td>
                <td>
                <a href ="view.php?id= <?php echo $r['id']; ?> " class="btn btn-primary">View</a> 
            </td>
            </tr>

        <?php }?>
        </tbody>

    </table>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
