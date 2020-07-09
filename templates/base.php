<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8"/>
  <script src="../config/tinyMCE/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    tinymce.init({
        // type de mode
        mode : "exact",
        // id ou class, des textareas appelés
        selector : "#commentaire",
        // langue
        language : "fr",
        //plugins
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
