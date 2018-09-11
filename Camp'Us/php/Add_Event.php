<!DOCTYPE>
<html>
    <head>
        <title>Texte du titre</title>
    </head>
    <body>
        <p>
        <form method='POST' action='Add_Event_POST.php'>

            <label for="titre"> Titre * </label> : <input type="text" name="titre" id="titre" placeholder="inscrivez-ici le titre de votre annonce"> <br>

            <div>
            <label for="categorie"> Catégorie * </label> :
                    <div> 
                    <input class="form-check-input" type="checkbox" name="voyager">
                    <label class="form-check-label" for="inlineCheckbox1">Voyage</label>
                    </div>

                    <div> 
                    <input class="form-check-input" type="checkbox" name="loger">
                    <label class="form-check-label" for="inlineCheckbox1">Logement</label>
                    </div>

                    <div> 
                    <input class="form-check-input" type="checkbox" name="restauration">
                    <label class="form-check-label" for="inlineCheckbox1">Restauration</label>
                    </div>

                    <div> 
                    <input class="form-check-input" type="checkbox" name="sortir">
                    <label class="form-check-label" for="inlineCheckbox1">Sortir</label>
                    </div>

                    <div> 
                    <input class="form-check-input" type="checkbox" name="culture">
                    <label class="form-check-label" for="inlineCheckbox1">Culture</label>
                    </div>

                    <div> 
                    <input class="form-check-input" type="checkbox" name="sport">
                    <label class="form-check-label" for="inlineCheckbox1">Sport</label>
                    </div>

                    <div> 
                    <input class="form-check-input" type="checkbox" name="bonsplans">
                    <label class="form-check-label" for="inlineCheckbox1">Bons plans</label>
                    </div>
            </div>

            <label for="description"> Date de l'évènement * </label> : <input type="text" name="titre" id="titre"> <br>

            <label for="description"> Heure * </label> : <input type="text" name="titre" id="titre"> <br>

            <label for="description"> Lieu * </label> : <input type="text" name="titre" id="titre"> <br>

            <label for="description"> Description * </label> : <input type="text" name="titre" id="titre" placeholder="Parlez un peu de ce que vous comptez faire..."> <br>
  
        </form>
        </p>

    </body>
</html>
