<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Strong Password Generator</title>
</head>
<div class="text-center h1"> Strong Password Generator</div>
<body class="bg-dark text-white">

<main class="container">


<form action="index.php" method="GET">
 <div class="d-flex justify-content-between ">
    <label for="pass_length" class="me-3">Lunghezza Password</label>
    <input type="number" id="pass-length" name="pass_length"  >
  </div>
  
  <label for="numbers"> numeri </label>
    <input type="checkbox" name="numbers"> <br>

    <label for="lettere_Maiuscole">lettere Maiuscole</label>
    <input type="checkbox" name="lettere_Maiuscole"> <br>

    <label for="lettere_minuscole">lettere minuscole</label>
    <input type="checkbox" name="lettere_minuscole"> <br>

    <label for="simboli">simboli</label>
    <input type="checkbox" name="simboli"> <br> 


  <button class="btn btn-primary mt-3">INVIA</button>
  <button type="reset" class="btn btn-secondary mt-3">ANNULLA</button>
  </form>








</main>
</body>

</html>
<?php
include "functions.php";?>

