<?php
require_once("components/header.php");

if(isset($_SESSION["pseudo"])){
    header("Location: index.php");
}
?>
<div id="form" class="container-fluid">
    <div class="row">
        <form action="functions/createUser.php" class="col-md-4" method="post">
            <h1>Créer un compte</h1>
           
            <?php if(isset($_GET["errorMessage"])){ ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <?= $_GET["errorMessage"] ?>
                    <button class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Votre pseudo" name="username">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Votre password">
            </div>
            <div class="form-group">
                <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="role" id="role" class="form-check-input">
                <label class="form-check-label" for="role">Je souhaite être un aidant</label>
            </div>

            <p>Déja un compte ? <a href="login.php">Connexion</a></p>

            <div class="form-group">
                <input type="submit" value="Créer mon compte" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>


<?php
require_once("components/footer.php");
?>