<?php include 'header.php';
	  include 'database.php' 	
 ?>
<div class="stories">
	<h3>Nos anciennes Infos</h3>
	<?php 
         $data=$database->query('SELECT id_douala,titre,mini_description,image,jour FROM douala');
         while ($ligne= $data->fetch()) 
            {
            echo ' <div class="col-lg-3 haut col-md-4 col-sm-6 col-xs-10 ">';
             echo '<a href="page1.php?identifiant='.$ligne['id_douala'].'&amp;country=douala&id_name=id_douala">';
               echo '<img class="img-responsive img-thumbnail" src="../image/'.$ligne['image'].'.jpg">';
               echo '<h5>'.$ligne['titre'].'</h5>';
              echo '</a>';
              echo '<p>'.$ligne['mini_description'].'<br>';
              echo '<button class="btn btn-primary">'.$ligne['jour'].'</button>';
              echo '</p>';
            echo '</div>';
            }

    ?>
</div>
<?php include 'footer.php' ?>