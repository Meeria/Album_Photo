<?php namespace ctrl\album;

function index() {
	return "afficher";
}

function afficher($id=null){
		view("album", [
			"titre"=>"album",
            "albums"=>\models\album\get(),
            "photos"=>\models\photo\getByAlbum($id)
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