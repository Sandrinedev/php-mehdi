<?php
// <!-- 
// <!-- $tab = [27, 15, 34, 379, 248, 5643, 81, 211, 999, 142, 300, 572];
// <!-- $i = 0 variable qui simule mon index -->
// <!-- $i<count (parcourir tableau)  (parametre de ma variable)
// $i++  suivie des moustaches-->
// <!-- for ($i = 0; $i < count($tab); $i++) { -->
// <!-- debug mon tableau + la variable de for -->
//     <!-- debug ($tab($i));
//         if($tab[$i] % 2 == 0) {
//             echo "<li> $tab[$i] : pair";
//         } else {
//             echo "<li> $tab[$i] : impair";
//         }
//     } -->

//  <!-- parcourir le tableau user et pour toutes les entrees vide mettre "aucune information" -->

// foreach ($users as $key => $value){
//     if ($value =="")
// }

// <!-- trouver le nombre maximal de ce tableau -->
// <!-- echo max ($nombre); -->
// debug($nombres);
?>
<?php
// $peoples= [
//     [
//         'nom' => 'mohamed',
//         'prenom' => 'jean',
//         'email' => 'moje@yahoo.com'
//     ],
//     [
//         'nom' => 'lucie',
//         'prenom' => 'dupond',
//         'email' => 'ludu@wannado.fr'
//     ]
//     ];

//     debug($peoples);

//     // echo "le nom de lucie est" . $peoples[1]['nom'];
//     $json_peoples = json_encode($peoples);

//     debug($json_peoples); -->
    
$json_peoples = '[{
    "nom" : "durand",
    "prenom" : "marc",
    "age" : 23
    "couleur" : ["rouge", "vert", "jaune"],
    "image" : "https://ximg.es/64x64/000/fff"
, },{
    "nom" : "vilko",
    "prenom" : "anny",
    "age" : 45
    "couleur" : ["marron", "noir", "violet"],
    "image" : "https://ximg.es/64x64/000/fff"
 }] ';
 <a href="https://ximg.es/64x64/000/fff"></a>

 debug($json_peoples);

 $peoples_array-php = json_decode($json_peoples,true);

 debug($peoples_array_php);

?>
</main>
<?php
include('include')