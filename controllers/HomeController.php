<?php 

	 class HomeController {

	 	public function indexAction(){
           return  new View('home', ['titulo' => 'Clase 2']);
	 	}


	 	// public function Action(){
	 	// 	exit('entra a Action');
	 	// }



	 }