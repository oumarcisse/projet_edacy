
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
               <li> <a href="#" style="color: #f7d285;">GESTION ELEVES </a>
                 <ul>
                        <li><a href="Ajouter_eleve.php">Enregistrer Eleve</a></li>
                        <li><a href="fonctionnalite2.php">Autres fonctionnalités</a></li>
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


  $cnx= new PDO('mysql:localhost;dbname=projet_edacy','root','');
  if(isset($_POST["submit"]))
  {

      if(!empty($_POST['Nom']) AND !empty($_POST['Prenom']) AND !empty($_POST['Classe']) AND !empty($_POST['Email']) AND !empty($_POST['Tel']))
      {
        $con=mysqli_connect("localhost","root","","projet_edacy");


        $nom=$_POST["Nom"];
        $prenom=$_POST["Prenom"];
        $classe=$_POST["Classe"];
        $email=$_POST["Email"];
        $tel=$_POST["Tel"];
            $sql_query="insert into eleve values('$nom','$prenom','$classe','$email','$tel');";
if(mysqli_query($con,$sql_query))
{
  echo "INSERTION ELEVE REUSSI";
}
else
{
  echo "NOUS PARVENONS PAS A INSERER CETTE ELEVE";
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
             <legend style="background-color: #1d71b8;border-radius: 7px; color: #fff; border: 3px solid #fff;"><h1>Inscription</h1></legend>
                  <form method="POST" action="Ajouter_eleve.php" class="form_pro" enctype="multipart/fomr-data">
                    <table>
                      <tr><th>Nom:</th><th><input type="text" id="Nom" name="Nom" placeholder="Entrer le nom de l'Eleve" class="input_f" /></th></tr>
                      <tr><th>Prenom :</th><th><input type="text" name="Prenom" id="Prenom" placeholder="Entrer le prenom de l'Eleve" class="input_f"/></th></tr>
                      <tr><th>Classe de l'Eleve :</th><th><input type="text" id="Classe" name="Classe" placeholder="Entrer la classe de l'Eleve" class="input_f"/></th></tr>
                      <tr><th>Email :</th><th><input type="text" id="Email" placeholder="cisseoumar534@gmail.com" name="Email" class="input_f" /></th></tr>
                      <tr><th>Telephone :</th><th><input type="numeric" id="Tel" name="Tel" placeholder="77 344 47 99" class="input_f"/></th></tr>
                     </table>
                  <br><br>
        <label><input type="submit" name="submit" value="Créer un compte"/></label><br>
          </form>
        </fieldset>
     </div>
  </div>
  <footer>
    <p><h2> Projet réalisé dans  le cadre du programme de l'Edacy par Oumar CISSE </h2> </p>
  </footer>
</body>
