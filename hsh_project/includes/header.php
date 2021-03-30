<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HsH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">
    <style>
        #link{
            font-weight: bold;
            font-size: 20px;
            text-decoration: none;
            color:black;
        }
        #link:hover {
        color: white;
        }
        #zoom:hover{
            transform: scale(1.2);
            opacity: 0.5;
        }
    </style>
</head>
<body>
<?php require "db/conn.php"; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Hochschule Hannover</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
</div> 
    <div  class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="books.php">Bücher</a>
        <a class="nav-link" href="library.php">Bibliothek</a>
        <a class="nav-link" href="addbook.php">Erstellen</a>
      </div>
    </div>
  
</nav>
<div class="container">
    