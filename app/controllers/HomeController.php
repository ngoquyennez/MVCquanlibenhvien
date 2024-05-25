<?php
require_once APP_ROOT . '/app/services/PatientService.php';

class HomeController
{
    public function index()
    {
        $patientService = new PatientService();
        $patients = $patientService->getAllPatient();


        //day dl len giao dien
        include APP_ROOT . '/app/views/home/index.php';
    }
}

?>