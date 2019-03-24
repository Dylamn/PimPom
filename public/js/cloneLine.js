(function() {
    let nbEquip = document.getElementById("nbrSnowboard");

    nbEquip.addEventListener('change',equip);


    function  equip() {
        for (let i = 1; i <= nbEquip.value; i++) {
            document.getElementById('divTailleSnowboard').innerHTML =
                "<input class=\'col-md-2 form-control\' style=\'display: inline\' min=\'0\' name=\'tailleSnowboard\'"+ i +"type=\"number\' value=\'0\' id=\'tailleSnowboard\'"+ i +">";
        }
    }









    });

    for (let i = 0; i < nbEquip; i++) {
        console.log('nb : ' + nbEquip.value);
    }