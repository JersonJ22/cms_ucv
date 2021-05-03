<?php
	//global 
	class App{
		public function baseUrl(){
			//Obtener la ruta del proyecto
			$padre = dirname(__DIR__); 
			return dirname($padre);
		    //echo 'DIR -> '.$padre;
		    //echo '</br>DIR padre -> '.dirname($padre);						
		}




	}

?>