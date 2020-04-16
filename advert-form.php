<?php
require_once(dirname(__FILE__) . "/components/navbar.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Ajouter une annonce</h1>

            <form action="" class="form-group">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Entrez le nom de votre annonce">
                </div>
                <div class="form-group">
                    <input type="text" name="image" class="form-control" placeholder="Entrez une Url">
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control" placeholder="Entrez une description"></textarea>
                </div>
                <div class="form-group">
                    <select name="location" class="form-control">
                        <option value="bordeaux">Bordeaux</option>
                        <option value="toulouse">Toulouse</option>
                        <option value="paris">Paris</option>
                    </select>
                </div>
                <input type="submit" value="Créer mon annonce" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<?php
require_once( dirname(__FILE__) . "/components/footer.php");
?>