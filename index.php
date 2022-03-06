<?php


require_once 'Controllers/EntrepriseController.php';
include_once '../NousLesFemmes/Views/headerFooter/header.php';

$entrepriseC= new EntrepriseController();
$entrepriseC->index();

include_once '../NousLesFemmes/Views/headerFooter/footer.php';

?>