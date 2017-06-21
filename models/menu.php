<?php
class Menu extends model{

	public function getMenu($id=0){
		$array = array();

		$sql = "SELECT * FROM menu ";
		
		if($id > 0){//se o id for maior que 0
			$sql .= "WHERE id = '$id' ";
		}

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0){
			if($id > 0){
				$array = $sql->fetch();//se tiver um id vai ser filtrado e retornado um resultado
			}else{
				$array = $sql->fetchAll();
			}
		}

		return $array;
	}
	
	public function delete($id){
		$sql = "DELETE FROM menu WHERE id = '$id' "; 
		$this->db->query($sql);
	}

	public function update($nome, $url, $id){
		$sql = "UPDATE menu SET nome = '$nome', url = '$url' WHERE id = '$id' ";
		$this->db->query($sql);
	}

	public function insert($nome, $url){
		$sql = "INSERT INTO menu SET nome = '$nome', url = '$url' ";
		$this->db->query($sql);
	}
}