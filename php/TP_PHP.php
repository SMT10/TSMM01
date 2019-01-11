
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="TP JS Chiffomy">
    <meta name="keywords" content="CSFT,tunis, game,web app">
    <meta name="author" content="Barhoumi Mohamed Chawki">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSFT TSMM01 PHP TP</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <style>
    body{
      background-color:gray;
      }

      h3{
        color:#fff;
      }

      h4{
        color:rgb(0,250,3);
      }
      table, th, td {
         border:none;
      }
      td.labeling{
      color:white;
      font-size:22px;
      font-family:arial
    }
    input.lab{
      background-color:lightgray;
      color:blue;
      text-align:center;
      font-style:bold;
    }
    td.boutton{
      padding:5px;
      text-align:center;
      background: lightgray;
    }


   </style>

  </head>
  <body>



<!-- begin of bootstarp-->
<div class="container-fluid ">
<hr>
<!--test php component-->
<h3>Travaux Pratiques PHP CSFT TSMM01 </h3>
<hr>

<form name="tp" method="POST"  action="info.php">
<table >

  <tr >
    <td class="labeling">Longueur : </td>
    <td> <input type="text" name="long" class="lab"></td>
 </tr>

<tr >
  <td class="labeling">Largeur :</td>
  <td>  <input type="text" name="larg" class="lab"> </td>
</tr>

<tr >
  <td></td>
  <td class="boutton">
    <input type="submit" value="Afficher">
    <input type="reset" value="Effacer">
  </td>
</tr>

</table>
</form>






<?php
echo "<br> <br>";
//echo $_SERVER['PHP_SELF'];

?>





















</div>


<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular.min.js"></script>
<script src="https://fb.me/react-15.1.0.js"></script>
<script src="https://fb.me/react-dom-15.1.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.3/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r82/three.min.js"></script>
<script src="//cdn.jsdelivr.net/velocity/1.2.3/velocity.min.js"></script>

<script src="./js/tp1.js"></script>
<script src="./js/chifomy.js"></script>
  </body>
</html>
