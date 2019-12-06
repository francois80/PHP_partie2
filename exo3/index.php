<?php
$exercice ='Exercice 3';
include '../header.php';
?>
  <h3>
    Créer deux variables age et gender. La variable gender peut prendre comme valeur :<br>
      Homme<br>
      Femme<br>
    En fonction de l'âge et du genre afficher la phrase correspondante :<br>
      Vous êtes un homme et vous êtes majeur<br>
      Vous êtes un homme et vous êtes mineur<br>
      Vous êtes une femme et vous êtes majeur<br>
      Vous êtes une femme et vous êtes mineur<br>
    Gérer tous les cas.
  </h3>
  <?php
  $age = 19;
  $gender = "homme";
  if($age >= 18 && $gender == "homme"){
  ?>
    <p>($age = <?= $age ?> / $gender = <?= $gender ?>) Vous êtes un homme et vous êtes majeur.</p>
  <?php
  }
  else if($age >= 18 && $gender == "femme"){
  ?>
    <p>($age = <?= $age ?> / $gender = <?= $gender ?>) Vous êtes une femme et vous êtes mineur.</p>
  <?php
  }

  $age = 17;
  if($age >= 18 && $gender == "homme"){
  ?>
    <p>($age = <?= $age ?> / $gender = <?= $gender ?>) Vous êtes un homme et vous êtes majeur.</p>
  <?php
  }
  else if($age <= 18 && $gender == "homme"){
  ?>
    <p>($age = <?= $age ?> / $gender = <?= $gender ?>) Vous êtes un homme et vous êtes mineur.</p>
  <?php
  }

  $age2 = 19;
  $gender2 = "femme";
  if($age2 >= 18 && $gender2 == "femme"){
  ?>
    <p>($age2 = <?= $age2 ?> / $gender2 = <?= $gender2 ?>) Vous êtes une femme et vous êtes majeur.</p>
  <?php
  }
  else if($age2 >= 18 && $gender2 == "homme"){
  ?>
    <p>($age2 = <?= $age2 ?> / $gender2 = <?= $gender2 ?>) Vous êtes un homme et vous êtes mineur.</p>
  <?php
  }

  $age2 = 17;
  if($age >= 18 && $gender == "femme"){
  ?>
    <p>($age2 = <?= $age2 ?> / $gender2 = <?= $gender2 ?>) Vous êtes une femme et vous êtes majeur.</p>
  <?php
  }
  else if($age2 <= 18 && $gender2 == "femme"){
  ?>
    <p>($age2 = <?= $age2 ?> / $gender2 = <?= $gender2 ?>) Vous êtes un femme et vous êtes mineur.</p>
  <?php
  }
  ?>
  </body>
</html>
