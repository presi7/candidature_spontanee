<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Candidature Spontanée</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="wrapper">
                <div class="form">
                    <h1 class="title text-center">Candidature Spontanée</h1>

                    <form action="traitement.php" class="myform" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nom">Nom *</label>
                            <input type="text" name="nom" id="nom" class="form-control" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="prenom">Prénom *</label>
                            <input type="text" name="prenom" id="prenom" class="form-control" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse Email *</label>
                            <input type="text" name="email" id="email" class="form-control" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="mobile">Téléphone *</label>
                            <input type="tel" name="mobile" id="mobile" class="form-control" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="adresse">Adresse *</label>
                            <input type="text" name="adresse" id="adresse" class="form-control" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="domaine">Domaine *</label>
                            <input type="text" name="domaine" id="domaine" class="form-control" value="" required>
                        </div>

                        <div class="form-group" id="fichier">
                            <label for="motivation">Télécharger votre lettre de motivation *</label>
                            <input type="file" id="motivation" name="motivation" class="form-control pt-2" accept=".pdf, .doc, .docx" required>
                        </div>

                        <div class="form-group" id="fichier">
                            <label for="cv">Télécharger votre CV *</label>
                            <input type="file" id="cv" name="cv" class="form-control pt-2" accept=".pdf, .doc, .docx" required>
                        </div>

                        <div class="button text-center">
                            <button type="submit" name="envoyer" class="btn btn-primary " id="envoyer">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/script.js"></script>
</html>
