<?php
	namespace Models;

	class ContatoModel{

		public static function enviarFormulario(){
			$mail = new \Email('smtp.gmail.com','email','senha','nome');
			$mail->addAdress('email destinatario','nome');
			$mail->formatarEmail(array('assunto'=>'Mensagem do site','corpo'=>'Testando sistema !'));
			$mail->enviarEmail();
		}
        
	}

?>