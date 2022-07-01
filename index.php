<?php
include('includes/header.php');
include('includes/fonctions.php');

?>
<main>
<?php
//================
// Tableau Indexé
//================
// $tableau = array();
// $tableau =  [];
// $tableau = [true,45,'Terre',[45,46,47]];

// debug($tableau);

// $tableau[] = 'Janvier';
// array_push($tableau,'Voiture');
// array_push($tableau,'Voiture 2','Tortue');

// debug($tableau);
// echo $tableau[2];

// echo count($tableau);

// $notes = [12,5,16,7];
// Afficher la moyenne des notes
// $nbElementNotes = count($notes);
// $sommeNotes = $notes[0] + $notes[1] + $notes[2] + $notes[3];
// $moyenneNotes = $sommeNotes / $nbElementNotes;

// echo $moyenneNotes;

// $tab2 = array_merge($tableau,$notes);

// debug($tab2);

// for($k=0 ; $k < count($notes) ; $k++) {
//     echo $notes[$k] . '<br>';
// }
// $sommeNotes = 0;
// for ($j=0 ; $j < count($notes) ; $j++) {
//     // $sommeNotes += $notes[$j];
//     $sommeNotes = $sommeNotes + $notes[$j];
// }
// $moyenneNotes = $sommeNotes / count($notes);

// echo $moyenneNotes;

// foreach($notes as $note) {
//     echo $note . '<br>';
// }

//====================
// Tableau Associatif
//====================

// $fruits = ['banane' => 'jaune' , 'pomme' => 'rouge' , 'kiwi' => 'vert'];

// debug($fruits);

// echo 'La couleur de la pomme est ' .$fruits['pomme'];
// echo 'La longeur du tableau $fruits est de : ' . sizeof($fruits);

// $ages = [
//     'Michel' => 34,
//     'Lucie' => 12,
//     'lucie' => 52,
//     'Mouloud' => 56
// ];
// debug($ages);
// $chaine = implode('-',$ages);
// echo $chaine;
// $ages2 = explode('-',$chaine);
// debug($ages2);

// $ages['paul'] = 33;
// $ages['lucie'] = 02;
// debug($ages);

// foreach($ages as $key => $value) {
//     echo $key . ' a ' . $value . ' ans<br>';
// }

// $html = '<ul>';
// foreach($ages as $clef => $valeur) {
//     // $html .= '<li>' . $clef . ' a ' . $valeur . ' ans</li>';
//     $html .= "<li>$clef a $valeur ans</li>";
// }
// $html .= '</ul>';
// echo $html;

// $planetes = ['mars','terre','pluton','venus','jupiter'];

// debug($planetes);
// debug($ages);

// asort($planetes);
// asort($ages);

// debug($planetes);
// debug($ages);

$tab = [
    'voiture' => 'ford',
    'nombre' => [1,2,3,4],
    'planete' => ['mars','terre']
];

debug($tab['nombre'][0]);

<?php
// // $peoples= [
// //     [
// //         'nom' => 'mohamed',
// //         'prenom' => 'jean',
// //         'email' => 'moje@yahoo.com'
// //     ],
// //     [
// //         'nom' => 'lucie',
// //         'prenom' => 'dupond',
// //         'email' => 'ludu@wannado.fr'
// //     ]
// //     ];

// //     debug($peoples);

// //     // echo "le nom de lucie est" . $peoples[1]['nom'];
// //     $json_peoples = json_encode($peoples);

// //     debug($json_peoples); -->
    
// $json_peoples = '[{
//     "nom" : "durand",
//     "prenom" : "marc",
//     "age" : 23
//     "couleur" : ["rouge", "vert", "jaune"],
//     "image" : "https://ximg.es/64x64/000/fff"
// , },{
//     "nom" : "vilko",
//     "prenom" : "anny",
//     "age" : 45
//     "couleur" : ["marron", "noir", "violet"],
//     "image" : "https://ximg.es/64x64/000/fff"
//  }] ';


// //  debug($json_peoples);
// //  afficher l'image de la 2eme personne

//  $peoples_array-php = json_decode($json_peoples,true);

//  debug($peoples_array_php);

// //  echo $peoples_array_php[1]['image'];
// // echo '<img src="' . $peoples_array_php[1]['image'] . '"alt="anny">';

?>
<!-- <img src="<?=$peoples_array_php[1]['image']?>" alt="<?=$peoples_array_php[1]['prenom']?>"> -->

$users = file_get_contents("./data/users.json");

debug($users);

?>
</main>
<?php
include('includes/footer.php');