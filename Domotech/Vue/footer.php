<footer>

  <ul>
  <li>  <a style="text-decoration: none; color: #5680A6;" href="quisommesnous.php"><img src="http://nsa37.casimages.com/img/2017/05/11/170511051431962298.png" width="15%"> </li>
  <li> Qui sommes nous ? </a></li>
  </ul>

  <ul>
  <li>  <a style="text-decoration: none; color: #5680A6;" href="nouscontacter.php"><img src="http://nsa38.casimages.com/img/2017/05/11/170511051432113429.png" width="15%" > </li>
  <li> Nous contacter </a></li>
  <div class="foot">
  <?php   if ($_SESSION){ ?>
    <?php include("Controleur/test-statut.php");

    if ($ligne['status']=='admin') { // si l'utlisateur est un admin ?>
      <br> <a href="accueiladmin.php?cible=accueiladmin/accueil.php" > Panneau d'administration </a>

    <?php } }?>

  </div>
  </ul>

  <ul>
  <li>  <a style="text-decoration: none; color: #5680A6;" href="offres.php"><img src="http://nsa38.casimages.com/img/2017/05/11/17051105143239059.png" width="15%"> </li>
  <li> Nos offres </a></li>
  </ul>

  <script  src="js/ongletActif.js"></script>
</footer>
