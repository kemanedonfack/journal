<?php 

include 'header.php';
include 'database.php';

  function clean($data)
{
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}

$_POST['recherche']=clean($_POST['recherche']);

if (!empty($_POST['recherche'])) 
{
   
 $_POST['recherche']=clean($_POST['recherche']);
 
  $tab = array ('douala','yaounde');

  $i=0;

    echo '<h3>resultat de la recherche sur '.$_POST['recherche'].'<h3>';
  while ($i<2)
    {
         if ($i==0) 
         {
            $id="id_douala";
            $ville="douala";
         }
         else
         {
          $id="id_yaounde";
          $ville="yaounde";
         }

    $data=$database->query('SELECT '.$id.',titre,mini_description,image,jour FROM '.$tab[$i].' WHERE titre LIKE 
    "%'.$_POST['recherche'].'%" OR description LIKE "%'.$_POST['recherche'].'%" OR titre LIKE "%'.$_POST['recherche'].'" OR description LIKE "%'.$_POST['recherche'].'" OR titre LIKE 
    "'.$_POST['recherche'].'%" OR description LIKE "'.$_POST['recherche'].'%" ');
              

                
          while ($ligne= $data->fetch()) 
          {
           echo ' <div class="col-lg-3  col-md-4 col-sm-6 col-xs-12">';
              echo '<a href="page1.php?identifiant='.$ligne[$id].'&amp;country='.$ville.'&id_name='.$id.'">';
              echo '<img class="img-responsive img-thumbnail" src="../image/'.$ligne['image'].'.jpg">';
              echo '<h5>'.$ligne['titre'].'</h5>';
              echo '</a>';
              echo '<p>'.$ligne['mini_description'].'<br>';
              echo '<button class="btn btn-primary">'.$ligne['jour'].'</button>';
              echo '</p>';
          echo '</div>';  
        }

        $i++; 
    } 

 }
 else
 {
   echo '<p style="color:red"> VOUS N\'AVEZ RIEN ECRIS VEILLEZ RESSAYER </p>';
 } 
	


 ?>
<?php include 'footer.php' ?>