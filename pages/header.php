<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en, pt_br, es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="assets/js/jquery.min.js"><script/>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"><script/>
    <script type="text/javascript" src="assets/js/script.js"><script/> -->
    <title>CLASSIFICADOS</title>
</head>
<body class="intens-body">
    <nav class="
        navbar-main
    ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="./" class="navbar-brand-a">Classificados</a>
            </div>
            <div class="
                navbar-right
            ">
                <ul>
                    <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
                        <li><a href="meus-anuncios.php">Meus anúncios</a></li>
                        <li><a href="sair.php">Sair</a></li>
                    <?php else: ?>
                        <li><a href="cadastre-se.php">Cadastre-se</a></li>
                        <li><a href="login.php">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
