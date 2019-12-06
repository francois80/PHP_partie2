<?php
$exercice ='Exercice 5';
include '../header.php';
?>
<h4>
  Traduire ce code avec des if et des else :

  <\?php
  echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
  ?>
</h4>
<form action="#" method="post">
  <select name="genre">
    <option value="">Sélectionnez</option>
    <option value="homme" <?php if(!empty($_POST['genre'])){if($_POST['genre'] == 'homme'){echo 'selected';}else{echo'';}}?>>homme</option>
    <option value="femme" <?php if(!empty($_POST['genre'])){if($_POST['genre'] == 'femme'){echo 'selected';}else{echo'';}}?>>femme</option>
  </select>
  <input type="submit" value="Afficher">
</form>
<?php
if(!empty($_POST['genre'])){
  if($_POST['genre'] == 'femme'){
  ?>
    <p><h3><font color = "red">C'est une développeuse !!!</font></h3></p>
  <?php
  }
  else {
  ?>
    <p><h3><font color = "red">C'est un développeur !!!</font></h3></p>
  <?php
  }
}
?>
</body>
</html>
