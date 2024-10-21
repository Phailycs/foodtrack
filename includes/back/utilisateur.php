<?php
	
	try{$bdd = new PDO('mysql:host=localhost;dbname=projet_foodtrack', 'root', 'rootROOT!2020');}
	catch (Exception $e){die('Erreur : ' . $e->getMessage());}

	// 	$user = '';
	// 	if(isset($_SESSION["id_utilisateur"]) AND $_SESSION["id_utilisateur"] != ""){
	// 	$user = 'Bonjour '.$_SESSION["login"].'';

?>

<!DOCTYPE html>
<html lang="FR-fr">
	<head>
		<meta charset="utf-8">
        <link rel="shortcut icon" href="../../assets/img/Logo.ico">
		<title>Food Track</title>
		<!-- chargement des feuilles de style -->
		<link rel="stylesheet" href="../../assets/css/style_utilisateur.css">
		<script type="text/javascript" src="../../assets/js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="../../assets/js/tab.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	</head>

	<body>
		<header>
			<div class="grid_header">
				<div class="image_logo">
					<img src="../../assets/img/logo.png">
					<h1 class="title" ><a class="link" href="../../">Food Track</a></h1>
				</div>
				<div class="titre">
					<h2>Bonjour Félix</h2>
				</div>
				<div class="acceuil">
					<a class="link" href="../../"><h1 class="acc">Accueil</h1></a>
				</div>
			</div>
		</header>
		<main>
			<div id="tabsContainer">
				<div class="tabs-nav">
					<ul>
						<li class="active"><a href="#tab1">Information du compte</a></li><br><br>
						<li><a href="#tab2">Historique des commandes</a></li><br><br>
						<li><a href="#tab3">Éditer le profil</a></li>
					</ul>
				</div>
				<section class="tabs-content">
					<div id="tab1">
						<h1>Information du compte</h1>
						<table class="info_compte">
							<tr>
								<th><h2>Nom d'utilisateur</h2></th>
								<th class="font_exclude">L'Homme Baguette</th>
							</tr>
							<tr>
								<th><h2>Nom</h2></th>
								<th class="font_exclude">Robin-Mores</th>
							</tr>
							<tr>
								<th><h2>Prenom</h2></th>
								<th class="font_exclude">Félix</th>
							</tr>
							<tr>
								<th><h2>Email</h2></th>
								<th class="font_exclude">felix.robinmores@epsi.fr</th>
							</tr>
							<tr>
								<th><h2>N° de téléphone</h2></th>
								<th class="font_exclude">06xxxxxxxx</th>
							</tr>
							<?php
								// $reponse = $bdd->query('SELECT P.id_produit, P.nom_produit, C.libelle 
								// 						FROM Produit as P, Cat as C
								// 						WHERE P.id_cat = C.id_cat
								// 						ORDER BY P.id_produit');
								// while($donnees = $reponse->fetch()){
								// 	echo '<tr class="test">
								// 		<td>'. $donnees['id_produit'].'</td>
								// 		<td>'. $donnees['nom_produit'] .'</td>
								// 		<td>'. $donnees['libelle'] .'</td>
								// 		</tr>';
								// }
								// $reponse->closeCursor();
							?>
						</table>
					</div>

	<!-- ===============================	  -->

					<div id="tab2" class="contenu_tab2">
						<h1>Historique des commandes</h1>
						<table>
							<tr>
								<th><h3>Référence</h3></th>
								<th><h3>Contenu</h3></th>
								<th><h3>Prix</h3></th>
								<th><h3>Date et Heure</h3></th>
							</tr>
							<tr class="font_exclude" class="test">
								<td>10575</td>
								<td>Burger Frite<br>Coca cola<br>Tarte au pomme</td>
								<td>7.50 €</td>
								<td>16/02/2020 - 12h30</td>
							</tr>
							<tr class="font_exclude" class="test">
								<td>11954</td>
								<td>Pizza XXL 4 fromage<br>Ice tea<br>Smoothie fraise</td>
								<td>15 €</td>
								<td>25/03/2020 - 13h</td>
							</tr>
							<tr class="font_exclude" class="test">
								<td>12120</td>
								<td>Pâtes carbonara<br>Orangina<br>brownies</td>
								<td>9.50 €</td>
								<td>16/02/2020 - 12h30</td>
							</tr>
							<tr class="font_exclude" class="test">
								<td>10575</td>
								<td>Burger Frite<br>Coca cola<br>Tarte au pomme</td>
								<td>7.50 €</td>
								<td>16/02/2020 - 12h30</td>
							</tr>
							<tr class="font_exclude" class="test">
								<td>11954</td>
								<td>Pizza XXL 4 fromage<br>Ice tea<br>Smoothie fraise</td>
								<td>15 €</td>
								<td>25/03/2020 - 13h</td>
							</tr>
							<tr class="font_exclude" class="test">
								<td>12120</td>
								<td>Pâtes carbonara<br>Orangina<br>brownies</td>
								<td>9.50 €</td>
								<td>16/02/2020 - 12h30</td>
							</tr>
							<tr class="font_exclude" class="test">
								<td>10575</td>
								<td>Burger Frite<br>Coca cola<br>Tarte au pomme</td>
								<td>7.50 €</td>
								<td>16/02/2020 - 12h30</td>
							</tr>
							<tr class="font_exclude" class="test">
								<td>11954</td>
								<td>Pizza XXL 4 fromage<br>Ice tea<br>Smoothie fraise</td>
								<td>15 €</td>
								<td>25/03/2020 - 13h</td>
							</tr>
							<tr class="font_exclude" class="test">
								<td>12120</td>
								<td>Pâtes carbonara<br>Orangina<br>brownies</td>
								<td>9.50 €</td>
								<td>16/02/2020 - 12h30</td>
							</tr>
							<?php
								// $reponse = $bdd->query('SELECT P.id_produit, P.nom_produit, C.libelle, St.quantite, St.id_article, S.id_produit
								// 						FROM Produit as P, Cat as C, Stock as St, S as stocker
								// 						WHERE P.id_cat = C.id_cat
								// 						WHERE P.id_produit = S.id_produit
								// 						WHERE St.id_article = S.id_article
								// 						ORDER BY P.id_produit');
								// while($donnees = $reponse->fetch()){
								// 	echo '<tr class="test">
								// 		<td>'. $donnees["num_ticket"] .'</td>
								// 		<td>'. $donnees["nom_produit"] .'</td>
								// 		<td>'. $donnees["libelle"] .'</td>
								// 		<td>'. $donnees["quantite"] .'</td>
								// 	</tr>';
								// }
								// $reponse->closeCursor();
							?>
						</table>
					</div>

	<!-- ===============================	  -->

					<div id="tab3">
						<h1>Éditer le profil</h1>
						<table>
							<tr>
								<th>Nom</th>
								<th>Prénom</th>
								<th>Email</th>
								<th>N° de téléphone</th>
							</tr>
							<?php
								// $reponse = $bdd->query('SELECT * FROM newsletter');
								// while($donnees = $reponse->fetch()){
								// 	echo '<tr class="test">
								// 		<td>'. $donnees["mail"] .'</td>
								// 		<td>'. $donnees["date"] .'</td>
								// 	</tr>';
								// }
								// $reponse->closeCursor();
							?>
						</table>
					</div>
	<!-- ===============================	  -->

				</section>
			</div>
		</main>
	</body>
</html>

<?php //}else {
// header("Location: ../../");
//}


?>