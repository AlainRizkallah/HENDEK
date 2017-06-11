<?php include("Vue/header.php");
include_once("Modele/db-news-manager.php") ?>

<section>
  <div class=texte>

      <?php $resultat=getNews($db);
      while ($news=$resultat->fetch()){?>
        <h2>
        <?php echo $news['titre'];?>
      </h2>
      <p><?php
        echo $news['contenu'];
      } ?></p>

  </div>
    </section>

<?php include("Vue/footer.php"); ?>

  </body>
</html>
