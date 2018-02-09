<?php
include_once ("FormAjoutFilm.php");
include_once ("././Function/ConnectionPDO.php");

if(isset($_POST["envoyer"])) {
    $tabError = array();
    $title = $_POST['title'];
    $actors = $_POST['actors'];
    $director = $_POST['director'];
    $producer= $_POST['Producer'];
    $YearOfProd = $_POST['YearOfProd'];
    $Language = $_POST['Languages'];
    $Category= $_POST['Category'];
    $Storyline = $_POST['Storyline'];
    $Video = $_POST['Video'];




    if($_POST['title'] == "")
        array_push($tabError, "Veuillez renseigné un titre");
    if($_POST['actors'] == "")
        array_push($tabError, "Veuillez renseigné un aucteur");
    if($_POST['director'] == "")
        array_push($tabError, "Veuillez renseigné un directeur de production");
    if($_POST['producer'] == "")
        array_push($tabError, "Veuillez renseigner un producteur");
    if($_POST['YearOfProd'] == "")
        array_push($tabError, "Veuillez renseigné une année de production");
    if( $_POST['Languages']  == "")
        array_push($tabError, "Veuillez renseigné un Language");
    if($_POST ['Category'] == "")
        array_push($tabError, "Veuillez renseigné une Categorie");
    if( $_POST ['Storyline'] == "")
        array_push($tabError, "Veuillez renseigner un synopsis");
    if( $_POST['video']  == "")
        array_push($tabError, "Veuillez renseigné un URL");
    else{

    }

};

$db = connectionPDO();

if (!$db) {
    echo "Erreur de connexion";
}


else {
    $requete = $db->exec( "INSERT INTO movies(ID_FILM, TITLE, ACTORS, DIRECTOR, PRODUCER, YEAR_OF_PROD,LANGUAGES, CATEGORY, STORYLINE, VIDEO;)
                        VALUES (NULL, $title, $actors, $director, $producer, $YearOfProd, $Language, $Category, $Storyline, $video )");

    var_dump($requete);
};
