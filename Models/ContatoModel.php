<?php
	namespace Models;

use Connection;


class ContatoModel{

		public static function enviarFormulario(){
			$mail = new \Email('smtp.gmail.com','email','senha','nome');
			$mail->addAdress('email destinatario','nome');
			$mail->formatarEmail(array('assunto'=>'Mensagem do site','corpo'=>'Testando sistema !'));
			$mail->enviarEmail();
		}
        
	}

	class PostagemDados
	{

		public static function insert($dadosPost)
		{
			$conn = Connection::getConn();

			if (empty($dadosPost['corpo']) || empty($dadosPost['mensagem'])){
				echo 'Preencha todos os campos';
	
				return false;
			}
			
			if ($dadosPost['corpo'] && $dadosPost['mensagem']){
				$corpo = $dadosPost['corpo'];
				$mensagem = $dadosPost['mensagem'];

	
			$sql = $conn->prepare("INSERT INTO `nome` VALUES (:cor, :mens)") ;
			$sql->bindValue(':cor', $dadosPost['corpo']);
			$sql->bindValue(':mens', $dadosPost['mensagem']);
			$sql->execute($corpo, $mensagem);

			}
		}		

	}

?>