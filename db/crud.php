<!--crud
    C = Create
    R = Read
    U = Update
    D = Delete
-->
<?php 
    class crud{
        //private database objects://
        private $db;


        //constructor to initialize private variable to the database connection//
        function __construct($conn)
        {
            $this->db = $conn;

        }

        public function insert($fname,$lname,$dob,$email,$contact,$speciality){
                try {
                    $sql = "INSERT INTO atttandees(firstname, lastname, dob, email, contact, speciality_id) VALUES(:fname,:lname,:dob,:email,:contact,:speciality)";
                    //prepare the sql statement for execution.
                    $stmt = $this->db->prepare($sql);
                     
                    //bind all the placeholders to actual value.
                    $stmt->bindparam(':fname',$fname);
                    $stmt->bindparam(':lname',$lname);
                    $stmt->bindparam(':dob',$dob);
                    $stmt->bindparam(':email',$email);
                    $stmt->bindparam(':contact',$contact);
                    $stmt->bindparam(':speciality',$speciality);

                    //execute the statement

                    $stmt->execute();
                    
                    return true;
                } catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
                }

        }
        
    }
?>