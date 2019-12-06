<?php
$exercice ='Exercice 2';
include '../header.php';
?>
<h1>
  Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
  Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
  Bonus : L'écrire de deux manières différentes.
</h1>
<?php
$isEasyTrue = true;
if($isEasyTrue){
  ?>
  <p>($isEasyTrue = <?= $isEasyTrue ?>) if($isEasyTrue)) C'est facile !!</p>
  <?php
}
else{
  ?>
  <p>($isEasyTrue = <?= $isEasyTrue ?>) C'est difficile !!.</p>
  <?php
}

if($isEasyTrue == true){
  ?>
  <p>($isEasyTrue = <?= $isEasyTrue ?>) if($isEasyTrue == true)) C'est facile !!</p>
  <?php
}
else{
  ?>
  <p>($isEasyTrue = <?= $isEasyTrue ?>) C'est difficile !!.</p>
  <?php
}

$isEasyFalse = false;
if($isEasyFalse){
  ?>
  <p>($isEasyFalse = <?= $isEasyFalse ?>) C'est facile !!</p>
  <?php
}
else{
  ?>
  <p>($isEasyFalse = <?= $isEasyFalse ?>) if($isEasyFalse) C'est difficile !!.</p>
  <?php
}

if($isEasyFalse == true){
  ?>
  <p>($isEasyFalse = <?= $isEasyFalse ?>) C'est facile !!</p>
  <?php
}
else{
  ?>
  <p>($isEasyFalse = <?= $isEasyFalse ?>) if($isEasyFalse == false) C'est difficile !!.</p>
  <?php
}
?>
</body>
</html>
