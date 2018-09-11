<!DOCTYPE>
<html>
    <head>
        <title>Texte du titre</title>
    </head>
    <body>
        <p>
        <form method='POST' action='Add_Event_POST.php'>

            <label for="titre"> Titre * </label> : <input type="text" name="titre" id="titre" placeholder="inscrivez-ici le titre de votre annonce"> <br>

            <label for="promo"> Catégorie * </label> :
                    <select name="promo" id="promo">
                        <option value="voyager">Voyager</option>
                        <option value="loger">Loger</option>
                        <option value="restauration">Restauration</option>
                        <option value="sortir">Sortir</option>
                        <option value="culture">Culture</option>
                        <option value="sport">Sport</option>
                        <option value="bonsplans">Bons plans</option>
                    </select> <br>

            <label for="datev"> Date de l'évènement * </label> : <input type="text" name="datev" id="datev"> <br>
            <label for="heure"> Heure * </label> : <input type="text" name="heure" id="heure"> <br>
            <label for="lieu"> Lieu * </label> : <input type="text" name="lieu" id="lieu"> <br>
            <label for="description"> Description * </label> : <input type="text" name="description" id="description" placeholder="Parlez un peu de ce que vous comptez faire..."> <br>
            <input type="submit" value="GO!">
        </form>
        </p>
    </body>
</html>
