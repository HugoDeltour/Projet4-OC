tinymce.init({
    // type de mode
    mode : "exact",
    // id ou class, des textareas appelés
    selector : "#commentaire, #Text_Chapitre",
    // langue
    language : "fr_FR",
    //plugins
    height:"250px",
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
  'bullist numlist outdent indent | link image | print preview media fullpage | ' +
  'forecolor backcolor emoticons | help',
    menubar:'',
});
