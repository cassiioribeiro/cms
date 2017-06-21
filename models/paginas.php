<?php
class Paginas extends model{
	
	public function getPaginas(){
		$array = array();

		$sql = "SELECT id, url, titulo FROM paginas";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getPagina($url){
		$array = array();

		$sql = "SELECT titulo, corpo FROM paginas WHERE url = '$url' ";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}

	public function getPaginaById($id){
		$array = array();

		$sql = "SELECT titulo, corpo, url FROM paginas WHERE id = '$id' ";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			$array = $sql->fetch();
		}

		return $array;
	}

	public function delete($id){
		$sql = "DELETE FROM paginas WHERE id = '$id' "; 
		$this->db->query($sql);
	}

	public function update($titulo, $url, $corpo, $id){
		$sql = "UPDATE paginas SET titulo = '$titulo', url = '$url', corpo = '$corpo' WHERE id = '$id' ";
		$this->db->query($sql);
	}

	public function insert($titulo, $url, $corpo){
		$sql = "INSERT INTO paginas SET titulo = '$titulo', url = '$url', corpo = '$corpo' ";
		$this->db->query($sql);
	}
}