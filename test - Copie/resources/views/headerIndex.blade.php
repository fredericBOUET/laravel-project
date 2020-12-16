<?php use App\Http\Controllers\AdminBiereController;
use App\Http\Controllers\FavoriteController; ?>


<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/header.css">
	<link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/main.css">
  <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="http://127.0.0.1:8000/js/modal.js"></script>
  
  @if (session()->get('id')!='')
  <script src = "http://127.0.0.1:8000/js/onClickFav.js"></script>

  @endif





	
	<body>
  <div class="w3-content w3-display-container">
  <img class="mySlides" src="http://127.0.0.1:8000/images/biere1_slider.jpg" style="width:100%">
  <img class="mySlides" src="http://127.0.0.1:8000/images/biere2_slider.jpg" style="width:100%">
  <img class="mySlides" src="http://127.0.0.1:8000/images/biere3_slider.jpg" style="width:100%">
  <img class="mySlides" src="http://127.0.0.1:8000/images/biere4_slider.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

    <header class="appbar">
      <div class="space"></div>
        <h1>Biero</h1>
      <div class="space"></div>
      <div id="myLinks">
       
@if (session()->get('key')=='admin')
      <a href="/biere">Accueil</a>
    <a href="/admin">Gestion</a>
    <a href="/corbeille">Corbeille({{AdminBiereController::countDeleted()}})</a>
    <a href="/logout">Se déconnecter</a>
@endif
@if(!session()->has('key'))
    <a href="/biere">Accueil</a>
    <a href="/login">Se connecter</a>
@endif

@if (session()->get('key')=='sub')
    <a href="/biere">Accueil</a>
    <a href="/favoris">Mes favoris({{FavoriteController::countFav()}})</a>
    <a href="/logout">Se déconnecter</a>
@endif

        </div>
         <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
    </header>


	        
	       <script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

<script src="http://127.0.0.1:8000/js/slider.js" type='text/javascript' ></script>