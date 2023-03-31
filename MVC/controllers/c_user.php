<?php namespace ctrl\user;

function index() {
	return "afficher";
}


function login(){
	view("login",[
		"titre" => "login",
	]);
}

function vRegister(){
	view("register",[
		"titre" => "register",
	]);
}

function session(){
    // session_start();
    // $_SESSION['login'] = $_POST['login'];
	// redirect("album", "afficher");
	$loginUser = $_POST['login'];
    $pswdUser = $_POST['password'];
	$id=\models\user\connect();
	redirect("album", "afficher", [$id]);
}

function disconnect(){
	session_destroy();
	redirect("album", "afficher");
}

function register(){
	$loginUser=$_POST['login'];
	$pswdUser=$_POST['password'];
	if ($pswdUser==$_POST['confirmpassword']){
		$id = \models\user\add($loginUser, $pswdUser, [$id]);
		redirect("user", "login");
	}else {
		redirect("user", "vRegister");
	}
}



?>