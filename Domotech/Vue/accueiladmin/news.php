<div class="texte">
<form method="post" action="Controleur/news-manager.php">
    <p>
        <label class=formLabel for="titrenews" >Titre :</label>
        <br><br> <input type="text" name="titrenews" placeholder="entrez votre titre" />
    </p>
    <p>
       <label class=formLabel for="contenunews">
       Contenu de l'actualité :
       </label>
       <br /><br />

       <textarea name="contenunews" rows="30" cols="209">Inscrivez ici le texte contenu dans votre actualité
       </textarea>
    </p>
    <p>
        <button class=boutton type="submit" name="addNews"/>Mettre l'actualité en ligne</button>
    </p>
</form>
</div>
