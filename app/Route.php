<?php

	namespace app;

	use mf\init\Bootstrap;

	/**
	 * Classe que define o sistema de roteamento das url
	 */
	class Route extends Bootstrap {

		protected function init_routes() {

			$routes['index'] = array (
				'route' => '/',
				'controller' => 'IndexController',
				'action' => 'index'
			);

			$routes['produto'] = array (
				'route' => '/produto',
				'controller' => 'ProdutoController',
				'action' => 'get_by_id'
			);

			// Rota de páginas de erro
			$routes['error'] = array (
				'route' => '/error',
				'controller' => 'ErrorController',
				'action' => 'error'
			);

			$this->set_routes($routes);
		}

	}

?>