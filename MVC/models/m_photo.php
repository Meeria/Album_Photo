<?php namespace models\photo;

	function get($id=0){
		return \database\get("photos", $id);
	}

	
	function getByAlbum($id=0){
			$sql="SELECT photos.* FROM photos INNER JOIN comporter ON photos.idPh=comporter.idPh WHERE idAlb=" .$id;
			return \database\select($sql);
	}

	function delete($id){
		$nomPhoto =\models\photo\get($id);
		\database\del("comporter", ["idPh"=>$id]);
		\database\del("photos", $id);
		unlink(\router\root()."/public/photos/".$nomPhoto["nomPh"]);
	}

	function add($idAlb){
		/* 
			- ajouter un enregistrement vide dans la table photo
			- créer le nom de la photo a partir de son id
			- modifier cet enregistrement avec le nom de la photo
			- ajouter la photo dans la table comporter
			- déplacer la photo uploadée dans le dossier photo
		*/

		$id=\database\set("photos", ["nomPh"=>""]);
		$nomPh="ph_".$id.".jpg";
		\database\set("photos", ["nomPh"=>$nomPh], $id);
		\database\set("comporter", ["idPh"=>$id, "idAlb"=>$idAlb]);
		move_uploaded_file($_FILES['photo']['tmp_name'], \router\root()."/public/photos/".$nomPh);
	}

	function modifier($idPh){
		\database\del("comporter", ["idPh"=>$idPh]);
		foreach ($_POST['albums'] as $idAlb){
			\database\set("comporter", ["idPh"=>$idPh, "idAlb"=>$idAlb]);
		}
	}
?>