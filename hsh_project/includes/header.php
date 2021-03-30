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
          
        }

.book {
  transform-style: preserve-3d;
  position: relative;
  height: 300px;
  cursor: pointer;
  backface-visibility: visible;
  margin-left:540px
}

.front, .back, .page1, .page2, .page3, .page4, .page5, .page6 {
  transform-style: preserve-3d;
  position: absolute;
  width: 200px;
  height: 100%;
  top: 0; left: 0;
  transform-origin: left center;
  transition: transform .5s ease-in-out, box-shadow .35s ease-in-out;
}

.front, .back {
  background: navy;
}

.front, .page1, .page3, .page5 {
  border-bottom-right-radius: .5em;
  border-top-right-radius: .5em;
}

.back, .page2, .page4, .page6 {
  border-bottom-right-radius: .5em;
  border-top-right-radius: .5em;
}

.page1 { 
  background: #efefef;
}

.page2 {
  background: #efefef;
}

.page3 {
  background: #f5f5f5;
}

.page4 {
  background: #f5f5f5;
}

.page5 {
  background: #fafafa;
}

.page6 {
  background: #fdfdfd;
}

.book:hover .front {
  transform: rotateY(-160deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page1 {
  transform: rotateY(-150deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page2 {
  transform: rotateY(-30deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page3 {
  transform: rotateY(-140deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page4 {
  transform: rotateY(-40deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page5 {
  transform: rotateY(-130deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .page6 {
  transform: rotateY(-50deg) scale(1.1);
  box-shadow: 0 1em 3em 0 rgba(0, 0, 0, .2);
}

.book:hover .back {
  transform: rotateY(-20deg) scale(1.1);
}
 
    </style>
</head>
<body >
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
    