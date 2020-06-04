<!DOCTYPE html>
<html>
    <head>
        <title>Mon blog</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        require('menu.php');
        ?>
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
        <div id="Chapitre">
            <?php
                while ($donnees = $req->fetch()) {
                    echo $donnees->Titre_Chapitre;?>
                    </br>
                    <?php
                    echo $donnees->Text_Chapitre;?>
                    </br>
                    <?php
                    echo $donnees->Ecrivain;?>
                    </br>
                    <?php
                };
                $req->closeCursor();
            ?>
        </div>
    </body>
</html>
