<?php
require_once( dirname(__FILE__) . "/components/header.php");
require_once(dirname(__FILE__) . "/components/navbar.php");

if(!isset($_SESSION["username"])){
    header("Location: login.php");
}

require_once(dirname(__FILE__) . "/components/navbar.php");


require_once(dirname(__FILE__) . "/configs/database.php");

?>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
</div>



<?php
require_once( dirname(__FILE__) . "/components/footer.php");
?>