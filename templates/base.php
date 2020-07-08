<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8"/>
  <script src="https://cdn.tiny.cloud/1/lsw4pp1qn3tm8vq4388zl14s885ym08qmbt8acysik0qhmo6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script type="text/javascript">

    tinymce.init({
        // type de mode
        mode : "exact",
        // id ou class, des textareas appelés
        selector : "Text_Chapitre,commentaire",
        // en mode avancé, cela permet de choisir les plugins
        theme : "advanced",
        // langue
        language : "fr",
        // liste des plugins
        theme_advanced_toolbar_location : "top",
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,sup,forecolor,separator,"
        + "justifyleft,justifycenter,justifyright,justifyfull,formatselect,"
        + "bullist,numlist,outdent,indent,separator,cleanup,|,undo,redo,|,",
        theme_advanced_buttons2 : "",
        theme_advanced_buttons3 : "",
        height:"250px",
        width:"600px"
    });
  </script>
  <title><?=$title?></title>
</head>
<body>
  <div id="content">
    <?=$content?>
  </div>
</body>
</html>
