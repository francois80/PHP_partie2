<?php
$exercice ='Exercice 7';
include '../header.php';
?>
<h4>
  Traduire ce code avec des if et des else :

  <\?php
  echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
  ?>
</h4>
<form action="#" method="post">
  <select name="isOk">
    <option value="">Sélectionnez</option>
    <option value= 0 <?php if(isset($_POST['isOk'])){if($_POST['isOk'] == FALSE){echo 'selected';}else{echo'';}}?>>FALSE</option>
    <option value= TRUE <?php if(isset($_POST['isOk'])){if($_POST['isOk'] == TRUE){echo 'selected';}else{echo'';}}?>>TRUE</option>
  </select>
  <input type="submit" value="Afficher">
</form>
<?php
if(isset($_POST['isOk'])){
  echo ($_POST['isOk']);
  if($_POST['isOk'] == TRUE){
    ?>
    <p><h3><font color = "green">c'est ok !!!</font></h3></p>
    <?php
  }
  else {
    ?>
    <p><h3><font color = "red">c'est pas bon !!!</font></h3></p>
    <?php
  }
}
?>
</body>
</html>
