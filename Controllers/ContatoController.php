<?php

    namespace Controllers;

use Connection;
use Models\PostagemDados;


class ContatoController extends Controller
    {


        public function __construct(){
            $this->view = new \Views\MainView('contato');
        }
         

        public function executar(){
            if(isset($_POST['acao'])){
                \Models\ContatoModel::enviarFormulario();
                echo 'Formulario enviado com sucesso !';

            }
            $this->view->render(array('titulo'=>'Contato'));

        }

        public function insertContato()
        {
            $dados = new PostagemDados();

            if(isset($_POST['acao'])){ 

            $dadosPost['mensagem'] = 'teste';
            $dadosPost['corpo'] = 'teste';
            $dados->insert($dadosPost);
            }
            $this->view->render(array('titulo'=>'Contato'));
        }
    }

?>