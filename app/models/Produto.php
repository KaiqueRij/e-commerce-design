<?php

	namespace app\models;

	/**
	 * Classe que define o modelo do Produto
	 */
	class Produto {

		private $id;
		private $nome;
		private $descricao;

		public function __get($attr) {
			return $this->$attr;
		}

		public function __set($attr, $value) {
			$this->$attr = $value;
		}

	}

?>