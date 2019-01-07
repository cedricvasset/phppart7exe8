<?php
include ('indexCtrl.php');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>php part7 exe7</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <?php if ($success == true)
        { ?>
            <p><?= $civility . $lastname . $firstname ?></p>
            <p><?=$inputFile['extension'] ?></p>
            <p><a href="index.php">retour</a></p>
<?php }
else
{ ?>
              <!--penser a utiliser enctype form-data de façon a prevenir que des données vont etre envoyées -->
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="civility">Civilité</label>
                    <select name = "civility" id="civility" class="form-control" >
                        <option value=""></option>
                               <!--penser a donner une value aux options afin de pouvoir les utiliser dans un futur tableau si besoin-->
                        <option value="0">Madame</option>
                        <option value="1">Monsieur</option>
                    </select>
                </div>
                <p><?=  (empty($formError['civility'])) ? '' : $formError['civility'] ?></p>
                <div class="form-group">
                    <label class="col-form-label" for="lastname">Nom</label>
                    <input  id="lastname" name="lastname" type="text" class="form-control" placeholder="Nom"  />
                </div>
                <p><?= (empty($formError['lastname'])) ? '' : $formError['lastname'] ?></p>
                <div class="form-group">
                    <label class="col-form-label" for="firstname">Prénom</label>
                    <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Prénom"  />
                </div>
                <p><?= (empty($formError['firstname'])) ? '' : $formError['firstname'] ?></p>
                <div class="form-group">
                    <label for="inputFile">Déposer votre fichier ici!</label>
                    <p><?=  (empty($formError['inputFile'])) ? '' : $formError['inputFile'] ?></p>
                    <input name="inputFile" type="file" class="form-control-file" id="inputFile" aria-describedby="fileHelp">
                </div>

                <button type="submit" name="submit"class="btn btn-success">soumettre</button>
            </form>
<?php } ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>






