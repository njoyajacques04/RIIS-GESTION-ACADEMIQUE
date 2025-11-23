<?php
require_once "config.php";

// 🔹 Récupération et sécurisation des données du formulaire
$nom         = mysqli_real_escape_string($conn, $_POST['nom']);
$prenom      = mysqli_real_escape_string($conn, $_POST['prenom']);
$email       = mysqli_real_escape_string($conn, $_POST['email']);
$mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
$telephone   = mysqli_real_escape_string($conn, $_POST['telephone']);
$type        = mysqli_real_escape_string($conn, $_POST['type_utilisateur']);

// Pour les étudiants uniquement
$date_naissance = $_POST['date_naissance'] ?? NULL;
$adresse        = mysqli_real_escape_string($conn, $_POST['adresse'] ?? '');
$cycle          = $_POST['cycle'] ?? null;
$niveau         = $_POST['niveau'] ?? null;
$filiere        = $_POST['filiere'] ?? null;

// 🔹 1️⃣ INSERTION DANS UTILISATEUR
$sql = "INSERT INTO utilisateur (nom, prenom, email, mot_de_passe, téléphone, type_utilisateur)
        VALUES ('$nom', '$prenom', '$email', '$mot_de_passe', '$telephone', '$type')";

if(mysqli_query($conn, $sql)){

    $id_user = mysqli_insert_id($conn);

    // 🔹 2️⃣ INSERTION DANS ETUDIANT SI C’EST UN ÉTUDIANT
    if($type === "Etudiant"){

        $statut_inscription  = "en attente";
        $etat_preinscription = "non valide";

        $sql2 = "INSERT INTO etudiant (
                    id_utilisateur,
                    date_naissance,
                    adresse,
                    statut_inscription,
                    date_preinscription,
                    etat_preinscription,
                    cycle,
                    niveau,
                    filiere
                 ) VALUES (
                    $id_user,
                    ".($date_naissance ? "'$date_naissance'" : "NULL").",
                    '$adresse',
                    '$statut_inscription',
                    NOW(),
                    '$etat_preinscription',
                    ".($cycle ? "'$cycle'" : "NULL").",
                    ".($niveau ? "'$niveau'" : "NULL").",
                    ".($filiere ? "'$filiere'" : "NULL")."
                 )";

        if(!mysqli_query($conn, $sql2)){
            die("Erreur insertion étudiant : ".mysqli_error($conn));
        }
    }

    // 🔹 3️⃣ REDIRECTION SELON LE TYPE D’UTILISATEUR
    switch($type){
        case "Etudiant":
            header("Location: dashboard_etudiant.php");
            exit();
        case "Enseignant":
            header("Location: dashboard_enseignant.php");
            exit();
        case "Administrateur":
            header("Location: admin_panel.php");
            exit();
        default:
            header("Location: page_invite.php");
            exit();
    }

} else {
    die("Erreur insertion utilisateur : ".mysqli_error($conn));
}
?>
