<?php
	try
	{
		$cnx=new PDO('mysql:host=localhost','root','');
		$cnx->exec('CREATE DATABASE  projet_edacy');
		$cnx->exec('USE projet_edacy');

		$cnx->exec('CREATE TABLE eleve
									(
										numero_dossier integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
										nom varchar(20),
										prenom varchar(20),		
										classe varchar(20),
										email varchar(20),
										tel integer
									)'
					);
		$cnx->exec('CREATE TABLE classe
									(
										id integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
										nom varchar(20),
										effectif integer		
										
									)'
					);
	}

	catch (Exeception $e)
	{
		echo "database created";
		die('Error'.$e->getMessage());
	}

?>