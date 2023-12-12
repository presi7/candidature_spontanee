<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $titre = $_POST["Titre"];
    // $status = $_POST["Status"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $adresse = $_POST["adresse"];
    $mobile = $_POST["ùobile"];
    $email = $_POST["email"];
    $domaine = $_POST["domaine"];
    // Note: Vous devez également traiter les fichiers téléchargés, mais cela dépend de la manière dont vous souhaitez les gérer.
    $cv = $_FILES["cv"]["name"]; // Utilisez $_FILES pour récupérer le fichier téléchargé
    $motivation = $_FILES["motivation"]["name"]; // Ajout du champ Motivation
    // $commentaire = $_POST["Commentaire"];

    // Maintenant, vous pouvez insérer ces valeurs dans la base de données
    // Assurez-vous d'utiliser des requêtes préparées pour éviter les attaques par injection SQL

    // Exemple de connexion à la base de données (à personnaliser avec vos propres informations)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "candidature_spontane";

    
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête SQL pour créer la table "candidatures"
        $sql = "CREATE TABLE IF NOT EXISTS candidatures (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(30),
            prenom VARCHAR(30),
            adresse VARCHAR(30),
            mobile VARCHAR(10),
            email VARCHAR(30),
            domaine VARCHAR(30),
            cv VARCHAR(255),
            motivation VARCHAR(255),

        )";

       // Utilisation de requêtes préparées pour sécuriser le code contre les attaques par injection SQL
    $stmt = $conn->prepare("INSERT INTO candidatures (nom, prenom, adresse, mobile, email, domaine, cv, motivation) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    // Liaison des paramètres avec les valeurs
    $stmt->bindParam(1, $_POST["nom"]);
    $stmt->bindParam(2, $_POST["prenom"]);
    $stmt->bindParam(3, $_POST["adresse"]);
    $stmt->bindParam(4, $_POST["mobile"]);
    $stmt->bindParam(5, $_POST["email"]);
    $stmt->bindParam(6, $_POST["domaine"]);
    $stmt->bindParam(7, $cv);
    $stmt->bindParam(8, $motivation);

    // Exécution de la requête préparée
    $stmt->execute();

    echo "Les données ont été enregistrées avec succès dans la base de données.";
    header("Refresh: 1; URL=formulaire.php"); // Redirection vers le formulaire après 5 secondes


    // Fermer la connexion à la base de données
    $conn = null;
}
?>