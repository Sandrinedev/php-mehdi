<?php
include('includes/header.php');
include('includes/fonctions.php');
?>
<main>
<?php
// $tableau = array();
$tableau =  [];
$tableau = [true,45,'Terre',[45,46,47]];

debug($tableau);

$tableau[] = 'Janvier';
array_push($tableau,'Voiture');
array_push($tableau,'Voiture 2','Tortue');

// debug($tableau[2]);
echo $tableau[2];

?>
</main>
<?php
include('includes/footer.php');