<?php $this->title = "Nouvel article"; ?>
<?php require 'menu.php';?>
<div id="list-chap">
    <h1>Chapitre</h1>
    <?php
        foreach($reqChap as $donnees){
            echo $donnees->getId();
            ?>
            <a href="../public/index.php?route=chapitre&chapID=<?=htmlspecialchars($donnees->getId());?>"><?php echo $donnees->getTitle();?></a></br><?php
        };
    ?>
</div></br>
<div>
    <form method="post" action="../public/index.php?route=ajoutChapitre">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="Titre_Chapitre"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="Text_Chapitre"></textarea><br>
        <label for="author">Auteur</label><br>
        <input type="text" id="author" name="Ecrivain"><br>
        <input type="submit" value="Envoyer" id="submit" name="submit">
    </form>
</div>
