<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document JSON</title>
</head>
<body>
    <!--
    JSON = JavaScript Object Notation; 
    Format léger permettant l'échange de données;
    Basé sur du code JS;
    Utilisable avec tous les languages modernes;
    Facile à lire et écrire

    Type de données:
    Nb: entier ou décimaux;
    Chaînes de caractères;
    Booléen: true ou false;
    Array
    Objet;
    Null: valeur vide

    Régles de syntaxe :
    Utiliser une paire clé/valeur ("name":"Julien");
    Mettre des guillemets autour de la clé ET de la valeur;
    On ne peut utiliser que les types de données vu ci-dessus;
    Dans le cas d'un fichier json, l'extension doit être obligatoirement '.json'
    -->

     <!-- dans la console taper id.voitures.voiture1 pour afficher name , age etc... -->
<script>
    var id = `{
        "name": "Julien",
        "age": 36,
        "sexe": "Homme",
        "profession": "Eleve Web Dev","hobby": ["Lecture", "F1", null]}
        `   
        var toJS = JSON.parse(id);

</script>
    
</body>
</html>