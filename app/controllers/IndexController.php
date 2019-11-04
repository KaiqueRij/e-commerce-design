<?php

	namespace app\controllers;

	use mf\controller\Action;

	// Importações da aplicação
	use app\services\ProdutoService;
	use app\models\Produto;

	/**
	 * Classe que define o controlador da página inicial
	 */
	class IndexController extends Action {
		
		public function index() {

			// Solicita as camadas inferiores os recursos para a página
			$produtos = ProdutoService::get_all();
			
			// Atributo sendo criado dinamicamente no objeto view
			$this->view->produtos = $produtos;

			// Renderizando a página e o layout escolhido pelo parâmetro
			$this->render('index', 'layout');
		}

	}

?>