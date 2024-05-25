<?php
class PatientService
{
    public function getAllPatient()
    {
        $patients = [];
        $dbconnection = new DBConnection();

        if ($dbconnection != null) {
            $conn = $dbconnection->getConnection();

            if ($conn != null) {
                $sql = "select * from  patients";
                $stmt = $conn->query($sql);

                while ($row = $stmt->fetch()) {
                    $patient = new Patient($row["id"], $row["name"], $row['gender']);
                    $patients[] = $patient;
                }

                return $patients;
            }
        }
    }
    public function insert($name,$gender){
        $dbconnection = new DBConnection();
        if ($dbconnection != null) {
            $conn = $dbconnection->getConnection();
            if ($conn != null) {
                $sql = "INSERT INTO `patients`(`name`, `gender`) VALUES ('$name','$gender')";
                $stmt = $conn->query($sql);
                
            }
        }
    }
    public function edit($id,$name,$gender){
        $dbconnection = new DBConnection();
        if ($dbconnection != null) {
            $conn = $dbconnection->getConnection();        
            if ($conn != null) {
                $sql = "UPDATE `patients` SET `name` = '$name',  `gender` = '$gender' WHERE `patients`.`id` ='$id';";
                $stmt = $conn->query($sql);
                
            }
        }
    }
    public function delete($id){
        $dbconnection = new DBConnection();
        if ($dbconnection != null) {
            $conn = $dbconnection->getConnection();
            if ($conn != null) {
                $sql = "delete from patients where id ='$id';";
                $stmt = $conn->query($sql);
                
            }
        }
    }
}
?>