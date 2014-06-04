<?php
 	
 	class ContactosController {

 		public function indexAction(){
            return new View('contantos');

 		}


 		public function ciudadAction($ciudad){
 			exit('entra a ciudaAction ='. $ciudad);
 		}



 	}