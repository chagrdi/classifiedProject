<?php
require_once( dirname(__FILE__) . "/components/header.php");

if(!isset($_SESSION["username"])){
    header("Location: login.php");
}

require_once(dirname(__FILE__) . "/components/navbar.php");
?>

<h1>DigiCoco</h1>
<div class="container mb-5">
    <h1>Liste des annonces</h1>
    <div class="row">
        <?php
        /***
         * Afficher les articles
         */
        require_once( dirname(__FILE__) . "/configs/database.php");
        // req prepare (SELECT)
        $req = $db->prepare("SELECT id, title, description, image, author_id, location, statut, helper_id, DATE_FORMAT(created_at, 'Le %d/%m/%Y à %Hh%i') as created_at FROM advert");
        //execute
        $req->execute();
        // fetch && boucle
        while( $result = $req->fetch(PDO::FETCH_ASSOC) ){
        ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= $result["image"]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $result["title"]; ?></h5>
                <p class="card-text"><?= $result["description"]; ?></p>
                <?php
                    $req2 = $db->prepare("SELECT * FROM user WHERE id = :id");
                    $req2->bindParam(":id", $result["author_id"]);
                    $req2->execute();

                    $resultUser = $req2->fetch(PDO::FETCH_ASSOC);
                ?>
                <span><?= $resultUser["pseudo"] ?> - <?= $result["created_at"]; ?></span>
    
                <a href="advert-page.php?advert_id=<?= $result["id"] ?>" class="btn btn-primary">Voir l'annonce</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<?php
require_once( dirname(__FILE__) . "/components/footer.php");
?>