<?php

    namespace Controllers;
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
    }

?>