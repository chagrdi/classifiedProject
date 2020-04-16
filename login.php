<?php
require_once("components/header.php");

if(isset($_SESSION["pseudo"])){
    header("Location: index.php");
}
?>
<div id="form" class="container-fluid">
    <div class="row">
        <form action="functions/loginUser.php" class="col-md-4" method="post">
            <h1>Je me connecte</h1>
           
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

            <p>Pas encore de compte ? <a href="register.php">Inscription</a></p>

            <div class="form-group">
                <input type="submit" value="Je me connecte" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>


<?php
require("components/footer.php");
?>