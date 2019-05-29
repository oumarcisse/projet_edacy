
<html lang="fr">
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">
<link rel="stylesheet" type="text/css" href="proprete/proprete.css">
<meta charset="utf-8">
<style type="text/css">

#b li:hover{
  color: white;
  background-color: #5b9bd5;
}
</style>
<div id="conteneur">
  <div id="min">
    <div id="banner1">
      <div id="deplace">
        <ul id="menu">
              <li><a href="accueil.html" style="color: #f7d285;">ACCUEIL</a></li>
               <li> <a href="#" style="color: #f7d285;">GESTION CLASSES</a>
                 <ul>
                        <li><a href="Ajouter.php">Ajouter une classe</a></li>
                        <li><a href="fonctionnalite1.php">Autres fonctionnalités</a></li>
                  </ul></li>
              
                </ul></li>
          </li>
        </ul>
      </div>
    </div>
</head>
<div style="margin-left: 120px; color: red; padding-top: 20px">
<h3>
<?php 
     include("based.php");
  $cnx = new PDO('mysql:localhost;dbname=projet_edacy','root','');
  if(isset($_POST["submit"]))
  {

      if(!empty($_POST['Nom']) AND !empty($_POST['Effectif']))
      {
$con=mysqli_connect("localhost","root","","projet_edacy");

        $Nom=$_POST["Nom"];
        $Effectif=$_POST["Effectif"];
        
                  $sql_query="insert into classe values('$Nom','$Effectif');";
                  if(mysqli_query($con,$sql_query))
{
  echo'<script>alert("UNE NOUVELLE CLASSE A ETE AJOUTE AVEC SUCCES")</script>';
}
else
{
  echo'<script>alert("NOUS PARVENONS PAS A INSERER CETTE CLASSE")</script>';
  
}
                  
                  
               }
               else
      {
        echo "Tous les champs doivent être  remplis !<br>";
      }
      }
      
   
 ?>


 </h3>
</div>

<body>
      <div style="padding-top:50px;">
        
        <fieldset style="border: 3px solid #fff ; border-radius: 5px; background-color: #5b9cd6; position: relative ; margin: 0 auto ;text-align left ;width: 700px;">
             <legend style="background-color: #1d71b8;border-radius: 7px; color: #fff; border: 3px solid #fff;"><h1>Creation d'une nouvelle classe </h1></legend>
                  <form method="POST" action="Ajouter.php" class="form_pro" enctype="multipart/fomr-data">
                    <table>
                      <tr><th>Nom Classe:</th><th><input type="text" id="Nom" name="Nom" placeholder="Entrer le nom de la classe" class="input_f" /></th></tr>
                      <tr><th>Effectif Classe :</th><th><input type="numeric" name="Effectif" id="Effectif" placeholder="Entrer l'Effectif de la classe" class="input_f"/></th></tr>
                    
                  </table>
                  <br><br>
        <label><input type="submit" name="submit" value="Créer classe"/></label><br>
          </form>
        </fieldset>
     </div>
  </div>
  <footer>
    <p><h2> Projet réalisé dans  le cadre du programme de l'Edacy par Oumar CISSE </h2> </em> </p>
  </footer>
</body>
