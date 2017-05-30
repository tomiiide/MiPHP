<?php
/**
 * Created by PhpStorm.
 * User: tomiiide
 * Date: 5/26/2017
 * Time: 3:38 PM
 */
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
     <link rel="stylesheet" href="<?= URL; ?>css/main.css">
     <title>MiPHP</title>
 </head>
 <body>

 <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <a class="navbar-brand" href="#">MiPHP</a>

     <div class="collapse navbar-collapse" id="navbarsExampleDefault">
         <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="<?=URL;?>home/register">Register</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="<?=URL;?>admin/login">Login</a>
             </li>
         </ul>
     </div>
 </nav>

