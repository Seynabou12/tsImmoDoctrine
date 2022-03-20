<?php
try {

    require_once('./Views/template/header.php');

    require_once('./Views/template/sidebar.php');


?>

    <section class="content">
      <div class="container-fluid">
       
        <div class="row">
         
          <section class="col-lg-5 connectedSortable">

            
          </section>
         
        </div>
        
      </div>
    </section>



<?php


    require_once('./Views/template/footer.php');
} catch (\Throwable $th) {
    die($th->getMessage());
}
