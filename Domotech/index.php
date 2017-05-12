<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="Styles/style1.css" >
  <title>Domotech testalain</title>
</head>
  <body>
    <header>
    <a href=index.php> <h1 class="titre">Domotech</h1> </a>
    <?php include ('Controleur/session-manager.php'); ?>



</header>

    <?php include("Vue/barremenu.php");?>

    <section>
        <p>
           Some text
           <div class="image1">
+            <img src="http://nsa37.casimages.com/img/2017/05/05/170505124535648744.png" width="100%"/>
+            <br />
+          </div>
+          <div class="texte1">
+            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu tempor odio, varius fringilla sapien. Suspendisse ex augue, sodales quis sollicitudin ut, dictum at quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras vel vestibulum leo. Nullam ante dui, iaculis vitae varius vel, suscipit ut turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque consequat neque vehicula tincidunt rutrum. Proin nunc ligula, vestibulum ac tellus et, venenatis pellentesque nulla. Aenean finibus est nec dapibus sollicitudin. Phasellus diam nisl, scelerisque eu dapibus et, dapibus sit amet eros. Donec euismod nibh est, at ornare massa pellentesque ut. Vivamus nec maximus dui, et sodales dolor. Ut euismod efficitur purus at congue.
+          </div>
        </p>
    </section>

<?php include("Vue/footer.html"); ?>

  </body>
</html>
