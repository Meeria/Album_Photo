<?php namespace ctrl\album;

function index() {
	return "afficher";
}

function afficher($id=null){
	if ($id == null){
		$id = \models\album\random();
	}
		view("album", [
			"titre"=>"album",
			"idAlb" => $id,
            "albums"=>\models\album\get(),
            "photos"=>\models\photo\getByAlbum($id)
		]);
}


function editer($id = null){
	if($id==null){ // si l'id est nul on ajoute

		view("albumEditer", [
			"titre"=>"ajouter",
			"nomAlb"=>"",
			"action"=>\router\url("album","ajouter"),
			"btn"=>"ajouter"
		]);

	} else { // si l'id n'est pas nul on modifie le nom de l'alb

		view("albumEditer", [
			"titre"=>"modifier",
			"nomAlb"=>\models\album\get($id)["nomAlb"],
			"action"=>\router\url("album","modifier", [$id]),
			"btn"=>"modifier"
		]);
	}

	

}
function modifier($id){
	\models\album\modify($id);
	redirect("album", "afficher", [$id]);
}


function ajouter(){
	$id=\models\album\add();
	redirect("album", "afficher", [$id]);
}

function supprimer($id){
	$id=\models\album\delete($id);
	redirect("album", "afficher");
}

function confirmer($id = null){
	view("albumConfirmer",[
		"titre" => "confirmer",
		"id" => $id
	]);
}






// 	else {
// 		view("unePhoto", [
// 			"titre"=>"Une photo",
// 			"photo"=>\models\photo\get($id)
// 		]);
// 	}
// }

// function modifier(){
// 	//redirect("photo", "afficher", ["id"=>1]);
// }


?>