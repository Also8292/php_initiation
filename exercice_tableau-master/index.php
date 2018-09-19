<?php
 // premier niveau faire ce tableau
 $tab1 = ["coucou72","vie_oiseau","test_value50","bonjour","arbitraire"];
 $n = sizeof($tab1);

 //Exercice_1 
 echo 'EXERCICE 1 : ' .PHP_EOL .PHP_EOL;

//Avec la boucle for
echo 'Avec la boucle for : ' .PHP_EOL .PHP_EOL;

 for ($i=0 ; $i<$n ; $i++){
    echo 'La valeur '.$i. ' est egale à : ' .$tab1[$i] .PHP_EOL;
 }

echo PHP_EOL;
 
 //Avec la boucle foreach
echo 'Avec la boucle foreach : ' .PHP_EOL .PHP_EOL;

foreach($tab1 as $index => $valeur){
    echo 'La valeur ' . $index . ' est egale à : ' . $valeur .PHP_EOL;
}

echo PHP_EOL;

//Avec la boucle while
echo 'Avec la boucle while : ' .PHP_EOL .PHP_EOL;

$i = 0;
while($i<$n){
    echo 'La valeur '.$i. ' est egale à : ' .$tab1[$i] .PHP_EOL;
    $i++;
}

echo PHP_EOL. '' .PHP_EOL;

//Exercice_2
echo 'EXERCICE 2 : ' .PHP_EOL;

$tab2 = ["coucou72" => 10, "vie_oiseau" => 15, "test_value50" => 25, "bonjour" => 20, "arbitraire" => 5];
$tab3 = [
    "coucou72" => 10,
    "vie_oiseau" => 15,
    "test_value50" => [
        "in_tab" => "in tab",
        "in_tab1" => "dans tableau 1",
    ],
    "bonjour" => 20,
    "arbitraire" => 5,
];

echo PHP_EOL;

//Avec le tableau 2
echo 'Avec le tableau 2 : ' .PHP_EOL .PHP_EOL;

foreach($tab2 as $index => $valeur) {
    echo 'La valeur ' . $index . ' est égale à : ' .$valeur .PHP_EOL;
}

echo PHP_EOL;

//Avec le tableau 3
echo 'Avec le tableau 3 : ' .PHP_EOL .PHP_EOL;

foreach($tab3 as $index => $valeur) {
    if(is_array($valeur)) {
        foreach($valeur as $index2 => $valeur2) {
            echo 'La valeur ' . $index2 . ' est égale à : ' .$valeur2 .PHP_EOL;
        }
    }
    else {
        echo 'La valeur ' . $index . ' est égale à : ' .$valeur .PHP_EOL;
    }
    
}



?>