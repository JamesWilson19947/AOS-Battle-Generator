<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/bgcss.css" />
    <title>Warhammer Age of Sigmar - Battle Generator</title>
    <?php 
      include("../src/generate.php");
      include("../src/data.php");
    ?>
  </head>
  
  <body>

    <!-- Set the input to last generated, if none generated before set to 1 -->
    <?php
      if (isset($_POST['quantity'])) {
        $numLastGen = $_POST['quantity'];
      } else {
        $numLastGen = 1;
      }
    ?>

    <!-- Header of document -->
    <header class="main-header">
      <h1><span class="logo"><img src="img/logo-aos-new.png" alt="Warhammer Age of Sigmar Warscroll Designer" /></span> Battle Generator</h1>
    </header>

    <div class="hidden" style="font-family: 'Pompei Std'; display: none">preload</div>

    <article class="main-description"><p>The <strong>Warhammer Age of Sigmar - Battle Generator</strong> is a web application designed to allow you to create battles for use in the Warhammer Age of Sigmar game by Games Workshop Limited.</p></article>

    <!-- Input form for battles -->
    <div class="form">
      <form method="post"> 
      <label for="quantity">Number of battles: </label>
      <input type="number" id="quantity" name="quantity" min="1" max="10" value="<?php echo $numLastGen; ?>">
      <input type="submit" name="generateBattle" class="generateBattle" value="Generate Battle" /> 
      </form>
    </div> 

    <!-- Battles output -->
    <div class="allresults">
      <?php

        if (isset($_POST['generateBattle'])) {
        $numbattles =$_POST['quantity'];
        generateBattle($battle_plan, $realm, $numbattles);
        }
      ?> 
    </div>

  </body>
</html>
