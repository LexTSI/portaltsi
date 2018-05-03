<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Including Title up to 70 characters -->
    <title>
    <?php
    if(isset($_GET['title'])){
      $title = $_GET['title'];
    } 
    else if(empty($title)){
      $title = "LEX - Laboratório Experimental do curso de TSI - IFSul/Pelotas";
    }     
    echo $title; 
    ?>
    </title>

    <!-- Including description for website up to 140 characters -->
    <?php
    if(isset($_GET['description'])){
      $description = $_GET['description'];
    } 
    else if(empty($title)){
      $description = "LEX é um laboratório experimental do curso de Tecnologia em Sistemas para Internet, com intuito desenvolver uma série de projetos.";
    }          
    ?>
    <meta name="description" content="<?php echo $description; ?>">

    <!-- Including The Open Graph protocol for website -->
    <!-- The type of your object -->
    <meta property="og:type" content="website"/>
    <!-- The title of your object as it should appear within the graph -->  
    <meta property="og:title" content="<?php echo $title; ?>"/>
    <!-- A one to two sentence description of your object --> 
    <meta property="og:description" content="<?php echo $description; ?>"/>
    <!-- The canonical URL of your object that will be used as its permanent ID in the graph -->
    <meta property="og:url" content="#"/>
    <!-- An image URL which should represent your object within the graph -->
    <meta property="og:image" content="#"/>
    
    <!-- Including The Twitter Cards for website -->
    <!-- The type of card you want Twitter to display -->
    <meta name="twitter:card" content="summary_large_image" />
    <!-- @username for the website used in the card footer -->
    <meta name="twitter:site" content="#" />
    <!-- @username for the content creator / author -->
    <meta name="twitter:creator" content="#" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Including favicon for website 32x32 -->
    <link rel="shortcut icon" href="favicon.ico">
    
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->

    <!-- LEX CSS -->
    <link rel="stylesheet" type="text/css" href="css/lex.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
  </head>
  <body>