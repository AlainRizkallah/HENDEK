<div class="texte">
  <?php if (isset($_GET['addel'])) {
    if ($_GET['addel']=="add"){ ?>
      <span class="vert"> La maison a été ajoutée </span>
    <?php }
  }?>
<form method="post" action="Controleur/news-manager.php" enctype="multipart/form-data">
    <p>
        <label class=formLabel for="titrenews" >Titre :</label>
        <br><br> <input type="text" name="titrenews" placeholder="entrez votre titre" required />
    </p>
    <p>
      <label class=formLabel for="titrenews" >Ajoutez une image (JPG ou PNG, 1Mo max) :</label>
      <br><br> <input type="file" name="picnews"/>
    </p>
    <p>
       <label class=formLabel for="contenunews">
       Contenu de l'actualité :
       </label>
       <br /><br />

       <textarea name="contenunews" rows="30" cols="209" required>Inscrivez ici le texte contenu dans votre actualité
       </textarea>
    </p>
    <p>
        <button class=boutton type="submit" name="addNews"/>Mettre l'actualité en ligne</button>
    </p>
</form>
</div>
