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
			"photo"=>\models\photo\get($id)
		]);
	}
}

function modifier(){
	//redirect("photo", "afficher", ["id"=>1]);
}


?>