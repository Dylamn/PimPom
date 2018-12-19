siOui = $(function () {
  $('div.CheckBoxes input[type=checkbox]').click(function () {
    let cochee = $(this).is(':checked'); // je regarde si la case est cochée ou non
    let page = $(this).attr("name"); // je capture l'attibut name
    let cible = page + ".php"; // je créer une variable lien pour ma requete ajax
    
    if (cochee) {
      $(function () {
        $.ajax({
          url: "contenu/" + cible, // j'utilise le lien pour aller cherche les contenus à rajouter
          cache: false,
          success: function (html) {
            $("#Form" + page).append(html); // j'ajoute le contenu dans ma div
          },
          error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(textStatus);
          },
        });
        return false;
      });
    } else {
      $(function () {
        $("#Form" + page).empty(); // je supprime le contenu dans ma div
        return false;
      });
    }
  });
});