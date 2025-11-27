<?php



 
    $menu = [
        "entree" => [
            [
                "nom" => "Salade",
                "prix" => 5
            ],[
                "nom" => "Bruschetta",
                "prix" => 7.50
            ]
        ],"plat" => [
            [
                "nom" => "Couscous",
                "prix" => 5
            ],[
                "nom" => "Boeuf bourguignon",
                "prix" => 7.50
            ]
        ],
        "Dessert" => [
            [
                "nom" => "Profiterole",
                "prix" => 8
            ],[
                "nom" => "Pastel de Nata",
                "prix" => 9.99
            ]
        ]
    ];
 
    $personnes = ["Saliha", "Maël", "Ludovic"];
 
     echo "<ol>";
    foreach ($personnes as $key => $value) {
        echo "<li>".$value."</li> <br>";
        $total=0;
        echo "<ul>";
        foreach ($menu as $key => $value) {
          $tab  =array_rand($value);
        //   var_dump($tab);
        //   var_dump($value);
 
            echo $key." :" .$value[$tab]["nom"]." <br>   prix : ".$value[$tab]["prix"]."<br>";
            $total += $value[$tab]["prix"];
           
 
        }
        if ( $total>20){
            $somme=($total*0.9);
             echo "<p>Total = ". "<s>$total €</s> <strong>→ ".(round($somme, 2)). "</strong> €!";
        }else{
            echo "<strong>" . $total . "</strong>"." €!</p>";
        }
       
        echo "</ul>";
 
       
    }
    echo "</ol>";
 
 
 
//   $menu = [
 
     
//     'entrées' => [
//         'nom' => ['Tempura','Salade','Crêpe chèvre miel', 'Oeuf benedicte'],
//         'prix' => [13,8,2,1]
     
//     ],
//     'plats' => [
//         'nom' => ['Souris d agneau', 'Pâte bolognaise', 'Lasagne', 'Pizza pesto'],
//         'prix' => [13,27,32,25]
//     ],
//     'dessert' => [
//         'nom' => ['Cheesecake Framboise', 'Brownies', 'Ice cream', 'Tiramisu'],
//         'prix' => [7,9,11,13]
//     ]
// ];
 
// $personnes = ["Issa","Hayata", "Ryan"];
 
 
 
// foreach ($personnes as $personne) {
//     echo "<h3>Menu pour $personne :</h3>";
 
//      $total = 0;
 
//     foreach ($menu as $cle => $nomPrix) {
 
//         $index = array_rand($nomPrix['nom']);
 
//         $nom = $nomPrix['nom'][$index];
//          $prix = $nomPrix['prix'][$index];
 
//          echo $cle . " : " . $nom . " : " . $prix . " €<br>";
 
//          $total += $prix;
//         }
 
//             if ($total > 20) {
//             $reduction = $total * 0.10;
//             $total -= $reduction;
//             echo "Réduction de 10% :" . $reduction . " €<br>";
//         }
//         echo "Total à payer : " . $total . " €<br>";
//     }
 
?>
