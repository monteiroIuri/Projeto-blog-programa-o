<?php
include_once("helpers/url.php");
include_once("data/categories.php");
include_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog <> Codando</title>
    <!-- Estilo do projeto -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog <> Codando">
        </a>

        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>