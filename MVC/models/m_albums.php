<?php namespace models\album;

	function get($id=0){
		return \database\get("albums", $id);
	}

	function random(){
		return \database\random("albums");
	}

	function add(){
		return \database\set("albums", $_POST);
	}

	function delete($id){
		return \database\del("albums", $id );
	}

	function modify($id){
		\database\set("albums", $_POST, $id);
	}




	function getByPhoto($idPh){
		return \database\select('SELECT * FROM comporter WHERE idph='.$idPh);
	}

	function hasPhoto($idAlb, $idPh){
		
	}
?>