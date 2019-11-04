<?php

	namespace app\controllers;

	//Importação do framework
	use mf\controller\Action;

	/**
	 * Classe que define o controlador para páginas de erro
	 */
	class ErrorController extends Action {

		public function error() {
			
			$code = isset($_GET['code']) ? $_GET['code'] : '';
			$this->view->code = $code;

			$this->render('error', 'layout');
		}

	}

?>