<?php
$exercice ='Exercice 1';
include '../header.php';
?>
<h1>
  Créer une variable age et l'initialiser avec une valeur.
  Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire,
  afficher Vous êtes mineur.
</h1>
<?php
$age = 19;
if($age >= 18){
  ?>
  <p>($age = <?= $age ?> ) Vous êtes majeur.</p>
  <?php
}
else{
  ?>
  <p>($age = <?= $age ?> ) Vous êtes mineur.</p>
  <?php
}

$age2 = 17;
if($age2 >= 18){
  ?>
  <p>($age2 = <?= $age2 ?> ) Vous êtes majeur.</p>
  <?php
}
else{
  ?>
  <p>($ag2 = <?=$age2 ?> ) Vous êtes mineur.</p>
  <?php
}

?>
</body>
</html>
