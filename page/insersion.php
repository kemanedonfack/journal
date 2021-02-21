<?php include 'database.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../image/titre.ico"/>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/styl.css">
  <link rel="stylesheet" type="text/css" href="../css/aos.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
  <script src="../js/JQuery.min.js" type="text/javascript"></script>
  <script src="../js/javascript.js" type="text/javascript"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <script src="../js/aos.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Club Journal IAI</title>
</head>
<body>
  <section class="contenu" >
  <div class="container-fluid" id="masquer">
  <header class="tete">
        <div class="row">
          <div class="entete">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 logo">
              <img class="img-circle img-thumbnail" src="../image/logo.jpg" width="100px" height="50px">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-9 descendre">
              club journal iai-cameroun <i class="fa fa-graduation-cap fa-1x"></i>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-10 padding">
<button type="button" class="btn btn-success bas" data-toggle="modal" data-target="#exampleModal" data-whatever="@twbootstrap">devenir menbre du club</button>       
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-10 padding">       
            </div>
            <div class="col-xs-2 hidden-lg hidden-md hidden-sm">
              <span class="fa fa-bars fa-2x barre"></span>
            </div>
          </div>
        </div>
        <div class="row">
         <div class="container-fluid">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <nav class="nav nav-pills " role="navigation">
              <ul class="navbar-nav">
                <li><a href="index.php" class="active">Acceuil <span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="presentation_du_club.php">Présentation du club </a></li>
                <li><a href="#">Les autres clubs</a></li>
                <li><a href="stories.php">stories</a></li>
                <li class="menu-css"><a href="#">Nos Centres <span class="glyphicon glyphicon-chevron-down"></span></a>
                  <ul class="submenu">
                      <li><a href="#">Douala</a></li>
                      <li><a href="#">Yaoundé</a></li> 
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
   </header>
 <h3> <span class="glyphicon glyphicon-plus"></span> ajouter une nouvelle infos pour le journal</h3>
 <form method="post" action="insersion.php" autocomplete="off">
  <div class="form-group insersion">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <label class="control-label" for="titre">Titre de l'infos</label>
      <input type="text" name="titre" id="titre" class="form-control" required></input>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <label class="control-label" for="date">Date</label>
      <input type="date" name="date" id="date" class="form-control" required></input>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <label class="control-label" for="image">Nom de l'image</label>
      <input type="text" name="image" id="image" class="form-control" required></input>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <label class="control-label" for="ville">Nom de la ville</label>
      <select class="form-control" name="table">
        <option>douala</option>
        <option>yaounde</option>
        <option>garoua</option>
        <option>yagoua</option>
        <option>bafoussam</option>
      </select>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <label class="control-label" for="min_description">Mini_description de l'infos</label>
      <textarea class="form-control" name="mini_description" id="min_description" required></textarea>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <label class="control-label" for="description">Description de l'infos</label>
      <textarea class="form-control" name="description" id="description" required></textarea>
    </div>
    <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6 ">
      <span class=""></span>
      <button type="submit" class=" form-control btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Enregistrer</button>
    </div>
  </div>
 </form>
 <?php 
   function clean($data)
{
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}
if ( !empty($_POST['titre']) AND !empty($_POST['date']) AND !empty($_POST['image']) AND !empty($_POST['description']) )
{

  $_POST['titre']=clean($_POST['titre']);
  $_POST['description']=clean($_POST['description']);
  $_POST['image']=clean($_POST['image']);
  $_POST['date']=clean($_POST['date']);
  $_POST['table']=clean($_POST['table']);
  $_POST['mini_description']=clean($_POST['mini_description']);

  $data=$database->prepare('INSERT INTO '.$_POST['table'].'  VALUES (NULL,?,?,?,?,?) ');
  $data->execute(array($_POST['titre'],$_POST['description'],$_POST['image'],$_POST['date'],$_POST['mini_description']));

}
else
{
  echo " les champs sont vides";
}


  ?>