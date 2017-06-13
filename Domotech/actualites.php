<?php include("Vue/header.php");
include_once("Modele/db-news-manager.php"); ?>

<section>
  <div class=texte>
  <?php if(isset($_SESSION["userID"])){ // si l'utilisateur est connecté
    include_once("Controleur/test-statut.php");

      $resultat=getNews($db);
      while ($news=$resultat->fetch()){?>
        <h2>
        <?php
        echo $news['titre'];
        if ($ligne['status']=='admin'){?>
        <form method="post" action="Controleur/news-manager.php">
        <button class="boutonFantome" type="submit" name="delNews"
        onclick="if(!confirm('Êtes vous sur de vouloir supprimer cette actualité ?\nCette action sera définitive.')) return false;"
        value='<?php echo "".$news['ID']?>'/><img src=Vue/Image/domotech_suppr.png width=20px></button> </form><?php }?>
      </h2>
      <?php if (file_exists("Vue/Image/news/".$news['titre'])){?>
      <p>
        <img src=<?php echo "Vue/Image/news/".$news['titre'] ; ?>></img>
      </p> <?php }?>
      <p><?php
        echo $news['contenu'];?></p><p class=right>
        <i><?php echo $news['datee'];?></i>
        </p><br><br><br>

    <?php  } ?>


      <?php if ($ligne["status"]=="admin"){ // si l'utilisateur est admin ?><br><br><br>
      <p class=textecentre>
        <a class="boutton" style="text-decoration:none;"href ="accueiladmin.php?cible=accueiladmin/news.php" >Ajouter une news</a>
      </p>
      <?php }
    }
    else{

      $resultat=getNews($db);
      while ($news=$resultat->fetch()){?>
          <h2>
            <?php echo $news['titre'];?>
          </h2>
          <?php if (file_exists("Vue/Image/news/".$news['titre'])){?>
          <p>
            <img src=<?php echo "Vue/Image/news/".$news['titre'] ; ?>></img>
          </p> <?php }?>
          <p><?php
            echo $news['contenu'];?></p><p class=right>
            <i><?php echo $news['datee'];?></i>
            </p><br><br><br>

        <?php  } ?>


            <?php }


     ?>


  </div>
    </section>



<?php include("Vue/footer.php"); ?>

  </body>
</html>
