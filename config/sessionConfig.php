<?php
	class sessionConfig{
		public function sessionDestroy($url){
			session_destroy();
			echo $url;
			header("Location: ".$url);			
		}

	}  
?>