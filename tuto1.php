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
    Utilisable avec tous les languages modernes: php, ruby; 
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

     <!-- dans la console taper id.voitures.voiture1 pour afficher une des 2 voitures sinon id.name , id.age etc... -->
<script>
    // var id = `{
    //     "name": "Julien",
    //     "age": 36,
    //     "sexe": "Homme",
    //     "profession": "Eleve Web Dev","hobby": ["Lecture", "F1", null]}
    //     `   
    //     var toJS = JSON.parse(id); // envoyer et recevoir des données sur json


    // var id = {name: "Julien", age: 36, sexe: "Homme", profession: "Eleve Web Dev", hobby: ["Lecture", "F1", null] };


    // var toJSON = JSON.stringify(id);  // Transfomer notre fichier en fichier JSON   


    //-------------------- stocker des données ---------------------
    
    //  var id = {name: "Julien", age: 36, sexe: "Homme", profession: "Eleve Web Dev", hobby: ["Lecture", "F1", null] };
    //  var toJSON = JSON.stringify(id);  // Transformer/Convertir notre fichier en fichier JSON
    //  localStorage.setItem("idJSON", to JSON);  // stocker des données dans un autre fichier JSON à part  

// ------------------------ Recevoir de données-----------------------------------------------

var fromJSON = localStorage.getItem("idJSON"); // récupère les données du fichier idJSON et on les met sur notre var obj
var obj = Json.parse(fromJSON); //
</script>
    
</body>
</html>