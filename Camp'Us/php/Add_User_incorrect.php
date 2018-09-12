<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
</head>
<body>

<form action="Add_User_POST.php" method="POST">
    <p>
        <strong>Veuillez remplir tout les champs* </strong>
        <label for="nom"> Nom * </label> : <input type="text" name="nom" id="nom"> <br>
        <label for="prenom"> Prénom * </label> : <input type="text" name="prenom" id="prenom"> <br>
        <label for="email"> Adresse e-mail * </label> : <input type="text" name="email" id="email"> <br>
        <label for="mdp"> Mot de passe * </label> : <input type="password" name="mdp"> <br>
        <label for="promo"> Promo * </label> :
        <select name="promo" id="promo">
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="B3">B3</option>
            <option value="I4">I4</option>
            <option value="I5">I5</option>
        </select> <br>
        <label for="infos"> Présentez-vous </label> : <input type="text" name="infos" id="infos" placeholder="centres d'intérêts, hobbies, etc... "> <br>

        <input type="submit" value="C'est parti!">
    </p>
</form>

</body>
</html>
