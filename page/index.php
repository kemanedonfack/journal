
<?php 

include  'header.php';
include  'database.php';
 ?>

   <section>
    <div class="container taille ">     
    <div class="row">
      <div class="col-lg-offset-1 col-lg-9  ">
        <div id="carousel-appdev" class="carousel slide" data-ride="carousel" data-interval="5000">
          <ol class="carousel-indicators">
            <li data-target="carousel-appdev" data-slide-to="0" class="active"></li>
            <li data-target="carousel-appdev" data-slide-to="1"></li>
            <li data-target="carousel-appdev" data-slide-to="2"></li>
             <li data-target="carousel-appdev" data-slide-to="3"></li>
          </ol>
        <div class="carousel-inner" role="listbox">          
            <?php 
                    
                  $data=$database->query('SELECT * FROM yaounde LIMIT 1');

                  while ($ligne=$data->fetch())
                  {
                    echo '<div class="item active">';
                    echo '<a href="page1.php?identifiant='.$ligne['id_yaounde'].'&amp;country=yaounde&id_name=id_yaounde">';
              echo '<img class="img-responsive img-thumbnail" src="../image/'.$ligne['image'].'.jpg"width="1000px"height="300px">';
                    echo '<div class="carousel-caption">';
                    echo '<h3> '.$ligne['titre'].'</h3>';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                  }
                 ?>
                <?php 
                    
                  $data=$database->query('SELECT * FROM douala LIMIT 3');

                  while ($ligne=$data->fetch())
                  {
                    echo '<div class="item">';
                    echo '<a href="page1.php?identifiant='.$ligne['id_douala'].'&amp;country=douala&id_name=id_douala">';
              echo '<img class="img-responsive img-thumbnail" src="../image/'.$ligne['image'].'.jpg"width="1000px"height="300px">';
                    echo '<div class="carousel-caption">';
                    echo '<h3> '.$ligne['titre'].'</h3>';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                  }
                 ?>
          </div>
          <a class="left carousel-control" href="#carousel-appdev" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">précedent</span>
          </a>
          <a class="right carousel-control" href="#carousel-appdev" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">suivant</span>
          </a>
        </div> 
      </div>
    </div>
   </section>
   <aside class="media thumbail ">
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 infos">
        <h3 style="padding: 30px;text-align: center;"> toutes l'actualités sur iai-cameroun </h3>
        <div class="haut col-lg-3 col-md-4 col-sm-6 col-xs-10">
          <video src="../video/video.mp4" controls loop  width="200px" height="144px"></video>
          <h5> information renfermant l'image </h5>
          <p>
            voyage du <span style="color: red">representant resident</span> de l'iai a dschang pour controle le fonctionnement de l'iai-dschang <br> <button class="btn btn-primary">12 fevrier 2019</button> <span class="couleur  glyphicon glyphicon-facetime-video"></span>
          </p>
        </div>
         <?php 
         $data=$database->query('SELECT id_douala,titre,mini_description,image,jour FROM douala');
         while ($ligne= $data->fetch()) 
            {
            echo ' <div data-aos="fade-up" class="aos-item col-lg-3 haut col-md-4 col-sm-6 col-xs-10 ">';
             echo '<a href="page1.php?identifiant='.$ligne['id_douala'].'&amp;country=douala&id_name=id_douala">';
               echo '<img class="img-responsive img-thumbnail" src="../image/'.$ligne['image'].'.jpg">';
               echo '<h4>'.$ligne['titre'].'</h4>';
              echo '</a>';
              echo '<p>'.$ligne['mini_description'].'<br>';
              echo '<button class="btn btn-primary">'.$ligne['jour'].'</button>';
              echo '</p>';
            echo '</div>';
            }

          ?>
          <?php 
         $data=$database->query('SELECT id_yagoua,titre,mini_description,image,jour FROM yagoua');
         while ($ligne= $data->fetch()) 
            {
              
            echo ' <div data-aos="fade-up" class="aos-item col-lg-3 haut col-md-4 col-sm-6 col-xs-10 ">';
             echo '<a href="page1.php?identifiant='.$ligne['id_yagoua'].'&amp;country=yagoua&id_name=id_yagoua">';
               echo '<img class="img-responsive img-thumbnail" src="../image/'.$ligne['image'].'.jpg">';
               echo '<h4>'.$ligne['titre'].'</h4>';
              echo '</a>';
              echo '<p>'.$ligne['mini_description'].'<br>';
              echo '<button class="btn btn-primary">'.$ligne['jour'].'</button>';
              echo '</p>';
            echo '</div>';
            }
          
          ?> 

          <?php 
         $data=$database->query('SELECT id_yaounde,titre,mini_description,image,jour FROM yaounde');
         while ($ligne= $data->fetch()) 
            {
            echo ' <div data-aos="fade-up" class="aos-item col-lg-3 haut col-md-4 col-sm-6 col-xs-10 ">';
             echo '<a href="page1.php?identifiant='.$ligne['id_yaounde'].'&amp;country=yaounde&id_name=id_yaounde">';
               echo '<img class="img-responsive img-thumbnail" src="../image/'.$ligne['image'].'.jpg">';
               echo '<h4>'.$ligne['titre'].'</h4>';
              echo '</a>';
              echo '<p>'.$ligne['mini_description'].'<br>';
              echo '<button class="btn btn-primary">'.$ligne['jour'].'</button>';
              echo '</p>';
            echo '</div>';
            }

          ?>      
      </div>
      <div class="col-lg-3  col-md-3 col-sm-3 col-xs-12 ligne" style="margin-top: 100px;">
      
        <?php include  'historique.php' ?>

      </div>
    </aside>

  <?php
   include  'etudiant.php';?> 
<?php  include  'footer.php'; ?>
