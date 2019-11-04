<?php

	namespace app\controllers;

	//Importação do framework
	use mf\controller\Action;

	// Importação da aplicação
	use app\models\Produto;
	use app\services\ProdutoService;

	/**
	 * Classe que define o controlador da página dos produtos
	 */
	class ProdutoController extends Action {

		public function get_by_id() {

			$id = isset($_GET['id']) ? $_GET['id'] : '';

			$produto = ProdutoService::get_by_id($id);

			$this->view->produto = $produto;

			$this->render('produto', 'layout');
		}

	}

?>