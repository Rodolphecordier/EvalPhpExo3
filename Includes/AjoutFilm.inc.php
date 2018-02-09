<?php
include_once ("FormAjoutFilm.php");
include_once ("././Function/ConnectionPDO.php");


try{
    $db = new PDO("mysql:dbname=movies","root","");

}
catch (PDOException $e){

    $fp = fopen("erreur.log","a+");
    fwrite($fp,$e->getMessage());
}
var_dump($db);

if(isset($_POST["envoyer"])) {
    $tabError = array();





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
        $requete = "INSERT INTO movies(ID_FILM, TITLE, ACTORS, DIRECTOR, PRODUCER, YEAR_OF_PROD,LANGUAGES, CATEGORY, STORYLINE, VIDEO;)
                        VALUES (NULL, 'title', 'actors', 'director', 'producer', 'YearOfProd', 'Languages', 'Category', 'Storyline', 'video' )";


    }
};

return $db ;


