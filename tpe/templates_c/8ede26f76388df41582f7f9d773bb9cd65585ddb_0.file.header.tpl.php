<?php
/* Smarty version 3.1.39, created on 2021-10-15 00:13:18
  from 'C:\xampp\htdocs\webtpe\Web2TPE\tpe\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6168ab7e0bcd92_45467080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ede26f76388df41582f7f9d773bb9cd65585ddb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webtpe\\Web2TPE\\tpe\\templates\\header.tpl',
      1 => 1634249592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6168ab7e0bcd92_45467080 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Juegos,Videojuegos,venta,videos,grupos,foros,hardware,software">
    <link rel="shortcut icon" href="<?php echo BASE_URL;?>
imgs/favicon.gif" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>
/css/style.css">
    <title>AstroGames</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-light bg-light header">
            <div class="container-fluid">
              <img src="<?php echo BASE_URL;?>
imgs/logo.png" alt="icon" width="30" height="24" class="d-inline-block align-text-top logo">
                </h1>AstroGames</h1>
            </div>
        </nav>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navegador">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">Navegador</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL;?>
home">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL;?>
store">Tienda</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL;?>
Companys">Companys</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" href="<?php echo BASE_URL;?>
logout">Cerrar sesión</a>

                    </li>
                </ul>
            </div>
        </div>
</nav><?php }
}
