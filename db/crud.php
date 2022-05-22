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

        public function insert($fname,$lname,$dob,$contact,$email,$speciality){
                try {
                    $sql = "INSERT INTO attendees(firstname, lastname, dob, contact, email, speciality_id) VALUES(:fname,:lname,:dob,:contact,:email,:speciality)";
                    //prepare the sql statement for execution.
                    $stmt = $this->db->prepare($sql);
                     
                    //bind all the placeholders to actual value.
                    $stmt->bindparam(':fname',$fname);
                    $stmt->bindparam(':lname',$lname);
                    $stmt->bindparam(':dob',$dob);
                    $stmt->bindparam(':contact',$contact);
                    $stmt->bindparam(':email',$email);
                    $stmt->bindparam(':speciality',$speciality);

                    //execute the statement

                    $stmt->execute();
                    
                    return true;
                } catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
                } 

        }
        public function editAttandee($id,$fname,$lname,$dob,$contact,$email,$speciality){
            try{
            $sql = "UPDATE `attendees` SET `firstname`= :fname,
            `lastname`= :lname,`dob`= :dob,`contact`= :contact,
            `email`= :email,`speciality_id`= :speciality WHERE id= :id";

             //prepare the sql statement for execution.
             $stmt = $this->db->prepare($sql);
                     
             //bind all the placeholders to actual value.
             $stmt->bindparam(':id',$id);
             $stmt->bindparam(':fname',$fname);
             $stmt->bindparam(':lname',$lname);
             $stmt->bindparam(':dob',$dob);
             $stmt->bindparam(':contact',$contact);
             $stmt->bindparam(':email',$email);
             $stmt->bindparam(':speciality',$speciality);

             //execute the statement
             $stmt->execute();
             return true;
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            } 
    
        }
        public function getAttendees(){
            try {
                $sql =" SELECT * FROM `attendees` a inner join specialities s on a.speciality_id = s.speciality_id ";
                $result = $this->db->query($sql);
                return $result;
            } 
        catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            } 
        }
        public function getAttendeesDetails($id)
        {

            try{
                $sql = "SELECT * FROM `attendees`a inner join specialities s on a.speciality_id = s.speciality_id 
                WHERE id =:id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(":id",$id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }
            catch (PDOException $e) {
                echo $e->getMessage();
                return false;

        }
        }


        public function deleteAttandee($id){

            try {
                $sql = "DELETE FROM `attendees` WHERE `id` = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(":id",$id);
                $stmt->execute();
                $result = $stmt->fetch();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }



        }
        public function getSpecialities(){
            $sql =" SELECT * FROM `specialities` ";
            $result = $this->db->query($sql);
            return $result;
        }


    }
?>