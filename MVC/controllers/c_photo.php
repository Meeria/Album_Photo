<?php namespace ctrl\photo;

function index() {
	return "afficher";
}

function afficher($id=null){
	if($id==null){
		view("lesPhotos", [
			"titre"=>"Photos",
			"photos"=>\models\photo\get()
		]);
	}
	else {
		view("unePhoto", [
			"titre"=>"Une photo",
			"photo"=>\models\photo\get($id),
			"id" => $id
		]);
	}
}

function supprimer($id){
	\models\photo\delete($id);
	redirect("album", "afficher");
}

function modifier($id){
	view("photoModifier",[
		"titre" => "modifier",
		"albums"=> \models\album\get(),
		"comporter"=> \models\album\getByPhoto($id),
		"idPh" => $id


	]);
}

function confirmer($id = null){
	view("photoConfirmer",[
		"titre" => "confirmer",
		"id" => $id
	]);
}

function ajouter($id = null){
	view("photoAjouter",[
		"titre" => "ajouter",
		"idAlb" => $id
	]);
}

function inserer($idAlb){
	$idPh=\models\photo\add($idAlb);
	redirect("album", "afficher", [$idAlb]);
	//var_dump($_POST);
}

function changer($idPh){
	\models\photo\modifier($idPh);
	redirect("album", "afficher");
	}



?>