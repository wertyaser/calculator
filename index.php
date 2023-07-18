<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="./style.css">
   <link rel="stylesheet" href="./pico-master/css/pico.css">
   <title>EndGamers</title>
</head>

<body>
   <div class="main">
      <div class="header">
         <nav class="navbar" style="height: 90px;">
            <ul>
               <li><img src="./img/logo.png" style="width: 300px; min-width: 150px;"></li>
            </ul>
            <ul>
               <li>
                  <a href="#member" role="button">MEMBERS</a>
               </li>
               <!-- <li><a href="#" class="switcher" id="theme_switcher"></a></li> -->
            </ul>
         </nav>
         <div class="selection">
            <hr>
            <h4 align="center">SELECT A FORMULA TO CALCULATE:</h4>
            <hr>
            <select name="formula" id="formula" onChange="showHide();" required>
               <option value="" disabled selected>--SELECT--</option>
               <option value="circle">CIRCLE</option>
               <option value="fahrenheit">FAHRENHEIT TO CELCIUS</option>
               <option value="triangle">AREA OF TRIANGLE</option>
               <option value="rectangle">ARE AND PERIMETER OF A RECTANGLE</option>
            </select>
         </div>
      </div>
      <!--end of header-->

      <!--CIRCLE-->
      <div name="hidden-panel" id="circle-panel" class="panel">
         <div class="grid" id="circle">
            <div>
               <!-- image circle -->
               <article class="image-background" data-theme="dark">
                  <img src="./img/circle.png" style="width: 80%;">
               </article>
            </div>
            <div>
               <form method="post">
                  <article>
                     <label for="radius">ENTER THE RADIUS OF THE CIRCLE:</label>
                     <input type="number" id="radius" name="radius" required>
                     <input type="submit" name="submitCircle" value="Calculate">
                     <input type="reset" value="Clear" onclick="resetAnswer()">
               </form>
               </article>
            </div>
         </div>
      </div>
      <!--END OF CIRCLE-->


      <!--    faren to celcius  -->
      <div name="hidden-panel" id="faren-panel" class="panel">
         <div class="grid">
            <div>
               <article class="image-background" data-theme="dark">
                  <img src="./img/faren.png" style="width: 80%;">
               </article>
            </div>
            <div>
               <article>
                  <form method="post">
                     <label for="faren">FAHRENHEIT TO CELCIUS:</label>
                     <input type="number" name="faren" id="faren" required />
                     <input type="submit" value="Calculate">
                     <input type="reset" value="Clear" onclick="resetAnswer()">
                  </form>
               </article>
            </div>
         </div>
      </div>


      <!--    triangle -->
      <div name="hidden-panel" id="triangle-panel" class="panel">
         <div class="grid">
            <div>
               <article class="image-background" data-theme="dark">
                  <img src="./img/triangle.png">
               </article>
            </div>
            <div>
               <article>
                  <form method="get">
                     <label for="base">ENTER THE BASE OF THE TRIANGLE:</label>
                     <input type="number" name="base" id="base" required>
                     <label for="height">ENTER THE HEIGHT OF THE TRIANGLE:</label>
                     <input type="number" name="height" id="height" required>
                     <input type="submit" value="Calculate">
                     <input type="reset" value="Clear" onclick="resetAnswer()">
                  </form>
               </article>
            </div>
         </div>
      </div>

      <!--    rectangle  -->
      <div name="hidden-panel" id="rectangle-panel" class="panel">
         <div class="grid">
            <div>
               <article class="image-background" data-theme="dark">
                  <img src="./img/rectangle.png">
               </article>
            </div>
            <div>
               <article>
                  <form method="get">
                     <label for="length">ENTER THE LENGTH OF THE RECTANGLE:</label>
                     <input type="number" name="length" id="length">
                     <label for="width">ENTER THE WIDTH OF THE RECTANGLE:</label>
                     <input type="number" name="width" id="width">
                     <input type="submit" value="Calculate">
                     <input type="reset" value="Clear" onclick="resetAnswer()">
                  </form>
               </article>
            </div>
         </div>
      </div>
   </div>
   <div id="member">
      <hr>
      <h1 id="memberTitle">MEMBERS</h1>
      <hr>
      <div class="article">
         <article>
            <details>
               <summary><img src="./img/members/leoniel.png"></summary>
               <h6>Leoniel Nacman</h6>
            </details>
         </article>
         <article>
            <details>
               <summary><img src="./img/members/cose.png"></summary>
               <h6>Loyd Cose</h6>
            </details>
         </article>
         <article>
            <details>
               <summary><img src="./img/members/janric.png"></summary>
               <h6>Janric Tapales</h6>
            </details>
         </article>
         <article>
            <details>
               <summary><img src="./img/members/gelo.png"></summary>
               <h6>Angelo Solomon</h6>
            </details>
         </article>
         <article>
            <details>
               <summary><img src="./img/members/hana.png"></summary>
               <h6>Vincent Cabuhat</h6>
            </details>
         </article>
         <article>
            <details>
               <summary><img src="./img/members/sangco.png"></summary>
               <h6>Andrei Sangco</h6>
            </details>
         </article>
      </div>
   </div>

   <!-- php  -->
   <?php
   if (isset($_POST["radius"])) {
      $radius = $_POST["radius"];
      $pi = 3.14159;

      // calculate area, circumference, and diameter
      $area = $pi * $radius * $radius;
      $circumference = 2 * $pi * $radius;
      $diameter = 2 * $radius;

      // format the results to 3 decimal places
      $area = number_format($area, 3);
      $circumference = number_format($circumference, 3);
      $diameter = number_format($diameter, 3);

      echo '<dialog open>
      <article>
        <header>
          <a href="index.php" aria-label="Close" class="close"></a>
          <h2 style="margin: 0; font-family: Courier, monospace;"> AREA, CIRCUMFERENCE AND DIAMETER OF A CIRCLE </h2>
        </header>
        <h4 style="margin: 0; font-family: Courier, monospace;">Area: ' . $area . '</h4>
        <h4 style="margin: 0; font-family: Courier, monospace;">Circumference: ' . $circumference . '</h4> 
        <h4 style="margin: 0; font-family: Courier, monospace;">Diameter: ' . $diameter . '</h4> 
      </article>
    </dialog>';
   }
   ?>

   <!-- faren -->
   <?php
   if (isset($_POST["faren"])) {
      $faren = $_POST['faren'];
      $celsius = ($faren - 32) * 5 / 9;

      $celcius = number_format($celsius, 3);
      echo '<dialog open>
      <article>
        <header>
          <a href="index.php" aria-label="Close" class="close"></a>
        <h2 style="margin: 0; font-family: Courier, monospace;"> FAHRENHEIT TO CELCIUS </h2>
        </header>
        <h4 style="margin: 0; font-family: Courier, monospace;">Celcius: ' . $celcius . '</h4>
      </article>
    </dialog>';
   }
   ?>
   <!-- tringle -->
   <?php
   if (isset($_GET['base']) and isset($_GET['height'])) {
      $base = $_GET['base'];
      $height = $_GET['height'];
      $areaT = 0.5 * $base * $height;

      $areaT = number_format($areaT, 3);
      echo '<dialog open>
      <article>
        <header>
          <a href="index.php" aria-label="Close" class="close"></a>
          <h2 style="margin: 0; font-family: Courier, monospace;"> AREA OF A TRIANGLE </h2>
        </header>
        <h4 style="margin: 0; font-family: Courier, monospace;">Area: ' . $areaT . '</h4>
      </article>
    </dialog>';
   }
   ?>
   <!-- rectangle -->
   <?php
   if (isset($_GET['length']) and isset($_GET['width'])) {
      $length = $_GET['length'];
      $width = $_GET['width'];
      $areaR = $length * $width;
      $perimeter = 2 * ($length + $width);

      $areaR = number_format($areaR, 3);
      $perimeter = number_format($perimeter, 3);

      echo '<dialog open>
      <article>
        <header>
          <a href="index.php" aria-label="Close" class="close"></a>
         <h2 style="margin: 0; font-family: Courier, monospace;"> AREA AND PERIMETER OF A RECTANGLE</h2>
        </header>
        <h4 style="margin: 0; font-family: Courier, monospace;">Area: ' . $areaR . '</h4>
        <h4 style="margin: 0; font-family: Courier, monospace;">Perimeter: ' . $perimeter . '</h4>
      </article>
    </dialog>';
   }
   ?>
   <script src="index.js"></script>
</body>

</html>