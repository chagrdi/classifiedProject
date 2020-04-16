<?php
require_once( dirname(__FILE__) . "/components/header.php");
require_once(dirname(__FILE__) . "/components/navbar.php");

if(!isset($_SESSION["pseudo"])){
    header("Location: login.php");
}

require_once(dirname(__FILE__) . "/components/nav-bar.php");


require_once(dirname(__FILE__) . "/configs/database.php");

// Récupérer advert
$req = $db->prepare("SELECT * FROM advert WHERE id = :id");
$req->bindParam(":id", $_GET["advert_id"]);
$req->execute();
$result = $req->fetch(PDO::FETCH_ASSOC);
// Récupérer user
$req2 = $db->prepare("SELECT * FROM user WHERE id = :id");
$req2->bindParam(":id", $result["author_id"]);
$req2->execute();
$resultUser = $req2->fetch(PDO::FETCH_ASSOC);
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="<?= $result["image"] ?>" alt="">
        </div>
        <div class="col-md-6">
            <h1><?= $result["title"] ?> <span class="badge badge-secondary"><?= $result["statut"] ?></span></h1>
            <p><?= $resultUser["pseudo"] ?> - <?= $result["location"] ?></p>
            <p><?= $result["description"] ?></p>

            <?php if($_SESSION["id"] == $result["author_id"]): ?>
                <a href="functions/deleteAdvert.php?advert_id=<?= $result["id"] ?>">
                    <button class="btn btn-danger">Annuler</button>
                </a>
            <?php endif ?>
            <?php if($_SESSION["id"] == $result["author_id"]): ?>
                <button class="btn btn-primary">Editer</button>
            <?php endif ?>
        </div>
    </div>
</div>



<?php
require_once( dirname(__FILE__) . "/components/footer.php");
?>