<? session_start();?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title><?= $titre ?></title>
  <link rel="stylesheet" href="<?= router\web(); ?>css/style.css">
  <script src="https://kit.fontawesome.com/0f4f993d73.js" crossorigin="anonymous"></script>
</head>
<header>
    <a class="title" href="<?= \router\url('album','afficher') ?>">Albums</a>
    <?php if (isset($_SESSION['login'])){
   echo '   <span class=user>Connecté en tant que : '.$_SESSION['login'].'</span>';
}?>
</header>
<body>