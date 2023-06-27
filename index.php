<?php

$age ='10';
if ($age >= 18){;
echo 'Vous êtes majeur';
} else
  echo 'vous ete mineur';

  echo '<br/>';

  $isEasy =true;
  if ($isEasy) {
  echo "c'est facile!";
  } else 
    echo "C'est difficile !!!";
    echo '<br/>';

    $age ='10';
    $gender='homme';

    if ($age >= 18) {
        if ($gender == 'Homme') {
            echo "Vous êtes un homme et vous êtes majeur";
        } else {
            echo "Vous êtes une femme et vous êtes majeure";
        }
        } else {
            if($gender== 'homme') {
                echo "vous etes une homme et vous ete mineur";  
            } else 
                echo "vous ete femme et vous ete mineur";
            
        }
    
echo '<br/>';
echo '<br/>';
echo '<br/>';
//autre excercice

$magnitude = 1;


switch ($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.";
        break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 3:
        echo "Ne cause pas de dégâts mais commence à pouvoir être légèrement ressenti.";
        break;
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégâts.";
        break;
    case 5:
        echo "Séisme capable d'engendrer des dégâts importants sur de vieux bâtiments ou bien des bâtiments présentant des défauts de construction. Peu de dégâts sur des bâtiments modernes.";
        break;
    case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
    case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
    case 9:
        echo "Séisme capable de tout détruire sur une très vaste zone.";
        break;
    default:
        echo "Magnitude inconnue.";
        break;
}

echo '<br/>';
echo '<br/>';
echo '<br/>';
//ex 5

if ($gender != 'Homme') {
    echo "C'est une développeuse !!!";
} else {
    echo "C'est un développeur !!!";
}
//
echo'<br/>';
echo'<br/>';
echo'<br/>';

// ex 6

if ($age >= 18) {
    echo "Tu es majeur";
} else {
    echo "Tu n'es pas majeur";
}

//ex 7
echo'<br/>';
echo'<br/>';
echo'<br/>';

if ($isOk == false) {
    echo "c'est pas bon !!!";
} else {
    echo "c'est ok !!";
}

//ex 8
echo'<br/>';
echo'<br/>';
echo'<br/>';

if ($isOk) {
    echo "c'est ok !!";
} else {
    echo "c'est pas bon !!!";
}
?>