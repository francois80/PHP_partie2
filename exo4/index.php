<?php
$exercice ='Exercice 4';
include '../header.php';
$varMagnitude1 = ' Micro-séisme impossible à ressentir.';
$varMagnitude2 = 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
$varMagnitude3 = 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
$varMagnitude4 = 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
$varMagnitude5 = 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
$varMagnitude6 = 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
$varMagnitude7 = 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
$varMagnitude8 = 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
$varMagnitude9 = 'Séisme capable de tout détruire sur une très vaste zone.';
?>
<h4>
  L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un
  tremblement de terre. Cette échelle va de 1 à 9.<br>
  Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.<br>
  Magnitude 	Phrase<br>
  1 	Micro-séisme impossible à ressentir.<br>
  2 	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<br>
  3 	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<br>
  4 	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<br>
  5 	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<br>
  6 	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<br>
  7 	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<br>
  8 	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<br>
  9 	Séisme capable de tout détruire sur une très vaste zone.<br>
  Gérer tous les cas.<br>
  Utilser autre chose que des if else
</h4>
<p>
  <form action="#" method="post">
    <select name="echelleRichter">
      <option value="">Séléctionnez</option>
      <option value="1" <?php if(!empty($_POST['echelleRichter'])){if($_POST['echelleRichter']=="1"){echo "selected";}else{echo'';}}?>>Magnitude 1</option>
      <option value="2" <?php if(!empty($_POST['echelleRichter'])){if($_POST['echelleRichter']=="2"){echo "selected";}else{echo'';}}?>>Magnitude 2</option>
      <option value="3" <?php if(!empty($_POST['echelleRichter'])){if($_POST['echelleRichter']=="3"){echo "selected";}else{echo'';}}?>>Magnitude 3</option>
      <option value="4" <?php if(!empty($_POST['echelleRichter'])){if($_POST['echelleRichter']=="4"){echo "selected";}else{echo'';}}?>>Magnitude 4</option>
      <option value="5" <?php if(!empty($_POST['echelleRichter'])){if($_POST['echelleRichter']=="5"){echo "selected";}else{echo'';}}?>>Magnitude 5</option>
      <option value="6" <?php if(!empty($_POST['echelleRichter'])){if($_POST['echelleRichter']=="6"){echo "selected";}else{echo'';}}?>>Magnitude 6</option>
      <option value="7" <?php if(!empty($_POST['echelleRichter'])){if($_POST['echelleRichter']=="7"){echo "selected";}else{echo'';}}?>>Magnitude 7</option>
      <option value="8" <?php if(!empty($_POST['echelleRichter'])){if($_POST['echelleRichter']=="8"){echo "selected";}else{echo'';}}?>>Magnitude 8</option>
      <option value="9" <?php if(!empty($_POST['echelleRichter'])){if($_POST['echelleRichter']=="9"){echo "selected";}else{echo'';}}?>>Magnitude 9</option>
    </select>
    <input type='submit' value="Go !!">
  </form>
</p>
<?php
if(!empty($_POST['echelleRichter'])){
  switch ($_POST['echelleRichter']) {
    case '1':
    echo '<p><h3>cas ' .$_POST['echelleRichter'] .' : <font color = "red">' .$varMagnitude1 .'</font></h3></p>';
    break;
    case '2':
    echo '<p><h3>cas ' .$_POST['echelleRichter'] .' : <font color = "red">' .$varMagnitude2 .'</font></h3></p>';
    break;
    case '3':
    echo '<p><h3>cas ' .$_POST['echelleRichter'] .' : <font color = "red">' .$varMagnitude3 .'</font></h3></p>';
    break;
    case '4':
    echo '<p><h3>cas ' .$_POST['echelleRichter'] .' : <font color = "red">' .$varMagnitude4 .'</font></h3></p>';
    break;
    case '5':
    echo '<p><h3>cas ' .$_POST['echelleRichter'] .' : <font color = "red">' .$varMagnitude5 .'</font></h3></p>';
    break;
    case '6':
    echo '<p><h3>cas ' .$_POST['echelleRichter'] .' : <font color = "red">' .$varMagnitude6 .'</font></h3></p>';
    break;
    case '7':
    echo '<p><h3>cas ' .$_POST['echelleRichter'] .' : <font color = "red">' .$varMagnitude7 .'</font></h3></p>';
    break;
    case '8':
    echo '<p><h3>cas ' .$_POST['echelleRichter'] .' : <font color = "red">' .$varMagnitude8 .'</font></h3></p>';
    break;
    case '9':
    echo '<p><h3>cas ' .$_POST['echelleRichter'] .' : <font color = "red">' .$varMagnitude9 .'</font></h3></p>';
    break;
    default:
    // code...
    break;
  }
}
?>
</body>
</html>
