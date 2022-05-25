<?php

class Validacao{
	
	//validando o campo nome 
	public static function validarNome($valor){
		//  buscando no testador a sintaxe do nome 
		$exp = '/^[^.!@#$%¨&*]{2,40}$/';
		//pega a expressão e o valor recebido para validar 
		if(preg_match($exp,$valor)){
			return true;
		}else{
			return false;
		}//fecha else
	}//fecha nome

}
?>