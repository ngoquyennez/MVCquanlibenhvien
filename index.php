<?php
require_once ('./app/config/config.php');
require_once APP_ROOT . '/app/libs/DbConnection.php';
require_once APP_ROOT . '/app/controllers/HomeController.php';
require_once APP_ROOT . '/app/controllers/PatientController.php';
require_once APP_ROOT . '/app/models/Patient.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$homeController = new HomeController();
$patientController = new PatientController();
if ($controller == 'home') {
    $homeController->index();
} else if ($controller == 'addpatient') {
    $patientController->create();
    if (isset($_POST['dangky'])) {
        $patientController->store();
    }
} else if ($controller == 'deletepatient') {
    $patientController->delete();
} else if ($controller == 'editpatient') {
    $patientController->edit();
    if (isset($_POST['update'])) {
        $patientController->editstore();
    }
} else {
    echo "nothing";
}
?>