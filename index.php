<?php 
	
	/*
	*El frontend Controller se encarga de 
	*configurar nuestra aplicación
	*/
	require "config.php";
	require "helpers.php";
	require "Library/Request.php";
	require "Library/Inflector.php";
    require "Library/Response.php";
    require "Library/View.php";

	//lamar al controllador indicado

	if(empty($_GET['url'])){
		$url = "";
	}else{
		$url = $_GET['url'];
	}

	$request = new Request($url);
	$request->execute();
	



	//controller($_GET['url']);



	/*
	* llamar a los controladores individuales
	*/
	 //index.php
	// index.php?url=contactos

	 /*
		if(empty($_GET['url'])){
			require "controllers/home.php";
		}
		else if($_GET['url'] == 'contactos'){
			require "controllers/contactos.php";
		}
		else{
			//este codigo me permite enviar un error 404
			header("HTTP/1.0 404 Not Found");
			exit("Pagina no encontrada");
		}
   */
	
	 // var_dump($_GET);