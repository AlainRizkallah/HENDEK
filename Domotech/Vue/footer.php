<footer>

  <ul>
  <li>  <img src="http://nsa37.casimages.com/img/2017/05/11/170511051431962298.png" width="15%"> </li>
  <li> Qui sommes nous ? </li>
  </ul>

  <ul>
  <li>  <img src="http://nsa38.casimages.com/img/2017/05/11/170511051432113429.png" width="15%" > </li>
  <li> Nous contacter </li>
  <div class="foot">

    <?php include("Controleur/test-statut.php");

    if ($ligne['status']=='admin') { // si l'utlisateur est un admin ?>
    <br> <a href="accueiladmin.php" > Panneau d'administration </a>
<?php } else { ?>
    <br> <a href="monespace.php?cible=monespace/accessdenied.php" > Panneau d'administration </a>
<?php } ?>

  </div>
  </ul>

  <ul>
  <li>  <img src="http://nsa38.casimages.com/img/2017/05/11/17051105143239059.png" width="15%"> </li>
  <li> Nos offres </li>
  </ul>


</footer>
