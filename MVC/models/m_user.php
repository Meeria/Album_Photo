<?php namespace models\user;


function add(){
    $loginUser = $_POST['login'];
    $pswdUser = $_POST['password'];
		return \database\addUser($loginUser ,$pswdUser);
	}

  function connect(){
    $loginUser = $_POST['login'];
    $pswdUser = $_POST['password'];
		return \database\userConnect($loginUser ,$pswdUser);
  }

  function isAdmin(){
    return isset($_SESSION['admin']) ? $_SESSION['admin']==1 : 0;
  }
?>