 <?php 

  include 'database.php';

  if (isset($_POST['nom']) AND isset($_POST['prenom']) AND  isset($_POST['classe']) AND  isset($_POST['centre']) AND  isset($_POST['telephone'])) {

$donne=$database->prepare('INSERT INTO menbre  VALUES (NULL,?,?,?,?,?) ');

$donne->execute(array($_POST['nom'],$_POST['prenom'],$_POST['classe'],$_POST['centre'],$_POST['telephone']));

  }

    ?>
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
  <script type="text/javascript">
    document.querySelector('.contenu').classList.add('hidden');
  </script>
  <header class="tete">
        <div class="row">
          <div class="entete">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 logo">
              <a href="index.php"><img class="img-circle img-thumbnail" src="../image/logo.jpg" width="100px" height="50px">
            </a>  
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
                      <li><a href="doual.php">Douala</a></li>
                      <li><a href="yaounde.php">Yaoundé</a></li>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
   </header> 
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form method="post" action="index.php" class="formulaire" role="form" autocomplete="off">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="exampleModalLabel">fiche d'insription</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                  <div class="modal-body">
                      <div class="col-lg-12">
                      <label for="nom" class="control-label">Nom <span class="blue">*</span></label><br>
                      <input type="text" name="nom" class="form-control" id="nom"  placeholder="votre nom"><span class="erreur_nom"></span>
                    </div>
                    <div class="col-lg-12">
                       <label for="prenom" class="control-label">Prénom <span class="blue">*</span></label><br>
                       <input type="text" name="prenom" class="form-control" id="prenom"  placeholder="votre prenom"><span class="erreur_prenom"></span>
                    </div>
                    <div class="col-lg-12">
                       <label for="centre" class="control-label">Centre <span class="blue">*</span></label><br>
                       <input type="text" name="centre" placeholder="Exple:IAI-Douala" class="form-control" id="centre" ><span class="erreur_centre"></span>
                    </div>
                    <div class="col-lg-12">
                       <label for="classe" class="control-label">Classe <span class="blue">*</span></label><br>
                       <input type="text" name="classe" class="form-control" id="classe"  placeholder="votre classe"><span class="erreur_classe"></span>
                    </div>
                     <div class="col-lg-12">
                       <label for="telephone" class="control-label">Téléphone <span class="blue">*</span></label><br>
                       <input type="number" name="telephone"  class="form-control" id="telephone" placeholder="votre numero"><span class="erreur_telephone"></span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <div class="col-lg-12">
              <input type="submit" value="inscrit" class="envoi form-control"><br>
            </div>
          </div>          
        </form>
    </div>
  </div>
</div>
<script  type="text/javascript">
      $(document).ready(function() {
      $(window).load(function() {
        $('.loader').fadeOut(30 ,function()
          {
            $('.contenu').removeClass('hidden');
          });
      });
  });
</script>


<script type="text/javascript">
  var erreur_nom;
  var erreur_prenom;
  var erreur_classe;
  var erreur_centre;
  var erreur_telephone;
     $(function()
     {
      $("#nom").keyup(function()
      {
        if (!$("#nom").val().match(/^[a-z1-9. ]+$/i))
        {
          $("#nom").next(".erreur_nom").show().html('<span class="glyphicon glyphicon-remove erreur"></span><span class="erreur"> le nom '+$("#nom").val()+' est invalide</span>');
          $(".erreur").css("color","red");         
           erreur_nom=true;

        }
        else
        {
         $("#nom").next(".erreur_nom").show().html('<span class="glyphicon glyphicon-ok valide"></span> <span class="valide">'+$("#nom").val()+' votre nom est valide</span>');
          $(".valide").css("color","green");
         
             $('.envoi').prop("disabled",false);
            erreur_nom=false;
        }
      });
      
      $("#prenom").keyup(function()
      {
        if (!$("#prenom").val().match(/^[a-z ]+$/i))
        {
          $("#prenom").next(".erreur_prenom").show().html('<span class="glyphicon glyphicon-remove erreur"></span> <span class="erreur"> le prénom '+$("#prenom").val()+' est invalide</span>');
          $(".erreur").css("color","red");
           erreur_prenom=true;
        }
        else
        {
         $("#prenom").next(".erreur_prenom").show().html('<span class="glyphicon glyphicon-ok valide"></span> <span class="valide">'+$("#prenom").val()+' votre prénom est valide</span>');
          $(".valide").css("color","green");

          $('.envoi').prop("disabled",false);
          erreur_prenom=false;
        }
      });
      $("#classe").keyup(function()
      {
        if (!$("#classe").val().match(/^[a-z][a-z1-9éè]+$/i))
        {
          $("#classe").next(".erreur_classe").show().html('<span class="glyphicon glyphicon-remove erreur"></span> <span class="erreur"> la classe '+$("#classe").val()+' est invalide</span>');
          $(".erreur").css("color","red");
          erreur_classe=true;
        }
        else
        {
         $("#classe").next(".erreur_classe").show().html('<span class="glyphicon glyphicon-ok valide"></span> <span class="valide">'+$("#classe").val()+' votre classe est valide</span>');
          $(".valide").css("color","green");

          $('.envoi').prop("disabled",false);
          erreur_classe=false;
        }
      });
      $("#centre").keyup(function()
      {
        if (!$("#centre").val().match(/^[a-zé-]+$/i))
        {
          $("#centre").next(".erreur_centre").show().html('<span class="glyphicon glyphicon-remove erreur"></span> <span class="erreur"> le nom '+$("#centre").val()+' est invalide</span>');
          $(".erreur").css("color","red");
          erreur_centre=true;
        }
        else
        {
         $("#centre").next(".erreur_centre").show().html('<span class="glyphicon glyphicon-ok valide"></span> <span class="valide">'+$("#classe").val()+' votre centre est valide</span>');
          $(".valide").css("color","green");

            $('.envoi').prop("disabled",false);
           erreur_centre=false; 
        }
      });
      $("#telephone").keyup(function()
      {
        if (!$("#telephone").val().match(/^6[957][0-9]{7}$/))
        {
          $("#telephone").next(".erreur_telephone").show().html('<span class="glyphicon glyphicon-remove erreur"></span> <span class="erreur"> le numero '+$("#telephone").val()+' est invalide</span>');
          $(".erreur").css("color","red");
           erreur_telephone=true;
        }
        else
        {
         $("#telephone").next(".erreur_telephone").show().html('<span class="glyphicon glyphicon-ok valide"></span> <span class="valide">'+$("#telephone").val()+' votre numéro est valide</span>');
          $(".valide").css("color","green");

            $('.envoi').prop("disabled",false);
            erreur_telephone=false;   
        }
      });
      $('.envoi').click(function()
      {
          if (erreur_nom==true || erreur_prenom==true || erreur_classe==true || erreur_centre==true || erreur_telephone==true)
          {
            $('.envoi').prop("disabled",true);
          }
      });

      $('.envoi').click(function()
      {
          if ($('#nom').val()=="" || $('#prenom').val()=="" || $('#classe').val()=="" || $('#centre').val()=="" || $('#telephone').val()=="")
          {
            $('.envoi').prop("disabled",true);
          }
      });

      $('.envoi').click(function()
      {
          if (!$('#nom').val()=="" && !$('#prenom').val()=="" & !$('#classe').val()=="" && !$('#centre').val()=="" && !$('#telephone').val()=="")
          {
            alert("felicitation vous etes menbre du club journal");
          }
      });
     });
   </script>
   
   <script type="text/javascript">
     AOS.init({
        easing: 'ease-in-out-sine'
      });
   </script>

   <div class="modal fade" id="ex" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form method="post" action="index.php" class="formulaire" role="form" autocomplete="off">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="exampleModalLabel">fiche d'insription</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                  <div class="modal-body">
                      <div class="col-lg-12">
                      <label for="nom" class="control-label">Nom <span class="blue">*</span></label><br>
                      <input type="text" name="nom" class="form-control" id="nom"  placeholder="votre nom"><span class="erreur_nom"></span>
                    </div>
                    <div class="col-lg-12">
                       <label for="prenom" class="control-label">Prénom <span class="blue">*</span></label><br>
                       <input type="text" name="prenom" class="form-control" id="prenom"  placeholder="votre prenom"><span class="erreur_prenom"></span>
                    </div>
                    <div class="col-lg-12">
                       <label for="centre" class="control-label">Centre <span class="blue">*</span></label><br>
                       <input type="text" name="centre" placeholder="Exple:IAI-Douala" class="form-control" id="centre" ><span class="erreur_centre"></span>
                    </div>
                    <div class="col-lg-12">
                       <label for="classe" class="control-label">Classe <span class="blue">*</span></label><br>
                       <input type="text" name="classe" class="form-control" id="classe"  placeholder="votre classe"><span class="erreur_classe"></span>
                    </div>
                     <div class="col-lg-12">
                       <label for="telephone" class="control-label">Téléphone <span class="blue">*</span></label><br>
                       <input type="number" name="telephone"  class="form-control" id="telephone" placeholder="votre numero"><span class="erreur_telephone"></span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
            <div class="col-lg-12">
              <input type="submit" value="inscrit" class="envoi form-control"><br>
            </div>
          </div>          
        </form>
    </div>
  </div>
</div>