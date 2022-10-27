<?php
if(isset($_GET["page"]))
    $strona = $_GET["page"];
else
    $strona = "main";

?>

<html lang="pl">
<head>
<title>Polska | Najpiękniejszy kraj</title>

<meta charset="UTF-8">
<meta name="author" content="ImieNazwisko autora">
<meta name="description" content="Polska, najpiękniejszy kraj Europy.">
<meta name="keywords" content="polska kuchnia smaki europa kraj panstwo">

<link href='http://fonts.googleapis.com/css?family=Forum&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css" />

</head>
<body>

<div class="wrapper">
<header>
<h1>Szczecin<span class="red">.</span>pl</h1>
<h3> Atrakcje i wydarzenia oraz ciekawe miejsca w Szczecinie.</h2><hr>

<nav id="mainmenu">
<ul>
<a href="stronaaaaaa.php?page=main"> Strona główna </a> <br>
    <a href="stronaaaaaa.php?page=wydarzenia"> Wydarzenia </a> <br>
    <a href="stronaaaaaa.php?page=galeria"> Galeria zdjęć </a> <br>
    <a href="stronaaaaaa.php?page=miejsca"> Ciekawe Miejsca </a> <br>
	<a href="stronaaaaaa.php?page=kontakt"> Kontakt </a> <br>
</ul><hr>
</header>

  <?php if(($strona)!=null) include($strona.".php"); ?>

</body>
</html>