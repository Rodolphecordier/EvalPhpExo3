<form method = "post" action = "#">
    <p>Ajouter un film</p>
    <label for = "Title">Titre</label>  <input type = "text" id = "Title" name = "Title" minlength="5"/><br />

    <label for = "Actors">Acteur</label>  <input type = "text" id = "Actors" name = "Actors" minlength="5"/><br />

    <label for = "Director">Nom du réalisateur</label>  <input name = "Directors" id = "Directors" minlength="5"/><br/>

    <label for = "Producer">Producteur</label>  <input name = "Producer" id = "Producer" minlength="5"/><br>

    <label for = "YearOfProd">Année de production</label> <select name = "YearOfProd" id = "YearOfProd">
        <option value = "2013">2013</option>
        <option value = "2014">2014</option>
        <option value = "2015">2015</option>
        <option value = "2016">2016</option>
        <option value = "2017">2017</option>
        <option value = "2018">2018</option>
    </select>
<br>

    <label for = "Languages">Languages</label>  <select name = "Languages" id = "Languages">
        <option value="VO"> VO </option>
        <option value="VOSTFR"> VOSTFR </option>
        <option value="VF"> VF </option>
    </select>
    <br>

    <label for = "Category">Categorie</label> <select  name = "Category" id = "Category">
        <option value="horreur"> Horreur </option>
        <option value="Romance">Romance </option>
        <option value="Comedie">Comedie</option>
    </select>
    <br>

    <label for = "Storyline">Synopsis</label>  <input type="text" name = "Storyline" id = "Storyline" minlength="5"/>
    <br/>

    <label for = "Video">Video</label>  <input type="url" name = "Video" id = "Video"/><br/>
    <br/>
    <input type = "submit" value="Envoyer" name="envoyer" />
</form>

