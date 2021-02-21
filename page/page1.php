<?php 
include 'database.php';
include 'header.php';
 ?>
<?php

if (isset($_GET['identifiant']) AND isset($_GET['country'])) 
{
  function clean($data)
{
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}
  $identifiant= clean($_GET['identifiant']);
  $country=clean($_GET['country']);
  $_GET['id_name']=clean($_GET['id_name']);

  $data=$database->prepare('SELECT titre,description,image,jour FROM '.$country.' WHERE '.$_GET["id_name"].'=? ');
   
   $data->execute(array($identifiant));

   while ($ligne= $data->fetch())
{
echo '<div class=" col-lg-8 col-md-8 col-sm-8">';
  echo '<div class="titre">';
    echo '<p>';
      echo '<h2>'.$ligne['titre'] .'</h2>';
      echo '<span class="fa fa-calendar fa-2x blue">';
      echo '</span> <span class="blue">'; echo $ligne['jour'];
      echo '</span>';
    echo '</p>'; 
  echo '</div>';  
  echo '<img class="img-responsive img-thumbnail" src= "../image/'.$ligne['image'].'.jpg" width="1300px">';
  echo '<br>'; echo '<br>';
   echo '<p style="font-size:20px">';
            echo $ligne['description'];
    echo '</p>';
echo '</div>';
}

}
else
{?>

  <p style="color: red">
    ERREUR LORS DE LA TRANSMISSION DES DONNEES
  </p>
<?php 
}

 ?>
<div class="col-lg-4  col-md-4 col-sm-4 col-xs-12 ligne" style="margin-top: 100px;">
  <?php include 'historique.php' ?>
</div> 
<div>
</div>      
  <?php include 'etudiant.php';

   include 'footer.php'; ?>
       