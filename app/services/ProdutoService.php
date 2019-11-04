<?php

	namespace app\services;

	use app\repositorys\ProdutoRepository;

	/**
	 * Classe que realiza a lógica de negócio da aplicação
	 */
	class ProdutoService {

		public static function get_all() {
			// Lógica se necessário
			return ProdutoRepository::get_instance()->get_all();
		}

		public static function get_by_id($id) {
			// Lógica se necessário
			if(empty($id)) {
				header('Location: /');
			}
			return ProdutoRepository::get_instance()->get_by_id($id);
		}

	}

?>