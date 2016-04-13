<?php

	function mask($val, $mask){
		
		 $maskared = '';
		 $k = 0;
		
		 for($i = 0; $i<=strlen($mask)-1; $i++){
			 
			if($mask[$i] == '#'){
				
				if(isset($val[$k]))
				$maskared .= $val[$k++];
				
			}else{
				
				if(isset($mask[$i])){
					$maskared .= $mask[$i];
				}
				
			}
			 
		 }
		 return $maskared;
	}
	
	// Exemplo de aplicação
  // echo mask("00022233344","###.###.###-##");
  
  // retorna 000.222.333-44

?>
