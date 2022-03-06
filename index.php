<?php


require_once 'Controllers/EntrepriseController.php';
include_once '../NousLesFemmes/Views/headerFooter/header.php';

$entreprise= new EntrepriseController();
$entreprise->viewManager();

include_once '../NousLesFemmes/Views/headerFooter/footer.php';

?>