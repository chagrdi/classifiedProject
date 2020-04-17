<?php
require_once( dirname(__FILE__) . "/components/header.php");

if(!isset($_SESSION["username"])){
    header("Location: login.php");
}

require_once(dirname(__FILE__) . "/components/navbar.php");
?>

<h1>Web-Classified</h1>
<div class="container mb-5">
    <h1>Liste des annonces</h1>
    <div class="row">
        
    </div>
</div>

<?php
require_once( dirname(__FILE__) . "/components/footer.php");
?>
