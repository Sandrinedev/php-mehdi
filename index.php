<?php
include('includes/header.php');
include('includes/fonctions.php');
?>
<main>
<?php
// $tableau = array();
$tableau =  [];
$tableau = [true,45,'Terre',[45,46,47]];

// debug($tableau);

$tableau[] = 'Janvier';
array_push($tableau,'Voiture');
array_push($tableau,'Voiture 2','Tortue');

// debug($tableau);
// echo $tableau[2];

// echo count($tableau);

$notes = [12,5,16,7];
// Afficher la moyenne des notes
$nbElementNotes = count($notes);
$sommeNotes = $notes[0] + $notes[1] + $notes[2] + $notes[3];
$moyenneNotes = $sommeNotes / $nbElementNotes;

// echo $moyenneNotes;

$tab2 = array_merge($tableau,$notes);

// debug($tab2);

for($k=0 ; $k < count($notes) ; $k++) {
    echo $notes[$k] . '<br>';
}


?>
</main>
<?php
include('includes/footer.php');