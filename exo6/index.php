<?php
$exercice ='Exercice 6';
include '../header.php';
?>
<h4>
  Traduire ce code avec des if et des else :

  <\?php
  echo ($age >= 18) ? 'Tu es majeur !!!' : 'Tu n\'es pas majeur !!!';
  ?>
</h4>
<form action="#" method="post">
  <select name="age">
    <option value="">Sélectionnez</option>
    <?php
    $compteur = 1;
    for($compteur; $compteur <= 100; $compteur++)
    {
      ?>
      <option value= <?= $compteur ?> <?php if(!empty($_POST['age'])){if($_POST['age'] == $compteur){echo 'selected';}else{echo'';}}?>><?= $compteur ?> ans</option>
      <?php
    }
    ?>
  </select>
  <input type="submit" value="Afficher">
</form>
<?php
if(!empty($_POST['age'])){
  if($_POST['age'] >= 18){
    ?>
    <p><h3><font color = "green">Tu es majeur !!!</font></h3></p>
    <?php
  }
  else {
    ?>
    <p><h3><font color = "red">Tu n'es pas majeur !!!</font></h3></p>
    <?php
  }
}
?>
</body>
</html>
