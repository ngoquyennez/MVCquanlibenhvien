<?php

require_once APP_ROOT . '/app/services/PatientService.php';

class PatientController
{
    public function create()
    {
        include APP_ROOT . '/app/views/patient/add.php';

    }
    public function store()
    {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $patientservice = new PatientService();
        $patient = new Patient(null,$name,$gender);
        $patientservice->insert($patient->getFullName(),$patient->getGender());
        echo "thêm thành công";
    }
    public function delete()
    {
        $id=$_GET['id'];
        $patientservice = new PatientService();
        $patientservice->delete($id);
        echo "xóa thành công";

    }
    public function edit()
    {
        $id=$_GET['id'];
        $conn = mysqli_connect("localhost", "root", "", "testdb") or die("Loi ket noi");
        $query = mysqli_query($conn, "select * from patients where id = '$id'");
        $row = mysqli_fetch_assoc($query);
        include APP_ROOT . '/app/views/patient/edit.php';
    }
    public function editstore()
    {
        $id=$_GET['id'];
        $name=$_POST['name'];
        $gender=$_POST['gender'];
        $patientservice = new PatientService();
        $patientservice->edit($id, $name, $gender);
        echo "sửa thành công";
    }




}
?>