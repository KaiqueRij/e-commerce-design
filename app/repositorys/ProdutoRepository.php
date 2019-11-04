<?php

	namespace app\repositorys;

	use mf\repository\Repository;

	use app\Connection;

	/**
	 * Classe que requisita na base dados
	 */
	class ProdutoRepository extends Repository {

		public function insert($object) {
			// Lógica de inserção
		}

		public function get_all() {

			$sql = 'SELECT * FROM produtos';

			$stmt = $this->conn->prepare($sql);
			$stmt->execute();

			$produtos = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			return $produtos;
		}

		public function get_by_id($id) {
			
			$sql = 'SELECT * FROM produtos WHERE id = :id';

			$stmt = $this->conn->prepare($sql);
			$stmt->bindValue(':id', $id);
			$stmt->execute();

			$produto = $stmt->fetch(\PDO::FETCH_ASSOC);

			return $produto;
		}

		public function update($object) {
			// Lógica de atualização
		}

		public function delete($object) {
			// Lógica para remoção
		}

		// Singleton
		public static function get_instance() {
			if (!isset(self::$instance)) {
				self::$instance = new ProdutoRepository();
			}
			return self::$instance;
		}

	}

?>